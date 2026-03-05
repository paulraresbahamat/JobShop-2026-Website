<div id="pdf-catalogue-container">
    <h2 class="catalogue-title">
            {!! __('catalogue.title') !!}
            <img src="images/shapes/triangle-orange.png" alt="" class="title-icon">
        </h2>
    <div class="pdf-toolbar">
        <button id="prev-page">Previous</button>
        <span>Page: <span id="page-num"></span> / <span id="page-count"></span></span>
        <button id="next-page">Next</button>
    </div>
    
    <div id="pdf-render-container">
        <canvas id="pdf-canvas"></canvas>
    </div>
</div>

<style>
    .orange-text{
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
        overflow: auto;
    }

    #pdf-canvas {
        display: block;
        margin: 0 auto;
        max-width: 100%;
        height: auto;
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
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof pdfjsLib === 'undefined') {
            console.error('PDF.js library failed to load. Check your internet connection or CDN link.');
            return;
        }
        pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.worker.min.js';

        const url = "{{ asset('CatalogPDF.pdf') }}";

        let pdfDoc = null,
            pageNum = 1,
            pageIsRendering = false,
            pageNumIsPending = null,
            scale = 1.5;

        const canvas = document.getElementById('pdf-canvas');
        const ctx = canvas.getContext('2d');
        const renderPage = num => {
            pageIsRendering = true;
            pdfDoc.getPage(num).then(page => {
                const viewport = page.getViewport({ scale });
                canvas.height = viewport.height;
                canvas.width = viewport.width;

                const renderCtx = { canvasContext: ctx, viewport };
                page.render(renderCtx).promise.then(() => {
                    pageIsRendering = false;
                    if (pageNumIsPending !== null) {
                        renderPage(pageNumIsPending);
                        pageNumIsPending = null;
                    }
                });
                document.getElementById('page-num').textContent = num;
            });
        };

        const queueRenderPage = num => {
            if (pageIsRendering) { pageNumIsPending = num; } 
            else { renderPage(num); }
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

        pdfjsLib.getDocument(url).promise.then(pdfDoc_ => {
            pdfDoc = pdfDoc_;
            document.getElementById('page-count').textContent = pdfDoc.numPages;
            renderPage(pageNum);
        }).catch(err => {
            console.error("Error loading PDF: ", err);
        });
    });
</script>