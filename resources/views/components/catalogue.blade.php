<div id="pdf-catalogue-container">
    <h2 class="catalogue-title">
            {!! __('catalogue.title') !!}
            <img src="images/shapes/triangle-orange.png" alt="" class="title-icon">
        </h2>
    <div class="pdf-toolbar">
        <button id="prev-page">{{ __('catalogue.prev') }}</button>
        <span>{{ __('catalogue.page') }}<span id="page-num"></span> / <span id="page-count"></span></span>
        <button id="next-page">{{ __('catalogue.next') }}</button>
    </div>
    
    <div id="pdf-render-container">
        <div id="page-wrapper">
            <canvas id="pdf-canvas"></canvas>
            <div id="annotation-layer"></div>
        </div>
    </div>
</div>

<style>
    .orange-text {
        color: #FF4D20;
    }

    .catalogue-title {
        font-family: 'Inter', sans-serif;
        position: relative;
        width: 100%;
        text-align: center;
        font-size: 36px;
        font-weight: 500;
        margin-top: 25px;
        margin-bottom: 60px;
    }

    .title-icon {
        width: 130px;
        height: 130px;
        position: absolute;
        left: calc(50% + 200px);
        top: 50%;
        transform: translateY(-30%);
    }

    #pdf-catalogue-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        background: #ffffff;
        padding: 20px;
        margin-bottom: 20px;
        position: relative;
        z-index: 1;
    }

    #pdf-catalogue-container::after {
        content: "";
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 100%;
        height: 100%;
        background-image: url('images/grid-team-2.svg');
        background-position: center;
        background-repeat: no-repeat;
        z-index: -1;
    }

    .pdf-toolbar {
        background: #0125DC;
        color: white;
        padding: 10px;
        border-radius: 8px 8px 0 0;
        width: 100%;
        max-width: 800px;
        display: flex;
        justify-content: space-between;
    }

    #pdf-render-container {
        width: 100%;
        max-width: 800px;
        background: white;
        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        overflow: hidden;
    }

    #page-wrapper {
        position: relative;
        margin: 0 auto;
        /* page-wrapper matches the CSS display size of the canvas */
    }

    #pdf-canvas {
        display: block;
        /* Canvas fills the wrapper — no CSS scaling, so pixel = CSS pixel */
        width: 100%;
        height: auto;
    }

    #annotation-layer {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 10;
    }

    #annotation-layer a {
        position: absolute;
        display: block;
        background-color: transparent;
        transition: background-color 0.2s;
        cursor: pointer;
    }

    #annotation-layer a:hover {
        background-color: rgba(1, 37, 220, 0.1);
    }

    @media (max-width: 768px) {
        .title-icon {
            display: none;
        }

        #pdf-catalogue-container::after {
            background-size: contain;
            top: 150px;
            height: 400px;
        }
    }
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        if (typeof pdfjsLib === 'undefined') {
            console.error('PDF.js library failed to load.');
            return;
        }

        pdfjsLib.GlobalWorkerOptions.workerSrc =
            'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.worker.min.js';

        const url = "{{ asset('CatalogFinalH.pdf') }}";

        let pdfDoc           = null,
            pageNum          = 1,
            pageIsRendering  = false,
            pageNumIsPending = null;

        const canvas          = document.getElementById('pdf-canvas');
        const ctx             = canvas.getContext('2d');
        const pageWrapper     = document.getElementById('page-wrapper');
        const renderContainer = document.getElementById('pdf-render-container');
        const annotationLayer = document.getElementById('annotation-layer');

        const renderPage = num => {
            pageIsRendering = true;

            pdfDoc.getPage(num).then(page => {
                const naturalViewport = page.getViewport({ scale: 1 });
                const containerWidth = renderContainer.clientWidth;
                const scale          = containerWidth / naturalViewport.width;
                const viewport       = page.getViewport({ scale });
                const outputScale    = window.devicePixelRatio || 1;

                // Render at device pixel ratio for crisp output on high-density mobile screens.
                canvas.width  = Math.floor(viewport.width * outputScale);
                canvas.height = Math.floor(viewport.height * outputScale);
                canvas.style.width  = `${viewport.width}px`;
                canvas.style.height = `${viewport.height}px`;

                pageWrapper.style.width  = `${viewport.width}px`;
                pageWrapper.style.height = `${viewport.height}px`;

                page.render({
                    canvasContext: ctx,
                    viewport,
                    transform: outputScale !== 1 ? [outputScale, 0, 0, outputScale, 0, 0] : null
                }).promise.then(() => {
                    pageIsRendering = false;
                    if (pageNumIsPending !== null) {
                        renderPage(pageNumIsPending);
                        pageNumIsPending = null;
                    }
                });
                const cssScale = 1;

                page.getAnnotations().then(annotations => {
                    annotationLayer.innerHTML = '';

                    annotations.forEach(annotation => {
                        if (annotation.subtype !== 'Link') return;

                        const a = document.createElement('a');
                        const [x1, y1, x2, y2] = pdfjsLib.Util.normalizeRect(
                            viewport.convertToViewportRectangle(annotation.rect)
                        );
                        a.style.left   = `${x1 * cssScale}px`;
                        a.style.top    = `${y1 * cssScale}px`;
                        a.style.width  = `${(x2 - x1) * cssScale}px`;
                        a.style.height = `${(y2 - y1) * cssScale}px`;

                        if (annotation.url) {
                            a.href   = annotation.url;
                            a.target = '_blank';
                            a.rel    = 'noopener noreferrer';
                        } else if (annotation.dest) {
                            a.href = '#';
                            a.addEventListener('click', e => {
                                e.preventDefault();

                                const destPromise = typeof annotation.dest === 'string'
                                    ? pdfDoc.getDestination(annotation.dest)
                                    : Promise.resolve(annotation.dest);

                                destPromise.then(destArray => {
                                    if (destArray && destArray[0]) {
                                        pdfDoc.getPageIndex(destArray[0]).then(pageIndex => {
                                            pageNum = pageIndex + 1;
                                            document.getElementById('page-num').textContent = pageNum;
                                            queueRenderPage(pageNum);
                                        });
                                    }
                                });
                            });
                        }

                        annotationLayer.appendChild(a);
                    });
                });

                document.getElementById('page-num').textContent = num;
            });
        };

        const queueRenderPage = num => {
            if (pageIsRendering) {
                pageNumIsPending = num;
            } else {
                renderPage(num);
            }
        };

        document.getElementById('prev-page').addEventListener('click', () => {
            if (pageNum <= 1) return;
            pageNum--;
            queueRenderPage(pageNum);
        });

        document.getElementById('next-page').addEventListener('click', () => {
            if (pageNum >= pdfDoc.numPages) return;
            pageNum++;
            queueRenderPage(pageNum);
        });

        let resizeTimeout;
        window.addEventListener('resize', () => {
            clearTimeout(resizeTimeout);
            resizeTimeout = setTimeout(() => queueRenderPage(pageNum), 200);
        });

        pdfjsLib.getDocument(url).promise.then(pdfDoc_ => {
            pdfDoc = pdfDoc_;
            document.getElementById('page-count').textContent = pdfDoc.numPages;
            renderPage(pageNum);
        }).catch(err => {
            console.error('Error loading PDF:', err);
        });
    });
</script>