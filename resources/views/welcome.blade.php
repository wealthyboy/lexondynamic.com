<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('partials.seo', [
        'title' => 'Lexon Dynamic | Consulting, Procurement, EPC & Logistics Services in Nigeria',
        'description' => 'Lexon Dynamic provides consulting, procurement, EPC support, industrial supply, and logistics services for oil and gas, marine, construction, manufacturing, and energy clients in Nigeria.',
        'image' => asset('images/hero/oil-gas-consulting.png'),
        'breadcrumbs' => [
            ['name' => 'Home', 'url' => route('home')],
        ],
    ])

    <link rel="icon" href="{{ asset('favicon.ico') }}" sizes="any">
    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/png">
    <link rel="apple-touch-icon" href="{{ asset('favicons/apple-touch-icon.png') }}">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700,800" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="gateway-page">
    <nav class="gateway-nav" aria-label="Main navigation">
        <div class="container">
            <a class="gateway-brand" href="{{ route('home') }}" aria-label="Lexon Dynamic Consulting Limited home">
                <img src="{{ asset('images/lexon-dynamic-logo-transparent.png') }}" alt="Lexon Dynamic Consulting Limited logo">
            </a>
        </div>
    </nav>

    <main class="gateway-main">
        <div class="container">
            <div class="row g-2 min-vh-100 align-items-center">
                <div class="col-lg-6">
                    <a class="gateway-card gateway-consulting" href="{{ route('consulting') }}">
                        <span>Consulting</span>
                        <h1>Consulting, procurement, and EPC support.</h1>
                        <p>Strategic sourcing, industrial procurement, EPC coordination, OEM partnerships, and project support for demanding operations.</p>
                        <strong>Enter Consulting</strong>
                    </a>
                </div>
                <div class="col-lg-6">
                    <a class="gateway-card gateway-logistics" href="{{ route('logistics') }}">
                        <span>Logistics</span>
                        <h2>Freight, cargo, and supply chain movement.</h2>
                        <p>Freight forwarding, container shipping, vehicle transportation, heavy equipment movement, marine logistics, and warehousing support.</p>
                        <strong>Enter Logistics</strong>
                    </a>
                </div>
            </div>
        </div>
    </main>
    @include('partials.whatsapp')
</body>
</html>
