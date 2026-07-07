<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('partials.seo', [
        'title' => 'About Lexon Dynamic Consulting Limited | Indigenous Oil & Gas Support Company',
        'description' => 'Learn about Lexon Dynamic Consulting Limited, an indigenous Nigerian consulting, procurement, logistics, and EPC support company serving oil and gas, energy, marine, manufacturing, and construction clients.',
        'image' => asset('images/hero/about-oil-gas-worker.png'),
        'organizationName' => 'Lexon Dynamic Consulting Limited',
        'pageType' => 'AboutPage',
        'breadcrumbs' => [
            ['name' => 'Home', 'url' => route('home')],
            ['name' => 'Consulting', 'url' => route('consulting')],
            ['name' => 'About Us', 'url' => route('consulting.about')],
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
                    <li class="nav-item"><a class="nav-link active" href="{{ route('consulting.about') }}">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('consulting.services') }}">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('consulting') }}#industries">Industries</a></li>
                    <li class="nav-item"><a class="btn btn-lexon ms-lg-2" href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <section class="inner-hero consulting-inner-hero">
            <img class="inner-hero-bg" src="{{ asset('images/hero/about-oil-gas-worker.png') }}" alt="Oil and gas technical operations">
            <div class="container">
                <span class="section-kicker">About Lexon Dynamic Consulting Limited</span>
                <h1>Indigenous consulting, procurement, logistics, and EPC support.</h1>
                <p>We help industrial clients source, plan, procure, coordinate, and execute with the discipline required for oil & gas, energy, marine, manufacturing, and construction operations.</p>
                <div class="d-flex flex-wrap gap-3 mt-4">
                    <a class="btn btn-lexon btn-lg" href="{{ route('contact') }}">Contact Us</a>
                    <a class="btn btn-outline-light btn-lg" href="{{ route('consulting.services') }}">View Services</a>
                </div>
            </div>
        </section>

        <section class="section-pad consulting-about-story">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 animate-on-scroll animate-from-left">
                        <span class="section-kicker text-green">Who We Are</span>
                        <h2 class="section-title">A technical partner for demanding industrial requirements.</h2>
                        <p class="lead-copy">Lexon Dynamic Consulting Limited is an indigenous consulting, logistics, and Engineering Procurement & Construction (EPC) company committed to delivering innovative and reliable solutions to the oil & gas, energy, marine, manufacturing, and construction industry.</p>
                        <p>The company specializes in strategic sourcing, procurement, international trade, logistics coordination, and project support services tailored to meet the operational demands of both local and international clients. With a strong understanding of global supply chains and industrial requirements, Lexon Dynamic Consulting Limited provides end-to-end procurement and logistics solutions that ensure timely delivery, operational efficiency, and cost optimization.</p>
                        <p>Leveraging technical expertise and strategic partnerships with Original Equipment Manufacturers (OEMs), the company continues to strengthen its capacity in delivering quality products and services across Nigeria, Canada, the United States, and other international markets.</p>
                    </div>
                    <div class="col-lg-6 animate-on-scroll animate-from-right">
                        <div class="rounded-image-stack">
                            <img src="{{ asset('images/hero/oil-gas-consulting.png') }}" alt="Oil and gas refinery infrastructure">
                            <img src="{{ asset('images/hero/about-oil-gas-worker.png') }}" alt="Oil and gas field support">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-pad bg-white consulting-statement-section">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-6 animate-on-scroll animate-from-left">
                        <article class="statement-card">
                            <div class="statement-icon">
                                <svg aria-hidden="true" viewBox="0 0 24 24"><path d="M2 12s3.5-6 10-6 10 6 10 6-3.5 6-10 6S2 12 2 12z" /><circle cx="12" cy="12" r="3" /></svg>
                            </div>
                            <span class="section-kicker text-green">Our Vision</span>
                            <h2>Leading indigenous procurement, EPC, and logistics solutions.</h2>
                            <p>To become a leading indigenous procurement, EPC, and logistics solutions provider in Africa’s oil & gas and industrial sectors through innovation, integrity, and operational excellence.</p>
                        </article>
                    </div>
                    <div class="col-lg-6 animate-on-scroll animate-from-right">
                        <article class="statement-card statement-card-green">
                            <div class="statement-icon">
                                <svg aria-hidden="true" viewBox="0 0 24 24"><path d="M12 3l8 4v5c0 5-3.5 8-8 9-4.5-1-8-4-8-9V7z" /><path d="M8.5 12l2.2 2.2 4.8-5" /></svg>
                            </div>
                            <span class="section-kicker">Our Mission</span>
                            <h2>World-class service built on value, safety, and reliability.</h2>
                            <p>To deliver world-class procurement, consulting, logistics, and EPC services that create value for clients by ensuring quality, reliability, safety, and timely project execution.</p>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-pad profile-download-section">
            <div class="container">
                <div class="profile-download-panel animate-on-scroll">
                    <div>
                        <span class="section-kicker text-green">Company Profile</span>
                        <h2>Request our company profile directly from the team.</h2>
                        <p>Contact Lexon Dynamic Consulting Limited to receive the latest company profile, service details, and technical support information.</p>
                    </div>
                    <a class="btn btn-lexon btn-lg" href="{{ route('contact') }}">
                        Contact Us
                    </a>
                </div>
            </div>
        </section>

        <section class="section-pad bg-white">
            <div class="container">
                <div class="row g-4 align-items-end mb-5">
                    <div class="col-lg-7 animate-on-scroll">
                        <span class="section-kicker text-green">Industry Expertise</span>
                        <h2 class="section-title">Built for technical supply, sourcing, and project support.</h2>
                    </div>
                    <div class="col-lg-5 animate-on-scroll">
                        <p class="section-note">Our experience spans industrial sourcing, supply chain optimization, technical consulting, project logistics, and OEM-backed procurement operations.</p>
                    </div>
                </div>
                <div class="row g-4">
                    @foreach ([
                        ['Oil & Gas', 'Pipes, fittings, valves, pumps, drilling equipment, offshore accessories, and technical project support.'],
                        ['Marine & Offshore', 'Marine engines, navigation systems, deck machinery, safety equipment, and spare parts support.'],
                        ['Construction & Manufacturing', 'Heavy-duty equipment, structural materials, industrial machinery, automation, tools, and consumables.'],
                    ] as [$title, $copy])
                        <div class="col-md-4 animate-on-scroll">
                            <article class="value-card">
                                <span class="value-icon">
                                    <svg aria-hidden="true" viewBox="0 0 24 24"><path d="M4 7l8-4 8 4-8 4z" /><path d="M4 12l8 4 8-4" /><path d="M4 17l8 4 8-4" /></svg>
                                </span>
                                <h3>{{ $title }}</h3>
                                <p>{{ $copy }}</p>
                            </article>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section id="contact" class="contact-band">
            <div class="container">
                <div class="contact-panel animate-on-scroll">
                    <div>
                        <span class="section-kicker text-green">Work With Us</span>
                        <h2>Need consulting, procurement, or EPC support?</h2>
                        <p>Talk to Lexon Dynamic Consulting Limited about your technical sourcing, project support, logistics, or industrial procurement requirements.</p>
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
                    <p>Consulting, procurement, EPC support, logistics, and supply chain solutions for industrial clients.</p>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <h3>Company</h3>
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('consulting') }}">Consulting</a></li>
                        <li><a href="{{ route('logistics') }}">Logistics</a></li>
                        <li><a href="{{ route('consulting.about') }}">About Us</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <h3>Consulting</h3>
                    <ul>
                        <li><a href="{{ route('consulting.services') }}">Services</a></li>
                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h3>Contact</h3>
                    <a class="footer-contact" href="mailto:info@lexondynamic.com"><svg aria-hidden="true" viewBox="0 0 24 24"><path d="M4 6h16v12H4z" /><path d="M4 8l8 6 8-6" /></svg>info@lexondynamic.com</a>
                    <a class="footer-contact footer-phone" href="tel:+2349028384220"><svg aria-hidden="true" viewBox="0 0 24 24"><path d="M6 4h4l2 5-3 2a12 12 0 0 0 4 4l2-3 5 2v4a2 2 0 0 1-2 2A16 16 0 0 1 4 6a2 2 0 0 1 2-2z" /></svg>+234 902 838 4220</a>
                    <a class="footer-contact footer-phone" href="tel:+19052264683"><svg aria-hidden="true" viewBox="0 0 24 24"><path d="M6 4h4l2 5-3 2a12 12 0 0 0 4 4l2-3 5 2v4a2 2 0 0 1-2 2A16 16 0 0 1 4 6a2 2 0 0 1 2-2z" /></svg>+1 (905) 226-4683</a>
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
