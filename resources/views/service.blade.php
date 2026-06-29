<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos Services - ZARRT GROUP</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <style>
        body { font-family: 'Poppins', sans-serif; background-color:#db4b0d; color: #1e293b; overflow-x: hidden; }

        .service-card {
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border: 1px solid #e2e8f0;
            display: flex;
            flex-direction: column;
            height: 100%;
        }
        .service-card:hover {
            transform: translateY(-12px);
            box-shadow: 0 20px 40px -15px rgba(0, 0, 0, 0.1);
            border-color: transparent;
        }

        .glow-blue:hover { box-shadow: 0 15px 30px -5px rgba(59, 130, 246, 0.25); }
        .glow-purple:hover { box-shadow: 0 15px 30px -5px rgba(168, 85, 247, 0.25); }
        .glow-orange:hover { box-shadow: 0 15px 30px -5px rgba(249, 115, 22, 0.25); }
        .glow-emerald:hover { box-shadow: 0 15px 30px -5px rgba(16, 185, 129, 0.25); }
        .glow-slate:hover { box-shadow: 0 15px 30px -5px rgba(71, 85, 105, 0.25); }

        .check-icon { color: #10b981; font-size: 0.9rem; margin-right: 10px; }

        #mobile-menu {
            transform: translateY(-150%);
            transition: transform 0.4s cubic-bezier(0.23, 1, 0.32, 1);
        }
        #mobile-menu.open {
            transform: translateY(0);
        }
    </style>
</head>
<body class="antialiased">

    <nav class="fixed top-0 w-full z-50 bg-black text-black py-3 sm:py-4 px-4 sm:px-6 border-b border-black/10 backdrop-blur-md bg-opacity-95">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <div class="flex items-center gap-3">
                <div class="w-9 h-9 sm:w-10 sm:h-10 bg-orange-600 rounded-lg flex items-center justify-center font-bold text-lg sm:text-xl text-white">Z</div>
                <span class="text-lg sm:text-xl font-bold tracking-tight text-orange-600">ZARRT GROUP</span>
            </div>
            <div class="hidden lg:flex items-center gap-1">
               <a href="{{ url('/') }}" class="px-4 py-2 text-sm text-orange-600 font-bold rounded-full">Accueil</a>
                <a href="{{ url('services') }}" class="px-4 py-2 text-sm text-orange-600 font-semibold hover:text-orange-600 transition">Services</a>
                <a href="{{ url('projets') }}" class="px-4 py-2 text-sm text-orange-600 font-semibold hover:text-orange-600 transition">Projets</a>
                <a href="{{ url('a-propos') }}" class="px-4 py-2 text-sm text-orange-600 font-semibold hover:text-orange-600 transition">À propos</a>
                <a href="{{ url('contact') }}" class="ml-4 px-6 py-2 bg-orange-600 text-white text-sm font-bold rounded-full hover:bg-orange-600 transition shadow-lg shadow-slate-200">Contact</a>
            </div>

            <button id="menu-toggle" class="lg:hidden text-orange-600 text-2xl w-10 h-10 flex items-center justify-center">
                <i class="fas fa-bars"></i>
            </button>
        </div>

        <<!-- Menu mobile déroulant -->
        <div id="mobile-menu"
             class="lg:hidden absolute top-full left-0 w-full bg-black/95 backdrop-blur-lg px-6 py-5 flex flex-col gap-1 shadow-xl border-t border-white/10">
            <a href="{{ url('/') }}"        class="px-4 py-3 text-base text-orange-500 font-bold   rounded-xl hover:bg-white/10 transition">Accueil</a>
            <a href="{{ url('services') }}" class="px-4 py-3 text-base text-white font-semibold rounded-xl hover:bg-white/10 transition">Services</a>
            <a href="{{ url('projets') }}"  class="px-4 py-3 text-base text-white font-semibold rounded-xl hover:bg-white/10 transition">Projets</a>
            <a href="{{ url('a-propos') }}" class="px-4 py-3 text-base text-white font-semibold rounded-xl hover:bg-white/10 transition">À propos</a>
            <a href="{{ url('contact') }}"  class="mt-2 px-4 py-3 bg-orange-600 text-white text-base font-bold rounded-xl text-center hover:bg-orange-700 transition">Contact</a>
        </div>
    </nav>

    <header class="relative pt-32 sm:pt-36 md:pt-40 pb-16 sm:pb-20 md:pb-24 bg-orange-600 text-white overflow-hidden">
        <div class="absolute top-0 right-0 w-1/2 sm:w-1/3 h-full bg-orange-600 blur-[80px] sm:blur-[120px] rounded-full"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10 text-center" data-aos="zoom-out">
            <h1 class="text-3xl sm:text-5xl md:text-7xl font-extrabold tracking-tighter mb-4 sm:mb-6">Nos Services</h1>
            <p class="text-base sm:text-xl text-white max-w-2xl mx-auto leading-relaxed px-2">
                Une expertise multisectorielle pour répondre aux défis technologiques de demain.
            </p>
        </div>
    </header>

    <main class="py-12 sm:py-16 md:py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 space-y-16 sm:space-y-20 md:space-y-28">

            <section class="space-y-8 sm:space-y-12">
                <div class="flex items-center gap-4" data-aos="fade-right">
                    <span class="h-10 sm:h-12 w-2 bg-blue-600 rounded-full"></span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 tracking-tight">Informatique</h2>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 sm:gap-8">
                    <div class="border border-orange-600 service-card glow-blue bg-white p-6 sm:p-8 md:p-10 rounded-[1.5rem] sm:rounded-[2.5rem]" data-aos="fade-up">
                        <div class="w-14 h-14 sm:w-16 sm:h-16 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center mb-6 sm:mb-8 shadow-inner">
                            <i class="fas fa-rocket text-2xl sm:text-3xl"></i>
                        </div>
                        <h3 class="text-xl sm:text-2xl font-bold mb-3 sm:mb-4">Stratégie Digitale</h3>
                        <p class="text-slate-500 text-sm leading-relaxed mb-6 sm:mb-8">Accompagnement dans la migration de vos processus vers le numérique.</p>
                        <ul class="space-y-3 sm:space-y-4 text-sm font-medium border-t pt-6 sm:pt-8 mt-auto">
                            <li><i class="fas fa-check-circle check-icon"></i>Audit de maturité</li>
                            <li><i class="fas fa-check-circle check-icon"></i>Roadmap technologique</li>
                            <li><i class="fas fa-check-circle check-icon"></i>Conseil en innovation</li>
                        </ul>
                    </div>
                    <div class="border border-orange-600 service-card glow-blue bg-white p-6 sm:p-8 md:p-10 rounded-[1.5rem] sm:rounded-[2.5rem]" data-aos="fade-up" data-aos-delay="100">
                        <div class="w-14 h-14 sm:w-16 sm:h-16 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center mb-6 sm:mb-8 shadow-inner">
                            <i class="fas fa-user-shield text-2xl sm:text-3xl"></i>
                        </div>
                        <h3 class="text-xl sm:text-2xl font-bold mb-3 sm:mb-4">Cybersécurité</h3>
                        <p class="text-slate-500 text-sm leading-relaxed mb-6 sm:mb-8">Protection avancée de vos données et systèmes critiques.</p>
                        <ul class="space-y-3 sm:space-y-4 text-sm font-medium border-t pt-6 sm:pt-8 mt-auto">
                            <li><i class="fas fa-check-circle check-icon"></i>Tests d'intrusion</li>
                            <li><i class="fas fa-check-circle check-icon"></i>Audit de sécurité</li>
                            <li><i class="fas fa-check-circle check-icon"></i>Conformité RGPD</li>
                        </ul>
                    </div>
                    <div class="border border-orange-600 service-card glow-blue bg-white p-6 sm:p-8 md:p-10 rounded-[1.5rem] sm:rounded-[2.5rem] sm:col-span-2 md:col-span-1" data-aos="fade-up" data-aos-delay="200">
                        <div class="w-14 h-14 sm:w-16 sm:h-16 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center mb-6 sm:mb-8 shadow-inner">
                            <i class="fas fa-cloud-upload-alt text-2xl sm:text-3xl"></i>
                        </div>
                        <h3 class="text-xl sm:text-2xl font-bold mb-3 sm:mb-4">Solutions Cloud</h3>
                        <p class="text-slate-500 text-sm leading-relaxed mb-6 sm:mb-8">Infrastructure flexible sur AWS, Azure ou Google Cloud.</p>
                        <ul class="space-y-3 sm:space-y-4 text-sm font-medium border-t pt-6 sm:pt-8 mt-auto">
                            <li><i class="fas fa-check-circle check-icon"></i>Migration Cloud</li>
                            <li><i class="fas fa-check-circle check-icon"></i>Gestion de serveurs</li>
                            <li><i class="fas fa-check-circle check-icon"></i>Sauvegarde sécurisée</li>
                        </ul>
                    </div>
                </div>
            </section>

            <section class="space-y-8 sm:space-y-12">
                <div class="flex items-center gap-4" data-aos="fade-right">
                    <span class="h-10 sm:h-12 w-2 bg-purple-600 rounded-full"></span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 tracking-tight">Télécommunications</h2>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 sm:gap-8">
                    <div class="border border-orange-600 service-card glow-purple bg-white p-6 sm:p-8 md:p-10 rounded-[1.5rem] sm:rounded-[2.5rem]" data-aos="fade-up">
                        <div class="w-14 h-14 sm:w-16 sm:h-16 bg-purple-50 text-purple-600 rounded-2xl flex items-center justify-center mb-6 sm:mb-8">
                            <i class="fas fa-network-wired text-2xl sm:text-3xl"></i>
                        </div>
                        <h3 class="text-xl sm:text-2xl font-bold mb-3 sm:mb-4">Fibre Optique</h3>
                        <p class="text-slate-500 text-sm mb-6 sm:mb-8">Déploiement et raccordement réseaux très haut débit.</p>
                        <ul class="space-y-3 sm:space-y-4 text-sm font-medium border-t pt-6 sm:pt-8 mt-auto">
                            <li><i class="fas fa-check-circle check-icon"></i>Études de terrain</li>
                            <li><i class="fas fa-check-circle check-icon"></i>Installation FTTH/FTTO</li>
                        </ul>
                    </div>
                    <div class="border border-orange-600 service-card glow-purple bg-white p-6 sm:p-8 md:p-10 rounded-[1.5rem] sm:rounded-[2.5rem]" data-aos="fade-up" data-aos-delay="100">
                        <div class="w-14 h-14 sm:w-16 sm:h-16 bg-purple-50 text-purple-600 rounded-2xl flex items-center justify-center mb-6 sm:mb-8">
                            <i class="fas fa-tower-broadcast text-2xl sm:text-3xl"></i>
                        </div>
                        <h3 class="text-xl sm:text-2xl font-bold mb-3 sm:mb-4">Réseaux Mobiles</h3>
                        <p class="text-slate-500 text-sm mb-6 sm:mb-8">Expertise en infrastructures 4G et déploiement 5G.</p>
                        <ul class="space-y-3 sm:space-y-4 text-sm font-medium border-t pt-6 sm:pt-8 mt-auto">
                            <li><i class="fas fa-check-circle check-icon"></i>Installation antennes</li>
                            <li><i class="fas fa-check-circle check-icon"></i>Maintenance préventive</li>
                        </ul>
                    </div>
                    <div class="border border-orange-600 service-card glow-purple bg-white p-6 sm:p-8 md:p-10 rounded-[1.5rem] sm:rounded-[2.5rem] sm:col-span-2 md:col-span-1" data-aos="fade-up" data-aos-delay="200">
                        <div class="w-14 h-14 sm:w-16 sm:h-16 bg-purple-50 text-purple-600 rounded-2xl flex items-center justify-center mb-6 sm:mb-8">
                            <i class="fas fa-satellite text-2xl sm:text-3xl"></i>
                        </div>
                        <h3 class="text-xl sm:text-2xl font-bold mb-3 sm:mb-4">Faisceaux Hertziens</h3>
                        <p class="text-slate-500 text-sm mb-6 sm:mb-8">Solutions de transmission par ondes radio haute capacité.</p>
                        <ul class="space-y-3 sm:space-y-4 text-sm font-medium border-t pt-6 sm:pt-8 mt-auto">
                            <li><i class="fas fa-check-circle check-icon"></i>Liaisons point à point</li>
                            <li><i class="fas fa-check-circle check-icon"></i>Configuration FH</li>
                        </ul>
                    </div>
                </div>
            </section>

            <section class="space-y-8 sm:space-y-12">
                <div class="flex items-center gap-4" data-aos="fade-right">
                    <span class="h-10 sm:h-12 w-2 bg-orange-600 rounded-full"></span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 tracking-tight">Électronique</h2>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 sm:gap-8">
                    <div class="border border-orange-600 service-card glow-orange bg-white p-6 sm:p-8 md:p-10 rounded-[1.5rem] sm:rounded-[2.5rem]" data-aos="fade-up">
                        <div class="w-14 h-14 sm:w-16 sm:h-16 bg-orange-50 text-orange-600 rounded-2xl flex items-center justify-center mb-6 sm:mb-8">
                            <i class="fas fa-microchip text-2xl sm:text-3xl"></i>
                        </div>
                        <h3 class="text-xl sm:text-2xl font-bold mb-3 sm:mb-4">Capteurs IoT</h3>
                        <p class="text-slate-500 text-sm mb-6 sm:mb-8">Solutions de monitoring intelligent en temps réel.</p>
                        <ul class="space-y-3 sm:space-y-4 text-sm font-medium border-t pt-6 sm:pt-8 mt-auto">
                            <li><i class="fas fa-check-circle check-icon"></i>Smart City</li>
                            <li><i class="fas fa-check-circle check-icon"></i>Tracking industriel</li>
                        </ul>
                    </div>
                    <div class="border border-orange-600 service-card glow-orange bg-white p-6 sm:p-8 md:p-10 rounded-[1.5rem] sm:rounded-[2.5rem]" data-aos="fade-up" data-aos-delay="100">
                        <div class="w-14 h-14 sm:w-16 sm:h-16 bg-orange-50 text-orange-600 rounded-2xl flex items-center justify-center mb-6 sm:mb-8">
                            <i class="fas fa-house-laptop text-2xl sm:text-3xl"></i>
                        </div>
                        <h3 class="text-xl sm:text-2xl font-bold mb-3 sm:mb-4">Domotique</h3>
                        <p class="text-slate-500 text-sm mb-6 sm:mb-8">Automatisation résidentielle et gestion d'accès.</p>
                        <ul class="space-y-3 sm:space-y-4 text-sm font-medium border-t pt-6 sm:pt-8 mt-auto">
                            <li><i class="fas fa-check-circle check-icon"></i>Contrôle intelligent</li>
                            <li><i class="fas fa-check-circle check-icon"></i>Sécurité connectée</li>
                        </ul>
                    </div>
                    <div class="border border-orange-600 service-card glow-orange bg-white p-6 sm:p-8 md:p-10 rounded-[1.5rem] sm:rounded-[2.5rem] sm:col-span-2 md:col-span-1" data-aos="fade-up" data-aos-delay="200">
                        <div class="w-14 h-14 sm:w-16 sm:h-16 bg-orange-50 text-orange-600 rounded-2xl flex items-center justify-center mb-6 sm:mb-8">
                            <i class="fas fa-vr-cardboard text-2xl sm:text-3xl"></i>
                        </div>
                        <h3 class="text-xl sm:text-2xl font-bold mb-3 sm:mb-4">IA Embarquée</h3>
                        <p class="text-slate-500 text-sm mb-6 sm:mb-8">Développement d'algorithmes pour objets connectés.</p>
                        <ul class="space-y-3 sm:space-y-4 text-sm font-medium border-t pt-6 sm:pt-8 mt-auto">
                            <li><i class="fas fa-check-circle check-icon"></i>Edge Computing</li>
                            <li><i class="fas fa-check-circle check-icon"></i>Optimisation</li>
                        </ul>
                    </div>
                </div>
            </section>

            <section class="space-y-8 sm:space-y-12">
                <div class="flex items-center gap-4" data-aos="fade-right">
                    <span class="h-10 sm:h-12 w-2 bg-emerald-600 rounded-full"></span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 tracking-tight">Génie électrique</h2>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 sm:gap-8">
                    <div class="border border-orange-600 service-card glow-emerald bg-white p-6 sm:p-8 md:p-10 rounded-[1.5rem] sm:rounded-[2.5rem]" data-aos="fade-up">
                        <div class="w-14 h-14 sm:w-16 sm:h-16 bg-emerald-50 text-emerald-600 rounded-2xl flex items-center justify-center mb-6 sm:mb-8">
                            <i class="fas fa-solar-panel text-2xl sm:text-3xl"></i>
                        </div>
                        <h3 class="text-xl sm:text-2xl font-bold mb-3 sm:mb-4">Solaire</h3>
                        <p class="text-slate-500 text-sm mb-6 sm:mb-8">Installation de centrales photovoltaïques sur mesure.</p>
                        <ul class="space-y-3 sm:space-y-4 text-sm font-medium border-t pt-6 sm:pt-8 mt-auto">
                            <li><i class="fas fa-check-circle check-icon"></i>Étude de rendement</li>
                            <li><i class="fas fa-check-circle check-icon"></i>Autoconsommation</li>
                        </ul>
                    </div>
                    <div class="border border-orange-600 service-card glow-emerald bg-white p-6 sm:p-8 md:p-10 rounded-[1.5rem] sm:rounded-[2.5rem]" data-aos="fade-up" data-aos-delay="100">
                        <div class="w-14 h-14 sm:w-16 sm:h-16 bg-emerald-50 text-emerald-600 rounded-2xl flex items-center justify-center mb-6 sm:mb-8">
                            <i class="fas fa-plug-circle-bolt text-2xl sm:text-3xl"></i>
                        </div>
                        <h3 class="text-xl sm:text-2xl font-bold mb-3 sm:mb-4">Électricité</h3>
                        <p class="text-slate-500 text-sm mb-6 sm:mb-8">Conception et maintenance de réseaux électriques.</p>
                        <ul class="space-y-3 sm:space-y-4 text-sm font-medium border-t pt-6 sm:pt-8 mt-auto">
                            <li><i class="fas fa-check-circle check-icon"></i>Basse et Haute Tension</li>
                            <li><i class="fas fa-check-circle check-icon"></i>Mise aux normes</li>
                        </ul>
                    </div>
                    <div class="border border-orange-600 service-card glow-emerald bg-white p-6 sm:p-8 md:p-10 rounded-[1.5rem] sm:rounded-[2.5rem] sm:col-span-2 md:col-span-1" data-aos="fade-up" data-aos-delay="200">
                        <div class="w-14 h-14 sm:w-16 sm:h-16 bg-emerald-50 text-emerald-600 rounded-2xl flex items-center justify-center mb-6 sm:mb-8">
                            <i class="fas fa-charging-station text-2xl sm:text-3xl"></i>
                        </div>
                        <h3 class="text-xl sm:text-2xl font-bold mb-3 sm:mb-4">Bornes IRVE</h3>
                        <p class="text-slate-500 text-sm mb-6 sm:mb-8">Infrastructure de recharge pour véhicules électriques.</p>
                        <ul class="space-y-3 sm:space-y-4 text-sm font-medium border-t pt-6 sm:pt-8 mt-auto">
                            <li><i class="fas fa-check-circle check-icon"></i>Installation rapide</li>
                            <li><i class="fas fa-check-circle check-icon"></i>Supervision</li>
                        </ul>
                    </div>
                </div>
            </section>

            <section class="space-y-8 sm:space-y-12 pb-8 sm:pb-16">
                <div class="flex items-center gap-4" data-aos="fade-right">
                    <span class="h-10 sm:h-12 w-2 bg-slate-600 rounded-full"></span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 tracking-tight">Génie Civil</h2>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 sm:gap-8">
                    <div class="border border-orange-600 service-card glow-slate bg-white p-6 sm:p-8 md:p-10 rounded-[1.5rem] sm:rounded-[2.5rem]" data-aos="fade-up">
                        <div class="w-14 h-14 sm:w-16 sm:h-16 bg-slate-100 text-slate-600 rounded-2xl flex items-center justify-center mb-6 sm:mb-8">
                            <i class="fas fa-road text-2xl sm:text-3xl"></i>
                        </div>
                        <h3 class="text-xl sm:text-2xl font-bold mb-3 sm:mb-4">Infrastructures</h3>
                        <p class="text-slate-500 text-sm mb-6 sm:mb-8">Construction et aménagement de voiries urbaines.</p>
                        <ul class="space-y-3 sm:space-y-4 text-sm font-medium border-t pt-6 sm:pt-8 mt-auto">
                            <li><i class="fas fa-check-circle check-icon"></i>Gros œuvre</li>
                            <li><i class="fas fa-check-circle check-icon"></i>VRD</li>
                        </ul>
                    </div>
                    <div class="border border-orange-600 service-card glow-slate bg-white p-6 sm:p-8 md:p-10 rounded-[1.5rem] sm:rounded-[2.5rem]" data-aos="fade-up" data-aos-delay="100">
                        <div class="w-14 h-14 sm:w-16 sm:h-16 bg-slate-100 text-slate-600 rounded-2xl flex items-center justify-center mb-6 sm:mb-8">
                            <i class="fas fa-helmet-safety text-2xl sm:text-3xl"></i>
                        </div>
                        <h3 class="text-xl sm:text-2xl font-bold mb-3 sm:mb-4">Pylônes</h3>
                        <p class="text-slate-500 text-sm mb-6 sm:mb-8">Construction de supports pour antennes télécoms.</p>
                        <ul class="space-y-3 sm:space-y-4 text-sm font-medium border-t pt-6 sm:pt-8 mt-auto">
                            <li><i class="fas fa-check-circle check-icon"></i>Pylônes haubanés</li>
                            <li><i class="fas fa-check-circle check-icon"></i>Auto-stables</li>
                        </ul>
                    </div>
                    <div class="border border-orange-600 service-card glow-slate bg-white p-6 sm:p-8 md:p-10 rounded-[1.5rem] sm:rounded-[2.5rem] sm:col-span-2 md:col-span-1" data-aos="fade-up" data-aos-delay="200">
                        <div class="w-14 h-14 sm:w-16 sm:h-16 bg-slate-100 text-slate-600 rounded-2xl flex items-center justify-center mb-6 sm:mb-8">
                            <i class="fas fa-hard-hat text-2xl sm:text-3xl"></i>
                        </div>
                        <h3 class="text-xl sm:text-2xl font-bold mb-3 sm:mb-4">Gestion Chantier</h3>
                        <p class="text-slate-500 text-sm mb-6 sm:mb-8">Pilotage technique et coordination de grands projets.</p>
                        <ul class="space-y-3 sm:space-y-4 text-sm font-medium border-t pt-6 sm:pt-8 mt-auto">
                            <li><i class="fas fa-check-circle check-icon"></i>Maîtrise d'œuvre</li>
                            <li><i class="fas fa-check-circle check-icon"></i>Suivi Qualité</li>
                        </ul>
                    </div>
                </div>
            </section>

        </div>
    </main>

    <section id="contact" class="py-16 sm:py-20 md:py-24 bg-white text-center border-t">
        <div class="max-w-3xl mx-auto px-4 sm:px-6" data-aos="zoom-in">
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-slate-950 mb-4 sm:mb-6 tracking-tighter">Prêt à lancer votre projet ?</h2>
            <p class="text-base sm:text-lg text-slate-600 mb-8 sm:mb-12">Contactez nos experts pour une analyse personnalisée de vos besoins.</p>
            <a href="contact" class="inline-block px-8 sm:px-10 py-3.5 sm:py-4 bg-orange-600 text-white font-bold rounded-full text-base sm:text-lg hover:bg-orange-700 transition-all hover:scale-105 shadow-xl shadow-blue-500/20">
                Contactez-nous aujourd'hui
            </a>
        </div>
    </section>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 900,
            once: true,
            offset: 100,
            easing: 'ease-out-back'
        });

        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('open');
            const icon = menuToggle.querySelector('i');
            icon.classList.toggle('fa-bars');
            icon.classList.toggle('fa-times');
        });
    </script>

</body>
</html>
