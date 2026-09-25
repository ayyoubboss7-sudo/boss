@extends('layouts.app')

@section('title', 'Secteurs d\'activité — ArtiWeb')

@section('meta_description', 'ArtiWeb accompagne différents secteurs d\'activité à Fès et au Maroc : hôtellerie,
    immobilier, santé, éducation, assurance, commerce, industrie et startups.')

@section('content')

    {{-- Hero --}}
    <section class="bg-white border-b border-slate-200">
        <div class="max-w-5xl mx-auto px-6 py-16 text-center">
            <div
                class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-red-50 border border-red-100 text-red-600 text-sm font-medium">
                <span class="w-2 h-2 rounded-full bg-red-600"></span>
                Secteurs d'activité
            </div>

            <h1 class="mt-6 text-4xl sm:text-5xl font-bold tracking-tight text-slate-900">
                Nous accompagnons
                <span class="text-red-600">votre secteur</span>
            </h1>

            <p class="mt-6 text-lg leading-8 text-slate-500 max-w-2xl mx-auto">
                Chaque activité a ses spécificités, ses clients et ses enjeux. Nous adaptons
                notre stratégie digitale à votre secteur pour convertir vos visiteurs en prospects.
            </p>
        </div>
    </section>

    {{-- Grille des secteurs --}}
    <section class="bg-slate-50">
        <div class="max-w-7xl mx-auto px-6 py-16">
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">

                @php
                    $secteurs = [
                        [
                            'icon' => 'utensils-crossed',
                            'titre' => 'Hôtellerie & restauration',
                            'texte' =>
                                'Attirez plus de clients et de réservations avec une présence digitale qui donne envie de venir chez vous.',
                        ],
                        [
                            'icon' => 'home',
                            'titre' => 'Immobilier',
                            'texte' =>
                                'Mettez en valeur vos biens et générez des contacts qualifiés d\'acheteurs et de locataires.',
                        ],
                        [
                            'icon' => 'graduation-cap',
                            'titre' => 'Éducation',
                            'texte' =>
                                'Développez la notoriété de votre établissement et simplifiez les inscriptions en ligne.',
                        ],
                        [
                            'icon' => 'stethoscope',
                            'titre' => 'Santé',
                            'texte' =>
                                'Rassurez vos patients avec une présence professionnelle et facilitez la prise de rendez-vous.',
                        ],
                        [
                            'icon' => 'shield-check',
                            'titre' => 'Assurance',
                            'texte' => 'Construisez la confiance et générez des demandes de devis qualifiées.',
                        ],
                        [
                            'icon' => 'shopping-bag',
                            'titre' => 'Commerce',
                            'texte' =>
                                'Boostez vos ventes en ligne et hors ligne grâce à une stratégie digitale complète.',
                        ],
                        [
                            'icon' => 'factory',
                            'titre' => 'Industrie',
                            'texte' => 'Valorisez votre expertise technique et développez votre présence B2B.',
                        ],
                        [
                            'icon' => 'rocket',
                            'titre' => 'PME & startups',
                            'texte' =>
                                'Accélérez votre croissance avec une stratégie digitale pensée pour votre budget.',
                        ],
                    ];
                @endphp

                @foreach ($secteurs as $secteur)
                    <div
                        class="group rounded-2xl border border-slate-200 bg-white p-6 hover:border-red-200 hover:shadow-lg hover:shadow-red-600/5 transition">
                        <div
                            class="w-12 h-12 rounded-xl bg-red-50 flex items-center justify-center group-hover:bg-red-600 transition">
                            <i data-lucide="{{ $secteur['icon'] }}"
                                class="w-6 h-6 text-red-600 group-hover:text-white transition"></i>
                        </div>

                        <h3 class="mt-5 font-semibold text-slate-900">
                            {{ $secteur['titre'] }}
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-slate-500">
                            {{ $secteur['texte'] }}
                        </p>

                        <a href="{{ route('devis') }}"
                            class="mt-4 inline-flex items-center gap-1.5 text-sm font-medium text-red-600 hover:gap-2.5 transition-all">
                            Demander un devis
                            <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    {{-- CTA final --}}
    <section class="bg-white border-t border-slate-200">
        <div class="max-w-5xl mx-auto px-6 py-16">
            <div class="rounded-3xl bg-slate-900 px-8 py-14 text-center relative overflow-hidden">
                <div class="absolute -top-20 -right-20 w-64 h-64 bg-red-600/20 rounded-full blur-3xl"></div>
                <div class="absolute -bottom-20 -left-20 w-64 h-64 bg-red-600/10 rounded-full blur-3xl"></div>

                <div class="relative">
                    <h2 class="text-2xl sm:text-3xl font-bold text-white">
                        Vous ne voyez pas votre secteur ?
                    </h2>
                    <p class="mt-4 text-slate-400 max-w-xl mx-auto">
                        Chaque activité mérite une stratégie sur mesure. Parlons de vos objectifs
                        et voyons comment ArtiWeb peut vous aider à développer votre visibilité.
                    </p>

                    <div class="mt-8 flex flex-col sm:flex-row items-center justify-center gap-3">
                        <a href="{{ route('devis') }}"
                            class="inline-flex items-center gap-2 px-6 py-3.5 rounded-xl bg-red-600 text-white font-semibold hover:bg-red-700 transition">
                            Demander un devis
                            <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                        <a href="{{ route('contact') }}"
                            class="inline-flex items-center gap-2 px-6 py-3.5 rounded-xl bg-white/10 text-white font-semibold hover:bg-white/20 transition">
                            Parler à un expert
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
