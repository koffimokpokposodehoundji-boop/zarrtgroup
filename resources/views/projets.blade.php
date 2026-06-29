<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos Réalisations - ZARRT GROUP</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #f8fafc; color: #1e293b; overflow-x: hidden; }

        /* ── NAV MOBILE ── */
        .mobile-menu {
            display: none;
            flex-direction: column;
            gap: 0;
            background: #001529;
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            border-top: 1px solid rgba(255,255,255,0.08);
            z-index: 999;
        }
        .mobile-menu.open { display: flex; }
        .mobile-menu a {
            padding: 1rem 1.5rem;
            font-size: 0.95rem;
            font-weight: 600;
            color: #f97316;
            border-bottom: 1px solid rgba(255,255,255,0.06);
            transition: background 0.2s;
        }
        .mobile-menu a:active { background: rgba(255,255,255,0.05); }
        .mobile-menu a.cta {
            background: #ea580c;
            color: white;
            text-align: center;
            margin: 1rem;
            border-radius: 9999px;
            border: none;
        }

        /* ── CARDS ── */
        .project-card {
            transition: all 0.35s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border: 1px solid #e2e8f0;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            height: 100%;
        }
        @media (hover: hover) {
            .project-card:hover {
                transform: translateY(-10px);
                box-shadow: 0 24px 50px -12px rgba(0,0,0,0.12);
                border-color: transparent;
            }
            .project-card:hover .project-card-image { transform: scale(1.08); }
        }
        /* Tap feedback mobile */
        .project-card:active { transform: scale(0.98); }

        .card-image-wrap { position: relative; height: 11rem; overflow: hidden; }
        @media (min-width: 640px) { .card-image-wrap { height: 14rem; } }
        .project-card-image { width: 100%; height: 100%; object-fit: cover; transition: transform 0.6s ease; }

        .category-badge {
            position: absolute; top: 0.875rem; right: 0.875rem;
            padding: 0.3rem 0.85rem;
            background: rgba(255,255,255,0.92);
            backdrop-filter: blur(4px);
            font-size: 0.68rem; font-weight: 700;
            color: #1d4ed8; border-radius: 9999px;
            z-index: 10; box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            white-space: nowrap;
        }

        /* ── FILTER BAR SCROLL HORIZONTAL MOBILE ── */
        .filter-scroll {
            display: flex;
            flex-wrap: nowrap;
            overflow-x: auto;
            gap: 0.5rem;
            padding: 0.5rem 1rem;
            -webkit-overflow-scrolling: touch;
            scrollbar-width: none;
        }
        .filter-scroll::-webkit-scrollbar { display: none; }
        .filter-btn {
            flex-shrink: 0;
            transition: all 0.25s ease;
            white-space: nowrap;
            cursor: pointer;
            -webkit-tap-highlight-color: transparent;
        }
        .filter-btn.active {
            background-color: #eb5a25;
            color: white;
            box-shadow: 0 6px 14px -3px rgba(235,90,37,0.35);
            transform: scale(1.04);
        }

        /* ── HEADER GRADIENT ── */
        .hero-bg {
            background: linear-gradient(135deg, #001529 0%, #0f2942 50%, #1a1a2e 100%);
        }

        /* ── EMPTY STATE ── */
        .empty-icon { font-size: 3.5rem; color: #cbd5e1; }
        @media (min-width: 640px) { .empty-icon { font-size: 5rem; } }
    </style>
</head>
<body class="antialiased">

    <!-- ════════════════════════════ NAV ════════════════════════════ -->
    <nav class="fixed top-0 w-full z-50 bg-[#001529] text-white py-3.5 px-4 md:px-6 border-b border-gray-800 backdrop-blur-sm bg-opacity-95">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <!-- Logo -->
            <div class="flex items-center gap-2">
                <div class="w-9 h-9 bg-orange-600 rounded-lg flex items-center justify-center font-bold text-lg">Z</div>
                <span class="text-lg font-bold tracking-tight text-orange-600">ZARRT GROUP</span>
            </div>

            <!-- Desktop links -->
            <div class="hidden md:flex items-center gap-8 text-sm font-medium">
                <a href="{{ url('/') }}" class="text-orange-500 hover:text-white transition">Accueil</a>
                <a href="{{ url('/services') }}" class="text-orange-500 hover:text-white transition">Services</a>
                <a href="{{ url('/projets') }}" class="text-orange-500 font-bold border-b-2 border-orange-400 pb-1">Projets</a>
                <a href="{{ url('/a-propos') }}" class="text-orange-500 hover:text-white transition">À propos</a>
                <a href="{{ url('/contact') }}" class="bg-orange-600 px-5 py-2 rounded-full hover:bg-orange-700 transition text-white">Contact</a>
            </div>

            <!-- Hamburger mobile -->
            <button id="menuToggle" class="md:hidden text-orange-600 focus:outline-none p-2 -mr-2" aria-label="Menu">
                <i class="fas fa-bars text-xl" id="menuIcon"></i>
            </button>
        </div>

        <!-- Mobile dropdown -->
        <div class="mobile-menu md:hidden" id="mobileMenu">
            <a href="{{ url('/') }}">Accueil</a>
            <a href="{{ url('/services') }}">Services</a>
            <a href="{{ url('/projets') }}" style="color:white;font-weight:700;">Projets</a>
            <a href="{{ url('/a-propos') }}">À propos</a>
            <a href="{{ url('/contact') }}" class="cta">Contact</a>
        </div>
    </nav>

    <!-- ════════════════════════════ HERO ════════════════════════════ -->
    <header class="hero-bg pt-32 pb-16 md:pt-40 md:pb-24 text-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 md:px-6 text-center" data-aos="zoom-out">
            <span class="inline-block text-xs font-bold tracking-widest text-orange-400 uppercase mb-4"></span>
            <h1 class="text-4xl sm:text-5xl md:text-7xl font-extrabold tracking-tighter mb-5 leading-tight">
                Nos Projets
            </h1>
            <p class="text-base sm:text-xl text-orange-100/70 max-w-2xl mx-auto leading-relaxed px-2">
                Découvrez nos réalisations les plus significatives à travers différents secteurs technologiques.
            </p>
        </div>
    </header>

    <!-- ════════════════════════════ FILTER BAR ════════════════════════════ -->
    <section class="py-4 bg-white border-b border-gray-100 sticky top-[61px] md:top-[73px] z-40 shadow-sm">
        <div class="max-w-7xl mx-auto" data-aos="fade-up">
            <!-- Mobile : scroll horizontal -->
            <div class="md:hidden filter-scroll">
                <button class="filter-btn active px-5 py-2 rounded-full text-sm font-bold text-gray-700 bg-gray-100" data-filter="all">Tous</button>
                <button class="filter-btn px-5 py-2 rounded-full text-sm font-bold text-gray-700 bg-gray-100" data-filter="informatique">Informatique</button>
                <button class="filter-btn px-5 py-2 rounded-full text-sm font-bold text-gray-700 bg-gray-100" data-filter="telecommunication">Télécom</button>
                <button class="filter-btn px-5 py-2 rounded-full text-sm font-bold text-gray-700 bg-gray-100" data-filter="electronique">Électronique</button>
                <button class="filter-btn px-5 py-2 rounded-full text-sm font-bold text-gray-700 bg-gray-100" data-filter="electrique">Électrique</button>
                <button class="filter-btn px-5 py-2 rounded-full text-sm font-bold text-gray-700 bg-gray-100" data-filter="genie-civil">Génie Civil</button>
            </div>
            <!-- Desktop : centré avec wrapping -->
            <div class="hidden md:flex items-center justify-center px-6">
                <div class="inline-flex flex-wrap items-center justify-center gap-2 bg-gray-50 border border-gray-100 p-2 rounded-full shadow-inner">
                    <button class="filter-btn active px-6 py-2.5 rounded-full text-sm font-bold text-gray-700 bg-gray-100" data-filter="all">Tous</button>
                    <button class="filter-btn px-6 py-2.5 rounded-full text-sm font-bold text-gray-700 bg-gray-100" data-filter="informatique">Informatique</button>
                    <button class="filter-btn px-6 py-2.5 rounded-full text-sm font-bold text-gray-700 bg-gray-100" data-filter="telecommunication">Télécom</button>
                    <button class="filter-btn px-6 py-2.5 rounded-full text-sm font-bold text-gray-700 bg-gray-100" data-filter="electronique">Électronique</button>
                    <button class="filter-btn px-6 py-2.5 rounded-full text-sm font-bold text-gray-700 bg-gray-100" data-filter="electrique">Électrique</button>
                    <button class="filter-btn px-6 py-2.5 rounded-full text-sm font-bold text-gray-700 bg-gray-100" data-filter="genie-civil">Génie Civil</button>
                </div>
            </div>
        </div>
    </section>

    <!-- ════════════════════════════ GRILLE PROJETS ════════════════════════════ -->
    <main class="py-12 md:py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 md:px-6">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 md:gap-10" id="projectGrid">

                @forelse($projets as $projet)
                    @php
                        $categorySlug = Str::slug($projet->categorie);
                    @endphp

                    <div class="project-card bg-white rounded-2xl md:rounded-3xl" data-category="{{ $categorySlug }}" data-aos="fade-up">
                        <div class="card-image-wrap">
                            <span class="category-badge">{{ $projet->categorie }}</span>
                            <img src="{{ asset('images/projets/' . $projet->image) }}"
                                 class="project-card-image"
                                 alt="{{ $projet->titre }}"
                                 loading="lazy">
                        </div>
                        <div class="p-5 md:p-8 flex-grow space-y-4 md:space-y-6">
                            <div class="w-10 h-10 md:w-12 md:h-12 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center shadow-inner">
                                <i class="fas fa-layer-group text-lg md:text-xl"></i>
                            </div>
                            <h3 class="text-xl md:text-2xl font-bold tracking-tight leading-snug">{{ $projet->titre }}</h3>
                            <p class="text-slate-500 text-sm leading-relaxed line-clamp-3">{{ $projet->description }}</p>

                            <ul class="text-sm font-semibold text-slate-700 space-y-2.5 pt-4 border-t border-slate-100">
                                <li class="flex items-center gap-2">
                                    <i class="fas fa-check-circle text-green-500 w-4 text-center"></i>
                                    Statut : <span class="text-green-600">Réalisé</span>
                                </li>
                                <li class="flex items-center gap-2">
                                    <i class="fas fa-calendar-alt text-blue-500 w-4 text-center"></i>
                                    {{ $projet->created_at->format('d/m/Y') }}
                                </li>
                            </ul>
                        </div>
                    </div>

                @empty
                    <div class="col-span-full text-center py-16 md:py-24">
                        <div class="mb-5 empty-icon"><i class="fas fa-folder-open"></i></div>
                        <h3 class="text-lg md:text-xl font-bold text-slate-400">Aucun projet publié pour le moment.</h3>
                        <p class="text-slate-400 text-sm mt-2">Revenez bientôt !</p>
                    </div>
                @endforelse

            </div>
        </div>
    </main>

    <!-- ════════════════════════════ FOOTER ════════════════════════════ -->
    <footer class="bg-[#001529] text-gray-400 py-10 border-t border-white/5">
        <div class="max-w-7xl mx-auto px-4 md:px-6 text-center">
            <div class="flex items-center justify-center gap-2.5 mb-4">
                <div class="w-8 h-8 bg-orange-600 rounded flex items-center justify-center font-bold text-white text-sm">Z</div>
                <span class="text-lg font-bold text-orange-600">ZARRT GROUP</span>
            </div>
            <p class="text-xs text-orange-600">© 2026 ZARRT GROUP. Tous droits réservés.</p>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 700, once: true, disable: 'mobile' });

        // ── HAMBURGER MENU ──
        const menuToggle = document.getElementById('menuToggle');
        const mobileMenu = document.getElementById('mobileMenu');
        const menuIcon   = document.getElementById('menuIcon');

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('open');
            menuIcon.classList.toggle('fa-bars');
            menuIcon.classList.toggle('fa-times');
        });

        // Ferme le menu au clic sur un lien
        mobileMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.remove('open');
                menuIcon.classList.add('fa-bars');
                menuIcon.classList.remove('fa-times');
            });
        });

        // ── FILTRE ──
        // Sélectionne tous les boutons (desktop + mobile, dédoublés)
        const filterButtons = document.querySelectorAll('.filter-btn');
        const projectCards  = document.querySelectorAll('.project-card');

        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                // Retire actif de tous les boutons
                filterButtons.forEach(btn => btn.classList.remove('active'));
                // Met actif sur les boutons avec le même data-filter (desktop + mobile)
                const filterValue = button.getAttribute('data-filter');
                filterButtons.forEach(btn => {
                    if (btn.getAttribute('data-filter') === filterValue) {
                        btn.classList.add('active');
                    }
                });

                projectCards.forEach(card => {
                    const category = card.getAttribute('data-category');
                    card.style.display = (filterValue === 'all' || filterValue === category) ? 'flex' : 'none';
                });
            });
        });
    </script>

</body>
</html>
