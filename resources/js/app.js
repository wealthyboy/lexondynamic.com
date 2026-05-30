import './bootstrap';
import $ from 'jquery';

$(function () {
    const $window = $(window);
    const $nav = $('.lexon-nav');
    const mobileNav = document.querySelector('.navbar-collapse');

    const updateNav = () => {
        $nav.toggleClass('nav-scrolled', $window.scrollTop() > 24);
    };

    updateNav();
    $window.on('scroll', updateNav);

    $('.navbar-nav a[href^="#"], .dropdown-item[href^="#"]').on('click', function () {
        if (mobileNav && window.bootstrap) {
            window.bootstrap.Collapse.getOrCreateInstance(mobileNav, { toggle: false }).hide();
        }
    });

    const heroCarousel = document.getElementById('lexonHero');
    const showActiveHeroCaption = () => {
        const activeCaption = heroCarousel?.querySelector('.carousel-item.active .hero-caption');

        if (activeCaption) {
            activeCaption.classList.add('caption-in');
        }
    };

    if (heroCarousel) {
        heroCarousel.querySelectorAll('.hero-caption').forEach((caption) => {
            caption.classList.remove('caption-in');
        });

        window.setTimeout(showActiveHeroCaption, 450);

        heroCarousel.addEventListener('slide.bs.carousel', () => {
            heroCarousel.querySelectorAll('.hero-caption').forEach((caption) => {
                caption.classList.remove('caption-in');
            });
        });

        heroCarousel.addEventListener('slid.bs.carousel', () => {
            window.setTimeout(showActiveHeroCaption, 80);
        });
    }

    const serviceStories = document.querySelectorAll('[data-service-story]');
    const serviceTimelineLinks = document.querySelectorAll('[data-service-timeline-link]');

    if (serviceStories.length && serviceTimelineLinks.length && 'IntersectionObserver' in window) {
        const serviceObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) {
                    return;
                }

                const activeService = entry.target.getAttribute('data-service-story');

                serviceTimelineLinks.forEach((link) => {
                    link.classList.toggle('is-active', link.getAttribute('data-service-timeline-link') === activeService);
                });
            });
        }, {
            threshold: 0.42,
            rootMargin: '-18% 0px -46% 0px',
        });

        serviceStories.forEach((story) => serviceObserver.observe(story));
    }

    const animatedElements = document.querySelectorAll('.animate-on-scroll');

    if (!('IntersectionObserver' in window)) {
        animatedElements.forEach((element) => element.classList.add('is-visible'));
        return;
    }

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.12,
        rootMargin: '0px 0px -90px 0px',
    });

    animatedElements.forEach((element) => observer.observe(element));
});
