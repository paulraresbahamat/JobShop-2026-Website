<section class="hero-section">
    <div class="hero-container">
        <img src="{{ asset('images/shapes/play-orange.png') }}" alt="" class="shape shape-play-left">
        <img src="{{ asset('images/shapes/triangle-blue.png') }}" alt="" class="shape shape-triangle-right">
        <img src="{{ asset('images/shapes/triangle-orange.png') }}" alt="" class="shape shape-triangle-bottom">

        <div class="hero-content">
            <h1 class="hero-title">
                <img src="{{ asset('images/jobshop-sticker.svg') }}" alt="JobShop®" class="jobshop-badge badge-animate">
                <span class="title-line slide-in line-1">{{ __('hero.title') }}</span>
            </h1>

            <h2 class="hero-subtitle slide-in line-2">
                {!! __('hero.subtitle') !!}
            </h2>

            <p class="hero-date slide-in line-3">{{ __('about.loc') }}</p>
        </div>

        <div class="logo-carousel">
            <div class="logo-track">
                <div class="logo-item logo1"></div>
                <div class="logo-item logo2"></div>
                <div class="logo-item logo3"></div>
                <div class="logo-item logo4"></div>
                <div class="logo-item logo5"></div>
                <div class="logo-item logo6"></div>
                <div class="logo-item logo7"></div>
                <div class="logo-item logo8"></div>
                <div class="logo-item logo9"></div>

                <div class="logo-item logo1"></div>
                <div class="logo-item logo2"></div>
                <div class="logo-item logo3"></div>
                <div class="logo-item logo4"></div>
                <div class="logo-item logo5"></div>
                <div class="logo-item logo6"></div>
                <div class="logo-item logo7"></div>
                <div class="logo-item logo8"></div>
                <div class="logo-item logo9"></div>

                <div class="logo-item logo1"></div>
                <div class="logo-item logo2"></div>
                <div class="logo-item logo3"></div>
                <div class="logo-item logo4"></div>
                <div class="logo-item logo5"></div>
                <div class="logo-item logo6"></div>
                <div class="logo-item logo7"></div>
                <div class="logo-item logo8"></div>
                <div class="logo-item logo9"></div>
            </div>
        </div>
    </div>
</section>

<style>
    .hero-section {
        position: relative;
        min-height: 85vh;
        background: #ffffff;
        background-image: url('{{ asset('images/shapes/square-grid.svg') }}');
        background-size: cover;
        background-position: bottom;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        padding: 60px 20px 20px;
    }

    .hero-container {
        position: relative;
        max-width: 1400px;
        width: 100%;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        flex: 1;
    }

    .shape {
        position: absolute;
        z-index: 1;
        pointer-events: none;
        will-change: transform;
    }

    .shape-play-left {
        width: 150px;
        height: 150px;
        left: 12%;
        top: 45%;
    }

    .shape-triangle-right {
        width: 140px;
        height: 140px;
        right: 22%;
        top: 33%;
    }

    .shape-triangle-bottom {
        width: 140px;
        height: 140px;
        right: 10%;
        bottom: 120px;
    }

    .hero-content {
        position: relative;
        z-index: 2;
        text-align: center;
        margin-bottom: 60px;
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .hero-title {
        font-family: 'Inter', sans-serif;
        font-size: 54px;
        font-weight: 700;
        line-height: 1.2;
        margin: 0 0 20px 0;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 15px;
        flex-wrap: wrap;
    }

    .jobshop-badge {
        height: 135px;
        display: inline-block;
        transform-origin: center bottom;
        will-change: transform, opacity;
    }

    .badge-animate {
        opacity: 0;
        transform: translateY(18px) scale(0.85);
        animation: badgePopJump 900ms cubic-bezier(0.22, 1, 0.36, 1) 120ms forwards;
    }

    @keyframes badgePopJump {
        0% { opacity: 0; transform: translateY(18px) scale(0.85); }
        55% { opacity: 1; transform: translateY(-10px) scale(1.05); }
        75% { transform: translateY(4px) scale(0.98); }
        100% { opacity: 1; transform: translateY(0) scale(1); }
    }

    .title-line { color: #000000; }

    .hero-subtitle {
        font-family: 'Inter', sans-serif;
        font-size: 54px;
        font-weight: 700;
        line-height: 1.2;
        margin-right: 340px; 
        margin-bottom: 25px;
        color: #000000;
    }

    .hero-subtitle .highlight { color: #0125DC; }

    .slide-in {
        opacity: 0;
        transform: translateX(-50px);
        animation: slideInText 900ms cubic-bezier(0.22, 1, 0.36, 1) forwards;
    }

    .line-1 { animation-delay: 900ms; }
    .line-2 { animation-delay: 1800ms; }
    .line-3 { animation-delay: 1800ms; }

    @keyframes slideInText {
        from { opacity: 0; transform: translateX(-50px); }
        to { opacity: 1; transform: translateX(0); }
    }

    @media (prefers-reduced-motion: reduce) {
        .slide-in, .badge-animate {
            animation: none;
            opacity: 1;
            transform: none;
        }
    }

    .hero-date {
        font-family: 'Inter', sans-serif;
        font-size: 24px;
        font-weight: 600;
        color: #000000;
        margin: 0;
    }

    .logo-carousel {
        position: relative;
        width: 100%;
        padding: 30px 0;
        overflow: hidden;
        margin-top: auto;
        mask-image: linear-gradient(
            to right,
            transparent,
            black 10%,
            black 90%,
            transparent
        );
        -webkit-mask-image: linear-gradient(
            to right,
            transparent,
            black 10%,
            black 90%,
            transparent
        );
    }

    .logo-track {
        display: flex;
        gap: 40px; 
        width: max-content; 
        animation: scroll 20s linear infinite;
    }

    .logo1 { background-image: url('{{ asset("images/marquee-logos/1.png") }}'); }
    .logo2 { background-image: url('{{ asset("images/marquee-logos/2.png") }}'); }
    .logo3 { background-image: url('{{ asset("images/marquee-logos/3.svg") }}'); }
    .logo4 { background-image: url('{{ asset("images/marquee-logos/4.png") }}'); }
    .logo5 { background-image: url('{{ asset("images/marquee-logos/5.png") }}'); }
    .logo6 { background-image: url('{{ asset("images/marquee-logos/6.png") }}'); }
    .logo7 { background-image: url('{{ asset("images/marquee-logos/7.png") }}'); }
    .logo8 { background-image: url('{{ asset("images/marquee-logos/8.png") }}'); }
    .logo9 { background-image: url('{{ asset("images/marquee-logos/9.png") }}'); }

    @keyframes scroll {
        0% {
            transform: translateX(0);
        }
        100% {
            transform: translateX(-50%);
        }
    }

    .logo-item {
        width: 100px;
        height: 100px;
        flex-shrink: 0;

        background-size: contain;
        background-position: center;
        background-repeat: no-repeat;
    }

    @media (max-width: 1024px) {
        .hero-title,
        .hero-subtitle {
            font-size: 42px;
        }

        .shape-play-left {
            width: 90px;
            height: 90px;
            left: 5%;
        }

        .shape-triangle-right {
            width: 100px;
            height: 100px;
            right: 5%;
        }

        .shape-triangle-bottom {
            width: 90px;
            height: 90px;
            bottom: 160px;
        }

        .logo-track { gap: 30px; }
        .logo-item { width: 80px; height: 80px; }
    }

    @media (max-width: 850px) {
        .hero-section {
            min-height: auto;
            padding: 28px 16px 24px;
            background-image: url('{{ asset('images/shapes/hero-bg-mobile.svg') }}');
            background-size: contain;
            background-position: bottom;
        }

        .hero-content {
            margin-bottom: 0;
            align-items: center;
        }

        .hero-title {
            font-size: 16px;   
            line-height: 1.1;
            flex-direction: row;      
            flex-wrap: nowrap;        
            gap: 12px;
            margin: 0 0 8px 0;
            justify-content: center;
        }

        .jobshop-badge {
            content: url('{{ asset('images/badge-mobile.svg') }}');
            height: 75px;           
            flex-shrink: 0;
        }

        .title-line {
            display: inline-block;
            white-space: nowrap;    
        }

        .hero-subtitle {
            width: min(92vw, 560px);
            font-size: 16px;
            line-height: 1.15;
            margin-bottom: 35px;
            margin-right: 0!important;
            text-align: center;
        }

        .hero-date {
            font-size: 20px;        
            font-weight: 600;
        }

        .logo-item{
            height: 80px;
            width: 80px;
        }

        .shape { display: none !important; }
    }

</style>

<script>
    document.addEventListener("DOMContentLoaded", () => {
    const shapes = document.querySelectorAll(".shape");
    let currentScroll = 0;
    let targetScroll = 0;
    const isMobile = window.matchMedia("(max-width: 768px)").matches;
    const xAmp = isMobile ? 10 : 20;
    const baseSpeed = isMobile ? 0.03 : 0.08;

    window.addEventListener("scroll", () => {
        targetScroll = window.scrollY;
    }, { passive: true });

    const animate = () => {
        currentScroll += (targetScroll - currentScroll) * 0.08;

        shapes.forEach((shape, index) => {
        const speed = baseSpeed + index * (isMobile ? 0.015 : 0.04);

        const yOffset = currentScroll * speed;
        const xOffset = Math.sin(currentScroll * 0.002 + index) * xAmp;

        shape.style.transform = `translate(${xOffset}px, ${yOffset}px)`;
        });

        requestAnimationFrame(animate);
    };

    animate();
    });
</script>
