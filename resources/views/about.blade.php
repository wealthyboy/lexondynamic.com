<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Learn about Lexon Dynamic Logistics, a freight forwarding, transportation, container shipping, vehicle logistics, heavy equipment, marine logistics, and supply chain solutions company.">

    <title>About Lexon Dynamic Logistics | Freight & Supply Chain Solutions</title>

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
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('consulting') }}">Consulting</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('about') }}">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ route('services') }}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="{{ route('services.show', 'freight-transportation') }}">Freight & Transportation</a></li>
                            <li><a class="dropdown-item" href="{{ route('services.show', 'container-shipping') }}">Container Shipping</a></li>
                            <li><a class="dropdown-item" href="{{ route('services.show', 'vehicle-transportation') }}">Vehicle Transportation</a></li>
                            <li><a class="dropdown-item" href="{{ route('services.show', 'construction-equipment') }}">Heavy Equipment</a></li>
                            <li><a class="dropdown-item" href="{{ route('services.show', 'marine-equipment-logistics') }}">Marine Logistics</a></li>
                            <li><a class="dropdown-item" href="{{ route('services.show', 'warehousing-supply-chain') }}">Supply Chain</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('regions') }}">Regions</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-lexon ms-lg-2" href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <section class="inner-hero">
            <img class="inner-hero-bg" src="{{ asset('images/hero/container-shipping.png') }}" alt="Container shipping port and logistics infrastructure">
            <div class="container">
                <span class="section-kicker">About Lexon Dynamic Logistics</span>
                <h1>Reliable logistics support for cargo, equipment, vehicles, and supply chains.</h1>
                <p>Lexon Dynamic Logistics helps businesses move freight with dependable planning, clear coordination, and practical logistics support across Nigeria, Canada, the United States, and worldwide trade routes.</p>
            </div>
        </section>

        <section class="section-pad about-story">
            <div class="container">
                <div class="row g-5 align-items-start">
                    <div class="col-lg-7 animate-on-scroll animate-from-left">
                        <span class="section-kicker text-green">Who We Are</span>
                        <h2 class="section-title">A logistics partner built for demanding commercial operations.</h2>
                        <p>Lexon Dynamic Logistics provides freight forwarding, transportation, container shipping, vehicle logistics, heavy equipment movement, marine equipment logistics, warehousing support, and supply chain coordination for businesses that need dependable cargo movement.</p>
                        <p>Our work supports industries such as oil and gas, construction, marine, manufacturing, energy, automotive, telecommunications, and industrial supply chains. Every shipment is planned around safety, documentation, timing, route clarity, and the needs of the client.</p>
                        <p>From local transportation to cross-border freight and international shipping routes, we coordinate practical logistics solutions that help cargo move from origin to destination with less friction.</p>
                    </div>
                    <div class="col-lg-5 animate-on-scroll animate-from-right">
                        <div class="about-proof-grid">
                            <article class="about-proof-card">
                                <div class="about-proof-heading">
                                    <span class="about-proof-icon">
                                        <svg aria-hidden="true" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9" /><path d="M3 12h18" /><path d="M12 3c2.4 2.6 3.6 5.6 3.6 9S14.4 18.4 12 21" /><path d="M12 3c-2.4 2.6-3.6 5.6-3.6 9S9.6 18.4 12 21" /></svg>
                                    </span>
                                    <span>Reach</span>
                                </div>
                                <h3>Nigeria, Canada, United States, and worldwide routes.</h3>
                            </article>
                            <article class="about-proof-card">
                                <div class="about-proof-heading">
                                    <span class="about-proof-icon">
                                        <svg aria-hidden="true" viewBox="0 0 24 24"><path d="M4 7l8-4 8 4-8 4z" /><path d="M4 12l8 4 8-4" /><path d="M4 17l8 4 8-4" /></svg>
                                    </span>
                                    <span>Focus</span>
                                </div>
                                <h3>Freight, containers, vehicles, equipment, marine cargo, and supply chains.</h3>
                            </article>
                            <article class="about-proof-card">
                                <div class="about-proof-heading">
                                    <span class="about-proof-icon">
                                        <svg aria-hidden="true" viewBox="0 0 24 24"><path d="M12 3l8 4v5c0 5-3.5 8-8 9-4.5-1-8-4-8-9V7z" /><path d="M8.5 12l2.2 2.2 4.8-5" /></svg>
                                    </span>
                                    <span>Approach</span>
                                </div>
                                <h3>Safe planning, dependable coordination, and customer-focused delivery.</h3>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-pad bg-white">
            <div class="container">
                <div class="row justify-content-between align-items-end mb-5">
                    <div class="col-lg-7 animate-on-scroll">
                        <span class="section-kicker text-green">Our Standards</span>
                        <h2 class="section-title">How we support every shipment.</h2>
                    </div>
                    <div class="col-lg-4 animate-on-scroll">
                        <p class="section-note">We combine operational discipline with flexible logistics coordination for businesses moving commercial and industrial cargo.</p>
                    </div>
                </div>

                <div class="row g-4">
                    <div class="col-md-6 col-xl-3 animate-on-scroll">
                        <article class="value-card">
                            <span class="value-icon">
                                <svg aria-hidden="true" viewBox="0 0 24 24"><path d="M3 7h11v8H3z" /><path d="M14 10h4l3 3v2h-7z" /><path d="M7 18a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" /><path d="M18 18a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" /></svg>
                            </span>
                            <h3>Reliability</h3>
                            <p>We plan with clear routing, realistic timing, and responsive shipment coordination.</p>
                        </article>
                    </div>
                    <div class="col-md-6 col-xl-3 animate-on-scroll">
                        <article class="value-card">
                            <span class="value-icon">
                                <svg aria-hidden="true" viewBox="0 0 24 24"><path d="M12 3l8 4v5c0 5-3.5 8-8 9-4.5-1-8-4-8-9V7z" /><path d="M8.5 12l2.2 2.2 4.8-5" /></svg>
                            </span>
                            <h3>Safety</h3>
                            <p>We prioritize secure handling for cargo, vehicles, equipment, and marine materials.</p>
                        </article>
                    </div>
                    <div class="col-md-6 col-xl-3 animate-on-scroll">
                        <article class="value-card">
                            <span class="value-icon">
                                <svg aria-hidden="true" viewBox="0 0 24 24"><path d="M13 2L5 14h6l-1 8 8-12h-6z" /></svg>
                            </span>
                            <h3>Efficiency</h3>
                            <p>We reduce logistics friction through organized documentation and practical coordination.</p>
                        </article>
                    </div>
                    <div class="col-md-6 col-xl-3 animate-on-scroll">
                        <article class="value-card">
                            <span class="value-icon">
                                <svg aria-hidden="true" viewBox="0 0 24 24"><path d="M8 11a4 4 0 1 0 0-8 4 4 0 0 0 0 8z" /><path d="M16 21a4 4 0 1 0 0-8 4 4 0 0 0 0 8z" /><path d="M12 7h4a4 4 0 0 1 4 4v1" /><path d="M12 17H8a4 4 0 0 1-4-4v-1" /></svg>
                            </span>
                            <h3>Support</h3>
                            <p>We stay aligned with client priorities from initial request to final delivery.</p>
                        </article>
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
