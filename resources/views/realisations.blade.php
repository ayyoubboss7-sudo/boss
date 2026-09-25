@extends('layouts.app')

@section('title', 'Nos réalisations — ArtiWeb')
@section('meta_description', 'Découvrez les projets web, SEO et publicitaires réalisés par ArtiWeb pour ses clients au Maroc et à l\'international.')

@section('content')

    {{-- Hero --}}
    <section class="bg-white border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-6 py-20">
            <div class="max-w-3xl">

                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-red-50 border border-red-100 text-red-600 text-sm font-medium">
                    <span class="w-2 h-2 rounded-full bg-red-600"></span>
                    Nos réalisations
                </div>

                <h1 class="mt-6 text-4xl sm:text-5xl font-bold tracking-tight text-slate-900">
                    Des projets qui parlent
                    <span class="block text-red-600">mieux qu'un discours.</span>
                </h1>

                <p class="mt-6 max-w-2xl text-lg leading-8 text-slate-500">
                    Sites web, campagnes SEO et publicitaires : découvrez
                    quelques résultats concrets obtenus pour nos clients.
                </p>

            </div>
        </div>
    </section>

    {{-- Chiffres clés --}}
    <section class="border-b border-slate-200 bg-slate-900">
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

    {{-- Grille de projets --}}
    <section class="max-w-7xl mx-auto px-6 py-16">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

            @php
                $projets = [
                    ['cat' => 'Web', 'icon' => 'layout-template', 'titre' => 'Site vitrine — Cabinet juridique', 'resultat' => '+60% de demandes de contact en 3 mois'],
                    ['cat' => 'E-commerce', 'icon' => 'shopping-cart', 'titre' => 'Boutique en ligne — Cosmétique', 'resultat' => '+120% de ventes en ligne la première année'],
                    ['cat' => 'SEO', 'icon' => 'search', 'titre' => 'Référencement — Agence immobilière', 'resultat' => 'Top 3 Google sur 15 mots-clés stratégiques'],
                    ['cat' => 'Social Ads', 'icon' => 'megaphone', 'titre' => 'Campagne Social Ads — Restaurant', 'resultat' => 'Coût par lead divisé par 2'],
                    ['cat' => 'Web', 'icon' => 'building-2', 'titre' => 'Refonte de site — PME industrielle', 'resultat' => 'Temps de chargement réduit de 70%'],
                    ['cat' => 'SEO', 'icon' => 'trending-up', 'titre' => 'SEO local — Clinique dentaire', 'resultat' => '+80% de trafic organique en 6 mois'],
                ];
            @endphp

            @foreach($projets as $projet)
                <div class="group bg-white rounded-2xl border border-slate-200 p-7 hover:shadow-lg hover:-translate-y-1 hover:border-red-200 transition-all duration-200">

                    <div class="w-12 h-12 rounded-xl bg-red-50 flex items-center justify-center text-red-600">
                        <i data-lucide="{{ $projet['icon'] }}" class="w-5 h-5"></i>
                    </div>

                    <span class="mt-5 inline-block text-xs font-semibold text-red-600 uppercase tracking-wider">{{ $projet['cat'] }}</span>
                    <h3 class="mt-2 text-lg font-bold text-slate-900">{{ $projet['titre'] }}</h3>
                    <p class="mt-2 text-sm leading-6 text-slate-500">{{ $projet['resultat'] }}</p>

                </div>
            @endforeach

        </div>
    </section>

    {{-- Témoignages --}}
    <section class="bg-white border-y border-slate-200">
        <div class="max-w-7xl mx-auto px-6 py-16">

            <div class="max-w-2xl">
                <span class="text-sm font-semibold text-red-600 uppercase tracking-wider">Ils nous font confiance</span>
                <h2 class="mt-3 text-3xl font-bold text-slate-900">
                    Ce que nos clients disent de nous.
                </h2>
            </div>

            <div class="mt-10 grid md:grid-cols-3 gap-6">

                @php
                    $temoignages = [
                        ['nom' => 'Salma Bennani', 'poste' => 'Gérante, Clinique dentaire', 'texte' => 'L\'équipe ArtiWeb a doublé notre visibilité en ligne en quelques mois. Un vrai partenaire, pas juste un prestataire.'],
                        ['nom' => 'Yassine El Amrani', 'poste' => 'Fondateur, Boutique en ligne', 'texte' => 'Notre nouveau site a transformé nos ventes. Réactifs, professionnels et à l\'écoute de nos besoins.'],
                        ['nom' => 'Karim Idrissi', 'poste' => 'Directeur, Cabinet juridique', 'texte' => 'Des résultats mesurables dès le premier mois de campagne. Je recommande sans hésiter.'],
                    ];
                @endphp

                @foreach($temoignages as $t)
                    <div class="bg-slate-50 rounded-2xl border border-slate-200 p-6">
                        <div class="flex gap-1 text-amber-400">
                            @for($i = 0; $i < 5; $i++)
                                <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                            @endfor
                        </div>
                        <p class="mt-4 text-sm leading-7 text-slate-600">
                            « {{ $t['texte'] }} »
                        </p>
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

    {{-- CTA final --}}
  

@endsection