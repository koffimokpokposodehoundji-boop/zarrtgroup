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
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #db4b0d; color: #ed5210; overflow-x: hidden; }

        .project-card {
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border: 1px solid #e2e8f0;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            height: 100%;
        }
        .project-card:hover {
            transform: translateY(-12px);
            box-shadow: 0 30px 60px -15px rgba(0, 0, 0, 0.1);
            border-color: transparent;
        }

        .card-image-wrap { position: relative; height: 14rem; overflow: hidden; }
        .project-card-image { width: 100%; height: 100%; object-fit: cover; transition: transform 0.6s ease; }
        .project-card:hover .project-card-image { transform: scale(1.08); }

        .category-badge {
            position: absolute; top: 1.25rem; right: 1.25rem;
            padding: 0.375rem 1rem; background: rgba(255,255,255,0.9);
            backdrop-filter: blur(4px); font-size: 0.75rem; font-weight: 700;
            color: #1d4ed8; border-radius: 9999px; z-index: 10; box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .filter-btn { transition: all 0.3s ease; }
        .filter-btn.active { background-color: #eb5a25; color: white; box-shadow: 0 10px 15px -3px rgba(37, 99, 235, 0.3); transform: scale(1.05); }
    </style>
</head>
<body class="antialiased">

    <nav class="fixed top-0 w-full z-50 bg-[#001529] text-white py-4 px-6 border-b border-gray-800 backdrop-blur-sm bg-opacity-95">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <div class="flex items-center gap-2.5">
                <div class="w-10 h-10 bg-orange-600 rounded-lg flex items-center justify-center font-bold text-xl">Z</div>
                <span class="text-xl font-bold tracking-tight text-white">ZARRT GROUP</span>
            </div>
            <div class="hidden md:flex items-center gap-8 text-sm font-medium">
                <a href="{{ url('/') }}" class="text-orange-600 hover:text-white transition">Accueil</a>
                <a href="{{ url('/services') }}" class="text-orange-600 hover:text-white transition">Services</a>
                <a href="{{ url('/projets') }}" class="text-orange-600 font-bold border-b-2 border-orange-400 pb-1">Projets</a>
                <a href="{{ url('/a-propos') }}" class="text-orange-600 hover:text-white transition">À propos</a>
                <a href="{{ url('/contact') }}" class="bg-orange-600 px-5 py-2 rounded-full hover:bg-orange-700 transition">Contact</a>
            </div>
        </div>
    </nav>

    <header class="relative pt-40 pb-24 bg-orange text-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 relative z-10 text-center" data-aos="zoom-out">
            <h1 class="text-5xl md:text-7xl font-extrabold tracking-tighter mb-6 leading-tight">Nos Projets</h1>
            <p class="text-xl text-orange-100/80 max-w-3xl mx-auto leading-relaxed">
                Découvrez nos réalisations les plus significatives à travers différents secteurs technologiques.
            </p>
        </div>
    </header>

    <section class="py-12 bg-white border-b border-gray-100 sticky top-[73px] z-40 shadow-sm">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <div class="inline-flex flex-wrap items-center justify-center gap-3 bg-gray-50 border border-gray-100 p-2 rounded-full shadow-inner" data-aos="fade-up">
                <button class="filter-btn active px-6 py-2.5 rounded-full text-sm font-bold text-gray-700" data-filter="all">Tous</button>
                <button class="filter-btn px-6 py-2.5 rounded-full text-sm font-bold text-gray-700" data-filter="informatique">Informatique</button>
                <button class="filter-btn px-6 py-2.5 rounded-full text-sm font-bold text-gray-700" data-filter="telecommunication">Télécom</button>
                <button class="filter-btn px-6 py-2.5 rounded-full text-sm font-bold text-gray-700" data-filter="electronique">Électronique</button>
                <button class="filter-btn px-6 py-2.5 rounded-full text-sm font-bold text-gray-700" data-filter="electrique">Électrique</button>
                <button class="filter-btn px-6 py-2.5 rounded-full text-sm font-bold text-gray-700" data-filter="genie-civil">Génie Civil</button>
            </div>
        </div>
    </section>

    <main class="py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10" id="projectGrid">

                {{-- BOUCLE DYNAMIQUE LARAVEL --}}
                @forelse($projets as $projet)
                    @php
                        // On transforme la catégorie (ex: "Génie Civil") en slug (ex: "genie-civil") pour le JS
                        $categorySlug = Str::slug($projet->categorie);
                    @endphp

                    <div class="project-card bg-white rounded-3xl" data-category="{{ $categorySlug }}" data-aos="fade-up">
                        <div class="card-image-wrap">
                            <span class="category-badge">{{ $projet->categorie }}</span>
                            {{-- On pointe vers le dossier où AdminController enregistre les images --}}
                            <img src="{{ asset('images/projets/' . $projet->image) }}" class="project-card-image" alt="{{ $projet->titre }}">
                        </div>
                        <div class="p-8 flex-grow space-y-6">
                            <div class="w-12 h-12 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center shadow-inner">
                                <i class="fas fa-layer-group text-xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold tracking-tight">{{ $projet->titre }}</h3>
                            <p class="text-slate-600 text-sm leading-relaxed">{{ $projet->description }}</p>

                            <ul class="text-sm font-semibold text-slate-700 space-y-3 pt-4 border-t border-slate-100">
                                <li><i class="fas fa-check-circle text-green-500 mr-2"></i>Statut : Réalisé</li>
                                <li><i class="fas fa-calendar-alt text-blue-500 mr-2"></i>Date : {{ $projet->created_at->format('d/M/Y') }}</li>
                            </ul>
                        </div>
                    </div>
                @empty
                    {{-- Affiché si la base de données est vide --}}
                    <div class="col-span-full text-center py-20">
                        <div class="mb-6"><i class="fas fa-folder-open text-6xl text-slate-200"></i></div>
                        <h3 class="text-xl font-bold text-slate-400">Aucun projet publié pour le moment.</h3>
                    </div>
                @endforelse

            </div>
        </div>
    </main>

    <footer class="bg-black text-gray-400 py-12 border-t border-white/5">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <div class="flex items-center justify-center gap-3 mb-6">
                <div class="w-8 h-8 bg-orange-600 rounded flex items-center justify-center font-bold text-white">Z</div>
                <span class="text-xl font-bold text-white">ZARRT GROUP</span>
            </div>
            <p class="text-xs text-orange-600 ">© 2026 ZARRT GROUP. Tous droits réservés.</p>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 800, once: true });

        const filterButtons = document.querySelectorAll('.filter-btn');
        const projectCards = document.querySelectorAll('.project-card');

        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                filterButtons.forEach(btn => btn.classList.remove('active'));
                button.classList.add('active');

                const filterValue = button.getAttribute('data-filter');

                projectCards.forEach(card => {
                    const category = card.getAttribute('data-category');
                    if (filterValue === 'all' || filterValue === category) {
                        card.style.display = 'flex';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });
    </script>

</body>
</html>
