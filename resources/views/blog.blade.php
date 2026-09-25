@extends('layouts.app')

@section('title', 'Blog | Arti Web')

@section('content')

    ```
    {{-- =========================================================
    HERO
========================================================== --}}
    <section class="relative overflow-hidden bg-white">

        {{-- Decorative background --}}
        <div class="absolute inset-0 pointer-events-none">

            <div class="absolute -top-32 -right-32 w-96 h-96
                   rounded-full bg-red-50 blur-3xl opacity-70">
            </div>

            <div class="absolute top-40 -left-40 w-80 h-80
                   rounded-full bg-blue-50 blur-3xl opacity-70">
            </div>

        </div>


        <div class="relative max-w-7xl mx-auto
               px-6 lg:px-10
               py-16 lg:py-24">

            <div class="max-w-3xl">

                {{-- Badge --}}
                <div
                    class="inline-flex items-center gap-2
                       px-3 py-1.5
                       rounded-full
                       bg-red-50
                       border border-red-100
                       text-red-600
                       text-sm font-semibold">

                    <i data-lucide="newspaper" class="w-4 h-4"></i>

                    Blog Arti Web

                </div>


                {{-- Title --}}
                <h1
                    class="mt-6
                       text-4xl sm:text-5xl lg:text-6xl
                       font-bold
                       tracking-tight
                       leading-tight
                       text-slate-900">

                    Conseils, idées et

                    <span class="text-red-600">
                        stratégies digitales.
                    </span>

                </h1>


                {{-- Description --}}
                <p
                    class="mt-6
                      max-w-2xl
                      text-lg
                      leading-8
                      text-slate-500">

                    Découvrez nos conseils pour développer votre visibilité,
                    améliorer votre présence en ligne et transformer votre
                    stratégie digitale en véritables opportunités.

                </p>


                {{-- Quick links --}}
                <div class="mt-8 flex flex-wrap gap-3">

                    <a href="#articles"
                        class="inline-flex items-center gap-2
                           px-5 py-3
                           rounded-xl
                           bg-slate-900
                           text-white
                           text-sm font-semibold
                           hover:bg-slate-800
                           transition">

                        Découvrir les articles

                        <i data-lucide="arrow-down" class="w-4 h-4"></i>

                    </a>


                    <a href="{{ route('contact') }}"
                        class="inline-flex items-center gap-2
                           px-5 py-3
                           rounded-xl
                           bg-white
                           border border-slate-200
                           text-slate-700
                           text-sm font-semibold
                           hover:border-red-200
                           hover:text-red-600
                           transition">

                        Parler à un expert

                        <i data-lucide="arrow-right" class="w-4 h-4"></i>

                    </a>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================================================
    CATEGORIES
========================================================== --}}
    <section class="bg-slate-50 border-y border-slate-200">

        <div class="max-w-7xl mx-auto
               px-6 lg:px-10
               py-5">

            <div class="flex flex-wrap items-center gap-3">

                <span
                    class="text-sm
                       font-semibold
                       text-slate-500
                       mr-2">

                    Explorer :

                </span>


                <a href="#marketing"
                    class="px-4 py-2
                       rounded-lg
                       bg-white
                       border border-slate-200
                       text-sm font-medium
                       text-slate-600
                       hover:border-red-200
                       hover:text-red-600
                       transition">

                    Marketing digital

                </a>


                <a href="#seo"
                    class="px-4 py-2
                       rounded-lg
                       bg-white
                       border border-slate-200
                       text-sm font-medium
                       text-slate-600
                       hover:border-red-200
                       hover:text-red-600
                       transition">

                    SEO

                </a>


                <a href="#publicite"
                    class="px-4 py-2
                       rounded-lg
                       bg-white
                       border border-slate-200
                       text-sm font-medium
                       text-slate-600
                       hover:border-red-200
                       hover:text-red-600
                       transition">

                    Google Ads

                </a>


                <a href="#web"
                    class="px-4 py-2
                       rounded-lg
                       bg-white
                       border border-slate-200
                       text-sm font-medium
                       text-slate-600
                       hover:border-red-200
                       hover:text-red-600
                       transition">

                    Création web

                </a>


                <a href="#strategie"
                    class="px-4 py-2
                       rounded-lg
                       bg-white
                       border border-slate-200
                       text-sm font-medium
                       text-slate-600
                       hover:border-red-200
                       hover:text-red-600
                       transition">

                    Stratégie

                </a>

            </div>

        </div>

    </section>


    {{-- =========================================================
    ARTICLES
========================================================== --}}
    <section id="articles" class="bg-white">

        <div class="max-w-7xl mx-auto
               px-6 lg:px-10
               py-16 lg:py-20">


            {{-- Section heading --}}
            <div
                class="flex flex-col
                   md:flex-row
                   md:items-end
                   md:justify-between
                   gap-6
                   mb-10">

                <div>

                    <div
                        class="inline-flex items-center gap-2
                           text-sm
                           font-semibold
                           text-red-600">

                        <span
                            class="w-2 h-2
                               rounded-full
                               bg-red-600">
                        </span>

                        Nos ressources

                    </div>


                    <h2
                        class="mt-3
                           text-3xl md:text-4xl
                           font-bold
                           tracking-tight
                           text-slate-900">

                        Derniers articles

                    </h2>


                    <p
                        class="mt-3
                          max-w-2xl
                          text-base
                          leading-7
                          text-slate-500">

                        Des conseils pratiques et des ressources pour vous
                        aider à prendre de meilleures décisions digitales.

                    </p>

                </div>


                <div class="text-sm
                       text-slate-400
                       flex items-center gap-2">

                    <i data-lucide="book-open" class="w-4 h-4"></i>

                    Conseils & ressources

                </div>

            </div>


            {{-- =====================================================
            FEATURED ARTICLE
        ====================================================== --}}
            <article
                class="group
                   overflow-hidden
                   rounded-3xl
                   border border-slate-200
                   bg-white
                   shadow-sm
                   hover:shadow-xl
                   hover:border-red-100
                   transition-all
                   duration-300">

                <div class="grid
                       lg:grid-cols-2">

                    {{-- Image --}}
                    <div
                        class="relative
                           min-h-[300px]
                           lg:min-h-[430px]
                           overflow-hidden
                           bg-slate-900">

                        <img src="https://images.unsplash.com/photo-1556761175-b413da4baf72?auto=format&fit=crop&w=1400&q=85"
                            alt="Stratégie digitale et marketing"
                            class="absolute inset-0
                               w-full h-full
                               object-cover
                               transition duration-500
                               group-hover:scale-105">


                        <div
                            class="absolute inset-0
                               bg-gradient-to-t
                               from-slate-950/70
                               via-slate-900/10
                               to-transparent">
                        </div>


                        {{-- Badge --}}
                        <div
                            class="absolute
                               top-6 left-6
                               inline-flex
                               items-center gap-2
                               px-3 py-1.5
                               rounded-full
                               bg-white/95
                               text-red-600
                               text-xs
                               font-bold
                               shadow-lg">

                            À la une

                        </div>


                        <div
                            class="absolute
                               bottom-6
                               left-6
                               right-6
                               flex items-center
                               justify-between">

                            <span
                                class="inline-flex
                                   items-center gap-2
                                   text-white
                                   text-sm">

                                <i data-lucide="calendar" class="w-4 h-4"></i>

                                Article conseil

                            </span>

                            <span
                                class="inline-flex
                                   items-center gap-2
                                   text-white
                                   text-sm">

                                <i data-lucide="clock" class="w-4 h-4"></i>

                                5 min

                            </span>

                        </div>

                    </div>


                    {{-- Content --}}
                    <div
                        class="p-7 sm:p-9 lg:p-12
                           flex flex-col
                           justify-center">

                        <div
                            class="flex items-center gap-3
                               text-sm
                               font-semibold
                               text-red-600">

                            <span>Marketing digital</span>

                            <span
                                class="w-1 h-1
                                   rounded-full
                                   bg-slate-300">
                            </span>

                            <span class="text-slate-400">
                                Guide
                            </span>

                        </div>


                        <h3
                            class="mt-4
                               text-2xl sm:text-3xl
                               font-bold
                               leading-tight
                               text-slate-900">

                            Comment développer sa visibilité digitale
                            et attirer plus de clients ?

                        </h3>


                        <p
                            class="mt-5
                              text-base
                              leading-7
                              text-slate-500">

                            Une présence digitale efficace ne consiste pas
                            uniquement à être présent sur internet. Découvrez
                            les principaux leviers pour améliorer votre
                            visibilité et transformer vos visiteurs en prospects.

                        </p>


                        <div class="mt-7">

                            <a href="#"
                                class="inline-flex items-center gap-2
                                   text-sm
                                   font-bold
                                   text-red-600
                                   hover:text-red-700
                                   transition">

                                Lire l'article

                                <i data-lucide="arrow-right"
                                    class="w-4 h-4
                                       transition-transform
                                       group-hover:translate-x-1">
                                </i>

                            </a>

                        </div>

                    </div>

                </div>

            </article>


            {{-- =====================================================
            ARTICLE GRID
        ====================================================== --}}
            <div
                class="mt-8
                   grid grid-cols-1
                   md:grid-cols-2
                   xl:grid-cols-3
                   gap-6">


                {{-- ARTICLE 1 --}}
                <article id="seo"
                    class="group
                       overflow-hidden
                       rounded-2xl
                       border border-slate-200
                       bg-white
                       shadow-sm
                       hover:-translate-y-1
                       hover:shadow-xl
                       hover:border-red-100
                       transition-all duration-300">

                    <div
                        class="relative
                           h-52
                           overflow-hidden
                           bg-slate-100">

                        <img src="https://images.unsplash.com/photo-1432888622747-4eb9a8efeb07?auto=format&fit=crop&w=1000&q=85"
                            alt="Référencement naturel SEO"
                            class="w-full h-full
                               object-cover
                               transition duration-500
                               group-hover:scale-105">

                        <div
                            class="absolute
                               top-4 left-4
                               px-3 py-1.5
                               rounded-lg
                               bg-white/95
                               text-xs
                               font-bold
                               text-red-600">

                            SEO

                        </div>

                    </div>


                    <div class="p-6">

                        <div
                            class="flex items-center gap-2
                               text-xs
                               text-slate-400">

                            <span>Référencement</span>

                            <span>•</span>

                            <span>6 min</span>

                        </div>


                        <h3
                            class="mt-3
                               text-xl
                               font-bold
                               leading-snug
                               text-slate-900
                               group-hover:text-red-600
                               transition">

                            Comment améliorer le référencement
                            de son entreprise ?

                        </h3>


                        <p
                            class="mt-3
                              text-sm
                              leading-6
                              text-slate-500">

                            Les principales étapes pour construire
                            une présence solide sur les moteurs de recherche.

                        </p>


                        <a href="#"
                            class="mt-5
                               inline-flex
                               items-center gap-2
                               text-sm
                               font-semibold
                               text-red-600">

                            Lire la suite

                            <i data-lucide="arrow-right" class="w-4 h-4"></i>

                        </a>

                    </div>

                </article>


                {{-- ARTICLE 2 --}}
                <article id="web"
                    class="group
                       overflow-hidden
                       rounded-2xl
                       border border-slate-200
                       bg-white
                       shadow-sm
                       hover:-translate-y-1
                       hover:shadow-xl
                       hover:border-red-100
                       transition-all duration-300">

                    <div
                        class="relative
                           h-52
                           overflow-hidden
                           bg-slate-100">

                        <img src="https://images.unsplash.com/photo-1547658719-da2b51169166?auto=format&fit=crop&w=1000&q=85"
                            alt="Création de site web professionnel"
                            class="w-full h-full
                               object-cover
                               transition duration-500
                               group-hover:scale-105">

                        <div
                            class="absolute
                               top-4 left-4
                               px-3 py-1.5
                               rounded-lg
                               bg-white/95
                               text-xs
                               font-bold
                               text-blue-600">

                            Web

                        </div>

                    </div>


                    <div class="p-6">

                        <div
                            class="flex items-center gap-2
                               text-xs
                               text-slate-400">

                            <span>Création web</span>

                            <span>•</span>

                            <span>7 min</span>

                        </div>


                        <h3
                            class="mt-3
                               text-xl
                               font-bold
                               leading-snug
                               text-slate-900
                               group-hover:text-red-600
                               transition">

                            Combien coûte un site web professionnel
                            au Maroc ?

                        </h3>


                        <p
                            class="mt-3
                              text-sm
                              leading-6
                              text-slate-500">

                            Les éléments qui influencent le prix d'un site
                            et les points à prendre en compte avant de lancer
                            votre projet.

                        </p>


                        <a href="#"
                            class="mt-5
                               inline-flex
                               items-center gap-2
                               text-sm
                               font-semibold
                               text-red-600">

                            Lire la suite

                            <i data-lucide="arrow-right" class="w-4 h-4"></i>

                        </a>

                    </div>

                </article>


                {{-- ARTICLE 3 --}}
                <article id="publicite"
                    class="group
                       overflow-hidden
                       rounded-2xl
                       border border-slate-200
                       bg-white
                       shadow-sm
                       hover:-translate-y-1
                       hover:shadow-xl
                       hover:border-red-100
                       transition-all duration-300">

                    <div
                        class="relative
                           h-52
                           overflow-hidden
                           bg-slate-100">

                        <img src="https://images.unsplash.com/photo-1557838923-2985c318be48?auto=format&fit=crop&w=1000&q=85"
                            alt="Google Ads et publicité digitale"
                            class="w-full h-full
                               object-cover
                               transition duration-500
                               group-hover:scale-105">

                        <div
                            class="absolute
                               top-4 left-4
                               px-3 py-1.5
                               rounded-lg
                               bg-white/95
                               text-xs
                               font-bold
                               text-emerald-600">

                            Publicité

                        </div>

                    </div>


                    <div class="p-6">

                        <div
                            class="flex items-center gap-2
                               text-xs
                               text-slate-400">

                            <span>Google Ads</span>

                            <span>•</span>

                            <span>5 min</span>

                        </div>


                        <h3
                            class="mt-3
                               text-xl
                               font-bold
                               leading-snug
                               text-slate-900
                               group-hover:text-red-600
                               transition">

                            SEO ou Google Ads :
                            quelle stratégie choisir ?

                        </h3>


                        <p
                            class="mt-3
                              text-sm
                              leading-6
                              text-slate-500">

                            Comprendre les différences entre référencement
                            naturel et publicité payante pour mieux définir
                            vos priorités.

                        </p>


                        <a href="#"
                            class="mt-5
                               inline-flex
                               items-center gap-2
                               text-sm
                               font-semibold
                               text-red-600">

                            Lire la suite

                            <i data-lucide="arrow-right" class="w-4 h-4"></i>

                        </a>

                    </div>

                </article>


                {{-- ARTICLE 4 --}}
                <article id="marketing"
                    class="group
                       overflow-hidden
                       rounded-2xl
                       border border-slate-200
                       bg-white
                       shadow-sm
                       hover:-translate-y-1
                       hover:shadow-xl
                       hover:border-red-100
                       transition-all duration-300">

                    <div
                        class="relative
                           h-52
                           overflow-hidden
                           bg-slate-100">

                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=1000&q=85"
                            alt="Stratégie marketing digital"
                            class="w-full h-full
                               object-cover
                               transition duration-500
                               group-hover:scale-105">

                        <div
                            class="absolute
                               top-4 left-4
                               px-3 py-1.5
                               rounded-lg
                               bg-white/95
                               text-xs
                               font-bold
                               text-purple-600">

                            Marketing

                        </div>

                    </div>


                    <div class="p-6">

                        <div
                            class="flex items-center gap-2
                               text-xs
                               text-slate-400">

                            <span>Stratégie</span>

                            <span>•</span>

                            <span>6 min</span>

                        </div>


                        <h3
                            class="mt-3
                               text-xl
                               font-bold
                               leading-snug
                               text-slate-900
                               group-hover:text-red-600
                               transition">

                            Les bases d'une stratégie
                            digitale efficace

                        </h3>


                        <p
                            class="mt-3
                              text-sm
                              leading-6
                              text-slate-500">

                            Objectifs, audience, contenu et acquisition :
                            les fondamentaux pour construire une stratégie
                            cohérente.

                        </p>


                        <a href="#"
                            class="mt-5
                               inline-flex
                               items-center gap-2
                               text-sm
                               font-semibold
                               text-red-600">

                            Lire la suite

                            <i data-lucide="arrow-right" class="w-4 h-4"></i>

                        </a>

                    </div>

                </article>


                {{-- ARTICLE 5 --}}
                <article id="strategie"
                    class="group
                       overflow-hidden
                       rounded-2xl
                       border border-slate-200
                       bg-white
                       shadow-sm
                       hover:-translate-y-1
                       hover:shadow-xl
                       hover:border-red-100
                       transition-all duration-300">

                    <div
                        class="relative
                           h-52
                           overflow-hidden
                           bg-slate-100">

                        <img src="https://images.unsplash.com/photo-1556761175-4b46a572b786?auto=format&fit=crop&w=1000&q=85"
                            alt="Stratégie digitale entreprise"
                            class="w-full h-full
                               object-cover
                               transition duration-500
                               group-hover:scale-105">

                        <div
                            class="absolute
                               top-4 left-4
                               px-3 py-1.5
                               rounded-lg
                               bg-white/95
                               text-xs
                               font-bold
                               text-orange-600">

                            Conseil

                        </div>

                    </div>


                    <div class="p-6">

                        <div
                            class="flex items-center gap-2
                               text-xs
                               text-slate-400">

                            <span>Stratégie digitale</span>

                            <span>•</span>

                            <span>4 min</span>

                        </div>


                        <h3
                            class="mt-3
                               text-xl
                               font-bold
                               leading-snug
                               text-slate-900
                               group-hover:text-red-600
                               transition">

                            5 erreurs à éviter dans
                            votre stratégie digitale

                        </h3>


                        <p
                            class="mt-3
                              text-sm
                              leading-6
                              text-slate-500">

                            Découvrez les erreurs les plus fréquentes
                            qui peuvent limiter vos résultats en ligne.

                        </p>


                        <a href="#"
                            class="mt-5
                               inline-flex
                               items-center gap-2
                               text-sm
                               font-semibold
                               text-red-600">

                            Lire la suite

                            <i data-lucide="arrow-right" class="w-4 h-4"></i>

                        </a>

                    </div>

                </article>


                {{-- ARTICLE 6 --}}
                <article
                    class="group
                       overflow-hidden
                       rounded-2xl
                       border border-slate-200
                       bg-white
                       shadow-sm
                       hover:-translate-y-1
                       hover:shadow-xl
                       hover:border-red-100
                       transition-all duration-300">

                    <div
                        class="relative
                           h-52
                           overflow-hidden
                           bg-slate-100">

                        <img src="https://images.unsplash.com/photo-1556157382-97eda2d62296?auto=format&fit=crop&w=1000&q=85"
                            alt="Génération de leads"
                            class="w-full h-full
                               object-cover
                               transition duration-500
                               group-hover:scale-105">

                        <div
                            class="absolute
                               top-4 left-4
                               px-3 py-1.5
                               rounded-lg
                               bg-white/95
                               text-xs
                               font-bold
                               text-cyan-600">

                            Leads

                        </div>

                    </div>


                    <div class="p-6">

                        <div
                            class="flex items-center gap-2
                               text-xs
                               text-slate-400">

                            <span>Acquisition</span>

                            <span>•</span>

                            <span>5 min</span>

                        </div>


                        <h3
                            class="mt-3
                               text-xl
                               font-bold
                               leading-snug
                               text-slate-900
                               group-hover:text-red-600
                               transition">

                            Comment transformer vos visiteurs
                            en prospects qualifiés ?

                        </h3>


                        <p
                            class="mt-3
                              text-sm
                              leading-6
                              text-slate-500">

                            Formulaires, appels à l'action et parcours
                            utilisateur : les éléments essentiels
                            pour améliorer vos conversions.

                        </p>


                        <a href="#"
                            class="mt-5
                               inline-flex
                               items-center gap-2
                               text-sm
                               font-semibold
                               text-red-600">

                            Lire la suite

                            <i data-lucide="arrow-right" class="w-4 h-4"></i>

                        </a>

                    </div>

                </article>

            </div>

        </div>

    </section>


    {{-- =========================================================
    RESOURCES
========================================================== --}}
    <section class="bg-slate-50
           border-y
           border-slate-200">

        <div class="max-w-7xl mx-auto
               px-6 lg:px-10
               py-16 lg:py-20">


            <div class="max-w-2xl">

                <span class="text-sm
                       font-semibold
                       text-red-600">

                    Ressources

                </span>


                <h2
                    class="mt-3
                       text-3xl md:text-4xl
                       font-bold
                       tracking-tight
                       text-slate-900">

                    Besoin d'aller plus loin ?

                </h2>


                <p
                    class="mt-4
                      text-base
                      leading-7
                      text-slate-500">

                    Retrouvez également nos ressources pratiques pour
                    mieux comprendre les outils et les solutions digitales.

                </p>

            </div>


            <div
                class="mt-10
                   grid grid-cols-1
                   md:grid-cols-3
                   gap-6">


                {{-- Resource 1 --}}
                <a href="{{ route('guides') }}"
                    class="group
                       bg-white
                       rounded-2xl
                       border border-slate-200
                       p-6
                       shadow-sm
                       hover:-translate-y-1
                       hover:shadow-lg
                       hover:border-red-100
                       transition">

                    <div
                        class="w-12 h-12
                           rounded-xl
                           bg-red-50
                           flex items-center
                           justify-center">

                        <i data-lucide="book-open" class="w-5 h-5
                               text-red-600">
                        </i>

                    </div>


                    <h3
                        class="mt-5
                           text-lg
                           font-bold
                           text-slate-900
                           group-hover:text-red-600
                           transition">

                        Guides pratiques

                    </h3>


                    <p
                        class="mt-2
                          text-sm
                          leading-6
                          text-slate-500">

                        Consultez nos guides pour apprendre à utiliser
                        efficacement les différentes fonctionnalités.

                    </p>


                    <div
                        class="mt-5
                           inline-flex
                           items-center gap-2
                           text-sm
                           font-semibold
                           text-red-600">

                        Consulter les guides

                        <i data-lucide="arrow-right" class="w-4 h-4">
                        </i>

                    </div>

                </a>


                {{-- Resource 2 --}}
                <a href="{{ route('faq') }}"
                    class="group
                       bg-white
                       rounded-2xl
                       border border-slate-200
                       p-6
                       shadow-sm
                       hover:-translate-y-1
                       hover:shadow-lg
                       hover:border-red-100
                       transition">

                    <div
                        class="w-12 h-12
                           rounded-xl
                           bg-blue-50
                           flex items-center
                           justify-center">

                        <i data-lucide="circle-help" class="w-5 h-5
                               text-blue-600">
                        </i>

                    </div>


                    <h3
                        class="mt-5
                           text-lg
                           font-bold
                           text-slate-900
                           group-hover:text-red-600
                           transition">

                        Questions fréquentes

                    </h3>


                    <p
                        class="mt-2
                          text-sm
                          leading-6
                          text-slate-500">

                        Trouvez rapidement les réponses aux questions
                        les plus fréquentes.

                    </p>


                    <div
                        class="mt-5
                           inline-flex
                           items-center gap-2
                           text-sm
                           font-semibold
                           text-red-600">

                        Voir la FAQ

                        <i data-lucide="arrow-right" class="w-4 h-4">
                        </i>

                    </div>

                </a>


                {{-- Resource 3 --}}
                <a href="{{ route('contact') }}"
                    class="group
                       bg-slate-900
                       rounded-2xl
                       p-6
                       shadow-sm
                       hover:-translate-y-1
                       hover:shadow-xl
                       transition">

                    <div
                        class="w-12 h-12
                           rounded-xl
                           bg-white/10
                           flex items-center
                           justify-center">

                        <i data-lucide="message-circle" class="w-5 h-5
                               text-white">
                        </i>

                    </div>


                    <h3
                        class="mt-5
                           text-lg
                           font-bold
                           text-white">

                        Besoin de conseils ?

                    </h3>


                    <p
                        class="mt-2
                          text-sm
                          leading-6
                          text-slate-300">

                        Notre équipe peut vous accompagner dans votre
                        projet digital.

                    </p>


                    <div
                        class="mt-5
                           inline-flex
                           items-center gap-2
                           text-sm
                           font-semibold
                           text-red-400">

                        Nous contacter

                        <i data-lucide="arrow-right" class="w-4 h-4">
                        </i>

                    </div>

                </a>

            </div>

        </div>

    </section>


    {{-- =========================================================
    NEWSLETTER / CTA
========================================================== --}}
    <section class="bg-white">

        <div class="max-w-7xl mx-auto
               px-6 lg:px-10
               py-16 lg:py-20">

            <div
                class="relative
                   overflow-hidden
                   rounded-3xl
                   bg-slate-900
                   px-7 py-10
                   sm:px-10
                   lg:px-14
                   lg:py-14">


                {{-- Background decoration --}}
                <div
                    class="absolute
                       -right-24
                       -top-24
                       w-72 h-72
                       rounded-full
                       bg-red-600/20
                       blur-3xl">
                </div>


                <div
                    class="absolute
                       -left-24
                       -bottom-24
                       w-72 h-72
                       rounded-full
                       bg-blue-600/10
                       blur-3xl">
                </div>


                <div
                    class="relative
                       flex flex-col
                       lg:flex-row
                       lg:items-center
                       lg:justify-between
                       gap-8">


                    <div class="max-w-2xl">

                        <div
                            class="inline-flex items-center gap-2
                               text-sm
                               font-semibold
                               text-red-400">

                            <i data-lucide="sparkles" class="w-4 h-4">
                            </i>

                            Votre prochain projet commence ici

                        </div>


                        <h2
                            class="mt-4
                               text-3xl md:text-4xl
                               font-bold
                               tracking-tight
                               text-white">

                            Vous avez un projet digital ?

                        </h2>


                        <p
                            class="mt-4
                              text-base
                              leading-7
                              text-slate-300">

                            Parlons de vos objectifs et trouvons ensemble
                            les solutions adaptées à votre activité.

                        </p>

                    </div>


                    <div
                        class="flex flex-col
                           sm:flex-row
                           gap-3
                           shrink-0">

                        <a href="{{ route('devis') }}"
                            class="inline-flex
                               items-center
                               justify-center
                               gap-2
                               px-6 py-3.5
                               rounded-xl
                               bg-red-600
                               text-white
                               text-sm
                               font-semibold
                               hover:bg-red-700
                               transition
                               shadow-lg
                               shadow-red-600/20">

                            Demander un devis

                            <i data-lucide="arrow-right" class="w-4 h-4">
                            </i>

                        </a>


                        <a href="{{ route('contact') }}"
                            class="inline-flex
                               items-center
                               justify-center
                               gap-2
                               px-6 py-3.5
                               rounded-xl
                               bg-white/10
                               border border-white/15
                               text-white
                               text-sm
                               font-semibold
                               hover:bg-white/15
                               transition">

                            Nous contacter

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>
    ```

@endsection
    