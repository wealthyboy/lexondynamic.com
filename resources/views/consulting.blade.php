<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Lexon Dynamic Consulting Limited provides procurement, strategic sourcing, EPC support, industrial products supply, project support, and consulting services for oil and gas, energy, marine, manufacturing, and construction clients.">

    <title>Lexon Dynamic Consulting Limited | Procurement, EPC & Industrial Consulting</title>

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
            <a class="navbar-brand d-flex align-items-center gap-2" href="{{ route('home') }}" aria-label="Lexon Dynamic Consulting Limited home">
                <img src="{{ asset('images/lexon-dynamic-logo-transparent.png') }}" alt="Lexon Dynamic Consulting Limited logo">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#primaryNavigation" aria-controls="primaryNavigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="primaryNavigation" class="collapse navbar-collapse">
                <ul class="navbar-nav mx-lg-auto align-items-lg-center gap-lg-2">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('logistics') }}">Logistics</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('consulting.about') }}">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('consulting.services') }}">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#industries">Industries</a></li>
                    <li class="nav-item"><a class="btn btn-lexon ms-lg-2" href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main id="consulting-home">
        <section id="consultingHero" class="carousel slide carousel-fade hero-slider" data-bs-ride="carousel" data-bs-interval="6500">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#consultingHero" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Oil and gas consulting"></button>
                <button type="button" data-bs-target="#consultingHero" data-bs-slide-to="1" aria-label="Procurement and sourcing"></button>
                <button type="button" data-bs-target="#consultingHero" data-bs-slide-to="2" aria-label="EPC support"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active hero-slide">
                    <img class="hero-bg" src="{{ asset('images/hero/oil-gas-consulting.png') }}" alt="Oil and gas refinery infrastructure">
                    <div class="container">
                        <div class="row min-vh-100 align-items-center">
                            <div class="col-lg-8 col-xl-7 hero-caption">
                                <span class="section-kicker">Consulting & Procurement</span>
                                <h1>Industrial consulting, procurement, and EPC support.</h1>
                                <p>Lexon Dynamic Consulting Limited delivers practical sourcing, procurement, project support, and industrial solutions for oil & gas, energy, marine, manufacturing, and construction clients.</p>
                                <div class="d-flex flex-wrap gap-3 mt-4">
                                    <a class="btn btn-lexon btn-lg" href="{{ route('consulting.services') }}">Explore Consulting</a>
                                    <a class="btn btn-outline-light btn-lg" href="{{ route('contact') }}">Request Support</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item hero-slide">
                    <img class="hero-bg" src="{{ asset('images/hero/oil-drilling-field.png') }}" alt="Oil drilling field, pipelines, and industrial workers">
                    <div class="container">
                        <div class="row min-vh-100 align-items-center">
                            <div class="col-lg-8 col-xl-7 hero-caption">
                                <span class="section-kicker">Strategic Sourcing</span>
                                <h2>Global procurement support for technical and industrial needs.</h2>
                                <p>We source equipment, materials, spare parts, industrial consumables, safety products, electrical, mechanical, marine, and oil & gas components through reliable supplier networks.</p>
                                <div class="d-flex flex-wrap gap-3 mt-4">
                                    <a class="btn btn-lexon btn-lg" href="{{ route('consulting.services') }}">Procurement</a>
                                    <a class="btn btn-outline-light btn-lg" href="{{ route('consulting.services') }}">Products Supplied</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item hero-slide">
                    <img class="hero-bg" src="{{ asset('images/hero/technical-partnerships-oil-gas.png') }}" alt="Oil and gas technical partners reviewing project plans">
                    <div class="container">
                        <div class="row min-vh-100 align-items-center">
                            <div class="col-lg-8 col-xl-7 hero-caption">
                                <span class="section-kicker">EPC Support</span>
                                <h2>Project support built around quality, safety, and execution.</h2>
                                <p>From technical procurement management to equipment supply, vendor coordination, installation support, and industrial project logistics, we support demanding operational environments.</p>
                                <div class="d-flex flex-wrap gap-3 mt-4">
                                    <a class="btn btn-lexon btn-lg" href="{{ route('consulting.services') }}">EPC Capabilities</a>
                                    <a class="btn btn-outline-light btn-lg" href="{{ route('logistics') }}">Logistics Entity</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#consultingHero" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#consultingHero" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </section>

        <section id="about" class="section-pad bg-white about-section">
            <img class="about-bg-image" src="{{ asset('images/hero/oil-gas-consulting.png') }}" alt="" aria-hidden="true">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 animate-on-scroll animate-from-left">
                        <span class="section-kicker text-green">About Lexon Dynamic Consulting Limited</span>
                        <h2 class="section-title">Indigenous consulting, procurement, logistics, and EPC solutions.</h2>
                        <p class="lead-copy">Lexon Dynamic Consulting Limited is an indigenous consulting, logistics, and Engineering Procurement & Construction (EPC) company committed to delivering innovative and reliable solutions to the oil & gas, energy, marine, manufacturing, and construction industry.</p>
                        <p>The company specializes in strategic sourcing, procurement, international trade, logistics coordination, and project support services tailored to meet the operational demands of both local and international clients. With a strong understanding of global supply chains and industrial requirements, Lexon Dynamic Consulting Limited provides end-to-end procurement and logistics solutions that ensure timely delivery, operational efficiency, and cost optimization.</p>
                        <p>Leveraging technical expertise and strategic partnerships with Original Equipment Manufacturers (OEMs), the company continues to strengthen its capacity in delivering quality products and services across Nigeria, Canada, the United States, and other international markets.</p>
                        <div class="about-actions">
                            <a class="btn btn-lexon btn-lg" href="{{ route('consulting.services') }}">View Services</a>
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
                                <p>To become a leading indigenous procurement, EPC, and logistics solutions provider in Africa’s oil & gas and industrial sectors through innovation, integrity, and operational excellence.</p>
                            </article>
                            <article>
                                <div class="mission-heading">
                                    <span class="mission-icon">
                                        <svg aria-hidden="true" viewBox="0 0 24 24"><path d="M12 3l8 4v5c0 5-3.5 8-8 9-4.5-1-8-4-8-9V7z" /><path d="M8.5 12l2.2 2.2 4.8-5" /></svg>
                                    </span>
                                    <span>Mission</span>
                                </div>
                                <p>To deliver world-class procurement, consulting, logistics, and EPC services that create value for clients through quality, reliability, safety, and timely project execution.</p>
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
                        <h2 class="section-title">Consulting services for industrial procurement and project execution.</h2>
                        <p class="section-note">Procurement, EPC support, international trade, industrial supply, technical partnerships, and project coordination.</p>
                    </div>
                    <a class="btn btn-lexon service-view-all" href="{{ route('consulting.services') }}">View All</a>
                </div>

                <div id="consultingServicesCarousel" class="carousel slide service-carousel animate-on-scroll" data-bs-ride="false">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row g-4">
                                <div id="procurement" class="col-md-6 col-xl-4">
                                    <article class="service-card h-100">
                                        <img class="service-image" src="{{ asset('images/hero/oil-gas-consulting.png') }}" alt="Oil and gas procurement support">
                                        <h3>Procurement & Strategic Sourcing</h3>
                                        <p>Specialized sourcing for oil & gas, marine, manufacturing, telecommunications, construction, and industrial operations.</p>
                                        <ul>
                                            <li>Oil & gas equipment and accessories</li>
                                            <li>Industrial machinery and spare parts</li>
                                            <li>OEM sourcing and supplier coordination</li>
                                        </ul>
                                        <a class="service-learn-more" href="{{ route('consulting.services') }}">Learn More</a>
                                    </article>
                                </div>
                                <div id="epc" class="col-md-6 col-xl-4">
                                    <article class="service-card h-100">
                                        <img class="service-image" src="{{ asset('images/hero/oil-drilling-field.png') }}" alt="Oil drilling field, pipelines, and EPC project workers">
                                        <h3>EPC Services</h3>
                                        <p>Engineering, Procurement & Construction support services for energy, industrial, and technical projects.</p>
                                        <ul>
                                            <li>Project planning and execution support</li>
                                            <li>Technical procurement management</li>
                                            <li>Equipment supply and installation coordination</li>
                                        </ul>
                                        <a class="service-learn-more" href="{{ route('consulting.services') }}">Learn More</a>
                                    </article>
                                </div>
                                <div id="trade" class="col-md-6 col-xl-4">
                                    <article class="service-card h-100">
                                        <img class="service-image" src="{{ asset('images/hero/container-shipping.png') }}" alt="International trade and supplier coordination">
                                        <h3>International Trade Support</h3>
                                        <p>Practical support for import, export, sourcing, documentation, supplier coordination, and cross-border industrial supply.</p>
                                        <ul>
                                            <li>Import and export coordination</li>
                                            <li>Supplier and vendor communication</li>
                                            <li>Documentation and shipment support</li>
                                        </ul>
                                        <a class="service-learn-more" href="{{ route('consulting.services') }}">Learn More</a>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row g-4">
                                <div id="products" class="col-md-6 col-xl-4">
                                    <article class="service-card h-100">
                                        <img class="service-image" src="{{ asset('images/hero/supply-chain-warehouse.png') }}" alt="Industrial product supply">
                                        <h3>Industrial Products Supply</h3>
                                        <p>Supply of technical products and industrial materials for oil & gas, marine, manufacturing, construction, and communication projects.</p>
                                        <ul>
                                            <li>Valves, pumps, pipes, and fittings</li>
                                            <li>Power generation and energy equipment</li>
                                            <li>Safety and PPE materials</li>
                                        </ul>
                                        <a class="service-learn-more" href="{{ route('consulting.services') }}">Learn More</a>
                                    </article>
                                </div>
                                <div class="col-md-6 col-xl-4">
                                    <article class="service-card h-100">
                                        <img class="service-image" src="{{ asset('images/hero/bonus-img3.jpg') }}" alt="Marine equipment supply">
                                        <h3>Marine & Offshore Supply</h3>
                                        <p>Marine engines, spare parts, deck machinery, navigation systems, offshore tools, and marine safety equipment.</p>
                                        <ul>
                                            <li>Marine equipment and supplies</li>
                                            <li>Offshore tools and accessories</li>
                                            <li>Marine safety equipment</li>
                                        </ul>
                                        <a class="service-learn-more" href="{{ route('consulting.services') }}">Learn More</a>
                                    </article>
                                </div>
                                <div class="col-md-6 col-xl-4">
                                    <article class="service-card h-100">
                                        <img class="service-image" src="{{ asset('images/hero/technical-partnerships-oil-gas.png') }}" alt="Oil and gas technical partners reviewing project plans">
                                        <h3>Technical Partnerships</h3>
                                        <p>Vendor management, OEM partnerships, technical collaborations, and operational support for complex industrial requirements.</p>
                                        <ul>
                                            <li>OEM and manufacturing partnerships</li>
                                            <li>Vendor management support</li>
                                            <li>Operational growth support</li>
                                        </ul>
                                        <a class="service-learn-more" href="{{ route('consulting.services') }}">Learn More</a>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="service-carousel-indicators">
                        <button type="button" data-bs-target="#consultingServicesCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Consulting services 1 to 3"></button>
                        <button type="button" data-bs-target="#consultingServicesCarousel" data-bs-slide-to="1" aria-label="Consulting services 4 to 6"></button>
                    </div>

                    <button class="service-carousel-control service-carousel-prev" type="button" data-bs-target="#consultingServicesCarousel" data-bs-slide="prev" aria-label="Previous consulting services">
                        <svg aria-hidden="true" viewBox="0 0 24 24">
                            <path d="M15 18L9 12L15 6" />
                        </svg>
                    </button>
                    <button class="service-carousel-control service-carousel-next" type="button" data-bs-target="#consultingServicesCarousel" data-bs-slide="next" aria-label="Next consulting services">
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
                        <h2 class="section-title">Why Choose Lexon</h2>
                        <p class="section-note">A client-focused indigenous company with international reach, strong procurement experience, and practical industry partnerships.</p>
                    </div>
                    <div class="col-lg-8 animate-on-scroll animate-from-right">
                        <div class="why-list">
                            @foreach ([
                                ['Indigenous company with international reach', 'M3 12h18M12 3c2.4 2.6 3.6 5.6 3.6 9S14.4 18.4 12 21M12 3c-2.4 2.6-3.6 5.6-3.6 9S9.6 18.4 12 21'],
                                ['Strong procurement and supply chain expertise', 'M4 7l8-4 8 4-8 4zM4 12l8 4 8-4M4 17l8 4 8-4'],
                                ['Reliable global sourcing network', 'M5 12h14M12 5v14M7 7l10 10M17 7L7 17'],
                                ['Strategic OEM partnerships', 'M8 12l3 3 5-6M4.8 17.4L3 22l4.6-1.8M19.2 17.4L21 22l-4.6-1.8'],
                                ['Commitment to quality, safety, and timely delivery', 'M12 3l8 4v5c0 5-3.5 8-8 9-4.5-1-8-4-8-9V7zM8.5 12l2.2 2.2 4.8-5'],
                                ['Experience across oil & gas, marine, construction, and manufacturing', 'M4 20V9l5 4V9l5 4V7h6v13zM8 17h1M12 17h1M16 17h1'],
                                ['Client-focused and cost-effective solutions', 'M8 11a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM16 21a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM12 7h4a4 4 0 0 1 4 4v1M12 17H8a4 4 0 0 1-4-4v-1'],
                                ['Technical consulting and project support', 'M6 7h12v14H6zM9 7a3 3 0 0 1 6 0M9 12h6M9 16h4'],
                                ['Operational expertise across international markets', 'M3 7h11v8H3zM14 10h4l3 3v2h-7zM7 18a2 2 0 1 0 0-4 2 2 0 0 0 0 4zM18 18a2 2 0 1 0 0-4 2 2 0 0 0 0 4z'],
                            ] as [$title, $path])
                                <article class="why-card">
                                    <span class="why-icon">
                                        <svg aria-hidden="true" viewBox="0 0 24 24"><path d="{{ $path }}" /></svg>
                                    </span>
                                    <h3>{{ $title }}</h3>
                                </article>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="industries" class="section-pad bg-white industry-section">
            <div class="container">
                <div class="row g-4 align-items-stretch">
                    <div class="col-lg-5 animate-on-scroll">
                        <span class="section-kicker text-green">Industries We Serve</span>
                        <h2 class="section-title">Built for industrial and technical procurement environments.</h2>
                    </div>
                    <div class="col-lg-7 animate-on-scroll">
                        <div class="industry-cloud">
                            <span><svg aria-hidden="true" viewBox="0 0 24 24"><path d="M8 3h8l2 5v9a4 4 0 0 1-4 4h-4a4 4 0 0 1-4-4V8zM9 8h6M10 13h4" /></svg>Oil & Gas</span>
                            <span><svg aria-hidden="true" viewBox="0 0 24 24"><path d="M13 2L5 14h6l-1 8 8-12h-6z" /></svg>Energy</span>
                            <span><svg aria-hidden="true" viewBox="0 0 24 24"><path d="M4 15l2-7h12l2 7M3 15h18M6 18c1.2 1 2.8 1 4 0 1.2 1 2.8 1 4 0 1.2 1 2.8 1 4 0" /></svg>Marine</span>
                            <span><svg aria-hidden="true" viewBox="0 0 24 24"><path d="M4 20V9l5 4V9l5 4V7h6v13zM8 17h1M12 17h1M16 17h1" /></svg>Manufacturing</span>
                            <span><svg aria-hidden="true" viewBox="0 0 24 24"><path d="M4 20h16M6 20V9l6-5 6 5v11M9 20v-6h6v6" /></svg>Construction</span>
                            <span><svg aria-hidden="true" viewBox="0 0 24 24"><path d="M12 20V10M8 14a5 5 0 0 1 8 0M5 11a9 9 0 0 1 14 0M10 20h4" /></svg>Telecommunications</span>
                            <span><svg aria-hidden="true" viewBox="0 0 24 24"><path d="M4 7h16v10H4zM8 7v10M16 7v10M8 4h8M7 20h10" /></svg>Import & Export</span>
                            <span><svg aria-hidden="true" viewBox="0 0 24 24"><path d="M4 7l8-4 8 4-8 4zM4 12l8 4 8-4M4 17l8 4 8-4" /></svg>Industrial Supply Chains</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" class="contact-band">
            <div class="container">
                <div class="contact-panel animate-on-scroll">
                    <div>
                        <span class="section-kicker text-green">Start a Project</span>
                        <h2>Need procurement, EPC, or consulting support?</h2>
                        <p>Talk to Lexon Dynamic Consulting Limited about industrial sourcing, technical partnerships, project support, and operational procurement needs.</p>
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
                    <a class="footer-brand d-inline-flex align-items-center mb-3" href="{{ route('home') }}" aria-label="Lexon Dynamic Consulting Limited home">
                        <img src="{{ asset('images/lexon-dynamic-logo-transparent.png') }}" alt="Lexon Dynamic Consulting Limited logo">
                    </a>
                    <p>Consulting, procurement, EPC support, logistics, and supply chain solutions for industrial clients.</p>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <h3>Company</h3>
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('consulting') }}">Consulting</a></li>
                        <li><a href="{{ route('logistics') }}">Logistics</a></li>
                        <li><a href="{{ route('consulting.about') }}">About Us</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <h3>Consulting</h3>
                    <ul>
                        <li>Procurement & sourcing</li>
                        <li>EPC support</li>
                        <li>Industrial products supply</li>
                        <li>OEM partnerships</li>
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
