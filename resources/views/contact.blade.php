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
        #particles-js { position: fixed; top: 0; left: 0; width: 100%; height: 100%; z-index: 1; background-color: black; }
        .content-wrapper { position: relative; z-index: 10; }
        .glass-card { background: rgba(255, 255, 255, 0.7); backdrop-filter: blur(12px); border: 1px solid rgba(255, 255, 255, 0.5); transition: all 0.4s ease; }
    </style>
</head>
<body class="antialiased">

    <div id="particles-js"></div>

    <div class=" content-wrapper">
        <header class="bg-black backdrop-blur-md border-b border-black fixed w-full z-50">
            <nav class="  max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
                <a href="{{ route('home') }}" class="flex items-center space-x-2">

          <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-orange-600 rounded-lg flex items-center justify-center font-bold text-xl  text-white">Z</div>
                <span class="text-xl font-bold tracking-tight text-white">ZARRT GROUP</span>
            </div>
                </a>
                <div class="hidden md:flex items-center space-x-8 text-sm  text-orange-600">
                    <a href="{{ route('home') }}" class="hover:text-orange-600 transition-colors">Accueil</a>
                    <a href="{{ route('projects.index') }}" class="hover:text-orange-600 transition-colors">Projets</a>
                    <a href="{{ route('about') }}" class="hover:text-orange-600 transition-colors">À propos</a>
                    <a href="{{ route('contact') }}" class="px-6 py-2.5 bg-orange-600 text-white rounded-full shadow-xl hover:scale-105 transition-transform">Contact</a>
                </div>
            </nav>
        </header>
    <div class="bg-orange-600">
        <main class=" pt-24">

            <section class=" text-white py-32 text-center relative overflow-hidden">
                <div class="absolute inset-0 opacity-10">
                    <svg width="100%" height="100%"><defs><pattern id="polka" patternUnits="userSpaceOnUse" width="100" height="100"><circle cx="50" cy="50" r="2" fill="white"></circle></pattern></defs><rect width="100%" height="100%" fill="url(#polka)"></rect></svg>
                </div>
                <div class="max-w-7xl mx-auto px-6 relative z-10">
                    <h1 class="text-6xl font-black tracking-tighter mb-6 leading-tight">
                        Contactez <br>
                        <span >ZARRT GROUP.</span>
                    </h1>
                    <p class="max-w-2xl mx-auto text-orange-100 text-lg leading-relaxed font-medium">Notre équipe est à votre écoute pour vous accompagner dans vos projets technologiques.</p>
                </div>
            </section>
    </div>
            <section class="max-w-7xl mx-auto px-6 -mt-20 pb-20">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="glass-card p-10 rounded-3xl text-center hover:scale-105">
                        <div class="w-14 h-14 bg-orange-600 rounded-2xl flex items-center justify-center text-white mx-auto mb-8 shadow-lg shadow-blue-100"><i class="fas fa-location-dot text-xl"></i></div>
                        <h3 class="font-bold text-xl mb-3 text-slate-900">Adresse</h3>
                        <p class="text-slate-500 text-sm">Lomé, Togo</p>
                    </div>
                    <div class="glass-card p-10 rounded-3xl text-center hover:scale-105">
                        <div class="w-14 h-14 bg-orange-600 rounded-2xl flex items-center justify-center text-white mx-auto mb-8 shadow-lg shadow-green-100"><i class="fas fa-phone text-xl"></i></div>
                        <h3 class="font-bold text-xl mb-3 text-slate-900">Téléphone</h3>
                        <p class="text-slate-500 text-sm">+22893374475</p>
                    </div>
                    <div class="glass-card p-10 rounded-3xl text-center hover:scale-105">
                        <div class="w-14 h-14 bg-orange-600 rounded-2xl flex items-center justify-center text-white mx-auto mb-8 shadow-lg shadow-purple-100"><i class="fas fa-envelope text-xl"></i></div>
                        <h3 class="font-bold text-xl mb-3 text-slate-900">Email</h3>
                        <p class="text-slate-500 text-sm">zarrtgroup@gmail.com</p>
                    </div>
                    <div class="glass-card p-10 rounded-3xl text-center hover:scale-105">
                        <div class="w-14 h-14 bg-orange-600 rounded-2xl flex items-center justify-center text-white mx-auto mb-8 shadow-lg shadow-orange-100"><i class="fas fa-clock text-xl"></i></div>
                        <h3 class="font-bold text-xl mb-3 text-slate-900">Horaires</h3>
                        <p class="text-slate-500 text-sm">Lun - Ven: 8h - 17h</p>
                    </div>
                </div>
            </section>

            <section class="max-w-7xl mx-auto px-6 pb-24">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                    <div class="glass-card p-12 rounded-3xl md:col-span-2">
                        <div class="flex items-center space-x-4 mb-10">
                            <i class="far fa-paper-plane text-2xl text-orange-600"></i>
                            <h2 class="text-3xl font-extrabold text-slate-900">Envoyez-nous un Message</h2>
                        </div>

                        @if ($errors->any())
                            <div class="mb-6 p-4 bg-red-50 border-l-4 border-red-500 text-red-700 text-sm rounded-lg">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li><i class="fas fa-exclamation-triangle mr-2"></i> {{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('contact.submit') }}" method="POST" id="contactForm">
                            @csrf
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                <div>
                                    <label class="block text-xs font-bold text-slate-700 uppercase mb-2">Nom complet *</label>
                                    <input type="text" name="name" value="{{ old('name') }}" required class="w-full px-5 py-4 bg-white/50 border border-slate-100 rounded-xl text-sm focus:border-blue-400 focus:ring-1 focus:ring-blue-200">
                                </div>
                                <div>
                                    <label class="block text-xs font-bold text-slate-700 uppercase mb-2">Email *</label>
                                    <input type="email" name="email" value="{{ old('email') }}" required class="w-full px-5 py-4 bg-white/50 border border-slate-100 rounded-xl text-sm focus:border-blue-400 focus:ring-1 focus:ring-blue-200">
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                <div>
                                    <label class="block text-xs font-bold text-slate-700 uppercase mb-2">Téléphone</label>
                                    <input type="tel" name="telephone" value="{{ old('telephone') }}" class="w-full px-5 py-4 bg-white/50 border border-slate-100 rounded-xl text-sm focus:border-blue-400 focus:ring-1 focus:ring-blue-200">
                                </div>
                                <div>
                                    <label class="block text-xs font-bold text-slate-700 uppercase mb-2">Entreprise</label>
                                    <input type="text" name="entreprise" value="{{ old('entreprise') }}" class="w-full px-5 py-4 bg-white/50 border border-slate-100 rounded-xl text-sm focus:border-blue-400 focus:ring-1 focus:ring-blue-200">
                                </div>
                            </div>

                            <div class="mb-6">
                                <label class="block text-xs font-bold text-slate-700 uppercase mb-2">Service souhaité *</label>
                                <select name="service" required class="w-full px-5 py-4 bg-white/50 border border-slate-100 rounded-xl text-sm text-slate-500 focus:border-blue-400 focus:ring-1 focus:ring-blue-200">
                                    <option value="">Sélectionnez un service</option>
                                    <option value="Informatique" {{ old('service') == 'Informatique' ? 'selected' : '' }}>Informatique</option>
                                    <option value="Télécommunications" {{ old('service') == 'Télécommunications' ? 'selected' : '' }}>Télécommunications</option>
                                    <option value="Électronique" {{ old('service') == 'Électronique' ? 'selected' : '' }}>Électronique</option>
                                    <option value="Génie Civil" {{ old('service') == 'Génie Civil' ? 'selected' : '' }}>Génie Civil</option>
                                </select>
                            </div>

                            <div class="mb-10">
                                <label class="block text-xs font-bold text-slate-700 uppercase mb-2">Message *</label>
                                <textarea name="message" required rows="6" class="w-full px-5 py-4 bg-white/50 border border-slate-100 rounded-xl text-sm focus:border-blue-400 focus:ring-1 focus:ring-blue-200">{{ old('message') }}</textarea>
                            </div>

                            <button type="submit" id="submitBtn" class="w-full md:w-auto px-8 py-5 bg-gradient-to-r from-orange-600 to-orange-700 text-white font-bold rounded-2xl shadow-xl hover:scale-105 transition-transform flex items-center justify-center">
                                <span id="btnText">Envoyer le Message</span>
                                <i class="far fa-paper-plane ml-3" id="btnIcon"></i>
                            </button>
                        </form>
                    </div>

                    <div class="bg-gradient-to-tr from-orange-700 to-orange-600 text-white p-12 rounded-3xl shadow-sm self-start">
                        <h2 class="text-3xl font-extrabold mb-5 leading-snug">Besoin d'une Réponse Rapide ?</h2>
                        <p class="text-blue-100 text-sm leading-relaxed mb-10 font-medium italic">Support disponible 24/7 pour vos questions urgentes.</p>
                        <a href="tel:+22870212677" class="w-full px-6 py-4.5 bg-white text-orange-600 font-bold rounded-2xl shadow-xl hover:bg-slate-50 hover:scale-105 transition-all flex items-center justify-center mb-5"><i class="fas fa-phone mr-3"></i> Appeler</a>
                        <a href="mailto:zarrtgroup@gmail.com" class="w-full px-6 py-4.5 bg-white-500 text-white font-bold rounded-2xl shadow-xl hover:bg-orange-600 hover:scale-105 transition-all border border-blue-400 flex items-center justify-center"><i class="fas fa-envelope mr-3"></i> Email</a>
                    </div>
                </div>
            </section>
        </main>

        <footer class="bg-[#0A0A0B] text-white pt-24 pb-12 border-t border-white/5">
            <div class="flex items-center justify-center gap-3 mb-6">
                <div class="w-8 h-8 bg-orange-600 rounded flex items-center justify-center font-bold text-white">Z</div>
                <span class="text-xl font-bold text-white">ZARRT GROUP</span>
            </div>
            <div class="max-w-7xl mx-auto px-6 text-center text-orange-600 text-xs  tracking-widest">
                © 2026 ZARRT GROUP. Tous droits réservés.
            </div>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
<script>
    // 1. Initialisation de l'animation de fond
    particlesJS('particles-js', {
        "particles": {
            "number": { "value": 70 },
            "color": { "value": ["#9333ea", "#4f46e5", "#0ea5e9"] },
            "shape": { "type": "circle" },
            "opacity": { "value": 0.4 },
            "size": { "value": 4 },
            "line_linked": { "enable": true, "distance": 150, "color": "#a5b4fc", "opacity": 0.35 },
            "move": { "enable": true, "speed": 1.5 }
        },
        "interactivity": { "events": { "onhover": { "enable": true, "mode": "grab" } } },
        "retina_detect": true
    });

    // 2. Gestion de l'envoi et du nettoyage
    document.getElementById('contactForm').onsubmit = function(e) {
        // On empêche le rechargement pour gérer le reset nous-mêmes
        e.preventDefault();

        const form = this;
        const btn = document.getElementById('submitBtn');
        const icon = document.getElementById('btnIcon');
        const text = document.getElementById('btnText');

        // Récupération des données avant le reset
        const name = form.querySelector('input[name="name"]').value;
        const tel = form.querySelector('input[name="telephone"]').value || 'Non précisé';
        const service = form.querySelector('select[name="service"]').value;
        const msg = form.querySelector('textarea[name="message"]').value;

        // Préparation du message WhatsApp
        const whatsappMsg = `*NOUVEAU CONTACT ZARRT*\n\n` +
                            `*Nom:* ${name}\n` +
                            `*Tel:* ${tel}\n` +
                            `*Service:* ${service}\n\n` +
                            `*Message:* \n${msg}`;

        const whatsappUrl = `https://wa.me/22893374475?text=${encodeURIComponent(whatsappMsg)}`;

        // Effets visuels sur le bouton
        btn.disabled = true;
        btn.innerHTML = `<span>Envoi en cours...</span> <i class="fas fa-spinner fa-spin ml-3"></i>`;

        // Ouverture de WhatsApp
        window.open(whatsappUrl, '_blank');

        // --- LA MODIFICATION : VIDER LE FORMULAIRE ---
        form.reset();

        // Affichage de la confirmation SweetAlert
        Swal.fire({
            title: 'Message Envoyé !',
            text: 'Vos informations ont été transmises. Le formulaire a été réinitialisé.',
            icon: 'success',
            confirmButtonColor: '#2563eb',
            timer: 4000,
            timerProgressBar: true,
            didClose: () => {
                // Remise à zéro du bouton après l'envoi
                btn.disabled = false;
                btn.innerHTML = `<span>Envoyer le Message</span> <i class="far fa-paper-plane ml-3"></i>`;
            }
        });
    };
</script>
</body>
</html>
