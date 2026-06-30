<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À Propos | ZARRT GROUP</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; overflow-x: hidden; }

        /* ── NAV MOBILE ── */
        .mobile-menu {
            display: none;
            flex-direction: column;
            background: #000;
            position: absolute;
            top: 100%; left: 0; right: 0;
            border-top: 1px solid rgba(255,255,255,0.08);
            z-index: 999;
        }
        .mobile-menu.open { display: flex; }
        .mobile-menu a {
            padding: 1rem 1.5rem;
            font-size: 0.95rem; font-weight: 600;
            color: #f97316;
            border-bottom: 1px solid rgba(255,255,255,0.06);
            transition: background 0.2s;
        }
        .mobile-menu a:active { background: rgba(255,255,255,0.05); }
        .mobile-menu a.cta {
            background: #ea580c; color: white;
            text-align: center; margin: 1rem;
            border-radius: 9999px; border: none;
        }

        /* ── VALEURS CARD ── */
        .valeur-card {
            transition: box-shadow 0.3s ease, transform 0.3s ease;
        }
        @media (hover: hover) {
            .valeur-card:hover {
                box-shadow: 0 20px 40px -10px rgba(234,88,12,0.15);
                transform: translateY(-4px);
            }
        }
        .valeur-card:active { transform: scale(0.98); }

        /* ── STATS ── */
        .stat-card {
            transition: transform 0.25s ease;
        }
        .stat-card:active { transform: scale(0.96); }
    </style>
</head>
<body class="bg-[#F8FAFC]">

    <!-- ════════════════ NAV ════════════════ -->
    <header class="bg-black border-b border-white/10 fixed w-full z-50">
        <nav class="max-w-7xl mx-auto px-4 md:px-6 py-3.5 flex items-center justify-between">
            <!-- Logo -->
            <div class="flex items-center gap-2.5">
                <div class="w-9 h-9 bg-orange-600 rounded-lg flex items-center justify-center font-bold text-lg text-white">Z</div>
                <span class="text-lg font-bold tracking-tight text-orange-600">ZARRT GROUP</span>
            </div>

            <!-- Desktop -->
            <div class="hidden md:flex items-center space-x-8 text-sm text-orange-500">
                <a href="{{ route('home') }}" class="hover:text-white transition-colors">Accueil</a>
                <a href="{{ route('projects.index') }}" class="hover:text-white transition-colors">Projets</a>
                <a href="{{ route('about') }}" class="text-white font-bold border-b-2 border-orange-400 pb-0.5">À propos</a>
                <a href="{{ route('contact') }}" class="px-5 py-2 bg-orange-600 text-white rounded-full hover:bg-orange-700 transition-all">Contact</a>
            </div>

            <!-- Hamburger -->
            <button id="menuToggle" class="md:hidden text-orange-600 p-2 -mr-2 focus:outline-none" aria-label="Menu">
                <i class="fas fa-bars text-xl" id="menuIcon"></i>
            </button>
        </nav>

        <!-- Mobile dropdown -->
        <div class="mobile-menu md:hidden" id="mobileMenu">
            <a href="{{ route('home') }}">Accueil</a>
            <a href="{{ route('projects.index') }}">Projets</a>
            <a href="{{ route('about') }}" style="color:white;font-weight:700;">À propos</a>
            <a href="{{ route('contact') }}" class="cta">Contact</a>
        </div>
    </header>

    <main class="pt-24 md:pt-32 pb-16 md:pb-20">
        <div class="max-w-7xl mx-auto px-4 md:px-6">

            <!-- ════════════════ HERO ════════════════ -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 md:gap-16 items-center mb-16 md:mb-24">

                <!-- Texte -->
                <div>
                    <span class="text-orange-600 font-bold text-base md:text-2xl uppercase tracking-widest mb-3 block">
                        Notre Histoire
                    </span>
                    <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-slate-900 leading-tight mb-5">
                        L'innovation technologique au service du
                        <span class="text-orange-600"> Togo.</span>
                    </h1>
                    <p class="text-slate-600 text-base md:text-lg leading-relaxed mb-8">
                        <strong>ZARRT GROUP</strong> est un acteur majeur de la transformation digitale et des infrastructures au Togo. Nous combinons expertise technique et vision innovante pour répondre aux défis de demain.
                    </p>

                    <!-- Stats -->
                    <div class="grid grid-cols-2 gap-3 md:gap-4">
                        <div class="stat-card bg-white p-5 md:p-6 rounded-2xl shadow-sm border border-orange-200">
                            <div class="text-2xl md:text-3xl font-black text-orange-600 mb-1">1+</div>
                            <div class="text-slate-400 text-xs font-bold uppercase tracking-wide">Ans d'expérience</div>
                        </div>
                        <div class="stat-card bg-white p-5 md:p-6 rounded-2xl shadow-sm border border-orange-200">
                            <div class="text-2xl md:text-3xl font-black text-orange-600 mb-1">1+</div>
                            <div class="text-slate-400 text-xs font-bold uppercase tracking-wide">Projets livrés</div>
                        </div>
                    </div>
                </div>

                <!-- Image -->
                <div class="relative mt-6 lg:mt-0">
                    <div class="absolute -inset-2 bg-white rounded-[2rem] md:rounded-[3rem] border border-orange-200 shadow-sm"></div>
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&q=80"
                         class="relative rounded-[1.75rem] md:rounded-[2.5rem] shadow-xl w-full h-64 sm:h-80 md:h-[420px] lg:h-[500px] object-cover"
                         alt="Équipe ZARRT GROUP"
                         loading="lazy">
                </div>
            </div>

            <!-- ════════════════ NOS VALEURS ════════════════ -->
            <div class="border-t border-slate-100 pt-14 md:pt-20">
                <div class="text-center mb-10 md:mb-16">
                    <h2 class="text-xl md:text-2xl font-bold text-orange-600 mb-3 uppercase tracking-wide">Nos Valeurs</h2>
                    <p class="text-slate-500 font-medium text-base md:text-lg">Les principes qui guident notre action au quotidien</p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-5 md:gap-8 mb-8">

                    <div class="valeur-card bg-white p-7 md:p-10 rounded-[2rem] border border-orange-100 shadow-sm">
                        <div class="w-12 h-12 md:w-14 md:h-14 bg-orange-600 rounded-2xl flex items-center justify-center text-white mb-6 md:mb-8 shadow-md shadow-orange-200">
                            <i class="fas fa-bullseye text-lg md:text-xl"></i>
                        </div>
                        <h3 class="text-lg md:text-xl font-bold text-slate-900 mb-3">Excellence</h3>
                        <p class="text-slate-500 text-sm leading-relaxed">Nous visons l'excellence dans chaque projet, en livrant des solutions de qualité supérieure.</p>
                    </div>

                    <div class="valeur-card bg-white p-7 md:p-10 rounded-[2rem] border border-orange-100 shadow-sm">
                        <div class="w-12 h-12 md:w-14 md:h-14 bg-orange-500 rounded-2xl flex items-center justify-center text-white mb-6 md:mb-8 shadow-md shadow-orange-200">
                            <i class="fas fa-users text-lg md:text-xl"></i>
                        </div>
                        <h3 class="text-lg md:text-xl font-bold text-slate-900 mb-3">Leadership</h3>
                        <p class="text-slate-500 text-sm leading-relaxed">Nous travaillons avec leadership et vision pour guider nos clients vers la réussite.</p>
                    </div>

                    <div class="valeur-card bg-white p-7 md:p-10 rounded-[2rem] border border-orange-100 shadow-sm sm:col-span-2 md:col-span-1">
                        <div class="w-12 h-12 md:w-14 md:h-14 bg-orange-500 rounded-2xl flex items-center justify-center text-white mb-6 md:mb-8 shadow-md shadow-orange-200">
                            <i class="fas fa-chart-line text-lg md:text-xl"></i>
                        </div>
                        <h3 class="text-lg md:text-xl font-bold text-slate-900 mb-3">Innovation</h3>
                        <p class="text-slate-500 text-sm leading-relaxed">Nous restons à la pointe de la technologie pour offrir des solutions innovantes et durables.</p>
                    </div>

                </div>
            </div>

        </div>
    </main>

    <!-- ════════════════ FOOTER ════════════════ -->
    <footer class="bg-[#0A0A0B] text-white pt-14 md:pt-20 pb-10">
        <div class="max-w-7xl mx-auto px-4 md:px-6">

            <!-- Grille footer : 1 col mobile → 2 col sm → 4 col md -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-10 mb-12 md:mb-16">

                <!-- Logo & description -->
                <div class="sm:col-span-2 md:col-span-1 space-y-5">
                    <div class="flex items-center gap-2.5">
                        <div class="w-9 h-9 bg-orange-600 rounded-lg flex items-center justify-center font-bold text-lg text-white">Z</div>
                        <span class="text-lg font-bold tracking-tight text-orange-600">ZARRT GROUP</span>
                    </div>
                    <p class="text-slate-400 text-sm leading-relaxed">
                        Votre partenaire de confiance pour la transformation digitale et les solutions technologiques innovantes au Togo.
                    </p>
                </div>

                <!-- Liens rapides -->
                <div>
                    <h4 class="text-base font-bold mb-5 text-white">Liens Rapides</h4>
                    <ul class="space-y-3 text-slate-400 text-sm">
                        <li><a href="{{ route('home') }}" class="hover:text-white transition-colors">Accueil</a></li>
                        <li><a href="services" class="hover:text-white transition-colors">Services</a></li>
                        <li><a href="{{ route('projects.index') }}" class="hover:text-white transition-colors">Projets</a></li>
                        <li><a href="{{ route('about') }}" class="text-orange-500 hover:text-white transition-colors">À propos</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-white transition-colors">Contact</a></li>
                    </ul>
                </div>

                <!-- Services -->
                <div>
                    <h4 class="text-base font-bold mb-5 text-white">Nos Services</h4>
                    <ul class="space-y-3 text-slate-400 text-sm">
                        <li><a href="#" class="hover:text-white transition-colors">Transformation Digitale</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Télécommunications</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Électronique</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Énergies Renouvelables</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Génie Civil</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h4 class="text-base font-bold mb-5 text-white">Contact</h4>
                    <ul class="space-y-3 text-slate-400 text-sm">
                        <li class="flex items-start gap-3">
                            <i class="fas fa-location-dot mt-0.5 text-orange-500 flex-shrink-0"></i>
                            <span>Lomé, Togo</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fas fa-phone text-orange-500 flex-shrink-0"></i>
                            <a href="tel:+22870212677" class="hover:text-white transition-colors">+22893374475</a>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-envelope text-orange-500 flex-shrink-0 mt-0.5"></i>
                            <a href="mailto:contact@zarrtgroup-sarl.tg" class="hover:text-white transition-colors break-all">
                                zarrtgroup@gmail.com
                            </a>
                        </li>
                    </ul>

                    <!-- Réseaux sociaux -->
                    <div class="flex gap-3 mt-7">
                        <a href="#" class="w-9 h-9 bg-orange-600 rounded-lg flex items-center justify-center hover:bg-blue-700 transition-all" aria-label="LinkedIn">
                            <i class="fab fa-linkedin-in text-sm text-white"></i>
                        </a>
                        <a href="#" class="w-9 h-9 bg-orange-600 rounded-lg flex items-center justify-center hover:bg-blue-600 transition-all" aria-label="Facebook">
                            <i class="fab fa-facebook-f text-sm text-white"></i>
                        </a>
                        <a href="#" class="w-9 h-9 bg-orange-600 rounded-lg flex items-center justify-center hover:bg-sky-500 transition-all" aria-label="Twitter">
                            <i class="fab fa-twitter text-sm text-white"></i>
                        </a>
                        <a href="https://wa.me/22893374475" target="_blank" class="w-9 h-9 bg-green-600 rounded-lg flex items-center justify-center hover:bg-green-700 transition-all" aria-label="WhatsApp">
                            <i class="fab fa-whatsapp text-sm text-white"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Copyright -->
            <div class="pt-6 border-t border-white/5 text-center">
                <p class="text-orange-600 text-xs tracking-widest">
                    © 2026 ZARRT GROUP. Tous droits réservés.
                </p>
            </div>
        </div>
    </footer>

    <script>
        // ── HAMBURGER ──
        const menuToggle = document.getElementById('menuToggle');
        const mobileMenu = document.getElementById('mobileMenu');
        const menuIcon   = document.getElementById('menuIcon');

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('open');
            menuIcon.classList.toggle('fa-bars');
            menuIcon.classList.toggle('fa-times');
        });
        mobileMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.remove('open');
                menuIcon.classList.add('fa-bars');
                menuIcon.classList.remove('fa-times');
            });
        });
    </script>
</body>
</html>
