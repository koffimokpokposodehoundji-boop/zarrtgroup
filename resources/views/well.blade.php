<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZARRT GROUP- L'avenir se construit aujourd'hui</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/dist/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #ffffff;
            color: #1e293b;
            overflow-x: hidden;
        }

        .bg-master {
            position: fixed; inset: 0; z-index: -1;
            background: radial-gradient(circle at 50% 50%, #f8fafc 0%, #ffffff 100%);
            overflow: hidden;
        }

        .orb {
            position: absolute; border-radius: 50%; filter: blur(80px);
            opacity: 0.5; animation: OrbFloat 20s infinite alternate ease-in-out;
        }
        .orb-1 { width: 300px; height: 300px; background: #dbeafe; top: -10%; left: -10%; }
        .orb-2 { width: 350px; height: 350px; background: #ede9fe; bottom: -10%; right: -5%; animation-delay: -5s; }
        .orb-3 { width: 200px; height: 200px; background: #e0f2fe; top: 40%; left: 30%; animation-delay: -10s; }

        @media (min-width: 768px) {
            .orb { filter: blur(100px); }
            .orb-1 { width: 500px; height: 500px; }
            .orb-2 { width: 600px; height: 600px; }
            .orb-3 { width: 300px; height: 300px; }
        }

        @keyframes OrbFloat {
            0% { transform: translate(0, 0) scale(1); }
            100% { transform: translate(80px, 120px) scale(1.1); }
        }

        .glow-card {
            background: rgba(255, 255, 255, 0.75);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(226, 232, 240, 1);
            transition: all 0.5s cubic-bezier(0.23, 1, 0.32, 1);
        }
        .glow-card:hover {
            background: #ec570c;
            box-shadow: 0 25px 50px -12px rgba(59, 130, 246, 0.2);
            border-color: #3b82f6;
            transform: translateY(-10px);
        }

        .gradient-text {
            background: linear-gradient(90deg, #eb6e25, #ed7f3a, #eb6025);
            background-size: 200% auto;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: gradientShift 4s linear infinite;
        }
        @keyframes gradientShift { to { background-position: 200% center; } }

        .vignette-innovation {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(5px);
            border: 1px solid #e2e8f0;
        }

        .nav-scrolled {
            background: black !important;
            backdrop-filter: blur(15px);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.05);
            border-bottom: 1px solid rgba(226, 232, 240, 0.8);
        }

        /* Menu mobile */
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

    <div class="bg-master">
        <div class="orb orb-1"></div>
        <div class="orb orb-2"></div>
        <div class="orb orb-3"></div>
    </div>

    <nav id="navbar" class="fixed top-0 left-0 w-full z-50 transition-all duration-300 ">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 py-3 sm:py-4 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div class="w-9 h-9 sm:w-10 sm:h-10 bg-orange-600 rounded-lg flex items-center justify-center font-bold text-lg sm:text-xl text-white">Z</div>
                <span class="text-lg sm:text-xl font-bold tracking-tight text-orange-600">ZARRT GROUP</span>
            </div>

            <!-- Menu Desktop -->
            <div class="hidden lg:flex items-center gap-1">
                <div class="vignette-innovation px-4 py-1.5 rounded-full flex items-center gap-2.5 mx-4 text-xs font-bold text-slate-600 shadow-sm border border-orange-600">
                    <i class="fas fa-sparkles text-orange-600"></i>
                    <span>Innovation depuis 2025</span>
                </div>

                <a href="{{ url('/') }}" class="px-4 py-2 text-sm text-orange-600 font-bold rounded-full">Accueil</a>
                <a href="{{ url('services') }}" class="px-4 py-2 text-sm text-orange-600 font-semibold hover:text-orange-600 transition">Services</a>
                <a href="{{ url('projets') }}" class="px-4 py-2 text-sm text-orange-600 font-semibold hover:text-orange-600 transition">Projets</a>
                <a href="{{ url('a-propos') }}" class="px-4 py-2 text-sm text-orange-600 font-semibold hover:text-orange-600 transition">À propos</a>
                <a href="{{ url('contact') }}" class="ml-4 px-6 py-2 bg-orange-600 text-white text-sm font-bold rounded-full hover:bg-orange-600 transition shadow-lg shadow-slate-200">Contact</a>
            </div>

            <!-- Bouton menu mobile -->
             <button id="menu-toggle" class="lg:hidden bg-black text-orange-600 text-2xl w-10 h-10 flex items-center justify-center">
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


    <header class="relative pt-32 sm:pt-40 md:pt-48 pb-16 sm:pb-24 md:pb-32 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10 text-center flex flex-col items-center">
            <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-8xl font-black tracking-tighter text-slate-900 leading-[1.05] sm:leading-[0.95] mb-6 sm:mb-8" data-aos="zoom-out-up">
                L'avenir se construit<br>
                <span class="gradient-text">aujourd'hui</span>
            </h1>

            <p class="max-w-2xl text-slate-500 text-base sm:text-lg md:text-xl font-medium leading-relaxed mb-8 sm:mb-12 px-2" data-aos="fade-up" data-aos-delay="300">
                Solutions innovantes en informatique, télécommunications, électronique, génie électrique et génie civil.
            </p>

            <div class="flex flex-col sm:flex-row gap-4 sm:gap-6 w-full sm:w-auto px-4 sm:px-0" data-aos="fade-up" data-aos-delay="600">
                <a href="projets" class="px-6 sm:px-10 py-3.5 sm:py-4 bg-orange-600 text-white font-bold rounded-2xl text-base sm:text-lg flex items-center justify-center gap-3 hover:bg-orange-700 transition-all hover:-translate-y-1 shadow-2xl shadow-orange-200">
                    <span class="text-center">Découvrir nos réalisations</span> <i class="fas fa-arrow-right text-sm"></i>
                </a>
                <a href="contact" class="px-6 sm:px-10 py-3.5 sm:py-4 bg-orange-600 border border-orange-600 text-white font-bold rounded-2xl text-base sm:text-lg hover:bg-orange-600 transition text-center">
                    Nous contacter
                </a>
            </div>
        </div>
    </header>


    <section class="py-12 sm:py-16 md:py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 sm:gap-10 text-center mb-16 sm:mb-24">
                <div class="space-y-1 sm:space-y-2" data-aos="fade-up">
                    <p class="text-3xl sm:text-5xl md:text-6xl font-black text-orange-600">1+</p>
                    <p class="text-slate-400 text-[10px] sm:text-xs font-bold tracking-widest uppercase">Projets réalisés</p>
                </div>
                <div class="space-y-1 sm:space-y-2" data-aos="fade-up" data-aos-delay="100">
                    <p class="text-3xl sm:text-5xl md:text-6xl font-black text-orange-600">1+</p>
                    <p class="text-slate-400 text-[10px] sm:text-xs font-bold tracking-widest uppercase">Années d'expérience</p>
                </div>
                <div class="space-y-1 sm:space-y-2" data-aos="fade-up" data-aos-delay="200">
                    <p class="text-3xl sm:text-5xl md:text-6xl font-black text-orange-600">1+</p>
                    <p class="text-slate-400 text-[10px] sm:text-xs font-bold tracking-widest uppercase">Clients satisfaits</p>
                </div>
                <div class="space-y-1 sm:space-y-2" data-aos="fade-up" data-aos-delay="300">
                    <p class="text-3xl sm:text-5xl md:text-6xl font-black text-orange-600">10+</p>
                    <p class="text-slate-400 text-[10px] sm:text-xs font-bold tracking-widest uppercase">Experts qualifiés</p>
                </div>
            </div>

            <div class="text-center px-2" data-aos="fade-up">
                <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-black text-slate-900 tracking-tighter mb-4 sm:mb-6">Nos expertises</h2>
                <p class="text-slate-500 text-base sm:text-lg font-medium">Cinq secteurs stratégiques pour accompagner votre transformation</p>
            </div>
        </div>
    </section>


    <section id="services" class="py-12 sm:py-16 md:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-5 sm:gap-6">

                <div class="glow-card p-6 sm:p-8 rounded-[1.5rem] sm:rounded-[2rem] flex flex-col gap-4 sm:gap-6 border border-orange-600" data-aos="fade-up">
                    <div class="h-12 w-12 sm:h-14 sm:w-14 rounded-2xl bg-blue-600 text-white flex items-center justify-center shadow-lg shadow-blue-100">
                        <i class="fas fa-cloud text-xl sm:text-2xl"></i>
                    </div>
                    <h3 class="text-lg sm:text-xl font-bold text-slate-900">Informatique</h3>
                    <p class="text-slate-600 text-sm leading-relaxed font-medium">Transformation digitale et solutions cloud sur mesure.</p>
                </div>

                <div class="border border-orange-600 glow-card p-6 sm:p-8 rounded-[1.5rem] sm:rounded-[2rem] flex flex-col gap-4 sm:gap-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="h-12 w-12 sm:h-14 sm:w-14 rounded-2xl bg-purple-600 text-white flex items-center justify-center shadow-lg shadow-purple-100">
                        <i class="fas fa-satellite-dish text-xl sm:text-2xl"></i>
                    </div>
                    <h3 class="text-lg sm:text-xl font-bold text-slate-900">Télécoms</h3>
                    <p class="text-slate-600 text-sm leading-relaxed font-medium">Infrastructures réseaux 4G/5G et fibre optique.</p>
                </div>

                <div class="border border-orange-600 glow-card p-6 sm:p-8 rounded-[1.5rem] sm:rounded-[2rem] flex flex-col gap-4 sm:gap-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="h-12 w-12 sm:h-14 sm:w-14 rounded-2xl bg-orange-500 text-white flex items-center justify-center shadow-lg shadow-orange-100">
                        <i class="fas fa-microchip text-xl sm:text-2xl"></i>
                    </div>
                    <h3 class="text-lg sm:text-xl font-bold text-slate-900">Électronique</h3>
                    <p class="text-slate-600 text-sm leading-relaxed font-medium">Systèmes IoT intelligents et embarqués.</p>
                </div>

                <div class="border border-orange-600 glow-card p-6 sm:p-8 rounded-[1.5rem] sm:rounded-[2rem] flex flex-col gap-4 sm:gap-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="h-12 w-12 sm:h-14 sm:w-14 rounded-2xl bg-green-600 text-white flex items-center justify-center shadow-lg shadow-green-100">
                        <i class="fas fa-bolt text-xl sm:text-2xl"></i>
                    </div>
                    <h3 class="text-lg sm:text-xl font-bold text-slate-900">Électrique</h3>
                    <p class="text-slate-600 text-sm leading-relaxed font-medium">Solutions énergétiques et photovoltaïques.</p>
                </div>

                <div class="border border-orange-600 glow-card p-6 sm:p-8 rounded-[1.5rem] sm:rounded-[2rem] flex flex-col gap-4 sm:gap-6 sm:col-span-2 md:col-span-1" data-aos="fade-up" data-aos-delay="400">
                    <div class="h-12 w-12 sm:h-14 sm:w-14 rounded-2xl bg-indigo-600 text-white flex items-center justify-center shadow-lg shadow-indigo-100">
                        <i class="fas fa-building text-xl sm:text-2xl"></i>
                    </div>
                    <h3 class="text-lg sm:text-xl font-bold text-slate-900">Génie Civil</h3>
                    <p class="text-slate-600 text-sm leading-relaxed font-medium">Construction d'infrastructures durables.</p>
                </div>

            </div>
        </div>
    </section>


    <section id="projets" class="py-16 sm:py-20 md:py-28 bg-slate-50/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 grid md:grid-cols-2 gap-10 sm:gap-16 items-center">
            <div class="space-y-5 sm:space-y-8 text-center md:text-left" data-aos="fade-right">
                <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-black text-slate-900 tracking-tighter">Innovation<br>& Excellence</h2>
                <p class="text-slate-500 text-base sm:text-lg leading-relaxed">
                    Plus de 5 projets réalisés avec succès. Notre expertise couvre l'ensemble de la chaîne technologique pour garantir des résultats concrets.
                </p>
                <a href="{{ url('projets') }}" class="inline-flex items-center gap-3 text-orange-600 font-bold group text-base sm:text-lg">
                    Voir nos réalisations
                    <i class="fas fa-arrow-right text-sm transition-transform group-hover:translate-x-2"></i>
                </a>
            </div>

            <div class="relative rounded-[1.5rem] sm:rounded-[3rem] overflow-hidden shadow-2xl group" data-aos="fade-left">
                <img src="{{ asset('images/photo_equipe_code.jpg') }}" alt="Équipe" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/40 to-transparent"></div>
            </div>
        </div>
    </section>


    <section id="contact" class="py-20 sm:py-28 md:py-32 text-center">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 flex flex-col items-center">
            <h2 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-black text-slate-900 tracking-tighter mb-6 sm:mb-8" data-aos="zoom-in">Prêt à innover ?</h2>
            <p class="text-slate-500 text-base sm:text-lg md:text-xl font-medium mb-8 sm:mb-12">Discutons de votre projet et transformons vos ambitions en réalité.</p>
            <a href="contact" class="px-8 sm:px-12 py-4 sm:py-5 bg-orange-600 text-white font-bold rounded-2xl text-base sm:text-xl hover:bg-orange-700 transition-all hover:scale-105 shadow-xl shadow-blue-200">
                Commencer maintenant
            </a>
        </div>
    </section>


    <footer class="bg-black pt-12 sm:pt-20 pb-10 border-t border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 sm:gap-12 text-sm text-slate-500 mb-12 sm:mb-16">
            <div class="space-y-5 sm:space-y-6">
                <div class="flex items-center gap-3">
                    <div class="w-9 h-9 sm:w-10 sm:h-10 bg-orange-600 rounded-lg flex items-center justify-center font-bold text-lg sm:text-xl text-white">Z</div>
                    <span class="text-lg sm:text-xl font-bold tracking-tight text-orange-600">ZARRT GROUP</span>
                </div>
                <p class="leading-relaxed font-medium">Partenaire de confiance pour votre transformation digitale et technologique.</p>
            </div>

            <div class="space-y-5 sm:space-y-6">
                <h4 class="text-orange-600 font-bold uppercase tracking-widest text-xs">Navigation</h4>
                <ul class="space-y-3 sm:space-y-4 font-semibold">
                    <li><a href="{{ url('/') }}" class="hover:text-orange-600 transition">Accueil</a></li>
                    <li><a href="{{ url('services') }}" class="hover:text-orange-600 transition">Services</a></li>
                    <li><a href="{{ url('projets') }}" class="hover:text-orange-600 transition">Projets</a></li>
                    <li><a href="{{ url('about') }}" class="hover:text-orange-600 transition">À propos</a></li>
                </ul>
            </div>

            <div class="space-y-5 sm:space-y-6">
                <h4 class="text-orange-600 font-bold uppercase tracking-widest text-xs">Expertises</h4>
                <ul class="space-y-3 sm:space-y-4">
                    <li>Informatique</li>
                    <li>Télécoms</li>
                    <li>Electronique</li>
                    <li>Génie Civil</li>
                </ul>
            </div>

            <div class="space-y-5 sm:space-y-6">
                <h4 class="text-orange-600 font-bold uppercase tracking-widest text-xs">Contact</h4>
                <ul class="space-y-3 sm:space-y-4 font-medium">
                    <li> Lomé, Togo</li>
                    <li>+22893374475</li>
                    <li>zarrtgroup@gmail.com</li>
                </ul>
            </div>
        </div>
        <div class="text-center text-xs font-bold text-orange-600 pt-8 sm:pt-10 px-4">
            © 2026 ZARRT GROUP. Tous droits réservés.
        </div>
    </footer>


    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 1000, once: true, easing: 'ease-out-quart' });

        window.addEventListener('scroll', () => {
            const nav = document.getElementById('navbar');
            if (window.scrollY > 50) {
                nav.classList.add('nav-scrolled', 'py-2');
                nav.classList.remove('py-3', 'sm:py-4');
            } else {
                nav.classList.remove('nav-scrolled', 'py-2');
                nav.classList.add('py-3', 'sm:py-4');
            }
        });

        // Menu mobile toggle
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
