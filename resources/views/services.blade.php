@extends('layouts.app')

@section('title', 'Nos services — ArtiWeb')
@section('meta_description', 'Création de sites web, SEO, Google Ads, Social Ads et génération de leads. Découvrez les services digitaux d\'ArtiWeb, agence basée à Fès.')

@section('content')

    {{-- Hero --}}
    <section class="bg-white border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-6 py-20">
            <div class="max-w-3xl">

                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-red-50 border border-red-100 text-red-600 text-sm font-medium">
                    <span class="w-2 h-2 rounded-full bg-red-600"></span>
                    Nos services
                </div>

                <h1 class="mt-6 text-4xl sm:text-5xl font-bold tracking-tight text-slate-900">
                    Des services pensés pour
                    <span class="block text-red-600">faire grandir votre activité.</span>
                </h1>

                <p class="mt-6 max-w-2xl text-lg leading-8 text-slate-500">
                    De la création de votre site web à la génération de vos
                    prospects, ArtiWeb vous accompagne sur chaque levier
                    de votre visibilité digitale.
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
        </div>
    </section>

    {{-- Création & Web --}}
    <section class="max-w-7xl mx-auto px-6 py-16">

        <div class="max-w-2xl">
            <span class="text-sm font-semibold text-red-600 uppercase tracking-wider">01 — Création & Web</span>
            <h2 class="mt-3 text-3xl font-bold text-slate-900">
                Un site web pensé pour convertir vos visiteurs.
            </h2>
        </div>

        <div class="mt-10 grid md:grid-cols-3 gap-6">

            <div class="bg-white rounded-2xl border border-slate-200 p-6 hover:shadow-lg hover:-translate-y-1 hover:border-red-200 transition-all duration-200">
                <div class="w-12 h-12 rounded-xl bg-red-50 flex items-center justify-center text-red-600">
                    <i data-lucide="layout-template" class="w-5 h-5"></i>
                </div>
                <h3 class="mt-5 text-lg font-bold text-slate-900">Création de site web</h3>
                <p class="mt-2 text-sm leading-6 text-slate-500">
                    Un site vitrine rapide, moderne et pensé pour présenter
                    clairement votre activité.
                </p>
            </div>

            <div class="bg-white rounded-2xl border border-slate-200 p-6 hover:shadow-lg hover:-translate-y-1 hover:border-red-200 transition-all duration-200">
                <div class="w-12 h-12 rounded-xl bg-red-50 flex items-center justify-center text-red-600">
                    <i data-lucide="shopping-cart" class="w-5 h-5"></i>
                </div>
                <h3 class="mt-5 text-lg font-bold text-slate-900">E-commerce</h3>
                <p class="mt-2 text-sm leading-6 text-slate-500">
                    Une boutique en ligne fiable, sécurisée et prête à
                    encaisser vos premières ventes.
                </p>
            </div>

            <div class="bg-white rounded-2xl border border-slate-200 p-6 hover:shadow-lg hover:-translate-y-1 hover:border-red-200 transition-all duration-200">
                <div class="w-12 h-12 rounded-xl bg-red-50 flex items-center justify-center text-red-600">
                    <i data-lucide="code-2" class="w-5 h-5"></i>
                </div>
                <h3 class="mt-5 text-lg font-bold text-slate-900">Développement web</h3>
                <p class="mt-2 text-sm leading-6 text-slate-500">
                    Des outils sur-mesure (portails, applications internes)
                    adaptés à vos process.
                </p>
            </div>

        </div>

    </section>

    {{-- Acquisition --}}
    <section class="bg-white border-y border-slate-200">
        <div class="max-w-7xl mx-auto px-6 py-16">

            <div class="max-w-2xl">
                <span class="text-sm font-semibold text-red-600 uppercase tracking-wider">02 — Acquisition</span>
                <h2 class="mt-3 text-3xl font-bold text-slate-900">
                    Soyez visible quand vos clients vous cherchent.
                </h2>
            </div>

            <div class="mt-10 grid md:grid-cols-3 gap-6">

                <div class="bg-slate-50 rounded-2xl border border-slate-200 p-6 hover:shadow-lg hover:-translate-y-1 hover:border-red-200 transition-all duration-200">
                    <div class="w-12 h-12 rounded-xl bg-red-50 flex items-center justify-center text-red-600">
                        <i data-lucide="search" class="w-5 h-5"></i>
                    </div>
                    <h3 class="mt-5 text-lg font-bold text-slate-900">SEO</h3>
                    <p class="mt-2 text-sm leading-6 text-slate-500">
                        Remontez dans les résultats Google et gagnez du
                        trafic qualifié sur le long terme.
                    </p>
                </div>

                <div class="bg-slate-50 rounded-2xl border border-slate-200 p-6 hover:shadow-lg hover:-translate-y-1 hover:border-red-200 transition-all duration-200">
                    <div class="w-12 h-12 rounded-xl bg-red-50 flex items-center justify-center text-red-600">
                        <i data-lucide="target" class="w-5 h-5"></i>
                    </div>
                    <h3 class="mt-5 text-lg font-bold text-slate-900">Google Ads (SEA)</h3>
                    <p class="mt-2 text-sm leading-6 text-slate-500">
                        Des campagnes rentables qui vous amènent des
                        clients prêts à acheter.
                    </p>
                </div>

                <div class="bg-slate-50 rounded-2xl border border-slate-200 p-6 hover:shadow-lg hover:-translate-y-1 hover:border-red-200 transition-all duration-200">
                    <div class="w-12 h-12 rounded-xl bg-red-50 flex items-center justify-center text-red-600">
                        <i data-lucide="megaphone" class="w-5 h-5"></i>
                    </div>
                    <h3 class="mt-5 text-lg font-bold text-slate-900">Social Ads</h3>
                    <p class="mt-2 text-sm leading-6 text-slate-500">
                        Transformez vos campagnes publicitaires en
                        prospects qualifiés sur les réseaux sociaux.
                    </p>
                </div>

            </div>

        </div>
    </section>

    {{-- Marketing & Contenu --}}
    <section class="max-w-7xl mx-auto px-6 py-16">

        <div class="max-w-2xl">
            <span class="text-sm font-semibold text-red-600 uppercase tracking-wider">03 — Marketing & Contenu</span>
            <h2 class="mt-3 text-3xl font-bold text-slate-900">
                Une stratégie et un contenu qui racontent votre marque.
            </h2>
        </div>

        <div class="mt-10 grid md:grid-cols-3 gap-6">

            <div class="bg-white rounded-2xl border border-slate-200 p-6 hover:shadow-lg hover:-translate-y-1 hover:border-red-200 transition-all duration-200">
                <div class="w-12 h-12 rounded-xl bg-red-50 flex items-center justify-center text-red-600">
                    <i data-lucide="compass" class="w-5 h-5"></i>
                </div>
                <h3 class="mt-5 text-lg font-bold text-slate-900">Stratégie digitale</h3>
                <p class="mt-2 text-sm leading-6 text-slate-500">
                    Un plan d'action clair pour atteindre vos objectifs de
                    visibilité et de croissance.
                </p>
            </div>

            <div class="bg-white rounded-2xl border border-slate-200 p-6 hover:shadow-lg hover:-translate-y-1 hover:border-red-200 transition-all duration-200">
                <div class="w-12 h-12 rounded-xl bg-red-50 flex items-center justify-center text-red-600">
                    <i data-lucide="video" class="w-5 h-5"></i>
                </div>
                <h3 class="mt-5 text-lg font-bold text-slate-900">Contenu & vidéo</h3>
                <p class="mt-2 text-sm leading-6 text-slate-500">
                    Des visuels et vidéos publicitaires qui captent
                    l'attention et renforcent votre image.
                </p>
            </div>

            <div class="bg-white rounded-2xl border border-slate-200 p-6 hover:shadow-lg hover:-translate-y-1 hover:border-red-200 transition-all duration-200">
                <div class="w-12 h-12 rounded-xl bg-red-50 flex items-center justify-center text-red-600">
                    <i data-lucide="share-2" class="w-5 h-5"></i>
                </div>
                <h3 class="mt-5 text-lg font-bold text-slate-900">Social Media</h3>
                <p class="mt-2 text-sm leading-6 text-slate-500">
                    Une présence régulière et cohérente sur les réseaux
                    où se trouvent vos clients.
                </p>
            </div>

        </div>

    </section>

    {{-- CTA final --}}
    <section class="max-w-7xl mx-auto px-6 pb-20">
        <div class="relative overflow-hidden rounded-2xl bg-slate-900 px-8 py-12 md:px-14">
            
        </div>
    </section>

@endsection