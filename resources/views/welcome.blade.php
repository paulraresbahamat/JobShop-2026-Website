<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.svg') }}">
    <title>JobShop® - Coming soon</title>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body>
     <header class="top-bar">
        <img src="{{ asset('images/utlogo.png') }}" alt="UTCN Logo" class = top-logo>
        <img src="{{ asset('images/jslogo2.svg') }}" alt="JobShop® Logo" class = "top-logo center-logo">
        <img src="{{ asset('images/bestlogo.png') }}" alt="Best CJ Logo" class = top-logo>
    </header>

    <div class="middle">
        <div class="center-content">
            <div id="sticker-pile" class="sticker-container" data-sticker-src="{{ asset('images/sticker_orange.svg') }}">
                </div>
            
            <div class="soon-text">Coming Early Spring 2026. Stay tuned!</div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const container = document.getElementById('sticker-pile');
            const stickerSrc = container.dataset.stickerSrc;
            
            const stickerCount = 18; 
            const spawnInterval = 1800;

            const initialWidth = window.innerWidth;
            const isMobile = initialWidth <= 600;
    
            const spreadX = isMobile ? 180 : 350;
            const spreadY = isMobile ? 120 : 250;
            
            for (let i = 0; i < stickerCount; i++) {
                setTimeout(() => {
                    createSticker(i);
                }, i * spawnInterval);
            }

            function createSticker(index) {
                const img = document.createElement('img');
                img.src = stickerSrc;
                img.classList.add('sticker');

                const randomX = (Math.random() - 0.5) * spreadX; 
                const randomY = (Math.random() - 0.5) * spreadY;  
                let rotation = (Math.random() - 0.5) * 60; 
                if (Math.random() > 0.8) {
                    rotation += 180;
                }

                img.style.setProperty('--x', `${randomX}px`);
                img.style.setProperty('--y', `${randomY}px`);
                img.style.setProperty('--r', `${rotation}deg`);

                container.appendChild(img);

                setTimeout(() => {
                    img.classList.add('visible');
                }, 50);
            }
        });
    </script>
</body>
</html>