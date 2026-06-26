<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neon Admin Studio | TechnoSolutions</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/dist/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --neon-cyan: #ff4d00;
            --neon-purple: orange;
            --neon-green: orange;
            --bg-dark: black;
        }

        body { 
            font-family: 'Plus Jakarta Sans', sans-serif; 
            background-color: var(--bg-dark);
            overflow-x: hidden;
        }

        /* Animation de fond (Particules Canvas) */
        #particles-js {
            position: fixed;
            top: 0; left: 0;
            width: 100%; height: 100%;
            z-index: 0;
        }

        /* Carte avec bordure animée infinie */
        .neon-container {
            position: relative;
            background:darkblue;
            border-radius: 3.5rem;
            z-index: 10;
        }

        .neon-glow-wrapper {
            position: relative;
            padding: 3px;
            background: linear-gradient(90deg, var(--neon-cyan), var(--neon-purple), var(--neon-green), var(--neon-cyan));
            background-size: 400% 400%;
            animation: gradient-move 8s linear infinite;
            border-radius: 3.6rem;
        }

        @keyframes gradient-move {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* Inputs avec lueur interne */
        .cyber-input {
            background: rgba(15, 23, 42, 0.8);
            border: 2px solid #1e293b;
            color:black;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .cyber-input:focus {
            border-color: var(--neon-cyan);
            box-shadow: 0 0 15px rgba(0, 242, 255, 0.3), inset 0 0 10px rgba(0, 242, 255, 0.1);
            transform: translateY(-2px);
            outline: none;
        }

        /* Bouton de propulsion */
        .btn-launch {
            background: linear-gradient(45deg, var(--neon-purple), var(--neon-cyan));
            text-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
            box-shadow: 0 10px 30px rgba(112, 0, 255, 0.4);
            transition: all 0.3s ease;
        }

        .btn-launch:hover {
            filter: brightness(1.2);
            box-shadow: 0 15px 40px rgba(0, 242, 255, 0.6);
            transform: translateY(-4px) scale(1.02);
        }

        /* Tooltip Fluo */
        .label-fluo {
            font-size: 10px;
            font-weight: 900;
            text-transform: uppercase;
            letter-spacing: 2px;
            text-shadow: 0 0 5px currentColor;
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center p-4 md:p-10">

    <div id="particles-js"></div>

    <div class="w-full max-w-4xl relative">
        
        <div class="flex justify-between items-center mb-10 px-6 relative z-20">
            <a href="{{ url('/') }}" class="group flex items-center gap-3 text-white/40 hover:text-[var(--neon-cyan)] transition-all font-bold text-xs tracking-widest">
                <i class="fas fa-microchip group-hover:rotate-180 transition-transform duration-500"></i> RETOUR SYSTÈME
            </a>
            <div class="px-4 py-1 rounded-full border border-white/10 text-[10px] text-white/20 font-black tracking-tighter">
                ENCRYPTED ACCESS: 2.0.46
            </div>
        </div>

        <div class="neon-glow-wrapper shadow-[0_0_100px_rgba(0,242,255,0.15)]">
            <div class="neon-container p-8 md:p-16">
                
                <header class="mb-14 text-center">
                    <h1 class="text-6xl font-black text-white tracking-tighter mb-4 italic">
                        NOUVEAU <span style="color: var(--neon-cyan); text-shadow: 0 0 20px rgba(0,242,255,0.5);">PROJET</span>
                    </h1>
                    <div class="h-1 w-24 bg-gradient-to-r from-[var(--neon-cyan)] to-[var(--neon-purple)] mx-auto rounded-full"></div>
                </header>

                @if ($errors->any())
                    <div class="mb-8 p-4 bg-red-500/10 border border-red-500/50 rounded-2xl">
                        <ul class="text-red-400 text-xs font-bold uppercase tracking-widest list-disc ml-5">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ url('/adminp') }}" method="POST" enctype="multipart/form-data" class="space-y-10">
                    @csrf

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                        <div class="space-y-3">
                            <label class="label-fluo text-[var(--neon-cyan)] ml-2">Désignation Projet</label>
                            <input type="text" name="titre" value="{{ old('titre') }}" required 
                                placeholder="VALEUR_STRING"
                                class="cyber-input w-full p-6 rounded-2xl font-bold tracking-tight">
                        </div>

                        <div class="space-y-3">
                            <label class="label-fluo text-[var(--neon-purple)] ml-2">Domaine d'Application</label>
                            <div class="relative">
                                <select name="categorie" required 
                                    class="cyber-input w-full p-6 rounded-2xl font-bold appearance-none cursor-pointer">
                                    <option value="Informatique">INFORMATIQUE</option>
                                    <option value="Télécoms">TÉLÉCOMS</option>
                                    <option value="Électronique">ÉLECTRONIQUE</option>
                                    <option value="Électrique">ÉLECTRIQUE</option>
                                    <option value="Génie Civil">GÉNIE CIVIL</option>
                                </select>
                                <i class="fas fa-caret-down absolute right-6 top-1/2 -translate-y-1/2 text-[var(--neon-cyan)]"></i>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-3">
                        <label class="label-fluo text-slate-500 ml-2">Spécifications Techniques</label>
                        <textarea name="description" rows="4" 
                            placeholder="INITIALISER_DESCRIPTION..."
                            class="cyber-input w-full p-6 rounded-[2.5rem] font-bold resize-none">{{ old('description') }}</textarea>
                    </div>

                    <div class="relative group">
                        <label class="label-fluo text-[var(--neon-green)] ml-2 block mb-3">Asset Visuel (JPG/PNG)</label>
                        <div class="relative w-full h-40 border-2 border-dashed border-slate-700 rounded-[2.5rem] flex flex-col items-center justify-center transition-all group-hover:border-[var(--neon-green)] group-hover:bg-[var(--neon-green)]/5">
                            <input type="file" name="image" required class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-30">
                            <i class="fas fa-upload text-[var(--neon-green)] text-2xl mb-3 animate-bounce"></i>
                            <span class="text-[10px] font-black text-white tracking-[0.3em] uppercase">Charger le module image</span>
                        </div>
                    </div>

                    <div class="pt-6">
                        <button type="submit" class="btn-launch w-full py-7 text-white font-black rounded-[2.5rem] uppercase tracking-[0.6em] text-sm">
                            EXÉCUTER LA PUBLICATION
                        </button>
                    </div>
                </form>

                @if(session('success'))
                    <div class="mt-10 p-5 bg-[var(--neon-green)]/10 border border-[var(--neon-green)]/30 rounded-3xl text-[var(--neon-green)] text-center font-black text-[10px] tracking-[0.4em] animate-pulse">
                        <i class="fas fa-check-double mr-2"></i> {{ session('success') }}
                    </div>
                @endif

            </div>
        </div>

        <footer class="mt-12 text-center">
            <p class="text-[9px] font-black text-white/20 tracking-[1em] uppercase">
                ZARRT GROUP 
            </p>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script>
        particlesJS("particles-js", {
            "particles": {
                "number": { "value": 80, "density": { "enable": true, "value_area": 800 } },
                "color": { "value": "#00f2ff" },
                "shape": { "type": "circle" },
                "opacity": { "value": 0.2, "random": false },
                "size": { "value": 3, "random": true },
                "line_linked": { "enable": true, "distance": 150, "color": "#00f2ff", "opacity": 0.1, "width": 1 },
                "move": { "enable": true, "speed": 2, "direction": "none", "random": false, "straight": false, "out_mode": "out", "bounce": false }
            },
            "interactivity": {
                "detect_on": "canvas",
                "events": { "onhover": { "enable": true, "mode": "grab" }, "onclick": { "enable": true, "mode": "push" }, "resize": true }
            },
            "retina_detect": true
        });
    </script>
</body>
</html>