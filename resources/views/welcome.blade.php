<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Nayla - Home Hub</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;family=JetBrains+Mono:wght@500&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-primary-fixed": "#181b25",
                        "primary-fixed": "#e0e2ef",
                        "secondary-fixed-dim": "#c3c6d6",
                        "surface-container": "#201f20",
                        "on-surface-variant": "#c7c6cc",
                        "on-tertiary-fixed-variant": "#514536",
                        "tertiary-fixed-dim": "#d6c4b0",
                        "on-error": "#690005",
                        "on-secondary-container": "#b1b4c5",
                        "on-secondary-fixed": "#171b27",
                        "primary-fixed-dim": "#c4c6d2",
                        "on-primary-fixed-variant": "#444651",
                        "tertiary-container": "#1e1509",
                        "primary-container": "#13161f",
                        "secondary": "#c3c6d6",
                        "surface-bright": "#3a393a",
                        "surface-dim": "#131314",
                        "on-secondary-fixed-variant": "#434654",
                        "surface-container-highest": "#353435",
                        "on-secondary": "#2c303d",
                        "surface": "#131314",
                        "inverse-primary": "#5b5e69",
                        "secondary-container": "#434654",
                        "surface-container-low": "#1c1b1c",
                        "inverse-surface": "#e5e2e2",
                        "on-surface": "#e5e2e2",
                        "tertiary": "#d6c4b0",
                        "tertiary-fixed": "#f3dfcb",
                        "background": "#131314",
                        "on-primary": "#2d303a",
                        "secondary-fixed": "#dfe2f3",
                        "surface-container-high": "#2a2a2a",
                        "on-error-container": "#ffdad6",
                        "inverse-on-surface": "#313031",
                        "error-container": "#93000a",
                        "on-tertiary-fixed": "#231a0e",
                        "error": "#ffb4ab",
                        "surface-tint": "#c4c6d2",
                        "on-background": "#e5e2e2",
                        "on-primary-container": "#7d7f8b",
                        "on-tertiary": "#392f21",
                        "outline": "#909096",
                        "outline-variant": "#46464b",
                        "primary": "#c4c6d2",
                        "surface-container-lowest": "#0e0e0f",
                        "on-tertiary-container": "#8d7e6d",
                        "surface-variant": "#353435"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "xs": "0.25rem",
                        "margin-mobile": "1rem",
                        "margin-desktop": "4rem",
                        "xl": "2rem",
                        "md": "1rem",
                        "sm": "0.5rem",
                        "gutter": "1.5rem",
                        "lg": "1.5rem"
                    },
                    "fontFamily": {
                        "h1": ["Inter"],
                        "body-md": ["Inter"],
                        "h2": ["Inter"],
                        "body-lg": ["Inter"],
                        "label-mono": ["JetBrains Mono"],
                        "h3": ["Inter"],
                        "display": ["Inter"],
                        "h1-mobile": ["Inter"]
                    },
                    "fontSize": {
                        "h1": ["48px", { "lineHeight": "1.2", "letterSpacing": "-0.01em", "fontWeight": "700" }],
                        "body-md": ["16px", { "lineHeight": "1.6", "fontWeight": "400" }],
                        "h2": ["32px", { "lineHeight": "1.3", "fontWeight": "600" }],
                        "body-lg": ["18px", { "lineHeight": "1.6", "fontWeight": "400" }],
                        "label-mono": ["14px", { "lineHeight": "1.0", "letterSpacing": "0.05em", "fontWeight": "500" }],
                        "h3": ["24px", { "lineHeight": "1.4", "fontWeight": "600" }],
                        "display": ["64px", { "lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                        "h1-mobile": ["32px", { "lineHeight": "1.2", "fontWeight": "700" }]
                    }
                }
            }
        }
    </script>
<style>
        .glass-panel {
            background: rgba(19, 22, 31, 0.6);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(144, 144, 150, 0.2);
        }
        .glow-accent-magenta:hover { border-color: rgba(255, 0, 255, 0.5); box-shadow: inset 0 1px 0 0 rgba(255, 0, 255, 0.5); }
        .glow-accent-teal:hover { border-color: rgba(0, 255, 255, 0.5); box-shadow: inset 0 1px 0 0 rgba(0, 255, 255, 0.5); }
        .glow-accent-gold:hover { border-color: rgba(255, 215, 0, 0.5); box-shadow: inset 0 1px 0 0 rgba(255, 215, 0, 0.5); }
        .glow-accent-purple:hover { border-color: rgba(128, 0, 128, 0.5); box-shadow: inset 0 1px 0 0 rgba(128, 0, 128, 0.5); }
    </style>
</head>
<body class="bg-background text-on-background antialiased selection:bg-primary/30 min-h-screen flex flex-col pt-20">
<!-- TopNavBar -->
<nav class="fixed top-0 w-full bg-surface/60 backdrop-blur-xl border-b border-outline-variant/30 shadow-sm z-50 transition-all duration-300">
<div class="flex justify-between items-center px-margin-mobile md:px-margin-desktop h-20 max-w-[1280px] mx-auto z-50">
<a href="/" class="flex items-center gap-2 group">
    <div class="w-8 h-8 rounded bg-primary/10 border border-primary/30 flex items-center justify-center group-hover:bg-primary/20 transition-all duration-300">
        <span class="material-symbols-outlined text-primary text-[20px]">blur_on</span>
    </div>
    <span class="font-display text-h3 tracking-tighter text-on-surface group-hover:text-primary transition-colors">whoizney.</span>
</a>
                <div class="hidden lg:flex gap-lg items-center">
                    <a class="text-primary font-bold border-b border-primary pb-1 font-label-mono text-label-mono active:scale-95 transition-transform" href="/">Home</a>
                    <a class="text-on-surface-variant hover:text-on-surface transition-colors font-label-mono text-label-mono hover:backdrop-blur-2xl hover:bg-surface-bright/20 duration-300 px-3 py-1 rounded-md" href="/data">Work</a>
                    <a class="text-on-surface-variant hover:text-on-surface transition-colors font-label-mono text-label-mono hover:backdrop-blur-2xl hover:bg-surface-bright/20 duration-300 px-3 py-1 rounded-md" href="/about">About</a>
                    <a class="text-on-surface-variant hover:text-on-surface transition-colors font-label-mono text-label-mono hover:backdrop-blur-2xl hover:bg-surface-bright/20 duration-300 px-3 py-1 rounded-md" href="/journal">Journal</a>
                </div>
                <div class="flex items-center gap-4">
                    <button onclick="window.location.href='mailto:{{ \App\Models\User::first()->email ?? 'nailahafidzhaha@gmail.com' }}?subject=Project%20Inquiry%20-%20whoizney'" class="hidden lg:flex bg-primary/10 hover:bg-primary/20 text-primary border border-primary/30 font-label-mono text-label-mono px-4 py-2 rounded-full uppercase tracking-wider transition-colors">
                        Hire Me
                    </button>
                    <button id="mobile-menu-button" class="lg:hidden text-on-surface-variant p-2 hover:text-primary transition-colors">
                        <span class="material-symbols-outlined text-[32px]">menu</span>
                    </button>
                </div>
        </div>
    </nav>

    <!-- Mobile Menu Overlay -->
    <div id="mobile-menu" class="fixed inset-0 bg-background/95 backdrop-blur-xl z-[100] hidden flex-col p-6 transition-all duration-300">
        <div class="flex justify-between items-center mb-12">
            <div class="flex items-center gap-2">
                <div class="w-8 h-8 rounded bg-primary/10 border border-primary/30 flex items-center justify-center">
                    <span class="material-symbols-outlined text-primary text-[20px]">blur_on</span>
                </div>
                <span class="font-display text-h3 tracking-tighter text-on-surface">whoizney.</span>
            </div>
            <button id="mobile-menu-close" class="text-on-surface-variant p-2 hover:text-primary transition-colors">
                <span class="material-symbols-outlined text-[32px]">close</span>
            </button>
        </div>
        <nav class="flex flex-col gap-6">
            <a class="font-display text-4xl font-bold text-primary transition-all duration-300" href="/">Home</a>
            <a class="font-display text-4xl font-bold text-on-surface hover:text-primary transition-all duration-300" href="/data">Work</a>
            <a class="font-display text-4xl font-bold text-on-surface hover:text-primary transition-all duration-300" href="/about">About</a>
            <a class="font-display text-4xl font-bold text-on-surface hover:text-primary transition-all duration-300" href="/journal">Journal</a>
        </nav>
        <div class="mt-auto">
            <button onclick="window.location.href='mailto:{{ \App\Models\User::first()->email ?? 'nailahafidzhaha@gmail.com' }}?subject=Project%20Inquiry'" class="w-full bg-primary text-on-primary-fixed font-label-mono py-4 rounded-full font-bold uppercase tracking-widest active:scale-95 transition-all">
                Hire Me
            </button>
        </div>
    </div>
<main class="flex-grow w-full max-w-[1280px] mx-auto px-margin-mobile md:px-margin-desktop grid grid-cols-4 md:grid-cols-12 gap-gutter py-xl">
<!-- Hero Section -->
<section class="col-span-4 md:col-span-12 min-h-[80vh] flex flex-col justify-center items-start pt-16 pb-32 relative">
    <!-- Decorative background glow -->
    <div class="absolute top-1/4 left-1/4 w-[600px] h-[600px] bg-purple-600/20 rounded-full blur-[120px] -z-10 pointer-events-none"></div>
    <div class="absolute bottom-1/4 right-1/4 w-[400px] h-[400px] bg-fuchsia-600/10 rounded-full blur-[100px] -z-10 pointer-events-none"></div>
    
    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-purple-500/10 border border-purple-500/20 text-purple-300 font-label-mono text-sm mb-8 backdrop-blur-md">
        <span class="w-2 h-2 rounded-full bg-purple-400 animate-pulse shadow-[0_0_10px_rgba(192,132,252,0.8)]"></span>
        <span>Available for new projects</span>
    </div>

    <h1 class="font-display text-5xl md:text-7xl lg:text-8xl font-bold tracking-tighter text-on-surface mb-6 leading-[1.1]">
        Hi, I'm Neya 👋<br/>
        <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-400 via-fuchsia-400 to-primary block mt-2">
            Multi-Disciplinary
        </span>
        <span class="text-outline-variant text-4xl md:text-6xl lg:text-7xl block mt-2">Creator & Analyst</span>
    </h1>

    <div class="flex flex-wrap items-center gap-3 mb-10">
        <span class="px-5 py-2.5 rounded-full bg-surface-container/80 backdrop-blur-md border border-outline-variant/30 text-on-surface font-label-mono text-sm hover:border-purple-500/50 hover:text-purple-300 transition-colors cursor-default shadow-lg shadow-black/50">Design</span>
        <span class="px-5 py-2.5 rounded-full bg-surface-container/80 backdrop-blur-md border border-outline-variant/30 text-on-surface font-label-mono text-sm hover:border-purple-500/50 hover:text-purple-300 transition-colors cursor-default shadow-lg shadow-black/50">Data</span>
        <span class="px-5 py-2.5 rounded-full bg-surface-container/80 backdrop-blur-md border border-outline-variant/30 text-on-surface font-label-mono text-sm hover:border-purple-500/50 hover:text-purple-300 transition-colors cursor-default shadow-lg shadow-black/50">Business</span>
        <span class="px-5 py-2.5 rounded-full bg-surface-container/80 backdrop-blur-md border border-outline-variant/30 text-on-surface font-label-mono text-sm hover:border-purple-500/50 hover:text-purple-300 transition-colors cursor-default shadow-lg shadow-black/50">UI/UX</span>
    </div>

    <p class="font-body-lg text-lg md:text-xl text-on-surface-variant max-w-2xl mb-12 leading-relaxed">
        I'm {{ \App\Models\User::first()->name ?? 'Naila Hafidz Bachtiar' }}, {{ \App\Models\User::first()->tagline ?? 'an Information Systems undergraduate at Telkom University' }}. A multi-discipline portfolio blending technical precision with creative flair.
    </p>

    <div class="flex flex-wrap items-center gap-6">
        <button onclick="window.location.href='/data'" class="bg-purple-600 hover:bg-purple-500 text-white font-label-mono text-sm font-bold uppercase tracking-wider px-8 py-4 rounded-full transition-all shadow-[0_0_30px_rgba(147,51,234,0.3)] hover:shadow-[0_0_40px_rgba(147,51,234,0.5)] active:scale-95">
            Explore My Work
        </button>
        @if(\App\Models\User::first()->cv_url)
        <button onclick="window.location.href='{{ asset(\App\Models\User::first()->cv_url) }}'" class="bg-surface-container-highest text-on-surface font-label-mono text-sm font-bold uppercase tracking-wider px-8 py-4 rounded-full border border-outline-variant/50 hover:bg-surface-container hover:border-purple-500/50 hover:text-purple-300 transition-all active:scale-95">
            Download CV
        </button>
        @endif
    </div>
</section>
<!-- Category Grid -->
<section class="col-span-4 md:col-span-12 mb-32">
<h2 class="font-h2 text-h2 text-on-surface mb-12">Disciplines</h2>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-gutter">
<!-- Desain Card -->
<div onclick="window.location.href='/design'" class="glass-panel p-6 rounded-2xl glow-accent-magenta group cursor-pointer relative overflow-hidden transition-all duration-300">
<div class="absolute left-0 top-0 bottom-0 w-1 bg-[#ff00ff]/30 group-hover:bg-[#ff00ff] transition-colors"></div>
<span class="material-symbols-outlined text-4xl text-[#ff00ff] mb-4 opacity-80 group-hover:opacity-100">design_services</span>
<h3 class="font-h3 text-h3 text-on-surface mb-2">DESAIN</h3>
<p class="font-body-md text-body-md text-on-surface-variant mb-6">Visual storytelling and brand identity systems.</p>
<div class="font-label-mono text-label-mono text-[#ff00ff] uppercase border border-[#ff00ff]/30 px-3 py-1 rounded inline-block">{{ $counts['design'] }} Projects</div>
</div>
<!-- Data Card -->
<div onclick="window.location.href='/data'" class="glass-panel p-6 rounded-2xl glow-accent-teal group cursor-pointer relative overflow-hidden transition-all duration-300">
<div class="absolute left-0 top-0 bottom-0 w-1 bg-[#00ffff]/30 group-hover:bg-[#00ffff] transition-colors"></div>
<span class="material-symbols-outlined text-4xl text-[#00ffff] mb-4 opacity-80 group-hover:opacity-100">database</span>
<h3 class="font-h3 text-h3 text-on-surface mb-2">DATA</h3>
<p class="font-body-md text-body-md text-on-surface-variant mb-6">Complex data visualization and analytical modeling.</p>
<div class="font-label-mono text-label-mono text-[#00ffff] uppercase border border-[#00ffff]/30 px-3 py-1 rounded inline-block">{{ $counts['data'] }} Projects</div>
</div>
<!-- Bisnis Card -->
<div onclick="window.location.href='/business'" class="glass-panel p-6 rounded-2xl glow-accent-gold group cursor-pointer relative overflow-hidden transition-all duration-300">
<div class="absolute left-0 top-0 bottom-0 w-1 bg-[#ffd700]/30 group-hover:bg-[#ffd700] transition-colors"></div>
<span class="material-symbols-outlined text-4xl text-[#ffd700] mb-4 opacity-80 group-hover:opacity-100">monitoring</span>
<h3 class="font-h3 text-h3 text-on-surface mb-2">BISNIS</h3>
<p class="font-body-md text-body-md text-on-surface-variant mb-6">Strategic planning, operations, and market analysis.</p>
<div class="font-label-mono text-label-mono text-[#ffd700] uppercase border border-[#ffd700]/30 px-3 py-1 rounded inline-block">{{ $counts['business'] }} Projects</div>
</div>
<!-- UI/UX Card -->
<div onclick="window.location.href='/ui-ux'" class="glass-panel p-6 rounded-2xl glow-accent-purple group cursor-pointer relative overflow-hidden transition-all duration-300">
<div class="absolute left-0 top-0 bottom-0 w-1 bg-[#800080]/30 group-hover:bg-[#800080] transition-colors"></div>
<span class="material-symbols-outlined text-4xl text-[#800080] mb-4 opacity-80 group-hover:opacity-100">devices</span>
<h3 class="font-h3 text-h3 text-on-surface mb-2">UI/UX</h3>
<p class="font-body-md text-body-md text-on-surface-variant mb-6">User-centric interface design and experience architecture.</p>
<div class="font-label-mono text-label-mono text-[#800080] uppercase border border-[#800080]/30 px-3 py-1 rounded inline-block">{{ $counts['uiux'] }} Projects</div>
</div>
</div>
</section>
</main>
<!-- Footer -->
<footer class="w-full py-12 bg-surface-container-lowest border-t border-outline-variant/20 mt-auto">
<div class="grid grid-cols-1 md:grid-cols-12 gap-gutter px-margin-mobile md:px-margin-desktop max-w-[1280px] mx-auto items-center">
<div class="col-span-1 md:col-span-4 flex items-center gap-2">
    <div class="w-8 h-8 rounded bg-primary/10 border border-primary/30 flex items-center justify-center">
        <span class="material-symbols-outlined text-primary text-[20px]">blur_on</span>
    </div>
    <span class="font-display text-h3 tracking-tighter text-on-surface">whoizney.</span>
</div>
<div class="col-span-1 md:col-span-4 text-center">
<p class="font-body-md text-body-md text-primary">© 2024 {{ \App\Models\User::first()->name ?? 'Naila Hafidz Bachtiar' }}. Built with technical precision.</p>
</div>
<div class="col-span-1 md:col-span-4 flex justify-end gap-6">
<a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors" href="#">Terms</a>
<a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors" href="#">Privacy</a>
<a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors" href="#">Sitemap</a>
</div>
</div>
</footer>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const menuBtn = document.getElementById('mobile-menu-button');
            const closeBtn = document.getElementById('mobile-menu-close');
            const mobileMenu = document.getElementById('mobile-menu');

            if (menuBtn && closeBtn && mobileMenu) {
                menuBtn.addEventListener('click', () => {
                    mobileMenu.classList.remove('hidden');
                    mobileMenu.classList.add('flex');
                    document.body.style.overflow = 'hidden';
                });

                closeBtn.addEventListener('click', () => {
                    mobileMenu.classList.add('hidden');
                    mobileMenu.classList.remove('flex');
                    document.body.style.overflow = 'auto';
                });

                // Close on link click
                mobileMenu.querySelectorAll('a').forEach(link => {
                    link.addEventListener('click', () => {
                        mobileMenu.classList.add('hidden');
                        mobileMenu.classList.remove('flex');
                        document.body.style.overflow = 'auto';
                    });
                });
            }
        });
    </script>
</body></html>
