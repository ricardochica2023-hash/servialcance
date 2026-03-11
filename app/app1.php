<!DOCTYPE html>

<html class="dark" lang="es">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Aroma &amp; Grano | Café Gourmet de Especialidad</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets/img/logo.png" type="image/x-icon">
    <link rel="icon" href="../assets/img/logo.png" type="image/png">

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#d4a373", // Golden/Coffee Tan
                        "primary-dark": "#bc8a5f",
                        "accent-gold": "#e9edc9",
                        "background-light": "#fefae0",
                        "background-dark": "#1a120b", // Deep coffee dark
                        "card-dark": "#2d2013",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
    <style>
        body {
            min-height: max(884px, 100dvh);
        }

        /* Glassmorphism header */
        .glass-header {
            background: linear-gradient(135deg, rgba(254, 250, 224, 0.9) 0%, rgba(212, 163, 115, 0.15) 100%);
        }

        .dark .glass-header {
            background: linear-gradient(135deg, rgba(26, 18, 11, 0.95) 0%, rgba(45, 32, 19, 0.85) 100%);
        }

        /* Animated underline for nav links */
        .nav-link {
            position: relative;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, #d4a373, #e9edc9);
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .nav-link:hover {
            text-shadow: 0 0 12px rgba(212, 163, 115, 0.5);
        }

        /* Logo hover animation */
        .logo-container {
            transition: transform 0.3s ease;
        }

        .logo-container:hover {
            transform: scale(1.1);
        }

        /* Glow button with shimmer effect */
        .btn-glow {
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .btn-glow::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.5s ease;
            z-index: -1;
        }

        .btn-glow:hover::before {
            left: 100%;
        }

        .btn-glow:hover {
            box-shadow: 0 0 25px rgba(212, 163, 115, 0.6), 0 0 50px rgba(212, 163, 115, 0.3);
        }

        /* Mobile menu animation */
        .mobile-menu {
            transform: translateX(-100%);
            transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .mobile-menu.active {
            transform: translateX(0);
        }

        /* Hamburger animation */
        .hamburger-line {
            transition: all 0.3s ease;
        }

        .hamburger.active .hamburger-line:nth-child(1) {
            transform: rotate(45deg) translate(5px, 5px);
        }

        .hamburger.active .hamburger-line:nth-child(2) {
            opacity: 0;
        }

        .hamburger.active .hamburger-line:nth-child(3) {
            transform: rotate(-45deg) translate(5px, -5px);
        }

        /* Nav icon animations */
        .nav-icon {
            transition: transform 0.3s ease;
        }

        .nav-link:hover .nav-icon {
            transform: translateY(-2px);
        }
    </style>
</head>

<body class="font-display bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 selection:bg-primary/30">
    <!-- TopAppBar -->
    <header class="sticky top-0 z-50 w-full glass-header backdrop-blur-lg border-b border-primary/20 shadow-lg">

        <div class="max-w-7xl mx-auto flex items-center h-16 px-4 md:px-6 justify-between">
            <a href="../index.html" class="btn-glow bg-primary hover:bg-primary-dark text-background-dark px-6 py-2.5 rounded-full text-sm font-bold transition-all shadow-lg shadow-primary/30 hidden md:inline-flex">
                <i class="bi bi-arrow-return-left"> Volver a Servi Alcance</i>
            </a>
            <!-- Logo con animación -->
            <a href="#" class="logo-container flex items-center gap-2 group">
                <span class="material-symbols-outlined text-primary text-3xl drop-shadow-lg group-hover:rotate-12 transition-transform">coffee</span>
                <h2 class="text-slate-900 dark:text-slate-100 text-xl font-bold tracking-tight group-hover:text-primary transition-colors">Aroma &amp; Grano</h2>
            </a>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex items-center gap-8">
                <a class="nav-link flex items-center gap-2 text-sm font-medium text-slate-700 dark:text-slate-200 hover:text-primary transition-colors" href="#granos">
                    <span class="material-symbols-outlined nav-icon text-lg">grass</span>
                    Granos
                </a>
                <a class="nav-link flex items-center gap-2 text-sm font-medium text-slate-700 dark:text-slate-200 hover:text-primary transition-colors" href="#menu">
                    <span class="material-symbols-outlined nav-icon text-lg">restaurant_menu</span>
                    Menú
                </a>
                <a class="nav-link flex items-center gap-2 text-sm font-medium text-slate-700 dark:text-slate-200 hover:text-primary transition-colors" href="#ubicacion">
                    <span class="material-symbols-outlined nav-icon text-lg">place</span>
                    Ubicación
                </a>
            </nav>

            <!-- Right side buttons -->
            <div class="flex items-center gap-2">
                <button class="p-2 text-slate-600 dark:text-slate-400 hover:text-primary hover:scale-110 transition-all rounded-full hover:bg-primary/10">
                    <span class="material-symbols-outlined">search</span>
                </button>
                <button class="btn-glow bg-primary hover:bg-primary-dark text-background-dark px-6 py-2.5 rounded-full text-sm font-bold transition-all shadow-lg shadow-primary/30">
                    Reservar
                </button>
                <!-- Mobile menu button -->
                <button class="hamburger md:hidden p-2 text-slate-600 dark:text-slate-400 hover:text-primary transition-colors" onclick="toggleMobileMenu()">
                    <span class="flex flex-col gap-1.5">
                        <span class="hamburger-line w-6 h-0.5 bg-current block"></span>
                        <span class="hamburger-line w-6 h-0.5 bg-current block"></span>
                        <span class="hamburger-line w-6 h-0.5 bg-current block"></span>
                    </span>
                </button>
            </div>
        </div>

<!-- Mobile Menu -->
        <div id="mobile-menu" class="mobile-menu fixed inset-0 top-16 bg-slate-100 dark:bg-background-dark z-40 md:hidden overflow-y-auto">
            <div class="flex flex-col items-center justify-start gap-4 py-8 px-4 min-h-full">
                <!-- Navigation Links -->
                <div class="flex flex-col w-full max-w-sm gap-2">
                    <a class="nav-link flex items-center gap-4 p-4 text-lg font-semibold text-slate-800 dark:text-slate-100 hover:text-primary hover:bg-primary/5 rounded-xl transition-all" href="#granos" onclick="toggleMobileMenu()">
                        <span class="material-symbols-outlined text-2xl">grass</span>
                        Granos
                    </a>
                    <a class="nav-link flex items-center gap-4 p-4 text-lg font-semibold text-slate-800 dark:text-slate-100 hover:text-primary hover:bg-primary/5 rounded-xl transition-all" href="#menu" onclick="toggleMobileMenu()">
                        <span class="material-symbols-outlined text-2xl">restaurant_menu</span>
                        Menú
                    </a>
                    <a class="nav-link flex items-center gap-4 p-4 text-lg font-semibold text-slate-800 dark:text-slate-100 hover:text-primary hover:bg-primary/5 rounded-xl transition-all" href="#ubicacion" onclick="toggleMobileMenu()">
                        <span class="material-symbols-outlined text-2xl">place</span>
                        Ubicación
                    </a>
                </div>
                
                <!-- Action Buttons -->
                <div class="flex flex-col w-full max-w-sm gap-3 mt-4">
                    <a href="../index.html" class="btn-glow bg-primary hover:bg-primary-dark text-background-dark py-3 px-6 rounded-xl text-base font-bold shadow-lg shadow-primary/30 flex items-center justify-center gap-2">
                        <span class="material-symbols-outlined">arrow_back</span>
                        Volver a Servi Alcance
                    </a>
                    <button class="btn-glow bg-primary-dark hover:bg-primary text-background-dark py-3 px-6 rounded-xl text-base font-bold shadow-lg shadow-primary/30">
                        Reservar Ahora
                    </button>
                </div>
            </div>
        </div>

        <script>
            function toggleMobileMenu() {
                const menu = document.getElementById('mobile-menu');
                const hamburger = document.querySelector('.hamburger');
                menu.classList.toggle('active');
                hamburger.classList.toggle('active');
            }
        </script>
    </header>
    <main>
        <!-- Hero Section -->
        <section class="relative @container">
            <div class="px-4 py-8 @[480px]:p-6">
<div class="relative flex min-h-[400px] sm:min-h-[500px] flex-col gap-4 @[480px]:gap-6 bg-cover bg-center bg-no-repeat @[480px]:rounded-xl items-center justify-center p-4 @[480px]:p-6 overflow-hidden" data-alt="Close up of professional barista pouring latte art in specialty coffee shop" style='background-image: linear-gradient(to bottom, rgba(26, 18, 11, 0.4), rgba(26, 18, 11, 0.8)), url("https://lh3.googleusercontent.com/aida-public/AB6AXuBrXByIu-TEiP4oKvk4gt1536-BTS9WXkT2P86zdiBu_6cYv6S02AiMnMMBaU9t5hwP7-Avuf1Er3eB8KC1H-frDCXoGlL0Z7ZP-8L-2ll1U1_3lA3y9JILhyteWVbGiGgoJ21GLLgff6QXTZPR4HhemExHDPBdjKnipJUkPH4FIUQMwelhKwNLilks1_RJoyLu4enhS-3YC-VEO5MO2EHU0r5B37q1B8ApnSGvelcTRW1BzMzLRrz903JjOIjd64fKBIMSewUu6j0");'>
                    <div class="flex flex-col gap-4 text-center max-w-2xl z-10">
                        <span class="text-primary font-semibold tracking-[0.2em] uppercase text-sm">Tostado Artesanal</span>
<h1 class="text-white text-3xl sm:text-4xl @[480px]:text-5xl font-black leading-tight tracking-tight @[640px]:text-6xl @[768px]:text-7xl">
                            Aroma &amp; Grano
                        </h1>
                        <p class="text-slate-200 text-base sm:text-lg font-normal leading-relaxed @[480px]:text-xl">
                            Experiencia sensorial en cada taza con nuestro café de especialidad cultivado en fincas sostenibles.
                        </p>
                    </div>
<div class="flex flex-col sm:flex-row gap-3 sm:gap-4 mt-4 sm:mt-6 z-10">
                        <button class="flex min-w-[140px] sm:min-w-[160px] items-center justify-center rounded-full h-10 sm:h-12 px-6 sm:px-8 bg-primary text-background-dark text-sm sm:text-base font-bold transition-transform hover:scale-105 shadow-xl shadow-primary/20">
                            Explorar Menú
                        </button>
                        <button class="flex min-w-[140px] sm:min-w-[160px] items-center justify-center rounded-full h-10 sm:h-12 px-6 sm:px-8 bg-white/10 backdrop-blur-md text-white border border-white/20 text-sm sm:text-base font-bold transition-colors hover:bg-white/20">
                            Nuestra Historia
                        </button>
                    </div>
                    <!-- Decorative element -->
                    <div class="absolute bottom-0 left-0 w-full h-24 bg-gradient-to-t from-background-dark to-transparent"></div>
                </div>
            </div>
        </section>
        <!-- Nuestros Granos Section -->
        <section class="max-w-7xl mx-auto px-4 py-16 @container" id="granos">
            <div class="flex flex-col gap-4 mb-12">
                <div class="flex items-center gap-2">
                    <div class="h-[1px] w-12 bg-primary"></div>
                    <span class="text-primary font-bold text-sm tracking-widest uppercase">Calidad en el Origen</span>
                </div>
                <h2 class="text-slate-900 dark:text-slate-100 text-3xl font-black @[480px]:text-5xl tracking-tight">
                    Nuestra Selección de Granos
                </h2>
                <p class="text-slate-600 dark:text-slate-400 text-lg max-w-2xl leading-relaxed">
                    Seleccionamos meticulosamente granos de fincas sostenibles para garantizar un perfil de sabor único y sofisticado que respeta la tierra.
                </p>
            </div>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
<!-- Card 1 -->
                <div class="group flex flex-col gap-3 sm:gap-4 p-3 sm:p-4 rounded-2xl bg-slate-100 dark:bg-card-dark border border-primary/5 hover:border-primary/20 transition-all">
                    <div class="w-full aspect-[4/3] bg-center bg-no-repeat bg-cover rounded-xl overflow-hidden shadow-md" data-alt="Green unroasted coffee beans from highland regions" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuC5dOHAxw35x-pbwtQAKGxp3EaKMjsDjR9Xd2Rl5OzEifiLi1Mvoy1y7upWG8ppKoyCCi8xvHfVeSXkuEHXJYEKBM6xH5QXV4iMjGVDpGZCYyc2WoVSxD9fMXfqW3e5WYOSNnX9fhnSY94kG7OiKS6MgXCdEqP2S_5engYhkWUXdNGi3yDAjjNkgzIxOaZbsNQlY80GETdOGCOTccWqgTTC_8c_OWFM2Ml58yjbV8OVx4F7i3Z5I7RqJx-KTlDlr6mV3sSPREfhQK8");'>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-1 group-hover:text-primary transition-colors">Arábica Suave</h3>
                        <p class="text-slate-500 dark:text-slate-400 text-sm leading-relaxed">Proveniente de las tierras altas, con notas florales, cítricas y una acidez balanceada.</p>
                    </div>
                </div>
<!-- Card 2 -->
                <div class="group flex flex-col gap-3 sm:gap-4 p-3 sm:p-4 rounded-2xl bg-slate-100 dark:bg-card-dark border border-primary/5 hover:border-primary/20 transition-all">
                    <div class="w-full aspect-[4/3] bg-center bg-no-repeat bg-cover rounded-xl overflow-hidden shadow-md" data-alt="Dark roasted robust coffee beans with oily surface" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCWvrfhNQEvMvefP4yGbxKQwP4u6uP1foIZAEa2dgjMZrRBMlODd0Kb8xGKYc_zx9zDlH_jlY8DH3qcoXq5uiSuuk2rOna1InYTlt-Ei2l_RTgwuMTGUwxi3tB8zyk9Q81NJWq6C8AEuFWSeFjSITP0Ma5axaVN8zWl8s9fCdMEubtThYJ6Aqmqa9L3quFZtUTzRmmwqiIrdWiSEHFVWbnkoWGhLElH8bDFuOROs0JCHFfBEyYyfIliPO4DDkVwlC3pmXNOe-W6PS8");'>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-1 group-hover:text-primary transition-colors">Robusta Intenso</h3>
                        <p class="text-slate-500 dark:text-slate-400 text-sm leading-relaxed">Un cuerpo robusto y cremoso con toques profundos de chocolate amargo y nueces tostadas.</p>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="group flex flex-col gap-3 sm:gap-4 p-3 sm:p-4 rounded-2xl bg-slate-100 dark:bg-card-dark border border-primary/5 hover:border-primary/20 transition-all">
                    <div class="w-full aspect-[4/3] bg-center bg-no-repeat bg-cover rounded-xl overflow-hidden shadow-md" data-alt="Barista weighing coffee beans for precise brewing" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDAFM_k-C4j2khiRc1O2RTXaEV8zYlF3-YfU4DGxSPL6W5sxa30IJ2fcgERE6GDL2lFw2yMxGFHJpGG_Wt_edlFQqzh60_Gd69qugsbJfa0Q3TI7_hbVZImcwCj_GTKBgFbv--tFlix9e7N2a8ou6hPjnHiT5HisGNCeVLHloYMGG2Nkdcsnn-6muCe2KBgbksErwTDdAOg5MJZovhBslohUZXGja-cluRpbb0L1qCszd29JPJ16v57Q0sh4ge94sBzqdTSWT4Y4Cc");'>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-1 group-hover:text-primary transition-colors">Mezcla de la Casa</h3>
                        <p class="text-slate-500 dark:text-slate-400 text-sm leading-relaxed">El equilibrio perfecto: dulzor de caramelo y postgusto persistente, creado por nuestros maestros tostadores.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Menú Destacado -->
        <section class="bg-primary/5 py-20" id="menu">
            <div class="max-w-7xl mx-auto px-4 @container">
                <div class="text-center mb-16">
                    <h2 class="text-slate-900 dark:text-slate-100 text-[32px] font-black @[480px]:text-4xl tracking-tight mb-4">Menú de Especialidad</h2>
                    <div class="h-1 w-20 bg-primary mx-auto rounded-full"></div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-8">
                    <!-- Menu Item -->
                    <div class="flex justify-between items-center border-b border-primary/10 pb-4 group cursor-default">
                        <div class="flex gap-4 items-center">
                            <span class="material-symbols-outlined text-primary p-2 bg-primary/10 rounded-lg group-hover:bg-primary group-hover:text-background-dark transition-all">coffee</span>
                            <div>
                                <h4 class="font-bold text-lg">Flat White</h4>
                                <p class="text-slate-500 dark:text-slate-400 text-sm">Doble shot de espresso con microespuma sedosa.</p>
                            </div>
                        </div>
                        <span class="text-primary font-bold">$4.50</span>
                    </div>
                    <div class="flex justify-between items-center border-b border-primary/10 pb-4 group cursor-default">
                        <div class="flex gap-4 items-center">
                            <span class="material-symbols-outlined text-primary p-2 bg-primary/10 rounded-lg group-hover:bg-primary group-hover:text-background-dark transition-all">local_cafe</span>
                            <div>
                                <h4 class="font-bold text-lg">V60 Pour Over</h4>
                                <p class="text-slate-500 dark:text-slate-400 text-sm">Extracción manual que resalta notas cítricas.</p>
                            </div>
                        </div>
                        <span class="text-primary font-bold">$5.25</span>
                    </div>
                    <div class="flex justify-between items-center border-b border-primary/10 pb-4 group cursor-default">
                        <div class="flex gap-4 items-center">
                            <span class="material-symbols-outlined text-primary p-2 bg-primary/10 rounded-lg group-hover:bg-primary group-hover:text-background-dark transition-all">icecream</span>
                            <div>
                                <h4 class="font-bold text-lg">Affogato al Oro</h4>
                                <p class="text-slate-500 dark:text-slate-400 text-sm">Gelato de vainilla bañado en espresso caliente.</p>
                            </div>
                        </div>
                        <span class="text-primary font-bold">$6.00</span>
                    </div>
                    <div class="flex justify-between items-center border-b border-primary/10 pb-4 group cursor-default">
                        <div class="flex gap-4 items-center">
                            <span class="material-symbols-outlined text-primary p-2 bg-primary/10 rounded-lg group-hover:bg-primary group-hover:text-background-dark transition-all">breakfast_dining</span>
                            <div>
                                <h4 class="font-bold text-lg">Croissant de Almendras</h4>
                                <p class="text-slate-500 dark:text-slate-400 text-sm">Hojaldre artesanal relleno de crema de frangipane.</p>
                            </div>
                        </div>
                        <span class="text-primary font-bold">$3.75</span>
                    </div>
                </div>
            </div>
        </section>
        <!-- Ubicación Section -->
        <section class="max-w-7xl mx-auto px-4 py-20" id="ubicacion">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="order-2 lg:order-1">
<div class="rounded-2xl overflow-hidden shadow-2xl border-4 border-slate-100 dark:border-card-dark h-[280px] sm:h-[320px] md:h-[350px] lg:h-[400px] w-full bg-slate-200 dark:bg-card-dark relative group">
                        <!-- Simulated Map UI -->
                        <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110" data-alt="Stylized map showing the urban location of the coffee shop" data-location="Madrid, Spain" style='background-image: url("../assets/img/foto.8.png");'>
                        </div>
                        <div class="absolute inset-0 bg-primary/10"></div>
                        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                            <span class="material-symbols-outlined text-primary text-5xl drop-shadow-[0_10px_10px_rgba(0,0,0,0.5)]">location_on</span>
                        </div>
                    </div>
                </div>
                <div class="order-1 lg:order-2 flex flex-col gap-6">
                    <div class="flex items-center gap-2">
                        <div class="h-[1px] w-12 bg-primary"></div>
                        <span class="text-primary font-bold text-sm tracking-widest uppercase">Visítanos</span>
                    </div>
                    <h2 class="text-3xl font-black @[480px]:text-5xl tracking-tight">Estamos en el Corazón de la Ciudad</h2>
                    <div class="flex flex-col gap-4 text-slate-600 dark:text-slate-400">
                        <div class="flex items-start gap-4">
                            <span class="material-symbols-outlined text-primary mt-1">pin_drop</span>
                            <div>
                                <p class="font-bold text-slate-900 dark:text-slate-100">Dirección</p>
                                <p></p>
                                <p>Medellin, Colombia</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <span class="material-symbols-outlined text-primary mt-1">schedule</span>
                            <div>
                                <p class="font-bold text-slate-900 dark:text-slate-100">Horarios</p>
                                <p>Lunes - Viernes: 08:00 - 20:00</p>
                                <p>Sábados - Domingos: 09:00 - 21:00</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <span class="material-symbols-outlined text-primary mt-1">call</span>
                            <div>
                                <p class="font-bold text-slate-900 dark:text-slate-100">Contacto</p>
                                <p>hola@aromaygrano.com</p>
                                <p>+57 00000000</p>
                            </div>
                        </div>
                    </div>
                    <button class="flex w-fit items-center justify-center rounded-lg h-12 px-8 bg-slate-900 dark:bg-primary dark:text-background-dark text-white text-base font-bold transition-all hover:bg-slate-800 dark:hover:bg-primary-dark mt-4">
                        Obtener Direcciones
                    </button>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer -->
    <footer class="bg-slate-100 dark:bg-card-dark py-12 border-t border-primary/10">
        <div class="max-w-7xl mx-auto px-4 flex flex-col md:flex-row justify-between items-center gap-8">
            <div class="flex flex-col items-center md:items-start gap-2">
                <div class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-primary text-2xl">coffee</span>
                    <h2 class="text-slate-900 dark:text-slate-100 text-lg font-bold">Aroma &amp; Grano</h2>
                </div>
                <p class="text-slate-500 text-sm">© 2025 Aroma &amp; Grano. Todos los derechos reservados.</p>
            </div>
            <div class="flex gap-6">
                <a class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center text-primary hover:bg-primary hover:text-background-dark transition-all" href="#">
                    <span class="material-symbols-outlined text-xl">share</span>
                </a>
                <a class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center text-primary hover:bg-primary hover:text-background-dark transition-all" href="#">
                    <span class="material-symbols-outlined text-xl">camera</span>
                </a>
                <a class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center text-primary hover:bg-primary hover:text-background-dark transition-all" href="#">
                    <span class="material-symbols-outlined text-xl">chat_bubble</span>
                </a>
            </div>
        </div>
    </footer>
</body>

</html>