<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Data Projects - NAYLA</title>
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;family=JetBrains+Mono:wght@500&amp;display=swap" rel="stylesheet"/>
<!-- Material Symbols -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
<!-- Tailwind Config -->
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
</head>
<body class="bg-background text-on-background min-h-screen flex flex-col font-body-md text-body-md antialiased selection:bg-primary selection:text-on-primary">
<!-- TopNavBar -->
<header class="fixed top-0 w-full bg-surface/60 backdrop-blur-xl border-b border-outline-variant/30 shadow-sm z-50">
<div class="flex justify-between items-center px-margin-mobile md:px-margin-desktop h-20 max-w-[1280px] mx-auto z-50">
<a href="/" class="flex items-center gap-2 group">
    <div class="w-8 h-8 rounded bg-primary/10 border border-primary/30 flex items-center justify-center group-hover:bg-primary/20 transition-all duration-300">
        <span class="material-symbols-outlined text-primary text-[20px]">blur_on</span>
    </div>
    <span class="font-display text-h3 tracking-tighter text-on-surface group-hover:text-primary transition-colors">whoizney.</span>
</a>
<nav class="hidden md:flex items-center gap-xl font-label-mono text-label-mono">
<a class="text-on-surface-variant hover:text-on-surface transition-colors hover:backdrop-blur-2xl hover:bg-surface-bright/20 transition-all duration-300 px-3 py-2 rounded-DEFAULT" href="/">Home</a>
<!-- Active State -->
<a class="text-primary font-bold border-b border-primary pb-1 Active: scale-95 transition-transform px-3 py-2" href="/data">Work</a>
<a class="text-on-surface-variant hover:text-on-surface transition-colors hover:backdrop-blur-2xl hover:bg-surface-bright/20 transition-all duration-300 px-3 py-2 rounded-DEFAULT" href="/about">About</a>
<a class="text-on-surface-variant hover:text-on-surface transition-colors hover:backdrop-blur-2xl hover:bg-surface-bright/20 transition-all duration-300 px-3 py-2 rounded-DEFAULT" href="/journal">Journal</a>
</nav>
<button onclick="window.location.href='mailto:{{ \App\Models\User::first()->email ?? 'nailahafidzhaha@gmail.com' }}?subject=Project%20Inquiry%20-%20whoizney'" class="font-label-mono text-label-mono px-6 py-2 border border-primary text-primary rounded-full hover:bg-primary/10 transition-colors uppercase tracking-widest hidden md:block">
                Hire Me
            </button>
<button class="md:hidden text-on-surface p-2">
<span class="material-symbols-outlined">menu</span>
</button>
</div>
</header>
<!-- Main Canvas -->
<main class="flex-grow pt-32 pb-24 px-margin-mobile md:px-margin-desktop w-full max-w-[1280px] mx-auto relative">
    <div class="absolute top-0 right-1/4 w-[500px] h-[500px] bg-purple-600/20 rounded-full blur-[120px] -z-10 pointer-events-none"></div>

<!-- Breadcrumb -->
<nav class="font-label-mono text-label-mono text-on-surface-variant mb-xl flex items-center gap-sm uppercase tracking-wider relative z-40">
<a class="hover:text-primary transition-colors" href="/">Home</a>
<span class="material-symbols-outlined text-[14px]">chevron_right</span>
<a class="hover:text-primary transition-colors" href="/data">Work</a>
<span class="material-symbols-outlined text-[14px]">chevron_right</span>
<div class="relative group">
    <button class="text-primary font-bold flex items-center gap-1 focus:outline-none">
        Data <span class="material-symbols-outlined text-[16px]">expand_more</span>
    </button>
    <div class="absolute left-0 top-full mt-2 w-40 bg-surface-container-high border border-outline-variant/30 rounded-lg shadow-xl opacity-0 invisible group-focus-within:opacity-100 group-focus-within:visible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50 flex flex-col py-2 backdrop-blur-xl">
        <a href="/data" class="px-4 py-2 hover:bg-primary/10 hover:text-primary transition-colors text-left text-primary font-bold">Data</a>
        <a href="/design" class="px-4 py-2 hover:bg-primary/10 hover:text-primary transition-colors text-left text-on-surface">Design</a>
        <a href="/business" class="px-4 py-2 hover:bg-primary/10 hover:text-primary transition-colors text-left text-on-surface">Business</a>
        <a href="/ui-ux" class="px-4 py-2 hover:bg-primary/10 hover:text-primary transition-colors text-left text-on-surface">UI/UX</a>
    </div>
</div>
</nav>
<!-- Header Section -->
<header class="mb-16 relative z-10">
    <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-purple-500/10 border border-purple-500/20 text-purple-300 font-label-mono text-xs w-max mb-6 backdrop-blur-md">
        <span class="material-symbols-outlined text-[14px]">bar_chart</span> Discipline
    </div>
    <h1 class="font-display text-5xl md:text-7xl font-bold tracking-tighter text-on-surface mb-6">
        <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-400 via-fuchsia-400 to-primary">Data</span> Projects.
    </h1>
    <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">
        A selection of analytics dashboards, database modeling, and business intelligence case studies.
    </p>
</header>
<!-- Search & Filter Controls -->
<section class="flex flex-col md:flex-row gap-lg mb-12 items-start md:items-center justify-between">
<!-- Filters -->
<div class="flex flex-wrap gap-sm font-label-mono text-label-mono uppercase">
<button class="px-5 py-2 border border-primary bg-primary/10 text-primary rounded-full transition-colors">All</button>
<button class="px-5 py-2 border border-outline-variant text-on-surface-variant hover:border-primary/50 hover:text-on-surface rounded-full transition-colors">Python</button>
<button class="px-5 py-2 border border-outline-variant text-on-surface-variant hover:border-primary/50 hover:text-on-surface rounded-full transition-colors">SQL</button>
<button class="px-5 py-2 border border-outline-variant text-on-surface-variant hover:border-primary/50 hover:text-on-surface rounded-full transition-colors">Tableau</button>
<button class="px-5 py-2 border border-outline-variant text-on-surface-variant hover:border-primary/50 hover:text-on-surface rounded-full transition-colors">R</button>
</div>
<!-- Search -->
<div class="relative w-full md:w-80 group">
<span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline-variant group-focus-within:text-primary transition-colors">search</span>
<input class="w-full bg-surface-container border-b border-outline-variant focus:border-primary text-on-surface pl-12 pr-4 py-3 rounded-t-DEFAULT outline-none transition-all font-body-md text-body-md placeholder-outline-variant" placeholder="Search projects..." type="text"/>
</div>
</section>
<!-- Project Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter">
    @forelse($projects as $project)
    <article onclick="window.location.href='{{ route('project.show', $project) }}'" class="cursor-pointer group relative flex flex-col bg-surface-container/40 backdrop-blur-xl border border-outline-variant/30 rounded-xl overflow-hidden hover:border-primary/60 transition-all duration-500 hover:-translate-y-1 hover:shadow-[0_0_40px_-10px_rgba(196,198,210,0.1)]">
        <div class="absolute left-0 top-0 bottom-0 w-1 bg-primary opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-10"></div>
        <div class="aspect-[4/3] w-full relative overflow-hidden bg-surface-dim">
            <img alt="{{ $project->title }}" class="object-cover w-full h-full opacity-80 group-hover:opacity-100 group-hover:scale-105 transition-all duration-700" src="{{ $project->image_url ? asset($project->image_url) : 'https://placehold.co/600x400/131314/c4c6d2?text=No+Image' }}"/>
        </div>
        <div class="p-lg flex flex-col flex-1 border-t border-outline-variant/20 relative">
            <h2 class="font-h3 text-h3 text-on-surface mb-xs group-hover:text-primary transition-colors">{{ $project->title }}</h2>
            <p class="font-body-md text-body-md text-on-surface-variant line-clamp-2 mb-md">{{ $project->description }}</p>
            <div class="flex flex-wrap gap-xs mt-auto pt-sm font-label-mono text-[11px] uppercase tracking-wider">
                @if($project->tech_stack)
                    @foreach(explode(',', $project->tech_stack) as $tech)
                        @if(trim($tech))
                        <span class="px-2.5 py-1 border border-outline-variant rounded text-on-surface-variant">{{ trim($tech) }}</span>
                        @endif
                    @endforeach
                @endif
            </div>
        </div>
    </article>
    @empty
    <div class="col-span-full py-12 text-center text-on-surface-variant font-label-mono">
        No projects available in this category yet.
    </div>
    @endforelse
</div>
</main>
<!-- Footer -->
<footer class="bg-surface-container-lowest w-full py-12 border-t border-outline-variant/20">
<div class="grid grid-cols-1 md:grid-cols-12 gap-gutter px-margin-mobile md:px-margin-desktop max-w-[1280px] mx-auto items-center">
<div class="col-span-1 md:col-span-4 flex items-center gap-2 mb-2 md:mb-0">
    <div class="w-8 h-8 rounded bg-primary/10 border border-primary/30 flex items-center justify-center">
        <span class="material-symbols-outlined text-primary text-[20px]">blur_on</span>
    </div>
    <span class="font-display text-h3 tracking-tighter text-on-surface">whoizney.</span>
</div>
<nav class="col-span-1 md:col-span-4 flex gap-md justify-start md:justify-center font-body-md text-body-md text-on-surface-variant">
<a class="hover:text-primary transition-colors" href="#">Terms</a>
<a class="hover:text-primary transition-colors" href="#">Privacy</a>
<a class="hover:text-primary transition-colors" href="#">Sitemap</a>
</nav>
<div class="col-span-1 md:col-span-4 text-left md:text-right font-body-md text-body-md text-on-surface-variant">
                © 2024 {{ \App\Models\User::first()->name ?? 'Naila Hafidz Bachtiar' }}. Built with technical precision.
            </div>
</div>
</footer>
</body></html>
