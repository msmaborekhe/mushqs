<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? config('app.name', 'Mush QS') }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">
    <style>
        :root {
            /* Brand colors: will be tuned to match the company profile */
            --brand-primary: #0A2E5C; /* placeholder deep blue */
            --brand-secondary: #F5A800; /* placeholder accent */
            --text: #1e1e1e;
            --muted: #6b7280;
            --bg: #ffffff;
            --section: #f7f8fb;
        }

        * {
            box-sizing: border-box
        }

        html, body {
            margin: 0;
            padding: 0
        }

        body {
            font-family: 'Poppins', system-ui, -apple-system, Segoe UI, Roboto, Ubuntu, Cantarell, Noto Sans, sans-serif;
            color: var(--text);
            background: var(--bg);
            line-height: 1.6;
            min-height: 100vh; /* ensure full viewport height */
            display: flex; /* enable sticky footer layout */
            flex-direction: column;
        }

        /* Page wrapper to push footer to the bottom on short pages */
        .page {
            flex: 1 0 auto;
            width: 100%;
        }

        a {
            color: var(--brand-primary);
            text-decoration: none
        }

        img {
            max-width: 100%;
            height: auto;
            display: block
        }

        .container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 0 20px
        }

        header.site-header {
            position: sticky;
            top: 0;
            background: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, .03);
            z-index: 50
        }

        .nav {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 14px 0
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px
        }

        .brand img {
            height: 44px;
            width: auto
        }

        .brand .name {
            font-weight: 700;
            color: var(--brand-primary)
        }

        .menu {
            display: flex;
            gap: 20px
        }

        .menu a {
            padding: 8px 10px;
            border-radius: 6px;
            color: #0f172a
        }

        .menu a:hover {
            background: rgba(10, 46, 92, .06)
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: var(--brand-primary);
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 10px 16px;
            font-weight: 600;
            cursor: pointer;
            transition: transform .15s ease, box-shadow .15s ease, background-color .2s ease, color .2s ease
        }

        .btn:hover,
        .btn:focus-visible {
            transform: translateY(-1px);
            box-shadow: 0 6px 18px rgba(10, 46, 92, .18)
        }

        .btn-outline {
            background: transparent;
            color: var(--brand-primary);
            border: 2px solid var(--brand-primary)
        }

        .hero {
            background: linear-gradient(135deg, rgba(10, 46, 92, .07), rgba(245, 168, 0, .05));
            padding: 56px 0
        }

        /* Home hero slider variant */
        .hero.hero-slider {
            padding: 0;
            background: #0b2447;
            color: #fff;
        }

        .hero-slider .slider {
            position: relative;
            height: min(72vh, 640px);
            min-height: 420px;
            overflow: hidden;
        }

        .hero-slider .slide {
            position: absolute;
            inset: 0;
            opacity: 0;
            transition: opacity .7s ease;
        }

        .hero-slider .slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(0.6);
        }

        .hero-slider .slide.active {
            opacity: 1;
        }

        .hero-slider .overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, rgba(0, 0, 0, .35), rgba(0, 0, 0, .45));
            pointer-events: none;
        }

        .hero-slider .content {
            position: absolute;
            inset: 0;
            display: grid;
            place-items: center;
        }

        .hero-slider .content .container {
            color: #fff;
        }

        .hero-slider .content h1 {
            color: #fff;
            font-size: clamp(30px, 5vw, 48px);
            line-height: 1.15;
            margin: 0 0 10px;
        }

        .hero-slider .content p {
            color: rgba(255, 255, 255, .9);
            font-size: clamp(14px, 2.2vw, 18px);
            margin: 0 0 18px;
        }

        .hero-slider .badges .badge {
            background: rgba(255, 255, 255, .1);
            border-color: rgba(255, 255, 255, .25);
            color: #fff;
        }

        .hero-slider .controls {
            position: absolute;
            bottom: 18px;
            right: 22px;
            display: flex;
            gap: 8px;
        }

        .hero-slider .dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: rgba(255, 255, 255, .5);
            border: 1px solid rgba(255, 255, 255, .6);
            cursor: pointer;
        }

        .hero-slider .dot.active {
            background: var(--brand-secondary);
            border-color: var(--brand-secondary);
        }

        /* Outline button variants for dark hero backgrounds */
        .hero-slider .btn.btn-outline-light {
            color: #fff;
            border: 2px solid #fff;
            background: rgba(255, 255, 255, .14);
        }

        .hero-slider .btn.btn-outline-light:hover,
        .hero-slider .btn.btn-outline-light:focus-visible {
            color: #0b2447;
            background: #fff;
            border-color: #fff;
            box-shadow: 0 8px 22px rgba(0, 0, 0, .25);
        }

        .hero-slider .btn.btn-outline-light:focus-visible {
            outline: 2px solid #fff;
            outline-offset: 2px;
        }

        /* Brand-colored outline variant (keeps original brand color while using outline style) */
        .hero-slider .btn.btn-outline-primary {
            color: #fff;
            border: 2px solid rgba(255, 255, 255, .92);
            background: rgba(10, 46, 92, .55);
            text-shadow: 0 1px 2px rgba(0, 0, 0, .35);
        }

        .hero-slider .btn.btn-outline-primary:hover,
        .hero-slider .btn.btn-outline-primary:focus-visible {
            color: #fff;
            background: var(--brand-primary);
            border-color: var(--brand-primary);
            box-shadow: 0 8px 22px rgba(0, 0, 0, .28);
        }

        .hero-slider .btn.btn-outline-primary:focus-visible {
            outline: 2px solid #fff;
            outline-offset: 2px;
        }

        .hero-wrap {
            display: grid;
            grid-template-columns:1.1fr .9fr;
            gap: 32px;
            align-items: center
        }

        .hero h1 {
            font-size: 40px;
            line-height: 1.2;
            margin: 0 0 10px;
            color: #0b2447
        }

        .hero p {
            font-size: 16px;
            color: var(--muted);
            margin: 0 0 18px
        }

        .badges {
            display: flex;
            gap: 14px;
            flex-wrap: wrap;
            margin-top: 12px
        }

        .badge {
            background: #fff;
            border: 1px solid #e5e7eb;
            border-radius: 999px;
            padding: 6px 12px;
            font-size: 12px;
            color: #334155
        }

        section {
            padding: 56px 0
        }

        .section-title {
            font-size: 28px;
            margin: 0 0 8px
        }

        .section-sub {
            color: var(--muted);
            margin: 0 0 24px
        }

        .grid-3 {
            display: grid;
            grid-template-columns:repeat(3, 1fr);
            gap: 20px
        }

        /* Services grid tiles */
        .service-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 28px;
        }

        .service-tile {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            height: 260px;
            background: #111;
            display: block;
        }

        .service-tile img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: grayscale(100%);
            opacity: .85;
            transform: scale(1.02);
            transition: transform .4s ease, opacity .3s ease, filter .3s ease;
        }

        .service-tile .label {
            position: absolute;
            left: 24px;
            right: 24px;
            bottom: 18px;
            color: #fff;
            font-weight: 700;
            letter-spacing: .6px;
            text-transform: uppercase;
            text-shadow: 0 2px 14px rgba(0, 0, 0, .45);
            font-size: 18px;
            line-height: 1.25;
            white-space: normal;
            overflow-wrap: break-word;
            hyphens: auto;
        }

        .service-tile:hover img,
        .service-tile:focus-visible img {
            transform: scale(1.08);
            opacity: 1;
            filter: grayscale(0%);
        }

        .service-cta {
            margin-top: 28px;
            text-align: center;
        }

        .card {
            background: #fff;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            padding: 18px
        }

        /* Modern minimalist helpers (non-intrusive) */
        .stack > * + * {
            margin-top: 12px;
        }

        .divider {
            height: 1px;
            background: #e5e7eb;
            margin: 20px 0;
        }

        .list-plain {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .list-plain li {
            padding-left: 0;
        }

        .pill {
            display: inline-block;
            padding: 6px 12px;
            border-radius: 999px;
            background: rgba(10, 46, 92, .08);
            color: #0b2447;
            font-size: 12px;
            font-weight: 600;
        }

        .feature {
            padding: 0;
            border: none;
            background: transparent;
        }

        .feature h3 {
            margin: 0 0 6px;
            font-size: 16px;
        }

        .feature p {
            margin: 0;
            color: var(--muted);
            font-size: 14px;
        }

        /* Light background utilities for alternating home sections */
        .bg-white {
            background: #ffffff;
        }

        .bg-tint-primary {
            background: rgba(10, 46, 92, 0.035);
        }

        .bg-tint-secondary {
            background: rgba(245, 168, 0, 0.06);
        }

        /* Scoped modern look for About page */
        .about-modern .card {
            background: transparent;
            border: 0;
            box-shadow: none;
            padding: 0;
        }

        .about-modern .card h3 {
            font-size: 16px;
            margin: 0 0 6px;
        }

        .about-modern .card p {
            margin: 0 0 10px;
            color: var(--muted);
        }

        .about-modern .grid-3 {
            gap: 16px;
        }

        .about-modern .media {
            display: flex;
            gap: 16px;
            align-items: center;
        }

        .card h3 {
            margin: 8px 0 6px;
            font-size: 18px
        }

        .values {
            display: grid;
            grid-template-columns:1fr 1fr;
            gap: 24px
        }

        .contact {
            display: grid;
            grid-template-columns:1.1fr .9fr;
            gap: 24px
        }

        .contact .panel {
            background: #fff;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            padding: 18px
        }

        footer {
            background: #0b2447;
            color: #cbd5e1;
            padding: 26px 0;
            margin-top: 40px
        }

        footer a {
            color: #e2e8f0
        }

        /* Mobile nav */
        .mobile-toggle {
            display: none;
            background: transparent;
            border: 0;
            padding: 8px;
            border-radius: 6px;
        }

        .mobile-toggle:focus-visible {
            outline: 2px solid var(--brand-primary);
            outline-offset: 2px;
        }

        .mobile-menu {
            display: none;
            background: #fff;
            border-top: 1px solid #e5e7eb;
            box-shadow: 0 6px 18px rgba(0, 0, 0, .06);
        }

        .mobile-menu a {
            display: block;
            padding: 12px 20px;
            color: #0f172a;
        }

        .mobile-menu a + a {
            border-top: 1px solid #f1f5f9;
        }

        .mobile-menu.open {
            display: block;
        }

        @media (max-width: 900px) {
            .hero-wrap, .values, .grid-3, .contact {
                grid-template-columns:1fr
            }
            .service-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 20px;
            }
            .service-tile {
                height: 220px;
            }
            .service-tile .label {
                font-size: 16px;
            }

            .menu {
                display: none
            }

            .quote-btn {
                display: none
            }

            .mobile-toggle {
                display: inline-flex
            }
        }
        @media (max-width: 600px) {
            .service-grid {
                grid-template-columns: 1fr;
                gap: 16px;
            }
            .service-tile {
                height: 200px;
            }
            .service-tile .label {
                font-size: 15px;
                letter-spacing: .3px;
                text-transform: none;
                bottom: 14px;
                left: 16px;
                right: 16px;
            }
        }
    </style>
</head>
<body>
<header class="site-header" id="siteHeader">
    <div class="container nav">
        <a class="brand" href="/" aria-label="Mush QS Home">
            <img src="{{ url('/images/Mush QS Logo 1.png') }}" alt="Mush QS logo"
                 onerror="this.src='{{ url('/images/Mush QS Logo 2.png') }}'">
        </a>
        <nav class="menu" aria-label="Primary">
            <a href="/">Home</a>
            <a href="/about">About</a>
            <a href="/services">Services</a>
            <a href="/projects">Projects</a>
            <a href="/contact">Contact</a>
        </nav>
        <a class="btn quote-btn" href="/contact">Get in Touch</a>
        <button class="mobile-toggle" id="mobileToggle" aria-controls="mobileMenu" aria-expanded="false"
                aria-label="Open menu">
            <svg width="24" height="24" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                <path d="M3 6h18M3 12h18M3 18h18" stroke="#0b2447" stroke-width="2" stroke-linecap="round"/>
            </svg>
        </button>
    </div>
    <div class="mobile-menu" id="mobileMenu" aria-label="Mobile">
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/services">Services</a>
        <a href="/projects">Projects</a>
        <a href="/contact">Contact</a>
    </div>
</header>

<div class="page">
{!! $slot ?? '' !!}
</div>

<footer>
    <div class="container"
         style="display:flex;justify-content:space-between;align-items:center;gap:16px;flex-wrap:wrap">
        <div style="display:flex;align-items:center;gap:10px">
            <img src="{{ url('/images/Mush QS Logo 2.png') }}" alt="Mush QS logo" style="height:28px"
                 onerror="this.style.display='none'">
            <span>© <span id="year"></span> Mush QS. All rights reserved.</span>
        </div>
        <div style="display:flex;gap:16px">
            <a href="/about">About</a>
            <a href="/services">Services</a>
            <a href="/projects">Projects</a>
            <a href="/contact">Contact</a>
        </div>
    </div>
</footer>
<script>
    // Footer year
    (function () {
        var y = document.getElementById('year');
        if (y) y.textContent = new Date().getFullYear();
    })();

    // Mobile menu toggle
    (function () {
        var toggle = document.getElementById('mobileToggle');
        var menu = document.getElementById('mobileMenu');
        if (!toggle || !menu) return;

        function closeMenu() {
            menu.classList.remove('open');
            toggle.setAttribute('aria-expanded', 'false');
            toggle.setAttribute('aria-label', 'Open menu');
        }

        function openMenu() {
            menu.classList.add('open');
            toggle.setAttribute('aria-expanded', 'true');
            toggle.setAttribute('aria-label', 'Close menu');
        }

        toggle.addEventListener('click', function () {
            if (menu.classList.contains('open')) closeMenu(); else openMenu();
        });
        // Close when clicking a link
        menu.querySelectorAll('a').forEach(function (a) {
            a.addEventListener('click', closeMenu);
        });
        // Close on outside click
        document.addEventListener('click', function (e) {
            if (!menu.contains(e.target) && !toggle.contains(e.target)) closeMenu();
        });
        // Reset on resize to desktop
        window.addEventListener('resize', function () {
            if (window.innerWidth > 900) closeMenu();
        });
    })();
</script>
</body>
</html>
