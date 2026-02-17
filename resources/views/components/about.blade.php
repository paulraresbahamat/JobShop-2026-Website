<section class="about-section">
    <div class="about-container">
        <div class="about-content" id="about">
            <h2 class="section-title">{{ __('about.about-js') }}</h2>
            <p class="section-text">
                {!! __('about.about-sub') !!}
            </p>
        </div>

        <div class="workshops-content">
            <h2 class="section-title">{{ __('about.workshops') }}</h2>
            <p class="section-text">
                {!! __('about.workshops-sub') !!}
            </p>
        </div>

        <div class="image-marquee">
            <div class="image-track">
                <div class="marquee-img square img1"></div>
                <div class="marquee-img tall img2"></div>
                <div class="marquee-img square img3"></div>
                <div class="marquee-img tall img4"></div>

                <div class="marquee-img square img1"></div>
                <div class="marquee-img tall img2"></div>
                <div class="marquee-img square img3"></div>
                <div class="marquee-img tall img4"></div>

                <div class="marquee-img square img1"></div>
                <div class="marquee-img tall img2"></div>
                <div class="marquee-img square img3"></div>
                <div class="marquee-img tall img4"></div>

                <div class="marquee-img square img1"></div>
                <div class="marquee-img tall img2"></div>
                <div class="marquee-img square img3"></div>
                <div class="marquee-img tall img4"></div>
            </div>
        </div>

        <div class="stats-section">
            <div class="stat-item">
                <div class="stat-number" data-target="1300">0</div>
                <div class="stat-line"></div>
                <div class="stat-label">
                    <span class="label-bold">{!! __('about.students') !!}</span>
                </div>
            </div>

            <div class="stat-item">
                <div class="stat-number" data-target="14">0</div>
                <div class="stat-line"></div>
                <div class="stat-label">
                    <span class="label-bold">{!! __('about.partners') !!}</span>
                </div>
            </div>

            <div class="stat-item">
                <div class="stat-number" data-target="32">0</div>
                <div class="stat-line"></div>
                <div class="stat-label">
                    <span class="label-bold">{!! __('about.editions') !!}</span>
                </div>
            </div>
    </div>

    <div class="about-content hts-section" id="how-to-start-up">
        <div class="hts-text-wrapper"> <h2 class="section-title">How to Start-Up</h2>
            <p class="section-text">
                 {!! __('about.about-hts') !!}
            </p>
        </div>

        <div class="image-marquee hts-marquee">
            <div class="image-track">
                <div class="marquee-img square img5"></div>
                <div class="marquee-img tall img6"></div>
                <div class="marquee-img square img7"></div>
                <div class="marquee-img tall img8"></div>

                <div class="marquee-img square img5"></div>
                <div class="marquee-img tall img6"></div>
                <div class="marquee-img square img7"></div>
                <div class="marquee-img tall img8"></div>

                <div class="marquee-img square img5"></div>
                <div class="marquee-img tall img6"></div>
                <div class="marquee-img square img7"></div>
                <div class="marquee-img tall img8"></div>

                <div class="marquee-img square img5"></div>
                <div class="marquee-img tall img6"></div>
                <div class="marquee-img square img7"></div>
                <div class="marquee-img tall img8"></div>
            </div>
        </div>
    </div>
</div>
    </div>
</section>

<style>
    .about-section {
        background: #ffffff;
        padding: 80px 20px;
    }

    .about-container {
        max-width: 1200px;
        margin: 0 auto;
    }

    .section-title {
        font-family: 'Inter', sans-serif;
        font-size: 48px;
        font-weight: 700;
        color: #000000;
        margin: 0 0 20px 0;
    }

    .section-text {
        font-family: 'Inter', sans-serif;
        font-size: 24px;
        font-weight: 500;
        line-height: 1.6;
        color: #515151;
        margin: 0;
    }

    .hts-section {
        position: relative;
        border-radius: 24px;

        background-image: url("images/hts-grid.svg");
        background-size: contain;
        background-position: center;
        background-repeat: no-repeat;
    }

    .highlight-blue {
        color: #0125DC;
        font-weight: 700;
    }

    .highlight-orange {
        color: #FF6200;
        font-weight: 700;
    }

    .about-content {
        margin-bottom: 60px;
    }

    .workshops-content {
        margin-bottom: 60px;
    }

    .stats-section {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        gap: 60px;
        margin-top: 60px;
        margin-bottom: 35px;
    }

    .stat-item {
        flex: 1;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    .stat-number {
        font-family: 'Inter', sans-serif;
        font-size: 48px;
        font-weight: 700;
        color: #0125DC;
        margin-bottom: 15px;
        background: #f5f5f5;
        padding: 20px 40px;
        border-radius: 8px;
    }

    .stat-line {
        width: 100%;
        height: 2px;
        background: #e5e5e5;
        margin: 15px 0;
    }

    .stat-label {
        font-family: 'Inter', sans-serif;
        font-size: 14px;
        line-height: 1.4;
        color: #000000;
    }

    .label-bold {
        font-weight: 600;
    }

    .image-marquee {
        position: relative;
        width: 100%;
        overflow: hidden; 
        padding: 0;
    }

    .image-track {
        display: flex;
        align-items: center; 
        gap: 30px;
        width: max-content; 
        animation: marquee-scroll 40s linear infinite;
        will-change: transform;
    }

    @keyframes marquee-scroll {
        0% { transform: translateX(0); }
        100% { transform: translateX(-50%); } 
    }

    .marquee-img {
        background-size: cover;  
        background-position: center;
        background-repeat: no-repeat;
    }


    .img1 { background-image: url('{{ asset("images/marquee/1.jpeg") }}'); }
    .img2 { background-image: url('{{ asset("images/marquee/2.jpeg") }}'); }
    .img3 { background-image: url('{{ asset("images/marquee/3.jpeg") }}'); }
    .img4 { background-image: url('{{ asset("images/marquee/4.jpeg") }}'); }
    .img5 { background-image: url('{{ asset("images/marquee/5.jpeg") }}'); }
    .img6 { background-image: url('{{ asset("images/marquee/6.jpeg") }}'); }
    .img7 { background-image: url('{{ asset("images/marquee/7.jpeg") }}'); }
    .img8 { background-image: url('{{ asset("images/marquee/8.jpeg") }}'); }

    .square {
        width: 420px;
        height: 420px;
    }

    .tall {
        width: 420px;
        height: 500px;
    }

    .hts-section .image-marquee {
        padding-bottom: 0; 
        margin-top: 40px;
    }

    .hts-text-wrapper {
        padding: 0 20px; 
    }

    @media (max-width: 850px) {
        .square {
            width: 200px;
            height: 200px;
        }

        .tall {
            width: 200px;
            height: 240px;
        }

        .image-track {
            gap: 15px;
            animation-duration: 25s;
        }
        
        .image-marquee {
            padding: 20px 0;
        }
    }

    @media (max-width: 850px) {
        .about-section {
            padding: 50px 16px;
        }

        .about-container {
            max-width: 100%; 
            padding: 0 20px;
        }

        .section-title {
            text-align: left;
            font-size: 22px;
            margin-bottom: 14px;
        }

        .section-text {
            font-weight: 500;
            font-size: 14px;
            line-height: 1.65;
        }

        .about-content,
        .workshops-content {
            max-width: 100%;
            margin-bottom: 25px;
            margin-left: auto;
            margin-right: auto;
            text-align: left;
        }

        .stats-section {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 12px;
            margin-top: 28px;
            align-items: stretch;
        }

        .stat-item {
            align-items: center;
            text-align: center;
        }

        .stat-number {
            font-size: 18px;
            padding: 12px 8px;
            margin-bottom: 10px;
            border-radius: 10px;
            width: 100%;
            box-sizing: border-box;
        }

        .stat-line {
            height: 1px;
            margin: 10px 0;
        }

        .stat-label {
            font-size: 11px;
            line-height: 1.25;
        }

        .hts-section {
            background-image: url('{{ asset('images/hts-grid-mobile.svg') }}');
            background-size: contain;
            background-position: top;
        }
    }
</style>

<script>
        document.addEventListener("DOMContentLoaded", () => {
        const numbers = document.querySelectorAll(".stat-number");

        const animate = (el) => {
            const target = +el.getAttribute("data-target");
            const duration = 2000; // ms
            const startTime = performance.now();

            const update = (currentTime) => {
            const elapsed = currentTime - startTime;
            const progress = Math.min(elapsed / duration, 1);

            const eased = 1 - Math.pow(1 - progress, 3);
            const value = Math.floor(eased * target);



            el.textContent = value;

            if (progress < 1) {
                requestAnimationFrame(update);
            } else {
                el.textContent = target; 
            }
            };

            requestAnimationFrame(update);
        };

        const observer = new IntersectionObserver((entries, obs) => {
            entries.forEach(entry => {
            if (entry.isIntersecting) {
                animate(entry.target);
                obs.unobserve(entry.target); 
            }
            });
        }, { threshold: 0.5 });

        numbers.forEach(num => observer.observe(num));
        });
</script>

