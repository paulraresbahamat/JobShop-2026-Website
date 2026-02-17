<footer class="footer-section">
    <div class="footer-pixel-divider">
        <img src="{{ asset('images/pixel_pattern.png') }}" alt="pattern divider">
    </div>

    <div class="footer-container">
        <div class="footer-column brand-col">
            <img src="{{ asset('images/best-logo-white.png') }}" alt="BEST Cluj-Napoca" class="footer-logo">
            
            <div class="social-links">
                <a href="https://www.facebook.com/BESTcluj" target="_blank" rel="noopener noreferrer" class="social-btn">
                    <img src="{{ asset('images/icons/fb.svg') }}" alt="Facebook">
                </a>
                <a href="https://www.linkedin.com/company/best-cluj-napoca" target="_blank" rel="noopener noreferrer" class="social-btn">
                    <img src="{{ asset('images/icons/linkedin.svg') }}" alt="LinkedIn">
                </a>
                <a href="https://www.instagram.com/best_clujnapoca" target="_blank" rel="noopener noreferrer" class="social-btn">
                    <img src="{{ asset('images/icons/ig.svg') }}" alt="Instagram">
                </a>
                <a href="https://www.tiktok.com/@best.clujnapoca" target="_blank" rel="noopener noreferrer" class="social-btn">
                    <img src="{{ asset('images/icons/tiktok.svg') }}" alt="TikTok">
                </a>
            </div>

            <p class="copyright">© 2026 copyright: BEST Cluj-Napoca</p>
        </div>

        <div class="footer-column contact-col">
            <h3 class="footer-heading">Contact</h3>
            
            <div class="contact-person">
                <p>{{__('footer.mo')}}</p>
                <p class="contact-info">+40 725 976 766</p>
                <p class="contact-info">dragos.rotea@bestcj.ro</p>
            </div>
            <br>
            <div class="contact-person">
                <p>{{__('footer.cr')}}</p>
                <p class="contact-info">+40 744 990 176</p>
                <p class="contact-info">anca.cuibar@bestcj.ro</p>
            </div>
        </div>

        <div class="footer-column location-col">
            <h3 class="footer-heading">{{__('footer.loc')}}</h3>
            <br>
            <p>BT ARENA, Cluj-Napoca</p>
        </div>
    </div>
</footer>

<style>
        .footer-section {
            background-color: #0125DC;
            color: #ffffff;
            width: 100%;
            position: relative;
            font-family: 'Inter', sans-serif;
        }

        .footer-pixel-divider {
            background-color:#ffffff;
        }

        .footer-pixel-divider img {
            width: 100%;
            display: block;
            height: auto;
        }

        .footer-container {
            margin-top: 50px;
            max-width: 1200px;
            margin: 0 auto;
            padding: 55px 20px 90px 20px;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 40px;
        }

        .footer-column {
            flex: 1;
        }

        .footer-logo {
            width: 160px;
            height: auto;
            margin-bottom: 30px;
        }

        .social-links {
            display: flex;
            gap: 15px;
            margin-bottom: 40px;
        }

        .social-btn img {
            width: 32px;
            height: 32px;
            transition: transform 0.2s ease;
        }

        .social-btn:hover img {
            transform: translateY(-3px);
            filter: brightness(0.9);
        }

        .copyright {
            font-size: 14px;
            font-weight: 300;
            opacity: 0.8;
    
        }

        .contact-info {
            font-style: light;
            font-weight: 300;
        }

        .footer-heading {
            font-size: 24px;
            font-weight: 500;
            margin-bottom: 25px;
        }

        .contact-person {
            margin-bottom: 25px;
            font-size: 16px;
            font-weight:500;
            line-height: 1.6;
        }

        .contact-person strong {
            font-weight: 300;
            display: block;
            margin-bottom: 4px;
        }

        .footer-column a {
            color: #ffffff;
            text-decoration: none;
            transition: opacity 0.2s;
        }

        .footer-column a:hover {
            text-decoration: underline;
            opacity: 0.9;
        }

        .location-col p {
            margin-top: -25px;
            font-size: 16px;
            font-weight: 300;
        }

    @media (max-width: 768px) {
        .footer-container {
            max-width: none;
            width: 100%;
            padding: 34px 18px 26px;
            margin-top: 0;
            flex-direction: column;
            gap: 22px;
            position: relative; 
        }

        .footer-heading {
            display: none;
        }

        .contact-col {
            order: 1;
        }

        .contact-person {
            margin-bottom: 18px;
            font-size: 12px;    
            font-weight: 500;
            line-height: 1.25;
        }

        .contact-info {
            display: block;
            font-size: 12px;
            font-weight: 300;
            line-height: 1.35;
            margin-top: 6px;
        }

        .contact-col br {
            display: none;
        }

        .location-col {
            order: 2;
        }

        .location-col p {
            margin-top: -50px;    
            font-size: 12px;
            font-weight: 400;
        }

        .brand-col {
            order: 3;
            padding-top: 8px;
            margin-bottom: -15px;
        }

        .copyright {
            font-size: 6px;
            margin-top: 15px;
        }

        .social-links {
            margin-bottom: 0;
            gap: 11px;
        }

        .social-btn img {
            width: 18px;
            height: 18px;
        }

        .footer-logo {
            width: 56px;
            margin: 0;

            position: absolute;
            right: 18px;
            bottom: 18px;
        }

        .footer-pixel-divider img {
            content: url('{{ asset('images/pixel-pattern-mobile-final.png') }}');
            width: 100%;
            margin-bottom: -2px;
            display: block;
            height: auto;
        }
    }
</style>