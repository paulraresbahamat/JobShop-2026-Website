<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <img src="{{ asset('images/jsmodern.svg') }}" alt="Main Logo" class = main-logo>
            <div class="soon-text">Coming Early Spring 2026. Stay tuned!</div>
        </div>
    </div>
</body>
</html>