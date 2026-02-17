<header class="site-header">
    <div class="header-container">
        <div class="logo-section">
            <a href="{{ route('home') }}" class="logo-link">
                <img src="{{ asset('images/js_logo.svg') }}" alt="JobShop Logo" class="jobshop-logo">
            </a>
            <img src="{{ asset('images/best_logo.svg') }}" alt="BEST Logo" class="best-logo">
        </div>

        <nav class="desktop-nav">
            <a href="{{ route('home') }}" class="nav-link">{{ __('nav.home') }}</a>
            
            <a href="{{ route('home') }}#about" class="nav-link">{{ __('nav.about') }}</a>
            <a href="{{ route('home') }}#how-to-start-up" class="nav-link">{{ __('nav.startup') }}</a>
            
            <a href="{{ route('catalogue') }}" class="nav-link {{ request()->routeIs('catalogue') ? 'active' : '' }}">{{ __('nav.catalogue') }}</a>
            <a href="{{ route('team') }}" class="nav-link {{ request()->routeIs('team') ? 'active' : '' }}">{{ __('nav.team') }}</a>
        </nav>

        <div class="header-right">
            <div class="language-toggle">
                <form method="POST" action="{{ route('lang.set') }}">
                    @csrf
                    <input type="hidden" name="lang" value="en">
                    <button type="submit"
                            class="lang-option {{ app()->getLocale() === 'en' ? 'active' : '' }}">
                        <span>English</span>
                        <span class="flag">🇬🇧</span>
                    </button>
                </form>

                <form method="POST" action="{{ route('lang.set') }}">
                    @csrf
                    <input type="hidden" name="lang" value="ro">
                    <button type="submit"
                            class="lang-option {{ app()->getLocale() === 'ro' ? 'active' : '' }}">
                        <span>Română</span>
                        <span class="flag">🇷🇴</span>
                    </button>
                </form>
            </div>
            <button class="mobile-menu-toggle" id="mobileMenuToggle" aria-label="Toggle menu">
                <span class="hamburger-line"></span>
                <span class="hamburger-line"></span>
                <span class="hamburger-line"></span>
            </button>
        </div>
    </div>

    <nav class="mobile-nav" id="mobileNav">
        <a href="{{ route('home') }}" class="mobile-nav-link">{{ __('nav.home') }}</a>
        <a href="{{ route('home') }}#about" class="mobile-nav-link">{{ __('nav.about') }}</a>
        <a href="{{ route('home') }}#how-to-start-up" class="mobile-nav-link">{{ __('nav.startup') }}</a>
        <a href="{{ route('catalogue') }}" class="mobile-nav-link">{{ __('nav.catalogue') }}</a>
        <a href="{{ route('team') }}" class="mobile-nav-link">{{ __('nav.team') }}</a>

        <div class="mobile-lang">
            <form method="POST" action="{{ route('lang.set') }}">
                @csrf
                <input type="hidden" name="lang" value="en">
                <button type="submit"
                        class="mobile-lang-btn {{ app()->getLocale() === 'en' ? 'active' : '' }}">
                    English <span class="flag">🇬🇧</span>
                </button>
            </form>

            <form method="POST" action="{{ route('lang.set') }}">
                @csrf
                <input type="hidden" name="lang" value="ro">
                <button type="submit"
                        class="mobile-lang-btn {{ app()->getLocale() === 'ro' ? 'active' : '' }}">
                    Română <span class="flag">🇷🇴</span>
                </button>
            </form>
        </div>
    </nav>
</header>

<style>
    :root {
        --header-height: 80px;
    }

    body {
        padding-top: var(--header-height);
    }

    .site-header {
    background: #ffffff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 1000;
    font-family: "Inter", sans-serif;
    font-weight: 700;
    box-sizing: border-box;
    }

    .site-header-inner {
        position: relative; 
    }

    .header-container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 15px 40px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        box-sizing: border-box;
    }

    .logo-section {
        display: flex;
        align-items: center;
        gap: 20px;
        flex-shrink: 0;
    }

    .jobshop-logo { height: 39px; width: auto; flex-shrink: 0; }
    .best-logo { height: 49px; width: auto; flex-shrink: 0; }

    .desktop-nav {
        display: flex;
        align-items: center;
        gap: 30px;
    }

    .nav-link {
        color: #1a1a1a;
        text-decoration: none;
        font-size: 16px;
        font-weight: 700;
        transition: color 0.2s ease;
        white-space: nowrap;
    }

    .nav-link:hover,
    .nav-link.active {
        color: #0125DC;
    }

    .header-right {
        display: flex;
        align-items: center;
        gap: 20px;
    }

    .language-toggle {
        display: flex;
        align-items: stretch;
        background: #f5f5f5;
        border-radius: 999px;
        padding: 4px;
        gap: 4px;
    }

    .language-toggle form {
        display: flex;
        margin: 0;
    }

    .lang-option {
        display: flex;
        align-items: center;
        gap: 8px;
        background: transparent;
        border: none;
        color: #666;
        font-size: 15px;
        font-weight: 500;
        cursor: pointer;
        padding: 10px 16px;
        border-radius: 999px;
        transition: all 0.3s ease;
        white-space: nowrap;
    }

    .lang-option.active {
        background: #ffffff;
        color: #1a1a1a;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    .lang-option .flag { font-size: 14px; }

    .mobile-menu-toggle {
        display: none;
        flex-direction: column;
        gap: 5px;
        background: none;
        border: none;
        cursor: pointer;
        padding: 8px;
    }

    .hamburger-line {
        width: 25px;
        height: 2px;
        background: #1a1a1a;
        transition: all 0.3s ease;
    }

    .mobile-menu-toggle.active .hamburger-line:nth-child(1) {
        transform: rotate(45deg) translate(7px, 7px);
    }
    .mobile-menu-toggle.active .hamburger-line:nth-child(2) { opacity: 0; }
    .mobile-menu-toggle.active .hamburger-line:nth-child(3) {
        transform: rotate(-45deg) translate(7px, -7px);
    }

    .mobile-nav {
        display: none;
        flex-direction: column;
        background: #ffffff;
        border-top: 1px solid #e5e5e5;

        position: absolute;
        left: 0;
        right: 0;
        top: 100%;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
    }

    .mobile-nav.show { max-height: 420px; }

    .mobile-nav-link {
        padding: 14px 20px;
        color: #1a1a1a;
        text-decoration: none;
        font-size: 16px;
        border-bottom: 1px solid #f5f5f5;
    }

    .mobile-nav-link:hover {
        background: #f5f5f5;
        color: #0125DC;
    }

    #how-to-start-up, #about {
        scroll-margin-top: 100px;
    }

    .mobile-lang {
        display: flex;
        gap: 10px;
        padding: 14px 20px;
    }

    .mobile-lang form { margin: 0; flex: 1; }

    .mobile-lang-btn {
        width: 100%;
        border: 1px solid #e5e5e5;
        background: #fff;
        border-radius: 999px;
        padding: 10px 12px;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 8px;
    }

    .mobile-lang-btn.active {
        border-color: transparent;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    }

    @media (max-width: 1024px) {

        .header-container { padding: 10px 14px; }

        .desktop-nav { display: none; }

        .language-toggle { display: none; } 

        .mobile-menu-toggle { display: flex; }

        .mobile-nav { display: flex; }

        .logo-section { gap: 10px; }
        .jobshop-logo { height: 22px; }
        .best-logo { height: 24px; }

        .hamburger-line { width: 22px; }
    }
</style>

<script>
document.addEventListener("DOMContentLoaded", () => {
    const headerOffset = 110;

    const mobileMenuToggle = document.getElementById("mobileMenuToggle");
    const mobileNav = document.getElementById("mobileNav");

    if (mobileMenuToggle && mobileNav) {
        mobileMenuToggle.addEventListener("click", () => {
        mobileMenuToggle.classList.toggle("active");
        mobileNav.classList.toggle("show");
        });

        document.querySelectorAll(".mobile-nav-link").forEach(link => {
        link.addEventListener("click", () => {
            mobileMenuToggle.classList.remove("active");
            mobileNav.classList.remove("show");
        });
        });
    }

    const anchorLinks = document.querySelectorAll('a[href*="#"]');

    anchorLinks.forEach(link => {
        link.addEventListener("click", (e) => {
        const url = new URL(link.href, window.location.href);

        if (url.origin !== window.location.origin) return;
        if (url.pathname !== window.location.pathname) return;
        if (!url.hash) return;

        const target = document.querySelector(url.hash);
        if (!target) return;

        e.preventDefault();
        const y = target.getBoundingClientRect().top + window.pageYOffset - headerOffset;
        window.scrollTo({ top: y, behavior: "smooth" });

        history.replaceState(null, "", url.hash);
        });
    });

    if (window.location.hash) {
        const target = document.querySelector(window.location.hash);
        if (target) {
        const y = target.getBoundingClientRect().top + window.pageYOffset - headerOffset;
        window.scrollTo({ top: y, behavior: "smooth" });
        }
    }

    const topNavAnchors = document.querySelectorAll('.nav-link[href^="#"]');

    const sections = Array.from(topNavAnchors)
        .map(link => document.querySelector(link.getAttribute("href")))
        .filter(Boolean);

    const clearActive = () => topNavAnchors.forEach(l => l.classList.remove("active"));

    const setActiveById = (id) => {
        clearActive();
        const link = document.querySelector(`.nav-link[href="#${id}"]`);
        if (link) link.classList.add("active");
    };

    if (sections.length) {
        const observer = new IntersectionObserver((entries) => {
        const visible = entries
            .filter(e => e.isIntersecting)
            .sort((a, b) => b.intersectionRatio - a.intersectionRatio)[0];

        if (visible) setActiveById(visible.target.id);
        else clearActive();
        }, {
        threshold: [0.25, 0.4, 0.6],
        rootMargin: `-${headerOffset}px 0px -60% 0px`
        });

        sections.forEach(sec => observer.observe(sec));
    }
    });
</script>


