<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('partials.seo', [
        'title' => 'Logistics Services | Freight, Containers, Vehicle & Equipment Transport',
        'description' => 'Explore Lexon Dynamic Logistics services including freight transportation, container shipping, vehicle logistics, construction equipment transport, marine equipment logistics, warehousing, and supply chain support.',
        'image' => asset('images/hero/container-shipping.png'),
        'organizationName' => 'Lexon Dynamic Logistics',
        'organizationType' => 'LocalBusiness',
        'serviceName' => 'Logistics and Transportation Services',
        'breadcrumbs' => [
            ['name' => 'Home', 'url' => route('home')],
            ['name' => 'Logistics', 'url' => route('logistics')],
            ['name' => 'Services', 'url' => route('services')],
        ],
    ])

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
                    <li class="nav-item"><a class="nav-link" href="{{ route('consulting') }}">Consulting</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About Us</a></li>
                    <li class="nav-item"><a class="nav-link active" href="{{ route('services') }}">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('regions') }}">Regions</a></li>
                    <li class="nav-item"><a class="btn btn-lexon ms-lg-2" href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <section class="inner-hero">
            <img class="inner-hero-bg" src="{{ asset('images/hero/freight-transportation.png') }}" alt="Freight transportation and logistics terminal">
            <div class="container">
                <span class="section-kicker">Our Services</span>
                <h1>End-to-end logistics services for commercial and industrial cargo.</h1>
                <p>Explore the core logistics solutions Lexon Dynamic Logistics provides across freight, containers, vehicles, equipment, marine operations, and supply chains.</p>
            </div>
        </section>

        <section class="section-pad service-section services-page-section">
            <div class="container">
                <div class="row g-5 align-items-start">
                    <div class="col-lg-2">
                        <nav class="service-timeline" aria-label="Service timeline">
                            @foreach ($services as $slug => $service)
                                <a class="service-timeline-link {{ $loop->first ? 'is-active' : '' }}" href="#{{ $slug }}" data-service-timeline-link="{{ $slug }}">
                                    <span>{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                                    {{ $service['title'] }}
                                </a>
                            @endforeach
                        </nav>
                    </div>
                    <div class="col-lg-10">
                        <div class="service-story-list">
                            @foreach ($services as $slug => $service)
                                <article id="{{ $slug }}" class="service-story animate-on-scroll" data-service-story="{{ $slug }}">
                                    <img class="service-story-image" src="{{ asset($service['image']) }}" alt="{{ $service['title'] }}">
                                    <div class="service-story-body">
                                        <span class="section-kicker text-green">{{ $service['title'] }}</span>
                                        <h2>{{ $service['description'] }}</h2>
                                        @foreach ($service['paragraphs'] as $paragraph)
                                            <p>{{ $paragraph }}</p>
                                        @endforeach
                                        <ul>
                                            @foreach ($service['points'] as $point)
                                                <li>{{ $point }}</li>
                                            @endforeach
                                        </ul>
                                        <a class="service-learn-more" href="{{ route('services.show', $slug) }}">Learn More</a>
                                    </div>
                                </article>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" class="contact-band">
            <div class="container">
                <div class="contact-panel animate-on-scroll">
                    <div>
                        <span class="section-kicker text-green">Start a Shipment</span>
                        <h2>Need dependable logistics coordination?</h2>
                        <p>Talk to Lexon Dynamic Logistics about freight, containers, vehicles, heavy equipment, marine cargo, or supply chain support.</p>
                    </div>
                    <a class="btn btn-lexon btn-lg" href="{{ route('contact') }}">Contact Us</a>
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
                        <li><a href="{{ route('consulting') }}">Consulting</a></li>
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
    @include('partials.whatsapp')
</body>
</html>
