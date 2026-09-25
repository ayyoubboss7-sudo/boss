@extends('layouts.app')

@section('title', 'ArtiWeb — Agence digitale à Fès')
@section('meta_description', 'ArtiWeb : agence de communication et de marketing digital à Fès. Création de sites web, SEO, Google Ads, Social Ads et génération de leads.')

@section('content')

    {{-- =========================================================
        HERO
    ========================================================== --}}
    <section class="relative overflow-hidden bg-white">

        <div class="max-w-7xl mx-auto px-6 py-20 lg:py-28">

            <div class="max-w-3xl">

                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-red-50 border border-red-100 text-red-600 text-sm font-medium">
                    <span class="w-2 h-2 rounded-full bg-red-600"></span>
                    ArtiWeb — Agence digitale à Fès
                </div>

                <h1 class="mt-6 text-4xl sm:text-5xl lg:text-6xl font-bold tracking-tight text-slate-900">
                    Développez votre visibilité
                    <span class="block text-red-600">et transformez-la en clients.</span>
                </h1>

                <p class="mt-6 max-w-2xl text-lg leading-8 text-slate-500">
                    Création de sites web, SEO, Google Ads, Social Ads et
                    génération de leads : votre partenaire digital pour
                    développer votre visibilité et votre activité.
                </p>

                <div class="mt-8 flex flex-wrap gap-4">
                    <a href="{{ route('devis') }}"
                        class="inline-flex items-center gap-2 px-6 py-3.5 rounded-xl bg-red-600 text-white font-semibold hover:bg-red-700 transition shadow-lg shadow-red-600/20">
                        Demander un devis
                        <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </a>
                    <a href="{{ route('realisations') }}"
                        class="inline-flex items-center gap-2 px-6 py-3.5 rounded-xl border border-slate-200 text-slate-700 font-semibold hover:border-red-300 hover:text-red-600 transition">
                        Voir nos réalisations
                    </a>
                </div>

            </div>

            {{-- Hero image card --}}
            <div class="relative group mt-14 overflow-hidden rounded-3xl border border-slate-200 bg-slate-900 shadow-2xl">

                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=1800&q=85"
                    alt="Équipe ArtiWeb au travail"
                    class="w-full h-[360px] sm:h-[450px] lg:h-[560px] object-cover object-center hero-image">

                <div class="absolute inset-0 bg-gradient-to-r from-slate-950/85 via-slate-900/45 to-transparent"></div>

                <div class="absolute inset-0 flex items-center">
                    <div class="max-w-xl px-7 sm:px-10 lg:px-14">

                        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 border border-white/20 backdrop-blur-md text-white text-sm font-medium">
                            <span class="w-2.5 h-2.5 rounded-full bg-red-400 shadow-[0_0_12px_rgba(248,113,113,0.9)] animate-pulse"></span>
                            +100 projets réalisés
                        </div>

                        <h3 class="mt-6 text-3xl sm:text-4xl lg:text-5xl font-bold leading-tight tracking-tight text-white">
                            Une stratégie digitale,
                            <span class="block text-red-400">des résultats mesurables.</span>
                        </h3>

                        <p class="mt-5 max-w-lg text-base sm:text-lg leading-7 text-slate-200">
                            De la conception de votre site à l'acquisition de
                            vos premiers clients, notre équipe pilote chaque
                            étape de votre croissance digitale.
                        </p>

                        <div class="mt-7 flex flex-wrap gap-3">
                            <div class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl bg-white/10 border border-white/15 backdrop-blur-md text-white text-sm">
                                <i data-lucide="search" class="w-4 h-4 text-blue-300"></i>
                                SEO & SEA
                            </div>
                            <div class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl bg-white/10 border border-white/15 backdrop-blur-md text-white text-sm">
                                <i data-lucide="megaphone" class="w-4 h-4 text-red-300"></i>
                                Social Ads
                            </div>
                        </div>

                    </div>
                </div>

                <div class="absolute bottom-6 right-6 hidden md:flex items-center gap-3 px-4 py-3 rounded-2xl bg-white/10 border border-white/20 backdrop-blur-md">
                    <span class="w-2.5 h-2.5 rounded-full bg-green-400 shadow-[0_0_10px_rgba(74,222,128,0.9)]"></span>
                    <span class="text-sm font-medium text-white">4,9/5 sur Google</span>
                </div>

            </div>

        </div>

    </section>

    {{-- =========================================================
        CHIFFRES CLÉS
    ========================================================== --}}
    <section class="border-y border-slate-200 bg-slate-900">
        <div class="max-w-7xl mx-auto px-6 py-10 grid grid-cols-2 md:grid-cols-4 gap-8 text-center">

            <div>
                <p class="text-3xl md:text-4xl font-bold text-white">+100</p>
                <p class="mt-1 text-sm text-slate-400">Projets réalisés</p>
            </div>
            <div>
                <p class="text-3xl md:text-4xl font-bold text-white">64</p>
                <p class="mt-1 text-sm text-slate-400">Clients accompagnés</p>
            </div>
            <div>
                <p class="text-3xl md:text-4xl font-bold text-white">15</p>
                <p class="mt-1 text-sm text-slate-400">Experts dans l'équipe</p>
            </div>
            <div>
                <p class="text-3xl md:text-4xl font-bold text-white">4,9/5</p>
                <p class="mt-1 text-sm text-slate-400">Note moyenne clients</p>
            </div>

        </div>
    </section>

    {{-- =========================================================
        NOS EXPERTISES
    ========================================================== --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-6 py-16 lg:py-20">

            <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6">
                <div class="max-w-2xl">
                    <span class="text-sm font-semibold text-red-600 uppercase tracking-wider">Nos expertises</span>
                    <h2 class="mt-3 text-3xl sm:text-4xl font-bold tracking-tight text-slate-900">
                        Tous les leviers de votre croissance digitale.
                    </h2>
                </div>
                <a href="{{ route('services') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-red-600 hover:text-red-700 shrink-0">
                    Voir tous nos services <i data-lucide="arrow-right" class="w-4 h-4"></i>
                </a>
            </div>

            <div class="mt-10 grid sm:grid-cols-2 lg:grid-cols-3 gap-6">

                @php
                    $expertises = [
                        ['icon' => 'layout-template', 'titre' => 'Création de site web', 'texte' => 'Un site pensé pour présenter votre activité et convertir vos visiteurs.'],
                        ['icon' => 'search', 'titre' => 'SEO', 'texte' => 'Soyez visible quand vos clients vous cherchent sur Google.'],
                        ['icon' => 'target', 'titre' => 'Google Ads (SEA)', 'texte' => 'Des campagnes rentables qui amènent des clients prêts à acheter.'],
                        ['icon' => 'megaphone', 'titre' => 'Social Ads', 'texte' => 'Transformez vos campagnes publicitaires en prospects qualifiés.'],
                        ['icon' => 'compass', 'titre' => 'Stratégie & Contenu', 'texte' => 'Une ligne éditoriale claire et un contenu qui vous ressemble.'],
                        ['icon' => 'users', 'titre' => 'Génération de leads', 'texte' => 'Des formulaires et parcours pensés pour qualifier vos prospects.'],
                    ];
                @endphp

                @foreach($expertises as $item)
                    <div class="bg-slate-50 rounded-2xl border border-slate-200 p-6 hover:shadow-lg hover:-translate-y-1 hover:border-red-200 transition-all duration-200">
                        <div class="w-12 h-12 rounded-xl bg-red-50 flex items-center justify-center text-red-600">
                            <i data-lucide="{{ $item['icon'] }}" class="w-5 h-5"></i>
                        </div>
                        <h3 class="mt-5 text-lg font-bold text-slate-900">{{ $item['titre'] }}</h3>
                        <p class="mt-2 text-sm leading-6 text-slate-500">{{ $item['texte'] }}</p>
                    </div>
                @endforeach

            </div>

        </div>
    </section>

    {{-- =========================================================
        POURQUOI ARTIWEB
    ========================================================== --}}
    <section class="bg-slate-50 border-y border-slate-200">
        <div class="max-w-7xl mx-auto px-6 py-16 lg:py-20">

            <div class="max-w-2xl">
                <span class="text-sm font-semibold text-red-600 uppercase tracking-wider">Pourquoi ArtiWeb</span>
                <h2 class="mt-3 text-3xl sm:text-4xl font-bold tracking-tight text-slate-900">
                    Un partenaire digital, pas juste un prestataire.
                </h2>
            </div>

            <div class="mt-10 grid sm:grid-cols-2 lg:grid-cols-4 gap-6">

                <div class="bg-white rounded-2xl border border-slate-200 p-6">
                    <div class="w-11 h-11 rounded-xl bg-blue-50 flex items-center justify-center text-blue-600">
                        <i data-lucide="award" class="w-5 h-5"></i>
                    </div>
                    <h3 class="mt-4 font-bold text-slate-900">Expertise</h3>
                    <p class="mt-2 text-sm leading-6 text-slate-500">Une équipe spécialisée sur chaque levier digital.</p>
                </div>

                <div class="bg-white rounded-2xl border border-slate-200 p-6">
                    <div class="w-11 h-11 rounded-xl bg-red-50 flex items-center justify-center text-red-600">
                        <i data-lucide="palette" class="w-5 h-5"></i>
                    </div>
                    <h3 class="mt-4 font-bold text-slate-900">Créativité</h3>
                    <p class="mt-2 text-sm leading-6 text-slate-500">Des créations qui reflètent réellement votre identité.</p>
                </div>

                <div class="bg-white rounded-2xl border border-slate-200 p-6">
                    <div class="w-11 h-11 rounded-xl bg-blue-50 flex items-center justify-center text-blue-600">
                        <i data-lucide="cpu" class="w-5 h-5"></i>
                    </div>
                    <h3 class="mt-4 font-bold text-slate-900">Technologie</h3>
                    <p class="mt-2 text-sm leading-6 text-slate-500">Des outils modernes, rapides et fiables.</p>
                </div>

                <div class="bg-white rounded-2xl border border-slate-200 p-6">
                    <div class="w-11 h-11 rounded-xl bg-red-50 flex items-center justify-center text-red-600">
                        <i data-lucide="handshake" class="w-5 h-5"></i>
                    </div>
                    <h3 class="mt-4 font-bold text-slate-900">Accompagnement</h3>
                    <p class="mt-2 text-sm leading-6 text-slate-500">Un suivi continu, pas seulement une livraison.</p>
                </div>

            </div>

        </div>
    </section>

    {{-- =========================================================
        SECTEURS D'ACTIVITÉ
    ========================================================== --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-6 py-16 lg:py-20">

            <div class="max-w-2xl">
                <span class="text-sm font-semibold text-red-600 uppercase tracking-wider">Secteurs d'activité</span>
                <h2 class="mt-3 text-3xl sm:text-4xl font-bold tracking-tight text-slate-900">
                    Nous accompagnons différents secteurs.
                </h2>
            </div>

            <div class="mt-10 flex flex-wrap gap-3">
                @foreach(['Hôtellerie & restauration', 'Immobilier', 'Éducation', 'Santé', 'Assurance', 'Commerce', 'Industrie', 'PME & startups'] as $secteur)
                    <span class="px-4 py-2.5 rounded-xl bg-slate-50 border border-slate-200 text-sm font-medium text-slate-700">
                        {{ $secteur }}
                    </span>
                @endforeach
            </div>

            <a href="{{ route('secteurs') }}" class="mt-8 inline-flex items-center gap-2 text-sm font-semibold text-red-600 hover:text-red-700">
                Voir tous les secteurs <i data-lucide="arrow-right" class="w-4 h-4"></i>
            </a>

        </div>
    </section>

    {{-- =========================================================
        RÉALISATIONS
    ========================================================== --}}
    <section class="bg-slate-50 border-y border-slate-200">
        <div class="max-w-7xl mx-auto px-6 py-16 lg:py-20">

            <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6">
                <div class="max-w-2xl">
                    <span class="text-sm font-semibold text-red-600 uppercase tracking-wider">Nos réalisations</span>
                    <h2 class="mt-3 text-3xl sm:text-4xl font-bold tracking-tight text-slate-900">
                        Des projets qui parlent mieux qu'un discours.
                    </h2>
                </div>
                <a href="{{ route('realisations') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-red-600 hover:text-red-700 shrink-0">
                    Voir toutes nos réalisations <i data-lucide="arrow-right" class="w-4 h-4"></i>
                </a>
            </div>

            <div class="mt-10 grid md:grid-cols-3 gap-6">

                @php
                    $projets = [
                        ['icon' => 'layout-template', 'cat' => 'Web', 'titre' => 'Site vitrine — Cabinet juridique', 'resultat' => '+60% de demandes de contact en 3 mois'],
                        ['icon' => 'shopping-cart', 'cat' => 'E-commerce', 'titre' => 'Boutique en ligne — Cosmétique', 'resultat' => '+120% de ventes en ligne'],
                        ['icon' => 'search', 'cat' => 'SEO', 'titre' => 'Référencement — Agence immobilière', 'resultat' => 'Top 3 Google sur 15 mots-clés'],
                    ];
                @endphp

                @foreach($projets as $projet)
                    <div class="bg-white rounded-2xl border border-slate-200 p-7 hover:shadow-lg hover:-translate-y-1 hover:border-red-200 transition-all duration-200">
                        <div class="w-12 h-12 rounded-xl bg-red-50 flex items-center justify-center text-red-600">
                            <i data-lucide="{{ $projet['icon'] }}" class="w-5 h-5"></i>
                        </div>
                        <span class="mt-5 inline-block text-xs font-semibold text-red-600 uppercase tracking-wider">{{ $projet['cat'] }}</span>
                        <h3 class="mt-2 text-lg font-bold text-slate-900">{{ $projet['titre'] }}</h3>
                        <p class="mt-2 text-sm leading-6 text-slate-500">{{ $projet['resultat'] }}</p>
                    </div>
                @endforeach

            </div>

        </div>
    </section>

    {{-- =========================================================
        TÉMOIGNAGES
    ========================================================== --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-6 py-16 lg:py-20">

            <div class="max-w-2xl">
                <span class="text-sm font-semibold text-red-600 uppercase tracking-wider">Ils nous font confiance</span>
                <h2 class="mt-3 text-3xl sm:text-4xl font-bold tracking-tight text-slate-900">
                    Ce que nos clients disent de nous.
                </h2>
            </div>

            <div class="mt-10 grid md:grid-cols-3 gap-6">

                @php
                    $temoignages = [
                        ['nom' => 'Salma Bennani', 'poste' => 'Gérante, Clinique dentaire', 'texte' => 'L\'équipe ArtiWeb a doublé notre visibilité en ligne en quelques mois.'],
                        ['nom' => 'Yassine El Amrani', 'poste' => 'Fondateur, Boutique en ligne', 'texte' => 'Notre nouveau site a transformé nos ventes. Réactifs et à l\'écoute.'],
                        ['nom' => 'Karim Idrissi', 'poste' => 'Directeur, Cabinet juridique', 'texte' => 'Des résultats mesurables dès le premier mois de campagne.'],
                    ];
                @endphp

                @foreach($temoignages as $t)
                    <div class="bg-slate-50 rounded-2xl border border-slate-200 p-6">
                        <div class="flex gap-1 text-amber-400">
                            @for($i = 0; $i < 5; $i++)
                                <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                            @endfor
                        </div>
                        <p class="mt-4 text-sm leading-7 text-slate-600">« {{ $t['texte'] }} »</p>
                        <div class="mt-5 flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-red-100 text-red-600 flex items-center justify-center font-semibold text-sm">
                                {{ strtoupper(substr($t['nom'], 0, 1)) }}
                            </div>
                            <div>
                                <p class="text-sm font-semibold text-slate-900">{{ $t['nom'] }}</p>
                                <p class="text-xs text-slate-500">{{ $t['poste'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </section>

    {{-- =========================================================
        FAQ
    ========================================================== --}}
    <section class="bg-slate-50 border-y border-slate-200">
        <div class="max-w-4xl mx-auto px-6 py-16 lg:py-20">

            <div class="max-w-2xl">
                <span class="text-sm font-semibold text-red-600 uppercase tracking-wider">FAQ</span>
                <h2 class="mt-3 text-3xl sm:text-4xl font-bold tracking-tight text-slate-900">
                    Questions fréquentes.
                </h2>
            </div>

            <div class="mt-10 space-y-4">

                @php
                    $faqs = [
                        ['q' => 'Combien coûte un site web professionnel au Maroc ?', 'r' => 'Le prix dépend de vos besoins (vitrine, e-commerce, fonctionnalités). Contactez-nous pour un devis gratuit et personnalisé.'],
                        ['q' => 'SEO ou Google Ads : quelle stratégie choisir ?', 'r' => 'Le SEO construit une visibilité durable, le SEA apporte des résultats immédiats. Nous vous conseillons souvent de combiner les deux.'],
                        ['q' => 'Combien de temps pour créer un site web ?', 'r' => 'Comptez en moyenne 3 à 6 semaines selon la complexité du projet et la disponibilité des contenus.'],
                        ['q' => 'Proposez-vous un accompagnement après la livraison ?', 'r' => 'Oui, nous proposons un suivi et une maintenance continue pour tous nos projets.'],
                    ];
                @endphp

                @foreach($faqs as $faq)
                    <details class="group bg-white rounded-2xl border border-slate-200 p-6">
                        <summary class="flex items-center justify-between cursor-pointer font-semibold text-slate-900">
                            {{ $faq['q'] }}
                            <i data-lucide="chevron-down" class="w-5 h-5 text-slate-400 group-open:rotate-180 transition-transform"></i>
                        </summary>
                        <p class="mt-3 text-sm leading-6 text-slate-500">{{ $faq['r'] }}</p>
                    </details>
                @endforeach

            </div>

        </div>
    </section>

    {{-- =========================================================
        CTA FINAL
    ========================================================== --}}
    <section id="support" class="bg-red-600">
        <div class="max-w-7xl mx-auto px-6 py-16">

            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-8">

                <div>
                    <h2 class="text-3xl font-bold text-white">
                        Vous avez un projet digital ?
                    </h2>
                    <p class="mt-3 max-w-xl text-red-100">
                        Parlons-en. Nos experts vous répondent sous 24h ouvrées
                        avec une première évaluation gratuite.
                    </p>
                </div>

                <a href="{{ route('devis') }}"
                    class="inline-flex items-center justify-center gap-2 px-6 py-3 rounded-xl bg-white text-red-600 font-semibold hover:bg-slate-100 transition">
                    <i data-lucide="send" class="w-5 h-5"></i>
                    Demander un devis
                </a>

            </div>

        </div>
    </section>

    {{-- =========================================================
        ANIMATIONS
    ========================================================== --}}
    <style>
        @keyframes heroZoom {
            0% { transform: scale(1); }
            50% { transform: scale(1.045); }
            100% { transform: scale(1); }
        }

        .hero-image {
            animation: heroZoom 10s ease-in-out infinite;
            transition: transform 1.5s ease, filter 0.8s ease;
        }

        .group:hover .hero-image {
            transform: scale(1.08);
            filter: brightness(1.08);
        }

        @media (prefers-reduced-motion: reduce) {
            .hero-image {
                animation: none;
            }
        }
    </style>

@endsection