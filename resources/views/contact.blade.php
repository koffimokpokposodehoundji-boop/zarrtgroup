<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactez-nous | ZARRT GROUP</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;800&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; overflow-x: hidden; }

        #particles-js {
            position: fixed; top: 0; left: 0;
            width: 100%; height: 100%;
            z-index: 1; background-color: black;
        }
        .content-wrapper { position: relative; z-index: 10; }

        .glass-card {
            background: rgba(255, 255, 255, 0.75);
            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);
            border: 1px solid rgba(255, 255, 255, 0.5);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        @media (hover: hover) {
            .glass-card:hover { transform: scale(1.04); }
        }
        /* tap sur mobile */
        .glass-card:active { transform: scale(0.97); }

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
        }
        .mobile-menu a.cta {
            background: #ea580c; color: white;
            text-align: center; margin: 1rem;
            border-radius: 9999px; border: none;
        }

        /* ── INPUTS ── */
        .form-input {
            width: 100%;
            padding: 0.875rem 1.125rem;
            background: rgba(255,255,255,0.55);
            border: 1px solid #e2e8f0;
            border-radius: 0.75rem;
            font-size: 0.875rem;
            color: #1e293b;
            transition: border-color 0.2s, box-shadow 0.2s;
            -webkit-appearance: none;
            appearance: none;
        }
        .form-input:focus {
            outline: none;
            border-color: #f97316;
            box-shadow: 0 0 0 3px rgba(249,115,22,0.15);
        }
    </style>
</head>
<body class="antialiased">

    <div id="particles-js"></div>

    <div class="content-wrapper">

        <!-- ════════════════ NAV ════════════════ -->
        <header class="bg-black fixed w-full z-50 border-b border-white/10">
            <nav class="max-w-7xl mx-auto px-4 md:px-6 py-3.5 flex items-center justify-between">
                <a href="{{ route('home') }}" class="flex items-center gap-2.5">
                    <div class="w-9 h-9 bg-orange-600 rounded-lg flex items-center justify-center font-bold text-lg text-white">Z</div>
                    <span class="text-lg font-bold tracking-tight text-orange-600">ZARRT GROUP</span>
                </a>

                <!-- Desktop -->
                <div class="hidden md:flex items-center space-x-8 text-sm text-orange-500">
                    <a href="{{ route('home') }}" class="hover:text-white transition-colors">Accueil</a>
                    <a href="{{ route('projects.index') }}" class="hover:text-white transition-colors">Projets</a>
                    <a href="{{ route('about') }}" class="hover:text-white transition-colors">À propos</a>
                    <a href="{{ route('contact') }}" class="px-5 py-2 bg-orange-600 text-white rounded-full shadow-lg hover:bg-orange-700 transition">Contact</a>
                </div>

                <!-- Hamburger -->
                <button id="menuToggle" class="md:hidden text-white p-2 -mr-2 focus:outline-none" aria-label="Menu">
                    <i class="fas fa-bars text-xl" id="menuIcon"></i>
                </button>
            </nav>

            <!-- Mobile dropdown -->
            <div class="mobile-menu md:hidden" id="mobileMenu">
                <a href="{{ route('home') }}">Accueil</a>
                <a href="{{ route('projects.index') }}">Projets</a>
                <a href="{{ route('about') }}">À propos</a>
                <a href="{{ route('contact') }}" class="cta">Contact</a>
            </div>
        </header>

        <!-- ════════════════ HERO ════════════════ -->
        <div class="bg-orange-600">
            <section class="text-white pt-28 pb-20 md:pt-32 md:pb-32 text-center relative overflow-hidden">
                <div class="absolute inset-0 opacity-10 pointer-events-none">
                    <svg width="100%" height="100%">
                        <defs>
                            <pattern id="polka" patternUnits="userSpaceOnUse" width="80" height="80">
                                <circle cx="40" cy="40" r="2" fill="white"></circle>
                            </pattern>
                        </defs>
                        <rect width="100%" height="100%" fill="url(#polka)"></rect>
                    </svg>
                </div>
                <div class="max-w-3xl mx-auto px-4 relative z-10">
                    <h1 class="text-4xl sm:text-5xl md:text-6xl font-black tracking-tighter mb-5 leading-tight">
                        Contactez<br>ZARRT GROUP.
                    </h1>
                    <p class="text-orange-100/80 text-base md:text-lg leading-relaxed font-medium px-2">
                        Notre équipe est à votre écoute pour vous accompagner dans vos projets technologiques.
                    </p>
                </div>
            </section>
        </div>

        <!-- ════════════════ INFOS CARDS ════════════════ -->
        <section class="max-w-7xl mx-auto px-4 md:px-6 -mt-10 md:-mt-16 pb-10 md:pb-20">
            <!-- Mobile : 2 colonnes ; tablette+ : 4 colonnes -->
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6">

                <div class="glass-card p-6 md:p-10 rounded-2xl md:rounded-3xl text-center">
                    <div class="w-11 h-11 md:w-14 md:h-14 bg-orange-600 rounded-xl md:rounded-2xl flex items-center justify-center text-white mx-auto mb-4 md:mb-6 shadow-lg">
                        <i class="fas fa-location-dot text-lg md:text-xl"></i>
                    </div>
                    <h3 class="font-bold text-base md:text-xl mb-1 md:mb-2 text-slate-900">Adresse</h3>
                    <p class="text-slate-500 text-xs md:text-sm">Lomé, Togo</p>
                </div>

                <div class="glass-card p-6 md:p-10 rounded-2xl md:rounded-3xl text-center">
                    <div class="w-11 h-11 md:w-14 md:h-14 bg-orange-600 rounded-xl md:rounded-2xl flex items-center justify-center text-white mx-auto mb-4 md:mb-6 shadow-lg">
                        <i class="fas fa-phone text-lg md:text-xl"></i>
                    </div>
                    <h3 class="font-bold text-base md:text-xl mb-1 md:mb-2 text-slate-900">Téléphone</h3>
                    <p class="text-slate-500 text-xs md:text-sm">+228 93 37 44 75</p>
                </div>

                <div class="glass-card p-6 md:p-10 rounded-2xl md:rounded-3xl text-center col-span-2 lg:col-span-1 ">
                    <div class="w-11 h-11 md:w-14 md:h-14 bg-orange-600 rounded-xl md:rounded-2xl flex items-center justify-center text-white mx-auto mb-4 md:mb-6 shadow-lg">
                        <i class="fas fa-envelope text-lg md:text-xl"></i>
                    </div>
                    <h3 class="font-bold text-base md:text-xl mb-1 md:mb-2 text-slate-900">Email</h3>
                    <p class="text-slate-500 text-xs md:text-sm ">zarrtgroup@gmail.com</p>
                </div>

                <div class="glass-card p-6 md:p-10 rounded-2xl md:rounded-3xl text-center col-span-2 lg:col-span-1">
                    <div class="w-11 h-11 md:w-14 md:h-14 bg-orange-600 rounded-xl md:rounded-2xl flex items-center justify-center text-white mx-auto mb-4 md:mb-6 shadow-lg">
                        <i class="fas fa-clock text-lg md:text-xl"></i>
                    </div>
                    <h3 class="font-bold text-base md:text-xl mb-1 md:mb-2 text-slate-900">Horaires</h3>
                    <p class="text-slate-500 text-xs md:text-sm">Lun - Ven : 8h - 17h</p>
                </div>

            </div>
        </section>

        <!-- ════════════════ FORMULAIRE + SIDEBAR ════════════════ -->
        <section class="max-w-7xl mx-auto px-4 md:px-6 pb-20 md:pb-28">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-12">

                <!-- Formulaire -->
                <div class="glass-card p-6 md:p-12 rounded-2xl md:rounded-3xl md:col-span-2 order-2 md:order-1">
                    <div class="flex items-center gap-3 mb-7 md:mb-10">
                        <i class="far fa-paper-plane text-xl md:text-2xl text-orange-600"></i>
                        <h2 class="text-2xl md:text-3xl font-extrabold text-slate-900">Envoyez-nous un Message</h2>
                    </div>

                    @if ($errors->any())
                        <div class="mb-5 p-4 bg-red-50 border-l-4 border-red-500 text-red-700 text-sm rounded-lg">
                            <ul class="space-y-1">
                                @foreach ($errors->all() as $error)
                                    <li><i class="fas fa-exclamation-triangle mr-2"></i>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('contact.submit') }}" method="POST" id="contactForm" novalidate>
                        @csrf

                        <!-- Nom + Email -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
                            <div>
                                <label class="block text-xs font-bold text-slate-600 uppercase tracking-wide mb-1.5">Nom complet *</label>
                                <input type="text" name="name" value="{{ old('name') }}" required
                                       class="form-input" placeholder="Jean Dupont">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-slate-600 uppercase tracking-wide mb-1.5">Email *</label>
                                <input type="email" name="email" value="{{ old('email') }}" required
                                       class="form-input" placeholder="jean@exemple.com">
                            </div>
                        </div>

                        <!-- Téléphone + Entreprise -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
                            <div>
                                <label class="block text-xs font-bold text-slate-600 uppercase tracking-wide mb-1.5">Téléphone</label>
                                <input type="tel" name="telephone" value="{{ old('telephone') }}"
                                       class="form-input" placeholder="+228 XX XX XX XX">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-slate-600 uppercase tracking-wide mb-1.5">Entreprise</label>
                                <input type="text" name="entreprise" value="{{ old('entreprise') }}"
                                       class="form-input" placeholder="Votre société">
                            </div>
                        </div>

                        <!-- Service -->
                        <div class="mb-4">
                            <label class="block text-xs font-bold text-slate-600 uppercase tracking-wide mb-1.5">Service souhaité *</label>
                            <select name="service" required class="form-input text-slate-500">
                                <option value="">Sélectionnez un service</option>
                                <option value="Informatique"      {{ old('service') == 'Informatique'      ? 'selected' : '' }}>Informatique</option>
                                <option value="Télécommunications"{{ old('service') == 'Télécommunications'? 'selected' : '' }}>Télécommunications</option>
                                <option value="Électronique"      {{ old('service') == 'Électronique'      ? 'selected' : '' }}>Électronique</option>
                                <option value="Génie Civil"       {{ old('service') == 'Génie Civil'       ? 'selected' : '' }}>Génie Civil</option>
                            </select>
                        </div>

                        <!-- Message -->
                        <div class="mb-7">
                            <label class="block text-xs font-bold text-slate-600 uppercase tracking-wide mb-1.5">Message *</label>
                            <textarea name="message" required rows="5"
                                      class="form-input resize-none"
                                      placeholder="Décrivez votre projet ou votre demande...">{{ old('message') }}</textarea>
                        </div>

                        <!-- Bouton -->
                        <button type="submit" id="submitBtn"
                                class="w-full sm:w-auto px-8 py-4 bg-gradient-to-r from-orange-600 to-orange-700 text-white font-bold rounded-2xl shadow-lg hover:from-orange-700 hover:to-orange-800 active:scale-95 transition-all flex items-center justify-center gap-3 text-sm md:text-base">
                            <span id="btnText">Envoyer le Message</span>
                            <i class="far fa-paper-plane" id="btnIcon"></i>
                        </button>
                    </form>
                </div>

                <!-- Sidebar CTA -->
                <div class="bg-gradient-to-br from-orange-700 to-orange-600 text-white p-8 md:p-12 rounded-2xl md:rounded-3xl shadow-xl order-1 md:order-2 md:self-start">
                    <h2 class="text-2xl md:text-3xl font-extrabold mb-3 leading-snug">Besoin d'une Réponse Rapide ?</h2>
                    <p class="text-orange-100/80 text-sm leading-relaxed mb-8 italic">
                        Support disponible 24/7 pour vos questions urgentes.
                    </p>
                    <div class="flex flex-col gap-3">
                        <a href="tel:+22893374475"
                           class="w-full px-6 py-3.5 bg-white text-orange-600 font-bold rounded-2xl shadow-lg hover:bg-orange-50 active:scale-95 transition-all flex items-center justify-center gap-3 text-sm">
                            <i class="fas fa-phone"></i> Appeler maintenant
                        </a>
                        <a href="mailto:zarrtgroup@gmail.com"
                           class="w-full px-6 py-3.5 border border-white/40 text-white font-bold rounded-2xl hover:bg-white/10 active:scale-95 transition-all flex items-center justify-center gap-3 text-sm">
                            <i class="fas fa-envelope"></i> Envoyer un Email
                        </a>
                        <a href="https://wa.me/22893374475" target="_blank"
                           class="w-full px-6 py-3.5 bg-green-500 text-white font-bold rounded-2xl shadow-lg hover:bg-green-600 active:scale-95 transition-all flex items-center justify-center gap-3 text-sm">
                            <i class="fab fa-whatsapp text-lg"></i> WhatsApp
                        </a>
                    </div>

                    <!-- Séparateur -->
                    <div class="border-t border-white/20 my-8"></div>

                    <ul class="space-y-3 text-sm text-orange-100/90">
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-orange-300 mt-0.5 flex-shrink-0"></i>
                            Réponse sous 24h garantie
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-orange-300 mt-0.5 flex-shrink-0"></i>
                            Devis gratuit et sans engagement
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-orange-300 mt-0.5 flex-shrink-0"></i>
                            Équipe disponible 7j/7
                        </li>
                    </ul>
                </div>

            </div>
        </section>

        <!-- ════════════════ FOOTER ════════════════ -->
        <footer class="bg-[#0A0A0B] text-white pt-12 pb-10 border-t border-white/5">
            <div class="max-w-7xl mx-auto px-4 md:px-6 text-center">
                <div class="flex items-center justify-center gap-2.5 mb-4">
                    <div class="w-8 h-8 bg-orange-600 rounded flex items-center justify-center font-bold text-white text-sm">Z</div>
                    <span class="text-lg font-bold text-white">ZARRT GROUP</span>
                </div>
                <p class="text-xs text-orange-600 tracking-widest">© 2026 ZARRT GROUP. Tous droits réservés.</p>
            </div>
        </footer>

    </div><!-- /content-wrapper -->

    <!-- ════════════════ SCRIPTS ════════════════ -->
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
    <script>
        // ── PARTICLES (désactivé sur petits écrans pour les performances) ──
        if (window.innerWidth >= 768) {
            particlesJS('particles-js', {
                "particles": {
                    "number": { "value": 55 },
                    "color": { "value": ["#9333ea", "#4f46e5", "#0ea5e9"] },
                    "shape": { "type": "circle" },
                    "opacity": { "value": 0.35 },
                    "size": { "value": 3 },
                    "line_linked": { "enable": true, "distance": 140, "color": "#a5b4fc", "opacity": 0.3 },
                    "move": { "enable": true, "speed": 1.2 }
                },
                "interactivity": { "events": { "onhover": { "enable": true, "mode": "grab" } } },
                "retina_detect": true
            });
        } else {
            // Fond noir simple sur mobile (pas de canvas lourd)
            document.getElementById('particles-js').style.background = '#090d1a';
        }

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

        // ── FORMULAIRE + WHATSAPP ──
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const form = this;
            const btn  = document.getElementById('submitBtn');

            const name    = form.querySelector('input[name="name"]').value.trim();
            const email   = form.querySelector('input[name="email"]').value.trim();
            const tel     = form.querySelector('input[name="telephone"]').value.trim() || 'Non précisé';
            const service = form.querySelector('select[name="service"]').value;
            const msg     = form.querySelector('textarea[name="message"]').value.trim();

            if (!name || !email || !service || !msg) {
                Swal.fire({
                    title: 'Champs manquants',
                    text: 'Veuillez remplir tous les champs obligatoires (*)',
                    icon: 'warning',
                    confirmButtonColor: '#ea580c'
                });
                return;
            }

            const whatsappMsg =
                `*NOUVEAU CONTACT ZARRT*\n\n` +
                `*Nom :* ${name}\n` +
                `*Email :* ${email}\n` +
                `*Tél :* ${tel}\n` +
                `*Service :* ${service}\n\n` +
                `*Message :*\n${msg}`;

            btn.disabled = true;
            btn.innerHTML = `<span>Envoi en cours...</span> <i class="fas fa-spinner fa-spin"></i>`;

            window.open(`https://wa.me/22893374475?text=${encodeURIComponent(whatsappMsg)}`, '_blank');

            form.reset();

            Swal.fire({
                title: 'Message envoyé !',
                text: 'Vos informations ont été transmises via WhatsApp.',
                icon: 'success',
                confirmButtonColor: '#ea580c',
                timer: 4000,
                timerProgressBar: true,
                didClose: () => {
                    btn.disabled = false;
                    btn.innerHTML = `<span>Envoyer le Message</span> <i class="far fa-paper-plane"></i>`;
                }
            });
        });
    </script>
</body>
</html>
