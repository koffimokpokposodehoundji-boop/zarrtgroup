<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À Propos | SARL WELLE</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;800&display=swap" rel="stylesheet">
    <style>body { font-family: 'Plus Jakarta Sans', sans-serif; }</style>
</head>
<body class="bg-[#F8FAFC]">

    {{-- HEADER (Identique aux autres pages) --}}
    <header class="bg-black backdrop-blur-md border-b border-black fixed w-full z-50">
        <nav class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-orange-600 rounded-lg flex items-center justify-center font-bold text-xl  text-white">Z</div>
                <span class="text-xl font-bold tracking-tight text-white">ZARRT GROUP</span>
            </div>     
            <div class="hidden md:flex items-center space-x-8 text-sm  text-orange-600">
                <a href="{{ route('home') }}" class="hover:text-orange-600">Accueil</a>
                <a href="{{ route('projects.index') }}" class="hover:text-orange-600">Projets</a>
                <a href="{{ route('about') }}" class="text-orange-600">À propos</a>
                <a href="{{ route('contact') }}" class="px-5 py-2.5 bg-orange-600 text-white rounded-xl hover:bg-orange-700 transition-all">Contact</a>
            </div>
        </nav>
    </header>

    <main class="pt-32 pb-20">
        <div class="max-w-7xl mx-auto px-6">

            {{-- SECTION HERO --}}
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center mb-24">
                <div>
                    <span class="text-orange-600 font-bold text-2xl uppercase tracking-widest mb-4 block">Notre Histoire</span>
                    <h1 class="text-5xl font-extrabold text-slate-900 leading-tight mb-6">
                        L'innovation technologique au service du <span class="text-orange-600">Togo.</span>
                    </h1>
                    <p class="text-slate-600 text-lg leading-relaxed mb-8">
                         <strong>ZARRT GROUP</strong> est un acteur majeur de la transformation digitale et des infrastructures au Togo. Nous combinons expertise technique et vision innovante pour répondre aux défis de demain.
                    </p>
                    <div class="flex gap-4">
                        <div class="bg-white p-6 rounded-2xl shadow-sm border border-orange-600 flex-1">
                            <div class="text-3xl font-black text-orange-600 mb-1">1+</div>
                            <div class="text-slate-400 text-xs font-bold uppercase">Ans d'expérience</div>
                        </div>
                        <div class="bg-white p-6 rounded-2xl shadow-sm border border-orange-600 flex-1">
                            <div class="text-3xl font-black text-orange-600 mb-1">1+</div>
                            <div class="text-slate-400 text-xs font-bold uppercase">Projets livrés</div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="absolute -inset-0 bg-white rounded-[3rem] border border-orange-600"></div>
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&q=80" class="relative rounded-[2.5rem] shadow-2xl w-full h-[500px] object-cover">
                </div>
            </div>

           

        {{-- SECTION NOS VALEURS (BAS DE PAGE) --}}
            <div class="mt-32 border-t border-slate-100 pt-20">
                <div class="text-center mb-16">
                    <h2 class="text-2xl font-bold text-orange-600 mb-4 uppercase">Nos Valeurs</h2>
                    <p class="text-slate-500 font-medium text-lg">Les principes qui guident notre action au quotidien</p>
                </div>

                {{-- Première Ligne --}}
                
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
                    <div class="bg-orange p-10 rounded-[2.5rem] border border-orange-600 shadow-sm hover:shadow-xl transition-all duration-300 group">
                        <div class="w-14 h-14 bg-orange-600 rounded-2xl flex items-center justify-center text-white mb-8 shadow-lg shadow-orange-300">
                            <i class="fas fa-bullseye text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-4">Excellence</h3>
                        <p class="text-slate-500 text-[14px] leading-relaxed">Nous visons l'excellence dans chaque projet, en livrant des solutions de qualité supérieure.</p>
                    </div>

                    <div class="bg-orange p-10 rounded-[2.5rem] border border-orange-600 shadow-sm hover:shadow-xl transition-all duration-300 group">
                        <div class="w-14 h-14 bg-orange-500 rounded-2xl flex items-center justify-center text-white mb-8 shadow-lg shadow-orange-300">
                            <i class="fas fa-users text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-4">leadership</h3>
                        <p class="text-slate-500 text-[14px] leading-relaxed">Nous travaillons avec leadership.</p>
                    </div>

                    <div class="bg-orange p-10 rounded-[2.5rem] border border-orange-600 shadow-sm hover:shadow-xl transition-all duration-300 group">
                        <div class="w-14 h-14 bg-orange-500 rounded-2xl flex items-center justify-center text-white mb-8 shadow-lg shadow-orange-300">
                            <i class="fas fa-chart-line text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-4">Innovation</h3>
                        <p class="text-slate-500 text-[14px] leading-relaxed">Nous restons à la pointe de la technologie pour offrir des solutions innovantes et durables.</p>
                    </div>
                </div>

                
    </main>
{{-- FOOTER NOIR --}}
    <footer class="bg-[#0A0A0B] text-white pt-20 pb-10">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">

                {{-- Colonne 1 : Logo & Description --}}
                <div class="space-y-6">
                    <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-orange-600 rounded-lg flex items-center justify-center font-bold text-xl  text-white">Z</div>
                <span class="text-xl font-bold tracking-tight text-white">ZARRT GROUP</span>
            </div>     
                    <p class="text-slate-400 text-sm leading-relaxed">
                        Votre partenaire de confiance pour la transformation digitale et les solutions technologiques innovantes au Togo.
                    </p>
                </div>

                {{-- Colonne 2 : Liens Rapides --}}
                <div>
                    <h4 class="text-lg font-bold mb-6">Liens Rapides</h4>
                    <ul class="space-y-4 text-slate-400 text-sm">
                        <li><a href="{{ route('home') }}" class="hover:text-white transition-colors">Accueil</a></li>
                        <li><a href="services" class="hover:text-white transition-colors">Services</a></li>
                        <li><a href="{{ route('projects.index') }}" class="hover:text-white transition-colors">Projets</a></li>
                        <li><a href="{{ route('about') }}" class="hover:text-white transition-colors text-orange-500">À propos</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-white transition-colors">Contact</a></li>
                    </ul>
                </div>

                {{-- Colonne 3 : Nos Services --}}
                <div>
                    <h4 class="text-lg font-bold mb-6">Nos Services</h4>
                    <ul class="space-y-4 text-slate-400 text-sm">
                        <li><a href="#" class="hover:text-white transition-colors">Transformation Digitale</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Télécommunications</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Électronique </a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Énergies Renouvelables</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Génie Civil</a></li>
                    </ul>
                </div>

                {{-- Colonne 4 : Contact --}}
                <div>
                    <h4 class="text-lg font-bold mb-6">Contact</h4>
                    <ul class="space-y-4 text-slate-400 text-sm">
                        <li class="flex items-start space-x-3">
                            <i class="fas fa-location-dot mt-1 text-orange-500"></i>
                            <span>Lome,Togo</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <i class="fas fa-phone text-orange-500"></i>
                            <span>+228 70212677</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <i class="fas fa-envelope text-orange-500"></i>
                            <span>contact@zarrtgroup-sarl.tg</span>
                        </li>
                    </ul>
                    <div class="flex space-x-4 mt-8">
                        <a href="#" class="w-9 h-9 bg-orange-600 rounded-lg flex items-center justify-center hover:bg-blue-600 transition-all">
                            <i class="fab fa-linkedin-in text-sm"></i>
                        </a>
                        <a href="#" class="w-9 h-9 bg-orange-600 rounded-lg flex items-center justify-center hover:bg-blue-600 transition-all">
                            <i class="fab fa-facebook-f text-sm"></i>
                        </a>
                        <a href="#" class="w-9 h-9 bg-orange-600 rounded-lg flex items-center justify-center hover:bg-blue-600 transition-all">
                            <i class="fab fa-twitter text-sm"></i>
                        </a>
                    </div>
                </div>
            </div>

            {{-- Copyright --}}
            <div class="pt-8 border-t border-white/5 text-center">
                <p class="text-orange-600 text-xs">
                    © 2026  ZARRT GROUP. Tous droits réservés.
                </p>
            </div>
        </div>
    </footer>
</body>
</html>
