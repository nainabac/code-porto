<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>About Nayla</title>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;family=JetBrains+Mono:wght@500&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
                      "h1": [
                              "Inter"
                      ],
                      "body-md": [
                              "Inter"
                      ],
                      "h2": [
                              "Inter"
                      ],
                      "body-lg": [
                              "Inter"
                      ],
                      "label-mono": [
                              "JetBrains Mono"
                      ],
                      "h3": [
                              "Inter"
                      ],
                      "display": [
                              "Inter"
                      ],
                      "h1-mobile": [
                              "Inter"
                      ]
              },
              "fontSize": {
                      "h1": [
                              "48px",
                              {
                                      "lineHeight": "1.2",
                                      "letterSpacing": "-0.01em",
                                      "fontWeight": "700"
                              }
                      ],
                      "body-md": [
                              "16px",
                              {
                                      "lineHeight": "1.6",
                                      "fontWeight": "400"
                              }
                      ],
                      "h2": [
                              "32px",
                              {
                                      "lineHeight": "1.3",
                                      "fontWeight": "600"
                              }
                      ],
                      "body-lg": [
                              "18px",
                              {
                                      "lineHeight": "1.6",
                                      "fontWeight": "400"
                              }
                      ],
                      "label-mono": [
                              "14px",
                              {
                                      "lineHeight": "1.0",
                                      "letterSpacing": "0.05em",
                                      "fontWeight": "500"
                              }
                      ],
                      "h3": [
                              "24px",
                              {
                                      "lineHeight": "1.4",
                                      "fontWeight": "600"
                              }
                      ],
                      "display": [
                              "64px",
                              {
                                      "lineHeight": "1.1",
                                      "letterSpacing": "-0.02em",
                                      "fontWeight": "700"
                              }
                      ],
                      "h1-mobile": [
                              "32px",
                              {
                                      "lineHeight": "1.2",
                                      "fontWeight": "700"
                              }
                      ]
              }
      },
          },
        }
      </script>
<style>
        .glass-panel {
            background-color: rgba(19, 19, 20, 0.6);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(70, 70, 75, 0.3);
        }
        .glass-panel:hover {
            border-color: rgba(196, 198, 210, 0.5);
        }
    </style>
</head>
<body class="bg-background text-on-surface font-body-md text-body-md antialiased min-h-screen flex flex-col selection:bg-primary/30 selection:text-primary-fixed">
<!-- TopNavBar -->
<nav class="fixed top-0 w-full bg-surface/60 backdrop-blur-xl border-b border-outline-variant/30 shadow-sm z-50 transition-all duration-300">
<div class="flex justify-between items-center px-margin-mobile md:px-margin-desktop h-20 max-w-[1280px] mx-auto z-50">
<a href="/" class="flex items-center gap-2 group">
    <div class="w-8 h-8 rounded bg-primary/10 border border-primary/30 flex items-center justify-center group-hover:bg-primary/20 transition-all duration-300">
        <span class="material-symbols-outlined text-primary text-[20px]">blur_on</span>
    </div>
    <span class="font-display text-h3 tracking-tighter text-on-surface group-hover:text-primary transition-colors">whoizney.</span>
</a>
                <div class="hidden lg:flex space-x-8">
                    <a class="font-label-mono text-label-mono text-on-surface-variant hover:text-on-surface transition-colors hover:backdrop-blur-2xl hover:bg-surface-bright/20 duration-300 px-3 py-2 rounded-md" href="/">Home</a>
                    <a class="font-label-mono text-label-mono text-on-surface-variant hover:text-on-surface transition-colors hover:backdrop-blur-2xl hover:bg-surface-bright/20 duration-300 px-3 py-2 rounded-md" href="/data">Work</a>
                    <a class="font-label-mono text-label-mono text-primary font-bold border-b border-primary pb-1 px-3 py-2 hover:backdrop-blur-2xl hover:bg-surface-bright/20 transition-all duration-300" href="/about">About</a>
                    <a class="font-label-mono text-label-mono text-on-surface-variant hover:text-on-surface transition-colors hover:backdrop-blur-2xl hover:bg-surface-bright/20 duration-300 px-3 py-2 rounded-md" href="/journal">Journal</a>
                </div>
                <div class="flex items-center gap-4">
                    <button onclick="window.location.href='mailto:{{ \App\Models\User::first()->email ?? 'nailahafidzhaha@gmail.com' }}?subject=Project%20Inquiry%20-%20whoizney'" class="hidden lg:flex font-label-mono text-label-mono text-primary border border-primary/50 hover:bg-primary hover:text-on-primary px-6 py-2 rounded-full transition-all duration-300 backdrop-blur-md active:scale-95">
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
            <a class="font-display text-4xl font-bold text-on-surface hover:text-primary transition-all duration-300" href="/">Home</a>
            <a class="font-display text-4xl font-bold text-on-surface hover:text-primary transition-all duration-300" href="/data">Work</a>
            <a class="font-display text-4xl font-bold text-primary transition-all duration-300" href="/about">About</a>
            <a class="font-display text-4xl font-bold text-on-surface hover:text-primary transition-all duration-300" href="/journal">Journal</a>
        </nav>
        <div class="mt-auto">
            <button onclick="window.location.href='mailto:{{ \App\Models\User::first()->email ?? 'nailahafidzhaha@gmail.com' }}?subject=Project%20Inquiry'" class="w-full bg-primary text-on-primary-fixed font-label-mono py-4 rounded-full font-bold uppercase tracking-widest active:scale-95 transition-all">
                Hire Me
            </button>
        </div>
    </div>
<main class="pt-32 pb-24 px-margin-mobile md:px-margin-desktop max-w-[1280px] mx-auto overflow-hidden relative">
    <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-purple-600/20 rounded-full blur-[120px] -z-10 pointer-events-none"></div>
    <div class="absolute top-[20%] left-[-10%] w-[400px] h-[400px] bg-fuchsia-600/10 rounded-full blur-[100px] -z-10 pointer-events-none"></div>

<!-- Profile Intro -->
<section class="flex flex-col-reverse lg:grid lg:grid-cols-12 gap-gutter mb-24 items-center relative z-10">
<div class="lg:col-span-7 space-y-8 order-2 lg:order-1">
<h1 class="font-display text-5xl md:text-6xl lg:text-7xl font-bold tracking-tighter text-on-surface mb-4 leading-tight">
    Hi! I'm <br class="hidden lg:block"/>
    <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-400 via-fuchsia-400 to-primary">{{ \App\Models\User::first()->name ?? 'Naila Hafidz Bachtiar' }}</span>
    <span class="text-outline-variant text-4xl md:text-5xl">(Neya)</span>
</h1>
<div class="inline-flex flex-wrap items-center gap-2 px-4 py-2.5 rounded-full bg-purple-500/10 border border-purple-500/20 text-purple-300 font-label-mono text-xs md:text-sm mb-6 backdrop-blur-md">
    <span class="material-symbols-outlined text-[16px]">school</span> Information Systems Undergraduate @ Telkom University
</div>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">
                    I bridge the gap between technical precision and intuitive design. Operating at the intersection of data, strategy, and user experience, I build digital ecosystems that are as structurally sound as they are visually compelling.
                </p>
<div class="flex gap-4 pt-4">
<button onclick="window.location.href='/journal'" class="bg-purple-600 hover:bg-purple-500 text-white font-label-mono text-sm font-bold uppercase tracking-wider px-8 py-3.5 rounded-full transition-all shadow-[0_0_30px_rgba(147,51,234,0.3)] hover:shadow-[0_0_40px_rgba(147,51,234,0.5)] active:scale-95">
    View Journal
</button>
</div>
</div>
<div class="lg:col-span-5 order-1 lg:order-2 flex justify-center lg:justify-end">
<div class="relative w-64 h-64 md:w-96 md:h-96 rounded-full overflow-hidden border-2 border-outline-variant/50 shadow-[0_0_60px_rgba(196,198,210,0.1)]">
<img alt="Profile Photo" class="w-full h-full object-cover" src="{{ \App\Models\User::first()->profile_photo_url ? asset(\App\Models\User::first()->profile_photo_url) : 'https://lh3.googleusercontent.com/aida-public/AB6AXuCI6t4rpr2RgrRGHz-su3kNHw81K4JV7Qc36i6Mb9ZNg2DkcdgcJ8Gkw9VB-DsPJOcMHvsixRifvxAQA2P1UQhH4pRIGdZoEosOXB9wedPVIo0Xx-FBmGpEDyIFZ4WdS2FFEfYT_jGR3b5T6KBhLZKcR9oPzLIBskq9Ccxkk6tCAPWTESd0l-zqz2PMcu-D_0GRrXWv1wizMYV5bsMIXf6zUreaH0ICLcQ_u0eIs1EQy2vLH5H0AyDAscW-dGr-gfWGS2_4aY48hJ0' }}"/>
<div class="absolute inset-0 bg-gradient-to-tr from-primary-container/80 to-transparent mix-blend-overlay"></div>
</div>
</div>
</section>
<!-- Experience Timeline -->
<section class="space-y-12">
<h2 class="font-h2 text-h2 text-on-surface flex items-center gap-4">
<span class="material-symbols-outlined text-primary">timeline</span>
                Experience Map
            </h2>
<div class="relative border-l border-outline-variant/30 ml-4 md:ml-8 space-y-12 pb-8">
@forelse($experiences as $exp)
<div class="relative pl-8 md:pl-16">
<div class="absolute -left-2 top-2 w-4 h-4 rounded-full {{ $exp->is_current ? 'bg-primary shadow-[0_0_15px_rgba(196,198,210,0.5)]' : 'bg-surface-variant border-2 border-outline-variant/50' }}"></div>
<div class="glass-panel rounded-xl p-8 relative overflow-hidden group">
<div class="absolute left-0 top-0 bottom-0 w-1 {{ $exp->is_current ? 'bg-primary' : 'bg-secondary' }} group-hover:w-2 transition-all duration-300"></div>
<div class="flex flex-col md:flex-row md:justify-between md:items-start gap-4 mb-4">
<div>
<h3 class="font-h3 text-h3 text-on-surface">{{ $exp->role }}</h3>
<p class="font-body-md text-body-md text-on-surface-variant mt-1">{{ $exp->company }}</p>
</div>
<span class="font-label-mono text-label-mono {{ $exp->is_current ? 'text-primary bg-primary/10 border-primary/20' : 'text-on-surface-variant border-outline-variant/50' }} px-3 py-1 rounded-full border whitespace-nowrap">
    {{ $exp->is_current ? 'Current Role' : $exp->duration }}
</span>
</div>
<p class="font-body-md text-body-md text-on-surface-variant">
    {{ $exp->description }}
</p>
</div>
</div>
@empty
<div class="py-12 text-center glass-panel rounded-xl">
    <p class="text-on-surface-variant font-label-mono italic">No professional history recorded yet.</p>
</div>
@endforelse
</div>
</section>
<!-- Skills & Arsenal -->
<section class="space-y-12">
<h2 class="font-h2 text-h2 text-on-surface flex items-center gap-4">
<span class="material-symbols-outlined text-primary">radar</span>
                Technical Arsenal
            </h2>
<div class="grid grid-cols-1 lg:grid-cols-3 gap-gutter">
<!-- Radar Visualization Placeholder -->
                    <div class="lg:col-span-2 glass-panel rounded-xl overflow-hidden relative min-h-[400px] flex items-center justify-center p-8 group">
                        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-primary/5 via-background to-background pointer-events-none"></div>
                        <canvas id="skillRadar" class="relative z-10 max-h-[350px] w-full"></canvas>
                        <div id="radarFallback" class="absolute z-10 text-center hidden">
                            <span class="material-symbols-outlined text-display text-primary/50 animate-pulse">analytics</span>
                            <p class="font-label-mono text-label-mono text-on-surface-variant mt-4 tracking-widest uppercase">Initializing Data...</p>
                        </div>
                    </div>
<!-- Tools List -->
<div class="glass-panel rounded-xl p-8 space-y-8 flex flex-col justify-center">
<div>
<h3 class="font-h3 text-h3 text-on-surface mb-6">Core Stack</h3>
                @php
                    $colors = [
                        'text-primary border-primary/30 bg-primary/5 hover:bg-primary/20',
                        'text-tertiary border-tertiary/30 bg-tertiary/5 hover:bg-tertiary/20',
                        'text-secondary border-secondary/30 bg-secondary/5 hover:bg-secondary/20',
                        'text-primary-fixed border-primary-fixed/30 bg-primary-fixed/5 hover:bg-primary-fixed/20',
                        'text-error border-error/30 bg-error/5 hover:bg-error/20'
                    ];
                @endphp
                <div class="flex flex-wrap gap-3">
                    @forelse($skills as $index => $skill)
                        <span class="font-label-mono text-label-mono {{ $colors[$index % count($colors)] }} border px-4 py-2 rounded-md transition-colors cursor-default">
                            {{ $skill->name }}
                        </span>
                    @empty
                        <p class="text-on-surface-variant font-label-mono italic">No skills recorded yet.</p>
                    @endforelse
                </div>
</div>
<div class="pt-6 border-t border-outline-variant/30">
<p class="font-body-md text-body-md text-on-surface-variant">
                            Proficient in translating complex data into actionable visual narratives. My toolkit bridges the gap between deep analytics and polished user interfaces.
                        </p>
</div>
</div>
</div>
</section>
<!-- Contact Section -->
<section class="grid grid-cols-1 lg:grid-cols-2 gap-gutter items-stretch">
<!-- Contact Info -->
<div class="glass-panel rounded-xl p-12 flex flex-col justify-between">
<div class="space-y-6">
<h2 class="font-display text-h2 md:text-display text-on-surface leading-tight">Let's build<br/>something<br/><span class="text-primary">precise.</span></h2>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-md">
                        Currently open for high-impact roles and select freelance collaborations.
                    </p>
</div>
<div class="mt-12 space-y-8">
<div class="flex gap-6">
<a class="w-12 h-12 rounded-full border border-outline-variant flex items-center justify-center text-on-surface hover:text-primary hover:border-primary transition-all duration-300 bg-surface-container-low" href="#">
<span class="material-symbols-outlined">link</span>
</a>
<a class="w-12 h-12 rounded-full border border-outline-variant flex items-center justify-center text-on-surface hover:text-primary hover:border-primary transition-all duration-300 bg-surface-container-low" href="#">
<span class="material-symbols-outlined">mail</span>
</a>
</div>
@if(\App\Models\User::first()->cv_url)
<button onclick="window.location.href='{{ asset(\App\Models\User::first()->cv_url) }}'" class="flex items-center gap-3 font-label-mono text-label-mono text-on-surface border border-outline-variant px-6 py-4 rounded-lg hover:bg-surface-container-highest transition-colors w-max">
<span class="material-symbols-outlined">download</span>
                        Download Resume CV
                    </button>
@endif
</div>
</div>
<!-- Contact Form -->
<div class="glass-panel rounded-xl p-8 md:p-12 relative">
<div class="absolute top-0 right-0 w-32 h-32 bg-primary/10 rounded-full blur-3xl pointer-events-none"></div>
<form class="space-y-8 relative z-10 flex flex-col h-full">
<div class="space-y-2">
<label class="font-label-mono text-label-mono text-on-surface-variant uppercase tracking-widest text-xs">Identity</label>
<input class="w-full bg-surface-container/50 border-b border-outline-variant text-on-surface font-body-md text-body-md p-4 rounded-t-md focus:outline-none focus:border-primary focus:bg-surface-container-highest transition-all duration-300 placeholder:text-outline" placeholder="Your Name" type="text"/>
</div>
<div class="space-y-2">
<label class="font-label-mono text-label-mono text-on-surface-variant uppercase tracking-widest text-xs">Comms Channel</label>
<input class="w-full bg-surface-container/50 border-b border-outline-variant text-on-surface font-body-md text-body-md p-4 rounded-t-md focus:outline-none focus:border-primary focus:bg-surface-container-highest transition-all duration-300 placeholder:text-outline" placeholder="Email Address" type="email"/>
</div>
<div class="space-y-2 flex-grow flex flex-col">
<label class="font-label-mono text-label-mono text-on-surface-variant uppercase tracking-widest text-xs">Transmission</label>
<textarea class="w-full flex-grow bg-surface-container/50 border-b border-outline-variant text-on-surface font-body-md text-body-md p-4 rounded-t-md focus:outline-none focus:border-primary focus:bg-surface-container-highest transition-all duration-300 placeholder:text-outline resize-none" placeholder="Your Message..." rows="4"></textarea>
</div>
<button class="w-full bg-primary text-on-primary-fixed font-label-mono text-label-mono uppercase tracking-widest py-4 rounded-lg hover:bg-primary-fixed hover:shadow-[0_0_20px_rgba(196,198,210,0.3)] transition-all duration-300 mt-auto" type="button">
                        Initialize Contact
                    </button>
</form>
</div>
</section>
</main>
<!-- Footer -->
<footer class="w-full py-12 bg-surface-container-lowest border-t border-outline-variant/20 grid grid-cols-1 md:grid-cols-12 gap-gutter px-margin-mobile md:px-margin-desktop max-w-[1280px] mx-auto flat no shadows">
<div class="md:col-span-6 flex flex-col justify-center">
<div class="flex items-center gap-2 mb-2">
    <div class="w-8 h-8 rounded bg-primary/10 border border-primary/30 flex items-center justify-center">
        <span class="material-symbols-outlined text-primary text-[20px]">blur_on</span>
    </div>
    <span class="font-display text-h3 tracking-tighter text-on-surface">whoizney.</span>
</div>
<p class="font-body-md text-body-md text-on-surface-variant">© 2024 {{ \App\Models\User::first()->name ?? 'Naila Hafidz Bachtiar' }}. Built with technical precision.</p>
</div>
<div class="md:col-span-6 flex items-center md:justify-end gap-6 mt-6 md:mt-0">
<a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors" href="#">Terms</a>
<a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors" href="#">Privacy</a>
<a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors" href="#">Sitemap</a>
</div>
</footer>
        <script>
        document.addEventListener('DOMContentLoaded', () => {
                                    // Radar Chart Logic - Diamond Shape (4 Axis)
            const ctx = document.getElementById('skillRadar');
            if (ctx) {
                const skillsData = @json($skills);
                
                // Fixed Categories for the Diamond shape
                const categories = ['Data', 'Business', 'UI/UX', 'Design'];
                const categoryScores = { 'Data': 0, 'Business': 0, 'UI/UX': 0, 'Design': 0 };

                // Mapping logic for multi-category skills
                skillsData.forEach(skill => {
                    const name = skill.name.toLowerCase();
                    const dbCat = (skill.category || '').toLowerCase();

                    // 1. Check by Name for multi-category attribution
                    if (name.includes('figma') || name.includes('adobe') || name.includes('canva')) {
                        categoryScores['Design']++;
                        categoryScores['UI/UX']++;
                    } else if (name.includes('tableau') || name.includes('sql') || name.includes('python') || name.includes('looker') || name.includes('sheets')) {
                        categoryScores['Data']++;
                    } else if (name.includes('jira') || name.includes('sap') || name.includes('business') || name.includes('slack')) {
                        categoryScores['Business']++;
                    }
                    
                    // 2. Fallback to DB Category if not caught by name
                    else if (dbCat.includes('data')) categoryScores['Data']++;
                    else if (dbCat.includes('business')) categoryScores['Business']++;
                    else if (dbCat.includes('ui') || dbCat.includes('ux')) categoryScores['UI/UX']++;
                    else if (dbCat.includes('design')) categoryScores['Design']++;
                });

                const dataValues = categories.map(cat => categoryScores[cat]);

                if (skillsData.length > 0) {
                    new Chart(ctx, {
                        type: 'radar',
                        data: {
                            labels: categories,
                            datasets: [{
                                label: 'Expertise Level',
                                data: dataValues,
                                fill: true,
                                backgroundColor: 'rgba(196, 198, 210, 0.2)',
                                borderColor: '#c4c6d2',
                                pointBackgroundColor: '#c4c6d2',
                                pointBorderColor: '#fff',
                                pointHoverBackgroundColor: '#fff',
                                pointHoverBorderColor: '#c4c6d2'
                            }]
                        },
                        options: {
                            responsive: true,
                            maintainAspectRatio: false,
                            elements: {
                                line: { borderWidth: 3, tension: 0.1 }
                            },
                            scales: {
                                r: {
                                    angleLines: { color: 'rgba(144, 144, 150, 0.2)' },
                                    grid: { color: 'rgba(144, 144, 150, 0.2)' },
                                    pointLabels: {
                                        color: '#c7c6cc',
                                        font: { family: 'JetBrains Mono', size: 14, weight: 'bold' }
                                    },
                                    ticks: { display: false },
                                    suggestedMin: 0,
                                    suggestedMax: Math.max(...dataValues) + 2
                                }
                            },
                            plugins: {
                                legend: { display: false }
                            }
                        }
                    });
                } else {
                    document.getElementById('radarFallback').classList.remove('hidden');
                    ctx.style.display = 'none';
                }
            }

            // Mobile Menu Toggle
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
