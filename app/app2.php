<!DOCTYPE html>

<html class="dark" lang="es"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Viajes Colombia | Aventuras y Turismo en Colombia</title>

  <!-- Favicon -->
    <link rel="shortcut icon" href="../assets/img/logo.png" type="image/x-icon">
    <link rel="icon" href="../assets/img/logo.png" type="image/png">
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#f9a825",
                        "primary-dark": "#f57f17",
                        "secondary": "#2e7d32",
                        "background-light": "#f5f7f8",
                        "background-dark": "#1a1a2e",
                        "accent": "#00a896",
                    },
                    fontFamily: {
                        "display": ["Inter"]
                    },
                    borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
                },
            },
        }
    </script>
<style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
<style>
    body {
      min-height: max(884px, 100dvh);
    }
    
    /* Glassmorphism Nav */
    .glass-nav {
        background: linear-gradient(135deg, rgba(255,255,255,0.95) 0%, rgba(249,168,37,0.1) 100%);
    }
    .dark .glass-nav {
        background: linear-gradient(135deg, rgba(26,26,46,0.95) 0%, rgba(46,125,50,0.15) 100%);
    }
    
    /* Animated underline */
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
        background: linear-gradient(90deg, #f9a825, #00a896);
        transition: width 0.3s ease;
    }
    .nav-link:hover::after {
        width: 100%;
    }
    .nav-link:hover {
        text-shadow: 0 0 15px rgba(249, 168, 37, 0.6);
    }
    
    /* Logo animation */
    .logo-anim {
        transition: transform 0.3s ease;
    }
    .logo-anim:hover {
        transform: scale(1.1) rotate(5deg);
    }
    
    /* Glow button */
    .btn-glow {
        position: relative;
        overflow: hidden;
    }
    .btn-glow::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
        transition: left 0.5s ease;
    }
    .btn-glow:hover::before {
        left: 100%;
    }
    .btn-glow:hover {
        box-shadow: 0 0 30px rgba(249,168,37,0.5), 0 0 60px rgba(249,168,37,0.2);
    }
    
    /* Nav icons */
    .nav-icon {
        transition: transform 0.3s ease;
    }
    .nav-link:hover .nav-icon {
        transform: translateY(-3px);
    }
    
    /* Mobile menu */
    .mobile-menu {
        transform: translateX(-100%);
        transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }
    .mobile-menu.active {
        transform: translateX(0);
    }
    
    /* Hamburger */
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

    /* ========================================
       HEADER RESPONSIVE MEJORADO
       ======================================== */
    
    /* Header container */
    .header-container {
        width: 100%;
        max-width: 1280px;
        margin: 0 auto;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0.75rem 1rem;
        gap: 0.5rem;
    }

    @media (min-width: 768px) {
        .header-container {
            padding: 0.75rem 1.5rem;
            gap: 1rem;
        }
    }

    /* Logo responsive */
    .header-logo {
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .header-logo-icon {
        font-size: 1.75rem;
        line-height: 1;
    }

    @media (min-width: 768px) {
        .header-logo-icon {
            font-size: 2rem;
        }
    }

    .header-logo-text {
        font-size: 1rem;
        font-weight: 700;
        letter-spacing: -0.02em;
    }

    @media (min-width: 768px) {
        .header-logo-text {
            font-size: 1.25rem;
        }
    }

    /* Navigation links responsive */
    .header-nav {
        display: none;
        flex-direction: column;
        gap: 0;
        width: 100%;
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        background: linear-gradient(135deg, rgba(255,255,255,0.98) 0%, rgba(249,168,37,0.15) 100%);
        backdrop-filter: blur(12px);
        padding: 0;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        z-index: 100;
    }

    @media (min-width: 768px) {
        .header-nav {
            display: flex;
            flex-direction: row;
            align-items: center;
            gap: 1.5rem;
            position: static;
            width: auto;
            background: transparent;
            backdrop-filter: none;
            padding: 0;
            box-shadow: none;
        }
    }

    .header-nav.active {
        display: flex;
    }

    .header-nav-link {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        padding: 1rem 1.5rem;
        font-size: 1rem;
        font-weight: 600;
        color: #1e293b;
        text-decoration: none;
        border-bottom: 1px solid rgba(249,168,37,0.1);
        transition: all 0.3s ease;
    }

    @media (min-width: 768px) {
        .header-nav-link {
            padding: 0.5rem 0;
            font-size: 0.875rem;
            border-bottom: none;
        }
    }

    .header-nav-link:hover {
        color: #f9a825;
        background: rgba(249,168,37,0.1);
    }

    @media (min-width: 768px) {
        .header-nav-link:hover {
            background: transparent;
        }
    }

    .header-nav-icon {
        font-size: 1.25rem;
    }

    @media (min-width: 768px) {
        .header-nav-icon {
            font-size: 1.125rem;
        }
    }

    /* Right side buttons */
    .header-actions {
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    /* Icon button (search) */
    .header-icon-btn {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 2.5rem;
        height: 2.5rem;
        border-radius: 50%;
        background: transparent;
        color: #64748b;
        border: none;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .header-icon-btn:hover {
        color: #f9a825;
        background: rgba(249,168,37,0.15);
        transform: scale(1.05);
    }

    .header-icon-btn .material-symbols-outlined {
        font-size: 1.25rem;
    }

    /* Reserve button */
    .header-reserve-btn {
        display: none;
        align-items: center;
        justify-content: center;
        padding: 0.5rem 1rem;
        border-radius: 9999px;
        background: linear-gradient(135deg, #f9a825 0%, #f57f17 100%);
        color: white;
        font-size: 0.75rem;
        font-weight: 700;
        border: none;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(249,168,37,0.4);
    }

    @media (min-width: 480px) {
        .header-reserve-btn {
            display: flex;
            padding: 0.625rem 1.25rem;
            font-size: 0.875rem;
        }
    }

    .header-reserve-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(249,168,37,0.5);
    }

    /* Hamburger menu */
    .header-hamburger {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 2.5rem;
        height: 2.5rem;
        border-radius: 50%;
        background: transparent;
        border: none;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .header-hamburger:hover {
        background: rgba(249,168,37,0.15);
    }

    @media (min-width: 768px) {
        .header-hamburger {
            display: none;
        }
    }

    .hamburger-lines {
        display: flex;
        flex-direction: column;
        gap: 5px;
    }

    .hamburger-menu-line {
        width: 1.5rem;
        height: 2px;
        background: #64748b;
        border-radius: 2px;
        transition: all 0.3s ease;
    }

    .header-hamburger.active .hamburger-menu-line:nth-child(1) {
        transform: rotate(45deg) translate(5px, 5px);
    }

    .header-hamburger.active .hamburger-menu-line:nth-child(2) {
        opacity: 0;
    }

    .header-hamburger.active .hamburger-menu-line:nth-child(3) {
        transform: rotate(-45deg) translate(5px, -5px);
    }

    /* Mobile menu overlay */
    .mobile-menu-overlay {
        position: fixed;
        inset: 0;
        top: 5rem;
        background: rgba(0, 0, 0, 0.5);
        z-index: 50;
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
    }

    .mobile-menu-overlay.active {
        opacity: 1;
        visibility: visible;
    }

    /* Back button in mobile */
    .header-back-btn {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 0.625rem 1rem;
        border-radius: 9999px;
        background: linear-gradient(135deg, #f9a825 0%, #f57f17 100%);
        color: white;
        font-size: 0.75rem;
        font-weight: 700;
        text-decoration: none;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(249,168,37,0.4);
    }

    @media (min-width: 768px) {
        .header-back-btn {
            padding: 0.625rem 1.25rem;
            font-size: 0.875rem;
        }
    }

    .header-back-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(249,168,37,0.5);
    }

    /* Mobile menu CTA buttons */
    .mobile-menu-actions {
        display: flex;
        flex-direction: column;
        gap: 1rem;
        padding: 1rem 1.5rem;
        border-top: 1px solid rgba(249,168,37,0.2);
        margin-top: 1rem;
    }

    @media (min-width: 768px) {
        .mobile-menu-actions {
            display: none;
        }
    }

    .mobile-menu-cta {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        padding: 0.875rem 1.5rem;
        border-radius: 9999px;
        background: linear-gradient(135deg, #f9a825 0%, #f57f17 100%);
        color: white;
        font-size: 1rem;
        font-weight: 700;
        text-decoration: none;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(249,168,37,0.4);
    }

    .mobile-menu-cta:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(249,168,37,0.5);
    }

    /* Header height */
    .main-header {
        position: sticky;
        top: 0;
        z-index: 1000;
        height: 5rem;
    }

    @media (min-width: 768px) {
        .main-header {
            height: 5rem;
        }
    }

    /* ========================================
       ESTILOS RESPONSIVE ADICIONALES
       ======================================== */

    /* Grid de destinos responsive */
    .destinations-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 2rem;
    }

    @media (min-width: 768px) {
        .destinations-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (min-width: 1024px) {
        .destinations-grid {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    /* Grid de experiencias responsive */
    .experiences-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 2rem;
    }

    @media (min-width: 1024px) {
        .experiences-grid {
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }
    }

    /* Grid de testimonios responsive */
    .testimonials-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }

    @media (min-width: 768px) {
        .testimonials-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (min-width: 1024px) {
        .testimonials-grid {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    /* Footer grid responsive */
    .footer-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 2rem;
    }

    @media (min-width: 768px) {
        .footer-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (min-width: 1024px) {
        .footer-grid {
            grid-template-columns: 2fr 1fr 1fr 1.5fr;
        }
    }

    /* Hero responsive */
    .hero-section {
        height: auto;
        min-height: 70vh;
        padding: 6rem 1rem;
    }

    @media (min-width: 768px) {
        .hero-section {
            min-height: 80vh;
        }
    }

    /* Search box responsive */
    .search-box {
        display: flex;
        flex-direction: column;
        gap: 0;
    }

    .search-box > div {
        border-bottom: 1px solid rgba(255,255,255,0.1);
    }

    @media (min-width: 768px) {
        .search-box {
            flex-direction: row;
            gap: 0;
        }

        .search-box > div {
            border-bottom: none;
            border-right: 1px solid rgba(255,255,255,0.1);
        }
    }

    /* Tarjetas de destino */
    .destination-card {
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .destination-card:hover {
        transform: translateY(-8px);
    }

    .destination-card .card-image {
        aspect-ratio: 3/4;
    }

    @media (min-width: 640px) {
        .destination-card .card-image {
            aspect-ratio: 3/4;
        }
    }

    /* Experiencia card */
    .experience-card {
        display: flex;
        gap: 1.5rem;
        padding: 1.5rem;
        border-radius: 1rem;
        background: white;
        transition: all 0.3s ease;
    }

    .dark .experience-card {
        background: #1a1a2e;
    }

    .experience-card:hover {
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }

    @media (max-width: 640px) {
        .experience-card {
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
    }

    /* Footer responsive content */
    .footer-content-bottom {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 1rem;
        text-align: center;
    }

    @media (min-width: 768px) {
        .footer-content-bottom {
            flex-direction: row;
            justify-content: space-between;
            text-align: left;
        }
    }
  </style>
  </head>
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 font-display transition-colors duration-300">
<!-- Top Navigation Bar -->
<header class="main-header glass-nav backdrop-blur-lg border-b border-primary/20 shadow-lg">
    <div class="header-container">
        <!-- Back Button (Desktop) -->
        <a href="../index.html" class="header-back-btn">
            <span class="hidden sm:inline">Volver a Servi Alcance</span>
            <span class="sm:hidden">Volver</span>
        </a>

        <!-- Logo -->
        <a href="#" class="header-logo">
            <span class="material-symbols-outlined header-logo-icon text-primary drop-shadow-lg">explore</span>
            <h2 class="header-logo-text text-slate-900 dark:text-white">Viajes Colombia</h2>
        </a>

        <!-- Desktop Navigation -->
        <nav class="header-nav" id="headerNav">
            <a class="header-nav-link" href="#destinos">
                <span class="material-symbols-outlined header-nav-icon">place</span>
                Destinos
            </a>
            <a class="header-nav-link" href="#experiencias">
                <span class="material-symbols-outlined header-nav-icon">nature_people</span>
                Experiencias
            </a>
            <a class="header-nav-link" href="#paquetes">
                <span class="material-symbols-outlined header-nav-icon">card_giftcard</span>
                Paquetes
            </a>
            <a class="header-nav-link" href="#contacto">
                <span class="material-symbols-outlined header-nav-icon">support_agent</span>
                Contacto
            </a>
        </nav>

        <!-- Right side buttons -->
        <div class="header-actions">
            <button class="header-icon-btn" aria-label="Buscar">
                <span class="material-symbols-outlined">search</span>
            </button>
            <button class="header-reserve-btn">
                Reservar Ahora
            </button>
            <!-- Mobile menu button -->
            <button class="header-hamburger" id="hamburgerBtn" aria-label="Menú">
                <div class="hamburger-lines">
                    <span class="hamburger-menu-line"></span>
                    <span class="hamburger-menu-line"></span>
                    <span class="hamburger-menu-line"></span>
                </div>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay" id="mobileOverlay"></div>
    <div class="header-nav active" id="mobileMenu" style="display: none;">
        <a class="header-nav-link" href="#destinos" onclick="toggleMobileMenu()">
            <span class="material-symbols-outlined header-nav-icon">place</span>
            Destinos
        </a>
        <a class="header-nav-link" href="#experiencias" onclick="toggleMobileMenu()">
            <span class="material-symbols-outlined header-nav-icon">nature_people</span>
            Experiencias
        </a>
        <a class="header-nav-link" href="#paquetes" onclick="toggleMobileMenu()">
            <span class="material-symbols-outlined header-nav-icon">card_giftcard</span>
            Paquetes
        </a>
        <a class="header-nav-link" href="#contacto" onclick="toggleMobileMenu()">
            <span class="material-symbols-outlined header-nav-icon">support_agent</span>
            Contacto
        </a>
        <div class="mobile-menu-actions">
            <a href="../index.html" class="mobile-menu-cta">
                <span class="material-symbols-outlined">arrow_back</span>
                Volver a Servi Alcance
            </a>
            <button class="mobile-menu-cta">
                Reservar Ahora
            </button>
        </div>
    </div>

    <script>
        function toggleMobileMenu() {
            const hamburger = document.getElementById('hamburgerBtn');
            const mobileMenu = document.getElementById('mobileMenu');
            const mobileOverlay = document.getElementById('mobileOverlay');
            
            hamburger.classList.toggle('active');
            
            if (mobileMenu.style.display === 'none' || mobileMenu.style.display === '') {
                mobileMenu.style.display = 'block';
                mobileOverlay.classList.add('active');
                document.body.style.overflow = 'hidden';
            } else {
                mobileMenu.style.display = 'none';
                mobileOverlay.classList.remove('active');
                document.body.style.overflow = '';
            }
        }

        // Close menu when clicking overlay
        document.getElementById('mobileOverlay').addEventListener('click', toggleMobileMenu);

        // Close menu on resize
        window.addEventListener('resize', function() {
            if (window.innerWidth >= 768) {
                const mobileMenu = document.getElementById('mobileMenu');
                const mobileOverlay = document.getElementById('mobileOverlay');
                const hamburger = document.getElementById('hamburgerBtn');
                
                mobileMenu.style.display = '';
                mobileOverlay.classList.remove('active');
                hamburger.classList.remove('active');
                document.body.style.overflow = '';
            }
        });
    </script>
</header>
<!-- Hero Section -->
<section id="inicio" class="relative h-[85vh] flex items-center justify-center px-4 overflow-hidden">
<div class="absolute inset-0 z-0">
<div class="absolute inset-0 bg-gradient-to-b from-background-dark/50 via-transparent to-background-dark/80 z-10"></div>
<img alt="Catedral de Sal de Zipaquirá" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAQkEAKGRcLTlNdGLmSYs4TdAH-Bm8B4d2ugV_CD8E-OumW2jATjXmj3i0jJL025YCif9XzFkXZ1jGZmt9wT008k6mOWbICgleDxBND6wk4hMNi2MaE1ZPIgOcbf4N3brgbEQ-Tlh6dbKHY1CzENM5o_GV6y29zbGIE0vwudVIiWhbJVrRVFkVbO9GcHX7HFjQXazC8fLZxjaMVpdQz6fUhCHMLp9jZ2HnL1FmFSdIXgFFveJrzwQkMGq54CM19ZXVnOy6a3j0xw6o"/>
</div>
<div class="relative z-20 max-w-4xl w-full text-center">
<h1 class="text-white text-5xl md:text-7xl font-black leading-tight tracking-tight mb-6">
                Descubre la Magia de <span class="text-primary">Colombia</span>
</h1>
<p class="text-slate-100 text-lg md:text-xl mb-10 max-w-2xl mx-auto font-light leading-relaxed">
                Aventuras unforgettable por los lugares más espectaculares. Desde la Amazonía hasta el Caribe.
            </p>
<div class="max-w-3xl mx-auto">
<div class="flex flex-col md:flex-row items-stretch bg-white/10 backdrop-blur-xl border border-white/20 p-2 rounded-2xl shadow-2xl">
<div class="flex-1 flex items-center px-4 py-3 border-b md:border-b-0 md:border-r border-white/10">
<span class="material-symbols-outlined text-primary mr-3">location_on</span>
<input class="bg-transparent border-none focus:ring-0 text-white placeholder-slate-300 w-full text-sm md:text-base" placeholder="¿A dónde te gustaría ir?" type="text"/>
</div>
<div class="flex-1 flex items-center px-4 py-3 border-b md:border-b-0 md:border-r border-white/10">
<span class="material-symbols-outlined text-primary mr-3">calendar_today</span>
<input class="bg-transparent border-none focus:ring-0 text-white placeholder-slate-300 w-full text-sm md:text-base" placeholder="Llegada - Salida" type="text"/>
</div>
<button class="bg-primary hover:bg-primary-dark text-white px-8 py-3 rounded-xl font-bold transition-all m-1 flex items-center justify-center gap-2">
<span class="material-symbols-outlined text-xl">search</span>
                        Buscar
                    </button>
</div>
</div>
</div>
</section>
<!-- Destinos Destacados -->
<section id="destinos" class="py-24 bg-background-light dark:bg-background-dark">
<div class="max-w-7xl mx-auto px-4">
<div class="flex flex-col md:flex-row items-end justify-between mb-12 gap-4">
<div>
<h2 class="text-primary font-bold tracking-widest uppercase text-sm mb-2">Colecciones Únicas</h2>
<h3 class="text-3xl md:text-4xl font-bold text-slate-900 dark:text-white">Destinos Destacados</h3>
</div>
<a class="hidden md:flex items-center text-primary font-bold hover:underline transition-all" href="#">
                    Ver todos los destinos
                    <span class="material-symbols-outlined ml-1">arrow_forward</span>
</a>
</div>
<div class="destinations-grid">
<!-- Card 1 - Cartagena -->
<div class="destination-card">
<div class="relative aspect-[3/4] rounded-2xl overflow-hidden mb-4 shadow-xl">
<img alt="Cartagena" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDlNbeOUaJhVyvZC9uW2gbiXCeli6YNl1cfw3c1-1ngSZm0-ERD7nuk244TRRwtpyaDdquC9FObf4jgOS5et6qQn7QmLYiL7kILnTAy1RDOZ05lwLiTOYe_0At_MOBT1Jt5BTOH0KQvlYkO-5I7DcorfctDuPaqGW5ikarm0wt-OG_6Yoa0nXwbuRsklAv3ssvAWhR9pX6jT-RS_lOo5G-7_uC37hJguxwvEHIan9U46qTGzJ8lWQUGSjnIfkCgwnSbAlq9ovaFl-c"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
<div class="absolute bottom-6 left-6">
<span class="bg-primary text-white text-[10px] font-bold uppercase tracking-wider px-2 py-1 rounded-full mb-2 inline-block">Ciudad Colonial</span>
<h4 class="text-white text-2xl font-bold">Cartagena, Caribe</h4>
</div>
</div>
<p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                        Ciudad amurallada con arquitectura colonial, playas tropicales y vida nocturna vibrante.
                    </p>
</div>
<!-- Card 2 - Amazonas -->
<div class="destination-card">
<div class="relative aspect-[3/4] rounded-2xl overflow-hidden mb-4 shadow-xl">
<img alt="Amazonas" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" src="https://www.cvu.com.co/documents/36512/36521/viajar-al-amazonas.jpeg/5045c58e-b125-73a5-d01f-1b7ca707ee18?version=1.0&t=1721279941533"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
<div class="absolute bottom-6 left-6">
<span class="bg-secondary text-white text-[10px] font-bold uppercase tracking-wider px-2 py-1 rounded-full mb-2 inline-block">Aventura Natural</span>
<h4 class="text-white text-2xl font-bold">Amazonas, Sur</h4>
</div>
</div>
<p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                        Explora la selva amazónica, encuentra fauna silvestre y vive con comunidades indígenas.
                    </p>
</div>
<!-- Card 3 - San Andrés -->
<div class="destination-card">
<div class="relative aspect-[3/4] rounded-2xl overflow-hidden mb-4 shadow-xl">
<img alt="San Andrés" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBcMZxstxHZ5fShgp56Gn2knQOWZU5lVj985wsbeY-IkYRN_RFKDctL1juuGK6HNUNUbprj80S0UFD65mI5l7jvPGKpc1d_WaQy_hJqNPTkIRxBvgP9M0PJ3s20HOZhQFu41u8UradcEDvdooEJN6816rDd6FayhmRDzn-TcjSuFhcTORKIIxmEUFlr5Gq4GO7AWaVM1dJdItHlENaoANsP7yZHlgCvmHicQm-qeVj-XiwdBWuGQ9wYI_-m8aG8cGZI5naQ1TZAT7g"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
<div class="absolute bottom-6 left-6">
<span class="bg-accent text-white text-[10px] font-bold uppercase tracking-wider px-2 py-1 rounded-full mb-2 inline-block">Isla Paraíso</span>
<h4 class="text-white text-2xl font-bold">San Andrés, Caribe</h4>
</div>
</div>
<p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                        Aguas cristalinas color turquesa, arrecifes de coral y relax tropical.
                    </p>
</div>
</div>
</div>
</section>
<!-- Experiencias -->
<section id="experiencias" class="py-24 bg-slate-100 dark:bg-slate-900/40">
<div class="max-w-7xl mx-auto px-4">
<div class="text-center mb-16">
<h2 class="text-primary font-bold tracking-widest uppercase text-sm mb-2">Exclusivamente para Ti</h2>
<h3 class="text-3xl md:text-5xl font-bold text-slate-900 dark:text-white">Experiencias Únicas</h3>
</div>
<div class="experiences-grid">
<div class="space-y-6">
<div class="experience-card">
<div class="flex-shrink-0 w-16 h-16 rounded-xl bg-primary/10 flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-4xl">flight_takeoff</span>
</div>
<div>
<h4 class="text-xl font-bold mb-2">Vuelos Privados</h4>
<p class="text-slate-600 dark:text-slate-400 text-sm">Llega con estilo y comodidad. Manejamos cada detalle de tus necesidades de aviación privada.</p>
</div>
</div>
<div class="experience-card border-l-4 border-primary">
<div class="flex-shrink-0 w-16 h-16 rounded-xl bg-primary/10 flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-4xl">concierge</span>
</div>
<div>
<h4 class="text-xl font-bold mb-2">Concierge 24/7</h4>
<p class="text-slate-600 dark:text-slate-400 text-sm">Desde reservaciones de cenas hasta acceso a eventos exclusivos, nuestro equipo está a tu servicio.</p>
</div>
</div>
<div class="experience-card">
<div class="flex-shrink-0 w-16 h-16 rounded-xl bg-primary/10 flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-4xl">wine_bar</span>
</div>
<div>
<h4 class="text-xl font-bold mb-2">Gastronomía Local</h4>
<p class="text-slate-600 dark:text-slate-400 text-sm">Degusta la mejor cocina colombiana con chefs privados y experiencias culinarias únicas.</p>
</div>
</div>
</div>
<div class="relative">
<div class="aspect-square rounded-3xl overflow-hidden shadow-2xl">
<img alt="Experiencia en Colombia" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBd653CS8injosbzg6Xybekj0MWY2mYlPoCcUZYB_RWpwL5kvfCsaw8R4OOWP8_iL1YS8g6QFOeQ_NeT1MXt2JccKhNJ8RhouJKIGPc-ItbRrlsd2XYvu3CCpnnVBuZeojHIIC7fBBnU-MIswRp2z_gXP_7w1L7smb5Azcjcc-3wi-_8vBGf9CnbWDVbfaZRZhnXxJt24NzV07FPwDUCKiOwH6giuizn2wm8kbVp1xkprnMaiEZXK9ilJj4SvvbdANxWTQtJRw8AeQ"/>
</div>
<div class="absolute -bottom-6 -left-6 bg-primary p-6 md:p-8 rounded-2xl text-white shadow-xl hidden md:block max-w-[200px] md:max-w-[240px]">
<p class="text-2xl md:text-3xl font-black mb-1">50+</p>
<p class="text-xs md:text-sm font-medium opacity-90">Destinos por Colombia</p>
</div>
</div>
</div>
</div>
</section>
<!-- Testimonios -->
<section class="py-24 bg-background-light dark:bg-background-dark">
<div class="max-w-7xl mx-auto px-4">
<div class="text-center mb-16">
<h3 class="text-3xl font-bold text-slate-900 dark:text-white">Comentarios de Clientes</h3>
</div>
<div class="testimonials-grid">
<div class="bg-slate-50 dark:bg-slate-900/50 p-6 md:p-8 rounded-2xl border border-slate-200 dark:border-slate-800">
<div class="flex text-primary mb-4">
<span class="material-symbols-outlined">star</span>
<span class="material-symbols-outlined">star</span>
<span class="material-symbols-outlined">star</span>
<span class="material-symbols-outlined">star</span>
<span class="material-symbols-outlined">star</span>
</div>
<p class="text-slate-700 dark:text-slate-300 italic mb-6 leading-relaxed">
                        "Viajes Colombia transformó nuestras vacaciones en un sueño. La atención al detalle fue increíble."
                    </p>
<div class="flex items-center gap-4">
<div class="w-12 h-12 rounded-full bg-slate-300 overflow-hidden flex-shrink-0">
<img alt="María" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCTVENwthEJ-gBk5UeCOZaJDf5LRYzC-JakYKFdwoOt0VQYjtBGR-hyr6ju80RxO1gLTUr94284an59KZ_QjKs47aiYUZhEKsDQyT2TyGsJENbHoiUSDt0CaI1GQW-k7iKrDLRJxBENN0j9OA90uK14pIffPqaRxZTx_3hblicpJIuqU33xhXxenGUZhp7at3qzxcwCRF5xNNQHBtlPOxHjsAqGR7nfpLLkTBiyVwoaw-lHkvPb5jbPefFGplI3Sc4G1UMmkg5KmX0"/>
</div>
<div>
<p class="font-bold text-sm">María González</p>
<p class="text-xs text-slate-500">Empresaria, Bogotá</p>
</div>
</div>
</div>
<div class="bg-slate-50 dark:bg-slate-900/50 p-6 md:p-8 rounded-2xl border border-slate-200 dark:border-slate-800">
<div class="flex text-primary mb-4">
<span class="material-symbols-outlined">star</span>
<span class="material-symbols-outlined">star</span>
<span class="material-symbols-outlined">star</span>
<span class="material-symbols-outlined">star</span>
<span class="material-symbols-outlined">star</span>
</div>
<p class="text-slate-700 dark:text-slate-300 italic mb-6 leading-relaxed">
                        "El tour por la Amazonía fue una experiencia única. Los guías fueron profesionales y amables."
                    </p>
<div class="flex items-center gap-4">
<div class="w-12 h-12 rounded-full bg-slate-300 overflow-hidden flex-shrink-0">
<img alt="Carlos" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDxBlcdKfO4OtoCbCycZOD5z03MELIwz1ANeO0rPK1rN3lqO-WT3dW_nrV5hKmUrHBOrCBFkZ35KwZj6uvM2EI7TPx8wG_vz9GsaiYIacaMa6f4t_V6DNRaA7Sz8zuuf-vzx_X7W-bl48jXJDLKIKouRR2r9GM9denp0bgmzThKlwcm6lFAwC3Y3G6yIS4Fn1F3iYxaBis2JTeW8ZQc4S81iyxTdPcBgOordOPxwN-asQJz_zy2Jdoy9kzhi7z6IQYNEFeSA7YBGr8"/>
</div>
<div>
<p class="font-bold text-sm">Carlos Mendoza</p>
<p class="text-xs text-slate-500">Ingeniero, Medellín</p>
</div>
</div>
</div>
<div class="bg-slate-50 dark:bg-slate-900/50 p-6 md:p-8 rounded-2xl border border-slate-200 dark:border-slate-800">
<div class="flex text-primary mb-4">
<span class="material-symbols-outlined">star</span>
<span class="material-symbols-outlined">star</span>
<span class="material-symbols-outlined">star</span>
<span class="material-symbols-outlined">star</span>
<span class="material-symbols-outlined">star</span>
</div>
<p class="text-slate-700 dark:text-slate-300 italic mb-6 leading-relaxed">
                        "Cartagena es mágico. El equipo de Viajes Colombia hizo que nuestra luna de miel fuera perfecta."
                    </p>
<div class="flex items-center gap-4">
<div class="w-12 h-12 rounded-full bg-slate-300 overflow-hidden flex-shrink-0">
<img alt="Ana" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC9OgFtdT1FKHQOzBoerwY0Y-OD7cPTo1XNXcfs0b69V0VQ3n4EwMh5rGnTtqKH_9L2ysf76QaeT6JuMbZoFXQZGdlKpXMky4YHTOWy6EnFhRJOoujpno83YD_nelnk0cEledxS2ihKzksC-aDilCp3yIxAKIVvMolmhUq4dj2JIi6hFr_f0rCLzlkrLC4peo6LVciu_pNJ8l4I2nEl3lGpYszBqR3QQsDSYIR1DEKXTGc6X9N9VNIR739DQR9FR_bZVyp-r5Enkpo"/>
</div>
<div>
<p class="font-bold text-sm">Ana Rodríguez</p>
<p class="text-xs text-slate-500">Doctora, Cali</p>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Footer -->
<footer id="contacto" class="bg-slate-100 dark:bg-slate-950 pt-16 md:pt-20 pb-10">
<div class="max-w-7xl mx-auto px-4">
<div class="footer-grid mb-16">
<div>
<div class="flex items-center gap-2 mb-6">
<span class="material-symbols-outlined text-primary text-3xl">explore</span>
<h2 class="text-slate-900 dark:text-white text-xl font-bold tracking-tight">Viajes Colombia</h2>
</div>
<p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed mb-6">
                        Tu aventura perfecta por Colombia comienza aquí. Viajes personalizados por todo el país.
                    </p>
<div class="flex gap-4">
<a class="w-10 h-10 rounded-full bg-slate-200 dark:bg-slate-800 flex items-center justify-center hover:bg-primary hover:text-white transition-all" href="#">
<span class="material-symbols-outlined text-lg">public</span>
</a>
<a class="w-10 h-10 rounded-full bg-slate-200 dark:bg-slate-800 flex items-center justify-center hover:bg-primary hover:text-white transition-all" href="#">
<span class="material-symbols-outlined text-lg">share</span>
</a>
<a class="w-10 h-10 rounded-full bg-slate-200 dark:bg-slate-800 flex items-center justify-center hover:bg-primary hover:text-white transition-all" href="#">
<span class="material-symbols-outlined text-lg">play_circle</span>
</a>
</div>
</div>
<div>
<h4 class="text-slate-900 dark:text-white font-bold mb-6 uppercase text-xs tracking-widest">Explorar</h4>
<ul class="space-y-4 text-sm text-slate-600 dark:text-slate-400">
<li><a class="hover:text-primary transition-colors" href="#destinos">Destinos</a></li>
<li><a class="hover:text-primary transition-colors" href="#experiencias">Experiencias</a></li>
<li><a class="hover:text-primary transition-colors" href="#paquetes">Paquetes</a></li>
<li><a class="hover:text-primary transition-colors" href="#contacto">Contacto</a></li>
</ul>
</div>
<div>
<h4 class="text-slate-900 dark:text-white font-bold mb-6 uppercase text-xs tracking-widest">Empresa</h4>
<ul class="space-y-4 text-sm text-slate-600 dark:text-slate-400">
<li><a class="hover:text-primary transition-colors" href="#">Nuestra Historia</a></li>
<li><a class="hover:text-primary transition-colors" href="#">El Equipo</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Sostenibilidad</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Trabaja con Nosotros</a></li>
</ul>
</div>
<div>
<h4 class="text-slate-900 dark:text-white font-bold mb-6 uppercase text-xs tracking-widest">Contáctanos</h4>
<ul class="space-y-4 text-sm text-slate-600 dark:text-slate-400">
<li class="flex items-center gap-3">
<span class="material-symbols-outlined text-primary">mail</span>
                            info@viajescolombia.com
                        </li>
<li class="flex items-center gap-3">
<span class="material-symbols-outlined text-primary">call</span>
                            +57 1 234 5678
                        </li>
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-primary">location_on</span>
                            Calle 123, Chapinero<br/>Bogotá, Colombia
                        </li>
</ul>
</div>
</div>
<div class="pt-8 border-t border-slate-200 dark:border-slate-800 footer-content-bottom">
<p class="text-xs text-slate-500">© 2024 Viajes Colombia. Todos los derechos reservados.</p>
<div class="flex gap-6 text-xs text-slate-500">
<a class="hover:text-primary" href="#">Política de Privacidad</a>
<a class="hover:text-primary" href="#">Términos de Servicio</a>
<a class="hover:text-primary" href="#">Cookies</a>
</div>
</div>
</div>
</footer>
</body></html>
