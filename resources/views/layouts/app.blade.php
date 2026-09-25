<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'ArtiWeb — Agence digitale à Fès')</title>
    <meta name="description" content="@yield('meta_description', 'ArtiWeb : agence de communication et de marketing digital à Fès. Création de sites web, SEO, Google Ads, Social Ads et génération de leads.')">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="https://unpkg.com/lucide@latest"></script>

    <style>
        #preloader {
            position: fixed;
            inset: 0;
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f8fafc;
            transition: opacity .45s ease, visibility .45s ease;
        }

        #preloader.preloader-hidden {
            opacity: 0;
            visibility: hidden;
            pointer-events: none;
        }

        .preloader-ring {
            position: relative;
            width: 88px;
            height: 88px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .preloader-ring::before {
            content: "";
            position: absolute;
            inset: 0;
            border-radius: 9999px;
            border: 3px solid #fee2e2;
            border-top-color: #dc2626;
            animation: preloader-spin .9s linear infinite;
        }

        .preloader-ring img {
            width: 44px;
            height: 44px;
            object-fit: contain;
            animation: preloader-pulse 1.4s ease-in-out infinite;
        }

        @keyframes preloader-spin {
            to { transform: rotate(360deg); }
        }

        @keyframes preloader-pulse {
            0%, 100% { transform: scale(1); opacity: 1; }
            50% { transform: scale(.92); opacity: .7; }
        }

        .scroll-reveal {
            opacity: 0;
            transform: translateY(28px);
            transition: opacity .7s ease, transform .7s ease;
        }

        .scroll-reveal.is-visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Menu mobile */
        #mobile-menu {
            transition: transform .3s ease, opacity .3s ease;
            transform: translateY(-8px);
            opacity: 0;
            pointer-events: none;
        }

        #mobile-menu.menu-open {
            transform: translateY(0);
            opacity: 1;
            pointer-events: auto;
        }
    </style>
</head>

<body class="bg-slate-50 text-slate-900">

    {{-- Preloader --}}
    <div id="preloader">
        <div class="flex flex-col items-center gap-4">
            <div class="preloader-ring">
                <img src="{{ asset('images/logo.png') }}" alt="ArtiWeb">
            </div>
            <span class="text-sm font-medium text-slate-400">Chargement...</span>
        </div>
    </div>

    {{-- Navbar --}}
    <header class="fixed top-0 left-0 right-0 z-50 h-16 bg-white/95 backdrop-blur border-b border-slate-200">

        <div class="h-full max-w-7xl mx-auto px-6 flex items-center justify-between">

            {{-- Logo --}}
            <a href="{{ url('/') }}" class="flex items-center gap-3">
                <img src="{{ asset('images/logo.png') }}" alt="ArtiWeb" class="h-10 w-auto object-contain">
            </a>

            {{-- Navigation --}}
            <nav class="hidden lg:flex items-center gap-7 text-sm font-medium">

                <a href="{{ url('/') }}"
                    class="{{ request()->is('/') ? 'text-red-600' : 'text-slate-600 hover:text-red-600' }} transition">
                    Accueil
                </a>

                <a href="{{ route('services') }}"
                    class="{{ request()->routeIs('services') ? 'text-red-600' : 'text-slate-600 hover:text-red-600' }} transition">
                    Services
                </a>

                <a href="{{ route('secteurs') }}"
                    class="{{ request()->routeIs('secteurs') ? 'text-red-600' : 'text-slate-600 hover:text-red-600' }} transition">
                    Secteurs
                </a>

                <a href="{{ route('realisations') }}"
                    class="{{ request()->routeIs('realisations') ? 'text-red-600' : 'text-slate-600 hover:text-red-600' }} transition">
                    Réalisations
                </a>

                <a href="{{ route('apropos') }}"
                    class="{{ request()->routeIs('apropos') ? 'text-red-600' : 'text-slate-600 hover:text-red-600' }} transition">
                    À propos
                </a>

                <a href="{{ route('blog') }}"
                    class="{{ request()->routeIs('blog') ? 'text-red-600' : 'text-slate-600 hover:text-red-600' }} transition">
                    Blog
                </a>

                <a href="{{ route('support') }}"
                    class="{{ request()->routeIs('support') ? 'text-red-600' : 'text-slate-600 hover:text-red-600' }} transition">
                    Support
                </a>

            </nav>

            {{-- CTA + Burger --}}
            <div class="flex items-center gap-3">

                <a href="{{ route('devis') }}"
                    class="hidden sm:inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-red-600 text-white text-sm font-semibold hover:bg-red-700 transition shadow-lg shadow-red-600/20">
                    Demander un devis
                    <i data-lucide="arrow-right" class="w-4 h-4"></i>
                </a>

                <button id="menu-btn"
                    class="lg:hidden w-10 h-10 flex items-center justify-center rounded-lg border border-slate-200 text-slate-600 hover:text-red-600 hover:border-red-300 transition">
                    <i data-lucide="menu" class="w-5 h-5" id="menu-icon-open"></i>
                    <i data-lucide="x" class="w-5 h-5 hidden" id="menu-icon-close"></i>
                </button>

            </div>

        </div>

        {{-- Menu mobile --}}
        <div id="mobile-menu" class="lg:hidden absolute top-16 left-0 right-0 bg-white border-b border-slate-200 shadow-xl">
            <nav class="px-6 py-4 space-y-1 text-sm font-medium">

                <a href="{{ url('/') }}" class="block px-3 py-2.5 rounded-lg text-slate-600 hover:bg-red-50 hover:text-red-600 transition">Accueil</a>
                <a href="{{ route('services') }}" class="block px-3 py-2.5 rounded-lg text-slate-600 hover:bg-red-50 hover:text-red-600 transition">Services</a>
                <a href="{{ route('secteurs') }}" class="block px-3 py-2.5 rounded-lg text-slate-600 hover:bg-red-50 hover:text-red-600 transition">Secteurs</a>
                <a href="{{ route('realisations') }}" class="block px-3 py-2.5 rounded-lg text-slate-600 hover:bg-red-50 hover:text-red-600 transition">Réalisations</a>
                <a href="{{ route('apropos') }}" class="block px-3 py-2.5 rounded-lg text-slate-600 hover:bg-red-50 hover:text-red-600 transition">À propos</a>
                <a href="{{ route('blog') }}" class="block px-3 py-2.5 rounded-lg text-slate-600 hover:bg-red-50 hover:text-red-600 transition">Blog</a>
                <a href="{{ route('support') }}" class="block px-3 py-2.5 rounded-lg text-slate-600 hover:bg-red-50 hover:text-red-600 transition">Support</a>

                <a href="{{ route('devis') }}"
                    class="mt-2 flex items-center justify-center gap-2 px-5 py-3 rounded-xl bg-red-600 text-white font-semibold">
                    Demander un devis
                    <i data-lucide="arrow-right" class="w-4 h-4"></i>
                </a>

            </nav>
        </div>

    </header>


    {{-- Main --}}
    <main class="pt-16">
        @yield('content')
    </main>


    {{-- Footer --}}
    <footer class="bg-slate-900 text-slate-400">

        <div class="max-w-7xl mx-auto px-6 py-14 grid md:grid-cols-2 lg:grid-cols-4 gap-10">

            {{-- Marque --}}
            <div>
                <a href="{{ url('/') }}" class="flex items-center gap-3 mb-4">
                    <img src="{{ asset('images/logo.png') }}" alt="ArtiWeb" class="h-10 w-auto object-contain brightness-0 invert">
                </a>
                <p class="text-sm leading-6">
                    Agence de communication et de marketing digital basée à Fès.
                    Nous accompagnons les entreprises marocaines et internationales
                    dans leur croissance digitale.
                </p>
            </div>

            {{-- Services --}}
            <div>
                <h4 class="text-white font-semibold mb-4 text-sm uppercase tracking-wider">Services</h4>
                <ul class="space-y-2.5 text-sm">
                    <li><a href="{{ route('services') }}" class="hover:text-red-400 transition">Création de site web</a></li>
                    <li><a href="{{ route('services') }}" class="hover:text-red-400 transition">E-commerce</a></li>
                    <li><a href="{{ route('services') }}" class="hover:text-red-400 transition">SEO</a></li>
                    <li><a href="{{ route('services') }}" class="hover:text-red-400 transition">Google Ads</a></li>
                    <li><a href="{{ route('services') }}" class="hover:text-red-400 transition">Social Ads</a></li>
                    <li><a href="{{ route('services') }}" class="hover:text-red-400 transition">Génération de leads</a></li>
                </ul>
            </div>

            {{-- Agence --}}
            <div>
                <h4 class="text-white font-semibold mb-4 text-sm uppercase tracking-wider">Agence</h4>
                <ul class="space-y-2.5 text-sm">
                    <li><a href="{{ route('apropos') }}" class="hover:text-red-400 transition">À propos</a></li>
                    <li><a href="{{ route('realisations') }}" class="hover:text-red-400 transition">Réalisations</a></li>
                    <li><a href="{{ route('blog') }}" class="hover:text-red-400 transition">Blog</a></li>
                    <li><a href="{{ route('support') }}" class="hover:text-red-400 transition">Support</a></li>
                    <li><a href="{{ route('devis') }}" class="hover:text-red-400 transition">Demander un devis</a></li>
                </ul>
            </div>

            {{-- Contact --}}
            <div>
                <h4 class="text-white font-semibold mb-4 text-sm uppercase tracking-wider">Contact</h4>
                <ul class="space-y-3 text-sm">
                    <li class="flex gap-2">
                        <i data-lucide="map-pin" class="w-4 h-4 text-red-500 shrink-0 mt-0.5"></i>
                        Fès, Maroc
                    </li>
                    <li class="flex gap-2">
                        <i data-lucide="mail" class="w-4 h-4 text-red-500 shrink-0 mt-0.5"></i>
                        contact@artiweb.ma
                    </li>
                    <li class="flex gap-2">
                        <i data-lucide="phone" class="w-4 h-4 text-red-500 shrink-0 mt-0.5"></i>
                        +212 5XX XX XX XX
                    </li>
                </ul>

                <div class="flex gap-3 mt-5">
                    <a href="#" class="w-9 h-9 rounded-lg bg-slate-800 flex items-center justify-center hover:bg-red-600 transition">
                        <i data-lucide="facebook" class="w-4 h-4 text-white"></i>
                    </a>
                    <a href="#" class="w-9 h-9 rounded-lg bg-slate-800 flex items-center justify-center hover:bg-red-600 transition">
                        <i data-lucide="instagram" class="w-4 h-4 text-white"></i>
                    </a>
                    <a href="#" class="w-9 h-9 rounded-lg bg-slate-800 flex items-center justify-center hover:bg-red-600 transition">
                        <i data-lucide="linkedin" class="w-4 h-4 text-white"></i>
                    </a>
                </div>
            </div>

        </div>

        <div class="border-t border-slate-800">
            <div class="max-w-7xl mx-auto px-6 py-5 flex flex-col md:flex-row justify-between items-center gap-3 text-sm">
                <p>© {{ date('Y') }} ArtiWeb — Tous droits réservés</p>
                <div class="flex gap-5">
                    <a href="#" class="hover:text-red-400 transition">Mentions légales</a>
                    <a href="#" class="hover:text-red-400 transition">Politique de confidentialité</a>
                </div>
            </div>
        </div>

    </footer>


    <script>
        lucide.createIcons();

        // Menu mobile
        var menuBtn = document.getElementById('menu-btn');
        var mobileMenu = document.getElementById('mobile-menu');
        var iconOpen = document.getElementById('menu-icon-open');
        var iconClose = document.getElementById('menu-icon-close');

        menuBtn.addEventListener('click', function () {
            var isOpen = mobileMenu.classList.toggle('menu-open');
            iconOpen.classList.toggle('hidden', isOpen);
            iconClose.classList.toggle('hidden', !isOpen);
        });

        // Animation au défilement
        document.querySelectorAll('main section').forEach(function (el, i) {
            el.classList.add('scroll-reveal');
            el.style.transitionDelay = (i % 3) * 0.08 + 's';
        });

        var revealObserver = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    revealObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.15, rootMargin: '0px 0px -60px 0px' });

        document.querySelectorAll('main section').forEach(function (el) {
            revealObserver.observe(el);
        });

        // Preloader
        window.addEventListener('load', function () {
            var preloader = document.getElementById('preloader');
            if (preloader) {
                setTimeout(function () {
                    preloader.classList.add('preloader-hidden');
                    setTimeout(function () {
                        preloader.remove();
                    }, 500);
                }, 350);
            }
        });
    </script>

    @stack('scripts')

</body>

</html>