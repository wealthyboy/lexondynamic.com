<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Lexon Dynamic Logistics provides freight forwarding, transportation, container shipping, vehicle logistics, heavy equipment shipping, marine cargo handling, and supply chain solutions across Nigeria, Canada, United States, and global markets.">

    <title>Lexon Dynamic Logistics | Freight, Transportation & Supply Chain Solutions</title>

    <link rel="icon" href="{{ asset('favicon.ico') }}" sizes="any">
    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/png">
    <link rel="apple-touch-icon" href="{{ asset('favicons/apple-touch-icon.png') }}">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700,800" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="90" tabindex="0">
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
                        <a class="nav-link" href="{{ route('about') }}">About Us</a>
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

    <main id="home">
        <section id="lexonHero" class="carousel slide carousel-fade hero-slider" data-bs-ride="carousel" data-bs-interval="6500">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#lexonHero" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Freight logistics"></button>
                <button type="button" data-bs-target="#lexonHero" data-bs-slide-to="1" aria-label="Container shipping"></button>
                <button type="button" data-bs-target="#lexonHero" data-bs-slide-to="2" aria-label="Vehicle and equipment transportation"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active hero-slide">
                    <img class="hero-bg" src="{{ asset('images/hero/freight-transportation.png') }}" alt="Freight trucks and shipping containers at a logistics terminal">
                    <div class="container">
                        <div class="row min-vh-100 align-items-center">
                            <div class="col-lg-8 col-xl-7 hero-caption">
                                <span class="section-kicker">Global Freight Forwarding</span>
                                <h1>Reliable logistics for freight, cargo, and supply chain movement.</h1>
                                <p>Lexon Dynamic Logistics delivers dependable freight forwarding, transportation, container shipping, and industrial logistics solutions across Nigeria, Canada, the United States, and international markets.</p>
                                <div class="d-flex flex-wrap gap-3 mt-4">
                                    <a class="btn btn-lexon btn-lg" href="{{ route('services') }}">Explore Services</a>
                                    <a class="btn btn-outline-light btn-lg" href="{{ route('contact') }}">Request Support</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item hero-slide">
                    <img class="hero-bg" src="{{ asset('images/hero/container-shipping.png') }}" alt="Container ship at an international port">
                    <div class="container">
                        <div class="row min-vh-100 align-items-center">
                            <div class="col-lg-8 col-xl-7 hero-caption">
                                <span class="section-kicker">Container Shipping</span>
                                <h2>20ft and 40ft container coordination from port to destination.</h2>
                                <p>We manage import, export, customs documentation support, drayage, and ocean freight coordination with complete logistics oversight.</p>
                                <div class="d-flex flex-wrap gap-3 mt-4">
                                    <a class="btn btn-lexon btn-lg" href="{{ route('services.show', 'container-shipping') }}">View Capabilities</a>
                                    <a class="btn btn-outline-light btn-lg" href="{{ route('regions') }}">Our Regions</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item hero-slide">
                    <img class="hero-bg" src="{{ asset('images/hero/heavy-equipment.png') }}" alt="Heavy equipment on a specialized transport trailer">
                    <div class="container">
                        <div class="row min-vh-100 align-items-center">
                            <div class="col-lg-8 col-xl-7 hero-caption">
                                <span class="section-kicker">Specialized Transportation</span>
                                <h2>Vehicle, marine, and heavy equipment logistics handled with care.</h2>
                                <p>From cars and commercial fleets to excavators, forklifts, marine engines, and offshore cargo, our team plans safe movement for demanding operations.</p>
                                <div class="d-flex flex-wrap gap-3 mt-4">
                                    <a class="btn btn-lexon btn-lg" href="{{ route('services.show', 'vehicle-transportation') }}">Vehicle Logistics</a>
                                    <a class="btn btn-outline-light btn-lg" href="{{ route('services.show', 'construction-equipment') }}">Heavy Equipment</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#lexonHero" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#lexonHero" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </section>

        <section id="about" class="section-pad bg-white about-section">
            <img class="about-bg-image" src="{{ asset('images/hero/container-shipping.png') }}" alt="" aria-hidden="true">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 animate-on-scroll animate-from-left">
                        <span class="section-kicker text-green">About Lexon Dynamic Logistics</span>
                        <h2 class="section-title">Trusted freight forwarding, transportation, and logistics coordination.</h2>
                        <p class="lead-copy">Lexon Dynamic Logistics provides reliable shipping and supply chain solutions for businesses across Nigeria, Canada, United States, and international markets.</p>
                        <p>We support oil & gas, construction, marine, manufacturing, energy, automotive, and industrial operations with customized logistics solutions built around safety, timely delivery, and operational excellence.</p>
                        <div class="about-actions">
                            <a class="btn btn-lexon btn-lg" href="{{ route('about') }}">Learn More</a>
                        </div>
                    </div>
                    <div class="col-lg-6 animate-on-scroll animate-from-right">
                        <div class="mission-grid">
                            <article>
                                <div class="mission-heading">
                                    <span class="mission-icon">
                                        <svg aria-hidden="true" viewBox="0 0 24 24"><path d="M2 12s3.5-6 10-6 10 6 10 6-3.5 6-10 6S2 12 2 12z" /><circle cx="12" cy="12" r="3" /></svg>
                                    </span>
                                    <span>Vision</span>
                                </div>
                                <p>To become a leading global logistics and freight solutions provider recognized for reliability, efficiency, innovation, and customer-focused service delivery.</p>
                            </article>
                            <article>
                                <div class="mission-heading">
                                    <span class="mission-icon">
                                        <svg aria-hidden="true" viewBox="0 0 24 24"><path d="M12 3l8 4v5c0 5-3.5 8-8 9-4.5-1-8-4-8-9V7z" /><path d="M8.5 12l2.2 2.2 4.8-5" /></svg>
                                    </span>
                                    <span>Mission</span>
                                </div>
                                <p>To provide seamless, safe, and cost-effective logistics solutions through professional freight management and dependable transportation services.</p>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="services" class="section-pad service-section">
            <div class="container">
                <div class="service-section-header mb-5 animate-on-scroll">
                    <div>
                        <span class="section-kicker text-green">Core Services</span>
                        <h2 class="section-title">End-to-end logistics services for commercial and industrial cargo.</h2>
                        <p class="section-note">Freight, containers, vehicles, equipment, marine cargo, and supply chain support.</p>
                    </div>
                    <a class="btn btn-lexon service-view-all" href="{{ route('services') }}">View All</a>
                </div>

                <div id="servicesCarousel" class="carousel slide service-carousel animate-on-scroll" data-bs-ride="false">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row g-4">
                                <div id="freight" class="col-md-6 col-xl-4">
                                    <article class="service-card h-100">
                                        <img class="service-image" src="{{ asset('images/hero/freight-transportation.png') }}" alt="Freight trucks and shipping containers">
                                        <h3>Freight & Transportation</h3>
                                        <p>Secure local, cross-border, expedited, dedicated, heavy haul, and consolidated cargo movement.</p>
                                        <ul>
                                            <li>Full Truckload and LTL services</li>
                                            <li>Cross-border freight transportation</li>
                                            <li>Heavy haul and specialized transport</li>
                                        </ul>
                                        <a class="service-learn-more" href="{{ route('services.show', 'freight-transportation') }}">Learn More</a>
                                    </article>
                                </div>
                                <div id="containers" class="col-md-6 col-xl-4">
                                    <article class="service-card h-100">
                                        <img class="service-image" src="{{ asset('images/hero/container-shipping.png') }}" alt="Container shipping port">
                                        <h3>Container Shipping</h3>
                                        <p>Import and export container shipping coordination for commercial and industrial clients.</p>
                                        <ul>
                                            <li>20ft and 40ft container shipping</li>
                                            <li>Port-to-port coordination</li>
                                            <li>Customs clearing documentation support</li>
                                        </ul>
                                        <a class="service-learn-more" href="{{ route('services.show', 'container-shipping') }}">Learn More</a>
                                    </article>
                                </div>
                                <div id="vehicles" class="col-md-6 col-xl-4">
                                    <article class="service-card h-100">
                                        <img class="service-image" src="{{ asset('images/hero/vehicle-transportation.png') }}" alt="Specialized vehicle and auto transportation">
                                        <h3>Vehicle Transportation</h3>
                                        <p>Professional vehicle logistics for individuals, dealerships, fleets, and industrial clients.</p>
                                        <ul>
                                            <li>Cars, SUVs, pickups, and trucks</li>
                                            <li>RoRo and containerized vehicle shipping</li>
                                            <li>Luxury, exotic, and fleet movement</li>
                                        </ul>
                                        <a class="service-learn-more" href="{{ route('services.show', 'vehicle-transportation') }}">Learn More</a>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row g-4">
                                <div id="equipment" class="col-md-6 col-xl-4">
                                    <article class="service-card h-100">
                                        <img class="service-image" src="{{ asset('images/hero/heavy-equipment.png') }}" alt="Heavy construction equipment transportation">
                                        <h3>Construction Equipment</h3>
                                        <p>Specialized handling, loading, transportation, and delivery for heavy-duty equipment.</p>
                                        <ul>
                                            <li>Excavators, bulldozers, and cranes</li>
                                            <li>Forklifts, loaders, and backhoes</li>
                                            <li>Structural and project equipment</li>
                                        </ul>
                                        <a class="service-learn-more" href="{{ route('services.show', 'construction-equipment') }}">Learn More</a>
                                    </article>
                                </div>
                                <div id="marine" class="col-md-6 col-xl-4">
                                    <article class="service-card h-100">
                                        <img class="service-image" src="{{ asset('images/hero/bonus-img3.jpg') }}" alt="Marine equipment and port logistics">
                                        <h3>Marine Equipment Logistics</h3>
                                        <p>Marine and offshore logistics support for equipment, spare parts, and operational materials.</p>
                                        <ul>
                                            <li>Offshore cargo coordination</li>
                                            <li>Vessel spare parts logistics</li>
                                            <li>Port logistics support</li>
                                        </ul>
                                        <a class="service-learn-more" href="{{ route('services.show', 'marine-equipment-logistics') }}">Learn More</a>
                                    </article>
                                </div>
                                <div id="supply-chain" class="col-md-6 col-xl-4">
                                    <article class="service-card h-100">
                                        <img class="service-image" src="{{ asset('images/hero/supply-chain-warehouse.png') }}" alt="Warehousing and supply chain coordination">
                                        <h3>Warehousing & Supply Chain</h3>
                                        <p>Inventory, cargo distribution, tracking, and end-to-end supply chain coordination.</p>
                                        <ul>
                                            <li>Warehousing and storage support</li>
                                            <li>Shipment tracking and monitoring</li>
                                            <li>Logistics planning and distribution</li>
                                        </ul>
                                        <a class="service-learn-more" href="{{ route('services.show', 'warehousing-supply-chain') }}">Learn More</a>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="service-carousel-indicators">
                        <button type="button" data-bs-target="#servicesCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Services 1 to 3"></button>
                        <button type="button" data-bs-target="#servicesCarousel" data-bs-slide-to="1" aria-label="Services 4 to 6"></button>
                    </div>

                    <button class="service-carousel-control service-carousel-prev" type="button" data-bs-target="#servicesCarousel" data-bs-slide="prev" aria-label="Previous services">
                        <svg aria-hidden="true" viewBox="0 0 24 24">
                            <path d="M15 18L9 12L15 6" />
                        </svg>
                    </button>
                    <button class="service-carousel-control service-carousel-next" type="button" data-bs-target="#servicesCarousel" data-bs-slide="next" aria-label="Next services">
                        <svg aria-hidden="true" viewBox="0 0 24 24">
                            <path d="M9 6L15 12L9 18" />
                        </svg>
                    </button>
                </div>
            </div>
        </section>

        <section class="section-pad why-section">
            <div class="container">
                <div class="row g-5 align-items-start">
                    <div class="col-lg-4 animate-on-scroll animate-from-left">
                        <span class="section-kicker text-green">Why Choose Us</span>
                        <h2 class="section-title">Why Choose Lexon Dynamic Logistics</h2>
                        <p class="section-note">Reliable freight, shipping, documentation, and supply chain support for clients moving cargo across borders and global routes.</p>
                    </div>
                    <div class="col-lg-8 animate-on-scroll animate-from-right">
                        <div class="why-list">
                            <article class="why-card">
                                <span class="why-icon">
                                    <svg aria-hidden="true" viewBox="0 0 24 24"><path d="M3 7h11v8H3z" /><path d="M14 10h4l3 3v2h-7z" /><path d="M7 18a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" /><path d="M18 18a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" /></svg>
                                </span>
                                <h3>Reliable international freight solutions</h3>
                            </article>
                            <article class="why-card">
                                <span class="why-icon">
                                    <svg aria-hidden="true" viewBox="0 0 24 24"><path d="M4 7h16v10H4z" /><path d="M8 7v10M12 7v10M16 7v10" /><path d="M6 4h12" /><path d="M7 20h10" /></svg>
                                </span>
                                <h3>Expertise in container shipping and heavy equipment logistics</h3>
                            </article>
                            <article class="why-card">
                                <span class="why-icon">
                                    <svg aria-hidden="true" viewBox="0 0 24 24"><path d="M4 14l2-5h10l3 5" /><path d="M5 14h14v4H5z" /><path d="M7 18a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" /><path d="M17 18a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" /></svg>
                                </span>
                                <h3>Professional vehicle and auto transportation services</h3>
                            </article>
                            <article class="why-card">
                                <span class="why-icon">
                                    <svg aria-hidden="true" viewBox="0 0 24 24"><path d="M12 3l8 4v5c0 5-3.5 8-8 9-4.5-1-8-4-8-9V7z" /><path d="M8.5 12l2.2 2.2 4.8-5" /></svg>
                                </span>
                                <h3>Safe and timely cargo delivery</h3>
                            </article>
                            <article class="why-card">
                                <span class="why-icon">
                                    <svg aria-hidden="true" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9" /><path d="M3 12h18" /><path d="M12 3c2.4 2.6 3.6 5.6 3.6 9S14.4 18.4 12 21" /><path d="M12 3c-2.4 2.6-3.6 5.6-3.6 9S9.6 18.4 12 21" /></svg>
                                </span>
                                <h3>Cross-border and global shipping capabilities</h3>
                            </article>
                            <article class="why-card">
                                <span class="why-icon">
                                    <svg aria-hidden="true" viewBox="0 0 24 24"><path d="M7 3h8l4 4v14H7z" /><path d="M15 3v5h5" /><path d="M10 13h7" /><path d="M10 17h5" /></svg>
                                </span>
                                <h3>Professional customs and documentation support</h3>
                            </article>
                            <article class="why-card">
                                <span class="why-icon">
                                    <svg aria-hidden="true" viewBox="0 0 24 24"><path d="M4 7l8-4 8 4-8 4z" /><path d="M4 12l8 4 8-4" /><path d="M4 17l8 4 8-4" /></svg>
                                </span>
                                <h3>Efficient supply chain management</h3>
                            </article>
                            <article class="why-card">
                                <span class="why-icon">
                                    <svg aria-hidden="true" viewBox="0 0 24 24"><path d="M8 11a4 4 0 1 0 0-8 4 4 0 0 0 0 8z" /><path d="M16 21a4 4 0 1 0 0-8 4 4 0 0 0 0 8z" /><path d="M12 7h4a4 4 0 0 1 4 4v1" /><path d="M12 17H8a4 4 0 0 1-4-4v-1" /></svg>
                                </span>
                                <h3>Customer-focused logistics solutions</h3>
                            </article>
                            <article class="why-card">
                                <span class="why-icon">
                                    <svg aria-hidden="true" viewBox="0 0 24 24"><path d="M8 12l3 3 5-6" /><circle cx="12" cy="12" r="9" /><path d="M4.8 17.4L3 22l4.6-1.8" /><path d="M19.2 17.4L21 22l-4.6-1.8" /></svg>
                                </span>
                                <h3>Strong industry partnerships and operational expertise</h3>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="regions" class="section-pad region-section">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5 animate-on-scroll">
                        <span class="section-kicker">Global Reach</span>
                        <h2 class="section-title text-white">Logistics support across major trade routes.</h2>
                        <p>Lexon Dynamic Logistics operates across Nigeria, Canada, the United States of America, and international shipping routes worldwide.</p>
                    </div>
                    <div class="col-lg-7">
                        <div class="row g-3">
                            <div class="col-sm-6 animate-on-scroll">
                                <div class="region-card">
                                    <span class="region-icon">
                                        <svg aria-hidden="true" viewBox="0 0 24 24"><path d="M8 3l5 1 4 4-1 5 3 3-5 5-5-2-4 1-2-5 3-4-1-4z" /></svg>
                                    </span>
                                    <h3>Nigeria</h3>
                                    <p>Local freight, port coordination, warehousing support, and industrial logistics.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 animate-on-scroll">
                                <div class="region-card">
                                    <span class="region-icon">
                                        <svg aria-hidden="true" viewBox="0 0 24 24"><path d="M12 3l2 5 4-2-2 5 4 2-5 2 1 5-4-3-4 3 1-5-5-2 4-2-2-5 4 2z" /></svg>
                                    </span>
                                    <h3>Canada</h3>
                                    <p>Freight forwarding, vehicle logistics, and commercial shipping coordination.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 animate-on-scroll">
                                <div class="region-card">
                                    <span class="region-icon">
                                        <svg aria-hidden="true" viewBox="0 0 24 24"><path d="M4 5h16v12H4z" /><path d="M4 9h16M4 13h16" /><path d="M4 5h7v6H4z" /></svg>
                                    </span>
                                    <h3>United States</h3>
                                    <p>Container, auto, equipment, and cross-border logistics support.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 animate-on-scroll">
                                <div class="region-card">
                                    <span class="region-icon">
                                        <svg aria-hidden="true" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9" /><path d="M3 12h18" /><path d="M12 3c2.4 2.6 3.6 5.6 3.6 9S14.4 18.4 12 21" /><path d="M12 3c-2.4 2.6-3.6 5.6-3.6 9S9.6 18.4 12 21" /></svg>
                                    </span>
                                    <h3>Worldwide Routes</h3>
                                    <p>International shipping routes for containers, cargo, vehicles, and equipment.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-pad bg-white industry-section">
            <div class="container">
                <div class="row g-4 align-items-stretch">
                    <div class="col-lg-5 animate-on-scroll">
                        <span class="section-kicker text-green">Industries We Serve</span>
                        <h2 class="section-title">Built for demanding operational environments.</h2>
                    </div>
                    <div class="col-lg-7 animate-on-scroll">
                        <div class="industry-cloud">
                            <span><svg aria-hidden="true" viewBox="0 0 24 24"><path d="M8 3h8l2 5v9a4 4 0 0 1-4 4h-4a4 4 0 0 1-4-4V8z" /><path d="M9 8h6" /><path d="M10 13h4" /></svg>Oil & Gas</span>
                            <span><svg aria-hidden="true" viewBox="0 0 24 24"><path d="M4 20h16" /><path d="M6 20V9l6-5 6 5v11" /><path d="M9 20v-6h6v6" /></svg>Construction</span>
                            <span><svg aria-hidden="true" viewBox="0 0 24 24"><path d="M4 15l2-7h12l2 7" /><path d="M3 15h18" /><path d="M6 18c1.2 1 2.8 1 4 0 1.2 1 2.8 1 4 0 1.2 1 2.8 1 4 0" /></svg>Marine & Offshore</span>
                            <span><svg aria-hidden="true" viewBox="0 0 24 24"><path d="M4 14l2-5h10l3 5" /><path d="M5 14h14v4H5z" /><path d="M7 18a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" /><path d="M17 18a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" /></svg>Automotive</span>
                            <span><svg aria-hidden="true" viewBox="0 0 24 24"><path d="M4 20V9l5 4V9l5 4V7h6v13z" /><path d="M8 17h1" /><path d="M12 17h1" /><path d="M16 17h1" /></svg>Manufacturing</span>
                            <span><svg aria-hidden="true" viewBox="0 0 24 24"><path d="M13 2L5 14h6l-1 8 8-12h-6z" /></svg>Energy & Power</span>
                            <span><svg aria-hidden="true" viewBox="0 0 24 24"><path d="M12 20V10" /><path d="M8 14a5 5 0 0 1 8 0" /><path d="M5 11a9 9 0 0 1 14 0" /><path d="M10 20h4" /></svg>Telecommunications</span>
                            <span><svg aria-hidden="true" viewBox="0 0 24 24"><path d="M4 7h16v10H4z" /><path d="M8 7v10M16 7v10" /><path d="M8 4h8" /><path d="M7 20h10" /></svg>Import & Export</span>
                            <span><svg aria-hidden="true" viewBox="0 0 24 24"><path d="M4 7l8-4 8 4-8 4z" /><path d="M4 12l8 4 8-4" /><path d="M4 17l8 4 8-4" /></svg>Industrial Supply Chains</span>
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
