<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JobShop® - Stand App</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.svg') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/map.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flipped_map.css') }}">
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;500;700&display=swap" rel="stylesheet">

    @livewireStyles

    <style>

        html, body {
            overflow-x: hidden !important;
            position: relative;
            width: 100%;
        }

        .login-overlay {
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.55);
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            opacity: 0;
            visibility: hidden;
            pointer-events: none; 
            transition: opacity 0.3s ease, visibility 0.3s ease;
        }

        .login-overlay.show {
            opacity: 1;
            visibility: visible;
            pointer-events: all;
        }

        .login-popup {
            width: min(620px, 92vw);
            border-radius: 14px;
            position: relative;
            background: rgba(234, 85, 27, 0.85);
            backdrop-filter: blur(8px);
            padding: 28px 26px;
            box-shadow: 0 18px 60px rgba(0, 0, 0, 0.35);
            transform: translateY(20px) scale(0.95);
            transition: transform 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
        }

        .login-overlay.show .login-popup {
            transform: translateY(0) scale(1);
        }
        .login-close {
            position: absolute; right: 15px; top: 12px; border: 0;
            background: transparent; color: white; font-size: 22px; cursor: pointer; opacity: 0.7;
        }
        .login-close:hover { opacity: 1; }
        .login-form { display: flex; flex-direction: column; gap: 10px; }
        .login-title { color: white; font-weight: 500; margin-bottom: 15px; }
        .login-label { color: rgba(255,255,255,0.9); font-weight: 300; margin-top: 8px; }
        .login-hint { color: rgba(255,255,255,0.5); font-size: 0.85rem; }
        .login-input {
            height: 46px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2);
            padding: 0 14px; outline: none; background: rgba(255,255,255,0.05); color: white;
        }
        .login-submit {
            margin-top: 20px; height: 48px; border-radius: 10px; border: 0;
            background: white; color: #0125DC; font-weight: 600; transition: transform 0.2s;
        }

        .login-input::placeholder {
            color: rgba(255, 255, 255, 0.5);
            font-weight: 300;             
            opacity: 1;
        }

        @media (max-width: 768px) {
            header {
                padding: 10px 16px !important;
            }
            .js-logo h1 {
                font-size: 18px !important;
                margin-bottom: 0 !important; 
                margin-left: 0 !important;
            }
            .js-logo img {
                height: 32px !important; 
            }
            .custom-button {
                padding: 6px 14px;
                font-size: 14px;
            }

            .container.py-5 {
                padding-top: 2rem !important;
                padding-bottom: 4rem !important;
            }

            .map-legend {
                flex-wrap: wrap;
                gap: 15px 20px !important;
                padding: 0 10px;
            }
            .legend-item {
                font-size: 14px;
            }
            .legend-box {
                width: 24px !important; 
                height: 24px !important;
            }

            .support-text {
                font-size: 14px !important;
                margin-top: 30px !important;
                text-align: center;
                padding: 0 15px;
                line-height: 1.5;
            }
            
            .login-popup {
                padding: 20px; 
            }
            .login-title {
                font-size: 1.5rem;
            }
            
        }
    </style>
</head>

<body class="main-content">

    <header style="background: #0125DC; padding: 12px 24px; display:flex; align-items:center; justify-content:space-between; position: sticky; top: 0; z-index: 100;">
        <div class="js-logo" style="display: flex; align-items: center; gap: 5px;">
            <a href="{{ route('home') }}" style="display: flex; align-items: center;">
                <img src="{{ asset('images/logo-modern-app.png') }}" alt="JobShop Logo" style="height: 40px; width: auto; display: block;">
            </a>
            
            <h1 style="color: #ffffff; font-weight: 500; font-size: 24px; margin: 0; line-height: 50px;">Stand App</h1>
        </div>

        <div style="display:flex; align-items:center; gap:12px;">
            @auth
                <span class="d-none d-md-block" style="color: var(--color-white); font-weight: 300;">
                    {{ auth()->user()->name ?? auth()->user()->email }}
                </span>

                <form method="POST" action="{{ route('logout') }}" style="margin:0;">
                    @csrf
                    <button class="btn custom-button" type="submit">Log Out</button>
                </form>
            @else
                <button id="openLogin" class="btn custom-button" type="button">Log In</button>
            @endauth
        </div>
    </header>

    <div class="container py-5" style="display:flex; flex-direction:column; align-items:center; min-height: 80vh;">
        
        @livewire('stand-map')

        <div class="map-legend">
            <div class="legend-item">
                <span class="legend-box legend-free"></span>
                <span>Free stand</span>
            </div>

            <div class="legend-item">
                <span class="legend-box legend-occupied"></span>
                <span>Occupied stand</span>
            </div>

            <div class="legend-item">
                <span class="legend-box legend-selected"></span>
                <span>Your selection</span>
            </div>
        </div>

        <p class="support-text" style="margin-top: 40px; font-size: 18px; font-weight: 500; color: #0125DC; text-align: center;">
            For technical support, please contact us at:<br class="d-block d-sm-none"> <a href="tel:+40754396544" style="text-decoration: none; font-weight: 700;">+40 754 396 544</a> - Bahamat Paul-Rareș.
        </p>
    </div>

    @guest
        <div id="loginModal" class="login-overlay">
            <div class="login-popup">
                <button type="button" id="closeLogin" class="login-close">✕</button>

                <form method="POST" action="{{ route('login') }}" class="login-form">
                    @csrf
                    <h2 class="login-title">Log In</h2>

                    @if ($errors->any())
                        <div class="alert alert-danger" style="font-size: 14px;">
                            {{ $errors->first() }}
                        </div>
                    @endif

                    <label class="login-label">Company ID</label>
                    <input class="login-input" type="text" name="company_id" value="{{ old('company_id') }}" placeholder="Enter ID" required>
                    <div class="login-hint">Enter the Company ID supplied by us</div>

                    <label class="login-label" style="margin-top:14px;">Password</label>
                    <input class="login-input" type="password" name="password" placeholder="Password" required>

                    <button class="login-submit" type="submit">Log In</button>
                </form>
            </div>
        </div>
    @endguest

    <x-footer />

    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        const overlay = document.getElementById('loginModal');
        const openBtn  = document.getElementById('openLogin');
        const closeBtn = document.getElementById('closeLogin');

        function openLogin() { 
            if (overlay) overlay.classList.add('show'); 
        }
        
        function closeLogin() { 
            if (overlay) overlay.classList.remove('show'); 
        }

        if (openBtn && overlay) openBtn.addEventListener('click', openLogin);
        if (closeBtn && overlay) closeBtn.addEventListener('click', closeLogin);

        if (overlay) {
            overlay.addEventListener('click', (e) => {
                if (e.target === overlay) closeLogin();
            });
        }
        
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') closeLogin();
        });

        @if ($errors->any())
            setTimeout(openLogin, 100);
        @endif
    </script>
</body>
</html>