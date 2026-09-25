@extends('layouts.app')

@section('title', 'À propos — ArtiWeb')

@section('meta_description', 'ArtiWeb est une agence de communication et de marketing digital basée à Fès. Découvrez
    notre équipe, nos valeurs et notre approche orientée résultats.')

@section('content')

    {{-- Hero --}}
    <section class="bg-white border-b border-slate-200">
        <div class="max-w-5xl mx-auto px-6 py-16 text-center">
            <div
                class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-red-50 border border-red-100 text-red-600 text-sm font-medium">
                <span class="w-2 h-2 rounded-full bg-red-600"></span>
                À propos
            </div>

            <h1 class="mt-6 text-4xl sm:text-5xl font-bold tracking-tight text-slate-900">
                L'agence qui transforme votre
                <span class="text-red-600">présence digitale</span> en résultats
            </h1>

            <p class="mt-6 text-lg leading-8 text-slate-500 max-w-2xl mx-auto">
                Basée à Fès, ArtiWeb accompagne les entreprises marocaines et internationales
                dans leur croissance digitale : sites web, référencement, publicité en ligne
                et génération de leads.
            </p>
        </div>
    </section>


    {{-- Notre mission --}}
    <section class="bg-white">
        <div class="max-w-5xl mx-auto px-6 py-16">
            <div class="grid md:grid-cols-2 gap-12 items-center">

                <div>
                    <div
                        class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-red-50 border border-red-100 text-red-600 text-sm font-medium">
                        Notre mission
                    </div>
                    <h2 class="mt-5 text-2xl sm:text-3xl font-bold text-slate-900">
                        Ne pas seulement montrer ce que vous faites,
                        <span class="text-red-600">mais résoudre vos problèmes</span>
                    </h2>
                    <p class="mt-5 text-slate-500 leading-7">
                        Chez ArtiWeb, un site web ou une campagne publicitaire n'a de valeur
                        que s'ils génèrent des résultats concrets : plus de visibilité, plus
                        de contacts qualifiés et plus de clients.
                    </p>
                    <p class="mt-4 text-slate-500 leading-7">
                        Nous travaillons comme un véritable partenaire digital, pas seulement
                        comme un prestataire : nous prenons le temps de comprendre votre activité,
                        votre secteur et vos objectifs avant de proposer une stratégie.
                    </p>
                </div>

                <div class="rounded-2xl border border-slate-200 bg-slate-50 p-8">
                    <ul class="space-y-5">
                        <li class="flex gap-4">
                            <div class="w-10 h-10 rounded-lg bg-red-600 flex items-center justify-center shrink-0">
                                <i data-lucide="search" class="w-5 h-5 text-white"></i>
                            </div>
                            <div>
                                <p class="font-semibold text-slate-900">On comprend votre activité</p>
                                <p class="text-sm text-slate-500 mt-1">Avant toute chose, on écoute vos besoins réels.</p>
                            </div>
                        </li>
                        <li class="flex gap-4">
                            <div class="w-10 h-10 rounded-lg bg-red-600 flex items-center justify-center shrink-0">
                                <i data-lucide="target" class="w-5 h-5 text-white"></i>
                            </div>
                            <div>
                                <p class="font-semibold text-slate-900">On construit une stratégie claire</p>
                                <p class="text-sm text-slate-500 mt-1">Adaptée à votre secteur et à votre budget.</p>
                            </div>
                        </li>
                        <li class="flex gap-4">
                            <div class="w-10 h-10 rounded-lg bg-red-600 flex items-center justify-center shrink-0">
                                <i data-lucide="trending-up" class="w-5 h-5 text-white"></i>
                            </div>
                            <div>
                                <p class="font-semibold text-slate-900">On mesure les résultats</p>
                                <p class="text-sm text-slate-500 mt-1">Chaque action est suivie et ajustée dans le temps.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    {{-- Nos valeurs --}}
    <section class="bg-slate-50">
        <div class="max-w-7xl mx-auto px-6 py-16">
            <div class="text-center max-w-2xl mx-auto">
                <h2 class="text-2xl sm:text-3xl font-bold text-slate-900">Pourquoi ArtiWeb ?</h2>
                <p class="mt-4 text-slate-500">Quatre principes qui guident chacun de nos projets.</p>
            </div>

            <div class="mt-12 grid sm:grid-cols-2 lg:grid-cols-4 gap-6">

                <div class="rounded-2xl border border-slate-200 bg-white p-6">
                    <div class="w-12 h-12 rounded-xl bg-red-50 flex items-center justify-center">
                        <i data-lucide="award" class="w-6 h-6 text-red-600"></i>
                    </div>
                    <h3 class="mt-5 font-semibold text-slate-900">Expertise</h3>
                    <p class="mt-2 text-sm leading-6 text-slate-500">
                        Une équipe spécialisée en web, SEO, publicité et stratégie digitale.
                    </p>
                </div>

                <div class="rounded-2xl border border-slate-200 bg-white p-6">
                    <div class="w-12 h-12 rounded-xl bg-red-50 flex items-center justify-center">
                        <i data-lucide="sparkles" class="w-6 h-6 text-red-600"></i>
                    </div>
                    <h3 class="mt-5 font-semibold text-slate-900">Créativité</h3>
                    <p class="mt-2 text-sm leading-6 text-slate-500">
                        Des designs et des contenus pensés pour marquer et convertir.
                    </p>
                </div>

                <div class="rounded-2xl border border-slate-200 bg-white p-6">
                    <div class="w-12 h-12 rounded-xl bg-red-50 flex items-center justify-center">
                        <i data-lucide="cpu" class="w-6 h-6 text-red-600"></i>
                    </div>
                    <h3 class="mt-5 font-semibold text-slate-900">Technologie</h3>
                    <p class="mt-2 text-sm leading-6 text-slate-500">
                        Des outils modernes pour des sites rapides, fiables et évolutifs.
                    </p>
                </div>

                <div class="rounded-2xl border border-slate-200 bg-white p-6">
                    <div class="w-12 h-12 rounded-xl bg-red-50 flex items-center justify-center">
                        <i data-lucide="handshake" class="w-6 h-6 text-red-600"></i>
                    </div>
                    <h3 class="mt-5 font-semibold text-slate-900">Accompagnement</h3>
                    <p class="mt-2 text-sm leading-6 text-slate-500">
                        Un suivi continu, pas seulement une livraison ponctuelle.
                    </p>
                </div>

            </div>
        </div>
    </section>

    {{-- Localisation --}}
    <section class="bg-white border-t border-slate-200">
        <div class="max-w-5xl mx-auto px-6 py-16 text-center">
            <div
                class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-red-50 border border-red-100 text-red-600 text-sm font-medium">
                <i data-lucide="map-pin" class="w-4 h-4"></i>
                Fès, Maroc
            </div>
            <h2 class="mt-5 text-2xl sm:text-3xl font-bold text-slate-900">
                Une agence marocaine, des ambitions internationales
            </h2>
            <p class="mt-5 text-slate-500 max-w-2xl mx-auto leading-7">
                Installés à Fès, nous accompagnons des clients partout au Maroc et à l'international,
                avec la même exigence de qualité et de résultats.
            </p>
        </div>
    </section>

    {{-- CTA final --}}
    <section class="bg-slate-50 border-t border-slate-200">
        <div class="max-w-5xl mx-auto px-6 py-16">
            <div class="rounded-3xl bg-slate-900 px-8 py-14 text-center relative overflow-hidden">
                <div class="absolute -top-20 -right-20 w-64 h-64 bg-red-600/20 rounded-full blur-3xl"></div>
                <div class="absolute -bottom-20 -left-20 w-64 h-64 bg-red-600/10 rounded-full blur-3xl"></div>

                <div class="relative">
                    <h2 class="text-2xl sm:text-3xl font-bold text-white">
                        Vous avez un projet digital ?
                    </h2>
                    <p class="mt-4 text-slate-400 max-w-xl mx-auto">
                        Parlons-en. Notre équipe vous répond rapidement pour comprendre
                        votre besoin et vous proposer une solution adaptée.
                    </p>

                    <div class="mt-8 flex flex-col sm:flex-row items-center justify-center gap-3">
                        <a href="{{ route('devis') }}"
                            class="inline-flex items-center gap-2 px-6 py-3.5 rounded-xl bg-red-600 text-white font-semibold hover:bg-red-700 transition">
                            Demander un devis
                            <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                        <a href="{{ route('realisations') }}"
                            class="inline-flex items-center gap-2 px-6 py-3.5 rounded-xl bg-white/10 text-white font-semibold hover:bg-white/20 transition">
                            Voir nos réalisations
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
