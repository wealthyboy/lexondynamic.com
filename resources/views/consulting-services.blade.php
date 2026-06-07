<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('partials.seo', [
        'title' => 'Consulting Services | Procurement, EPC & Industrial Supply in Nigeria',
        'description' => 'Explore Lexon Dynamic Consulting Limited services including procurement, strategic sourcing, EPC support, industrial products supply, marine offshore supply, and technical partnerships for Nigerian oil and gas clients.',
        'image' => asset('images/hero/oil-drilling-field.png'),
        'organizationName' => 'Lexon Dynamic Consulting Limited',
        'serviceName' => 'Procurement, EPC and Industrial Supply Services',
        'breadcrumbs' => [
            ['name' => 'Home', 'url' => route('home')],
            ['name' => 'Consulting', 'url' => route('consulting')],
            ['name' => 'Services', 'url' => route('consulting.services')],
        ],
    ])

    <link rel="icon" href="{{ asset('favicon.ico') }}" sizes="any">
    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/png">
    <link rel="apple-touch-icon" href="{{ asset('favicons/apple-touch-icon.png') }}">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700,800" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        @media (max-width: 767.98px) {
            .consulting-services-page .consulting-service-panel {
                display: flex !important;
                height: auto !important;
                min-height: 0 !important;
                flex-direction: column !important;
                overflow: hidden !important;
                border-radius: 14px !important;
                background: #ffffff !important;
            }

            .consulting-services-page .consulting-service-panel > img {
                position: static !important;
                inset: auto !important;
                display: block !important;
                width: 100% !important;
                height: 220px !important;
                min-height: 0 !important;
                max-height: 220px !important;
                flex: 0 0 220px !important;
                object-fit: cover !important;
                object-position: center !important;
                opacity: 1 !important;
            }

            .consulting-services-page .consulting-service-content {
                position: static !important;
                inset: auto !important;
                display: block !important;
                height: auto !important;
                min-height: 0 !important;
                padding: 22px 18px 24px !important;
                overflow: visible !important;
                color: #111827 !important;
                background: #ffffff !important;
                opacity: 1 !important;
                transform: none !important;
            }

            .consulting-services-page .consulting-service-content h3 {
                margin: 0 !important;
                color: #111827 !important;
                font-size: 23px !important;
                line-height: 1.2 !important;
            }

            .consulting-services-page .consulting-service-content p,
            .consulting-services-page .consulting-service-content li {
                color: #667085 !important;
                font-size: 15px !important;
                line-height: 1.55 !important;
                opacity: 1 !important;
            }

            .consulting-services-page .consulting-service-content p {
                margin-top: 12px !important;
            }

            .consulting-services-page .consulting-service-content ul {
                gap: 9px !important;
                margin-top: 18px !important;
            }
        }
    </style>
</head>
<body class="inner-page">
    <nav id="mainNav" class="navbar navbar-expand-lg fixed-top lexon-nav">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-2" href="{{ route('home') }}" aria-label="Lexon Dynamic home">
                <img src="{{ asset('images/lexon-dynamic-logo-transparent.png') }}" alt="Lexon Dynamic logo">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#primaryNavigation" aria-controls="primaryNavigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="primaryNavigation" class="collapse navbar-collapse">
                <ul class="navbar-nav mx-lg-auto align-items-lg-center gap-lg-2">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('logistics') }}">Logistics</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('consulting.about') }}">About Us</a></li>
                    <li class="nav-item"><a class="nav-link active" href="{{ route('consulting.services') }}">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('consulting') }}#industries">Industries</a></li>
                    <li class="nav-item"><a class="btn btn-lexon ms-lg-2" href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <section class="inner-hero consulting-inner-hero">
            <img class="inner-hero-bg" src="{{ asset('images/hero/oil-gas-consulting.png') }}" alt="Industrial oil and gas infrastructure">
            <div class="container">
                <span class="section-kicker">Consulting Services</span>
                <h1>Procurement, EPC, logistics, and industrial project support.</h1>
                <p>Lexon Dynamic Consulting Limited supports clients with strategic sourcing, technical procurement, EPC support, international trade coordination, and industrial products supply.</p>
                <div class="d-flex flex-wrap gap-3 mt-4">
                    <a class="btn btn-lexon btn-lg" href="{{ route('contact') }}">Request Support</a>
                    <a class="btn btn-outline-light btn-lg" href="{{ route('contact') }}">Contact Us</a>
                </div>
            </div>
        </section>

        <section class="section-pad consulting-services-page">
            <div class="container">
                <div class="row g-4 align-items-end mb-5">
                    <div class="col-lg-7 animate-on-scroll">
                        <span class="section-kicker text-green">Core Capabilities</span>
                        <h2 class="section-title">Services designed for industrial operations and project execution.</h2>
                    </div>
                    <div class="col-lg-5 animate-on-scroll">
                        <p class="section-note">Each service is structured around quality sourcing, reliable delivery, strong documentation, vendor coordination, and practical technical support.</p>
                    </div>
                </div>

                <div class="consulting-service-grid">
                    @foreach ($consultingServices as $service)
                        <article class="consulting-service-panel animate-on-scroll">
                            <img src="{{ asset($service['image']) }}" alt="{{ $service['title'] }}">
                            <div class="consulting-service-content">
                                <h3>{{ $service['title'] }}</h3>
                                <p>{{ $service['description'] }}</p>
                                <ul>
                                    @foreach ($service['points'] as $point)
                                        <li>{{ $point }}</li>
                                    @endforeach
                                </ul>
                                <a class="service-learn-more" href="{{ route('contact') }}">Request This Service</a>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="section-pad bg-white">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-5 animate-on-scroll animate-from-left">
                        <span class="section-kicker text-green">Products Supplied</span>
                        <h2 class="section-title">Industrial and technical products for critical sectors.</h2>
                    </div>
                    <div class="col-lg-7 animate-on-scroll animate-from-right">
                        <div class="industry-cloud">
                            <span><svg aria-hidden="true" viewBox="0 0 24 24"><path d="M8 3h8l2 5v9a4 4 0 0 1-4 4h-4a4 4 0 0 1-4-4V8zM9 8h6M10 13h4" /></svg>Oil & Gas Products</span>
                            <span><svg aria-hidden="true" viewBox="0 0 24 24"><path d="M4 15l2-7h12l2 7M3 15h18M6 18c1.2 1 2.8 1 4 0 1.2 1 2.8 1 4 0 1.2 1 2.8 1 4 0" /></svg>Marine Equipment</span>
                            <span><svg aria-hidden="true" viewBox="0 0 24 24"><path d="M4 20V9l5 4V9l5 4V7h6v13zM8 17h1M12 17h1M16 17h1" /></svg>Manufacturing Equipment</span>
                            <span><svg aria-hidden="true" viewBox="0 0 24 24"><path d="M4 20h16M6 20V9l6-5 6 5v11M9 20v-6h6v6" /></svg>Construction Equipment</span>
                            <span><svg aria-hidden="true" viewBox="0 0 24 24"><path d="M12 20V10M8 14a5 5 0 0 1 8 0M5 11a9 9 0 0 1 14 0M10 20h4" /></svg>Communication Equipment</span>
                            <span><svg aria-hidden="true" viewBox="0 0 24 24"><path d="M13 2L5 14h6l-1 8 8-12h-6z" /></svg>Power & Energy Equipment</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" class="contact-band">
            <div class="container">
                <div class="contact-panel animate-on-scroll">
                    <div>
                        <span class="section-kicker text-green">Start a Requirement</span>
                        <h2>Need sourcing, supply, or EPC support?</h2>
                        <p>Send us your requirement and our team will help coordinate the right procurement, technical, or project support pathway.</p>
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
                    <a class="footer-brand d-inline-flex align-items-center mb-3" href="{{ route('home') }}" aria-label="Lexon Dynamic home">
                        <img src="{{ asset('images/lexon-dynamic-logo-transparent.png') }}" alt="Lexon Dynamic logo">
                    </a>
                    <p>Consulting, procurement, EPC support, and industrial supply solutions for clients.</p>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <h3>Company</h3>
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('consulting') }}">Consulting</a></li>
                        <li><a href="{{ route('consulting.about') }}">About Us</a></li>
                        <li><a href="{{ route('logistics') }}">Logistics</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <h3>Services</h3>
                    <ul>
                        <li>Procurement & sourcing</li>
                        <li>EPC support</li>
                        <li>Industrial products supply</li>
                        <li>Marine & offshore supply</li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h3>Contact</h3>
                    <a class="footer-contact" href="mailto:info@lexondynamic.com"><svg aria-hidden="true" viewBox="0 0 24 24"><path d="M4 6h16v12H4z" /><path d="M4 8l8 6 8-6" /></svg>info@lexondynamic.com</a>
                    <a class="footer-contact footer-phone" href="tel:+2349028384220"><svg aria-hidden="true" viewBox="0 0 24 24"><path d="M6 4h4l2 5-3 2a12 12 0 0 0 4 4l2-3 5 2v4a2 2 0 0 1-2 2A16 16 0 0 1 4 6a2 2 0 0 1 2-2z" /></svg>+234 902 838 4220</a>
                </div>
            </div>
            <div class="footer-bottom">
                <span>&copy; {{ date('Y') }} Lexon Dynamic Consulting Limited. All rights reserved.</span>
                <span>Consulting. Procurement. EPC.</span>
            </div>
        </div>
    </footer>

    @include('partials.whatsapp')
</body>
</html>
