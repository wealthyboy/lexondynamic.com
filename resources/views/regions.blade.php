<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Lexon Dynamic Logistics provides freight and supply chain support across Nigeria, Canada, the United States, and worldwide shipping routes.">

    <title>Regions | Lexon Dynamic Logistics</title>

    <link rel="icon" href="{{ asset('favicon.ico') }}" sizes="any">
    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/png">
    <link rel="apple-touch-icon" href="{{ asset('favicons/apple-touch-icon.png') }}">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700,800" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="inner-page">
    <nav id="mainNav" class="navbar navbar-expand-lg fixed-top lexon-nav">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-2" href="{{ route('home') }}" aria-label="Lexon Dynamic Logistics home">
                <img src="{{ asset('images/lexon-dynamic-logo-transparent.png') }}" alt="Lexon Dynamic Logistics logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#primaryNavigation" aria-controls="primaryNavigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="primaryNavigation" class="collapse navbar-collapse">
                <ul class="navbar-nav mx-lg-auto align-items-lg-center gap-lg-2">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('services') }}">Services</a></li>
                    <li class="nav-item"><a class="nav-link active" href="{{ route('regions') }}">Regions</a></li>
                    <li class="nav-item"><a class="btn btn-lexon ms-lg-2" href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <section class="inner-hero">
            <img class="inner-hero-bg" src="{{ asset('images/hero/global-reach-globe.png') }}" alt="Global logistics network">
            <div class="container">
                <span class="section-kicker">Global Reach</span>
                <h1>Logistics support across major trade routes.</h1>
                <p>Lexon Dynamic Logistics supports cargo movement across Nigeria, Canada, the United States, and worldwide international shipping routes.</p>
            </div>
        </section>

        <section class="section-pad region-section">
            <div class="container">
                <div class="row g-4">
                    <div class="col-md-6 col-xl-3 animate-on-scroll">
                        <div class="region-card"><span>01</span><h3>Nigeria</h3><p>Local freight, port coordination, warehousing support, and industrial logistics.</p></div>
                    </div>
                    <div class="col-md-6 col-xl-3 animate-on-scroll">
                        <div class="region-card"><span>02</span><h3>Canada</h3><p>Freight forwarding, vehicle logistics, and commercial shipping coordination.</p></div>
                    </div>
                    <div class="col-md-6 col-xl-3 animate-on-scroll">
                        <div class="region-card"><span>03</span><h3>United States</h3><p>Container, auto, equipment, and cross-border logistics support.</p></div>
                    </div>
                    <div class="col-md-6 col-xl-3 animate-on-scroll">
                        <div class="region-card"><span>04</span><h3>Worldwide Routes</h3><p>International shipping routes for containers, cargo, vehicles, and equipment.</p></div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="site-footer">
        <div class="container">
            <div class="row g-4 g-lg-5">
                <div class="col-lg-4">
                    <a class="footer-brand d-inline-flex align-items-center mb-3" href="{{ route('home') }}" aria-label="Lexon Dynamic Logistics home">
                        <img src="{{ asset('images/lexon-dynamic-logo-transparent.png') }}" alt="Lexon Dynamic Logistics logo">
                    </a>
                    <p>Reliable freight forwarding, transportation, container shipping, vehicle logistics, heavy equipment movement, marine cargo handling, and supply chain coordination.</p>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <h3>Company</h3>
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="{{ route('services') }}">Services</a></li>
                        <li><a href="{{ route('regions') }}">Regions</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <h3>Services</h3>
                    <ul>
                        <li><a href="{{ route('services.show', 'freight-transportation') }}">Freight & Transportation</a></li>
                        <li><a href="{{ route('services.show', 'container-shipping') }}">Container Shipping</a></li>
                        <li><a href="{{ route('services.show', 'vehicle-transportation') }}">Vehicle Transportation</a></li>
                        <li><a href="{{ route('services.show', 'construction-equipment') }}">Heavy Equipment</a></li>
                        <li><a href="{{ route('services.show', 'marine-equipment-logistics') }}">Marine Logistics</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h3>Reach</h3>
                    <ul>
                        <li>Nigeria</li>
                        <li>Canada</li>
                        <li>United States</li>
                        <li>Worldwide shipping routes</li>
                    </ul>
                    <a class="footer-contact" href="mailto:info@lexondynamic.com"><svg aria-hidden="true" viewBox="0 0 24 24"><path d="M4 6h16v12H4z" /><path d="M4 8l8 6 8-6" /></svg>info@lexondynamic.com</a>
                    <a class="footer-contact footer-phone" href="tel:+2349028384220"><svg aria-hidden="true" viewBox="0 0 24 24"><path d="M6 4h4l2 5-3 2a12 12 0 0 0 4 4l2-3 5 2v4a2 2 0 0 1-2 2A16 16 0 0 1 4 6a2 2 0 0 1 2-2z" /></svg>+234 902 838 4220</a>
                </div>
            </div>
            <div class="footer-bottom">
                <span>&copy; {{ date('Y') }} Lexon Dynamic Logistics. All rights reserved.</span>
                <span>Freight. Transportation. Supply Chain.</span>
            </div>
        </div>
    </footer>
</body>
</html>
