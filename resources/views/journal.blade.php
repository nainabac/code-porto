<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>NAYLA - Journal</title>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;family=JetBrains+Mono:wght@500&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
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
        .material-symbols-outlined {
          font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        
        /* Subtle glow utilities */
        .glass-panel {
            background: rgba(32, 31, 32, 0.4);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(70, 70, 75, 0.3);
        }
        .glass-panel:hover {
            border-color: rgba(196, 198, 210, 0.4);
            box-shadow: inset 0 1px 0 0 rgba(196, 198, 210, 0.1), 0 8px 32px rgba(0,0,0,0.4);
        }
    </style>
</head>
<body class="bg-background text-on-surface antialiased selection:bg-primary/30 selection:text-primary">
<!-- TopNavBar Shared Component -->
<header class="fixed top-0 w-full bg-surface/60 backdrop-blur-xl border-b border-outline-variant/30 shadow-sm z-50 transition-all duration-300">
<div class="flex justify-between items-center px-margin-mobile md:px-margin-desktop h-20 max-w-[1280px] mx-auto z-50">
<!-- Brand Logo -->
<a href="/" class="flex items-center gap-2 group">
    <div class="w-8 h-8 rounded bg-primary/10 border border-primary/30 flex items-center justify-center group-hover:bg-primary/20 transition-all duration-300">
        <span class="material-symbols-outlined text-primary text-[20px]">blur_on</span>
    </div>
    <span class="font-display text-h3 tracking-tighter text-on-surface group-hover:text-primary transition-colors">whoizney.</span>
</a>
                <nav class="hidden lg:flex items-center space-x-8 font-label-mono text-label-mono">
                    <a class="text-on-surface-variant hover:text-on-surface transition-colors hover:backdrop-blur-2xl hover:bg-surface-bright/20 duration-300 px-3 py-2 rounded-md" href="/">Home</a>
                    <a class="text-on-surface-variant hover:text-on-surface transition-colors hover:backdrop-blur-2xl hover:bg-surface-bright/20 duration-300 px-3 py-2 rounded-md" href="/data">Work</a>
                    <a class="text-on-surface-variant hover:text-on-surface transition-colors hover:backdrop-blur-2xl hover:bg-surface-bright/20 duration-300 px-3 py-2 rounded-md" href="/about">About</a>
                    <a class="text-primary font-bold border-b border-primary pb-1 scale-95 transition-transform px-3 py-2" href="/journal">Journal</a>
                </nav>
                <!-- Trailing Action -->
                <div class="flex items-center gap-4">
                    <button onclick="window.location.href='mailto:{{ \App\Models\User::first()->email ?? 'nailahafidzhaha@gmail.com' }}?subject=Project%20Inquiry%20-%20whoizney'" class="hidden lg:inline-flex items-center justify-center font-label-mono text-label-mono text-primary-container bg-primary hover:bg-primary-fixed transition-colors rounded-full px-6 py-2.5">
                        Hire Me
                    </button>
                    <!-- Mobile Menu Toggle -->
                    <button id="mobile-menu-button" class="lg:hidden text-on-surface-variant p-2 hover:text-primary transition-colors">
                        <span class="material-symbols-outlined text-[32px]">menu</span>
                    </button>
                </div>
        </div>
    </header>

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
            <a class="font-display text-4xl font-bold text-on-surface hover:text-primary transition-all duration-300" href="/about">About</a>
            <a class="font-display text-4xl font-bold text-primary transition-all duration-300" href="/journal">Journal</a>
        </nav>
        <div class="mt-auto">
            <button onclick="window.location.href='mailto:{{ \App\Models\User::first()->email ?? 'nailahafidzhaha@gmail.com' }}?subject=Project%20Inquiry'" class="w-full bg-primary text-on-primary-fixed font-label-mono py-4 rounded-full font-bold uppercase tracking-widest active:scale-95 transition-all">
                Hire Me
            </button>
        </div>
    </div>
<!-- Main Content Canvas -->
<main class="pt-32 pb-24 px-margin-mobile md:px-margin-desktop max-w-[1280px] mx-auto min-h-screen flex flex-col relative">
    <div class="absolute top-0 right-1/4 w-[500px] h-[500px] bg-purple-600/20 rounded-full blur-[120px] -z-10 pointer-events-none"></div>
<!-- Header Section -->
<section class="mb-16 flex flex-col gap-4 relative z-10">
    <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-purple-500/10 border border-purple-500/20 text-purple-300 font-label-mono text-xs w-max mb-2 backdrop-blur-md">
        <span class="material-symbols-outlined text-[14px]">edit_document</span> Writing Archive
    </div>
    <h1 class="font-display text-5xl md:text-7xl font-bold tracking-tighter text-on-surface">
        <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-400 via-fuchsia-400 to-primary">Thoughts</span> &amp; Insights
    </h1>
    <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mt-2">
        A collection of technical deep-dives, design explorations, and industry observations from the intersection of aesthetics and engineering.
    </p>
</section>
        <section class="mb-12 flex flex-wrap items-center gap-3 overflow-x-auto pb-4 hide-scrollbar">
            <button onclick="filterJournals('All')" class="filter-btn active whitespace-nowrap px-5 py-2.5 rounded-full border border-primary bg-primary text-primary-container font-label-mono text-label-mono transition-all">All</button>
            <button onclick="filterJournals('Design')" class="filter-btn whitespace-nowrap px-5 py-2.5 rounded-full border border-outline-variant/50 hover:border-outline text-on-surface-variant hover:text-on-surface font-label-mono text-label-mono transition-all">Design</button>
            <button onclick="filterJournals('Tech')" class="filter-btn whitespace-nowrap px-5 py-2.5 rounded-full border border-outline-variant/50 hover:border-outline text-on-surface-variant hover:text-on-surface font-label-mono text-label-mono transition-all">Tech</button>
            <button onclick="filterJournals('Business')" class="filter-btn whitespace-nowrap px-5 py-2.5 rounded-full border border-outline-variant/50 hover:border-outline text-on-surface-variant hover:text-on-surface font-label-mono text-label-mono transition-all">Business</button>
            <button onclick="filterJournals('Industry')" class="filter-btn whitespace-nowrap px-5 py-2.5 rounded-full border border-outline-variant/50 hover:border-outline text-on-surface-variant hover:text-on-surface font-label-mono text-label-mono transition-all">Industry</button>
        </section>
<!-- Article Grid -->
<section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($journals as $journal)
            <article data-category="{{ $journal->category ?? 'General' }}" onclick="window.location.href='{{ route('journal.show', $journal) }}'" class="journal-card glass-panel rounded-xl overflow-hidden group flex flex-col cursor-pointer transition-all duration-500">
                <div class="relative w-full aspect-[16/10] overflow-hidden bg-surface-container-high">
                    <img alt="{{ $journal->title }}" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 ease-out" src="{{ $journal->image_url ? asset($journal->image_url) : 'https://placehold.co/800x500/131314/c4c6d2?text=Journal+Image' }}"/>
                    <div class="absolute inset-0 bg-gradient-to-t from-background/80 to-transparent opacity-60"></div>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex justify-between items-center mb-4">
                        <span class="inline-block px-2.5 py-1 rounded border border-tertiary/30 text-tertiary font-label-mono text-[12px] uppercase tracking-wider">{{ $journal->category ?? 'Archive' }}</span>
                        <span class="font-label-mono text-label-mono text-on-surface-variant flex items-center gap-1.5"><span class="material-symbols-outlined text-[16px]">schedule</span> {{ ceil(str_word_count($journal->content) / 200) }} min read</span>
                    </div>
                    <h2 class="font-h3 text-h3 text-on-surface group-hover:text-primary transition-colors leading-snug mb-3">{{ $journal->title }}</h2>
                    <p class="font-body-md text-body-md text-on-surface-variant line-clamp-3 mb-6">{{ $journal->excerpt }}</p>
                    <div class="mt-auto pt-4 border-t border-outline-variant/20 flex justify-between items-center">
                        <time class="font-label-mono text-label-mono text-on-surface-variant">{{ $journal->created_at->format('M d, Y') }}</time>
                        <span class="material-symbols-outlined text-outline group-hover:text-primary transition-colors transform group-hover:translate-x-1">arrow_forward</span>
                    </div>
                </div>
            </article>
@empty
<div class="col-span-full py-24 text-center">
    <p class="text-on-surface-variant font-label-mono italic">No thoughts or insights archived yet. Check back soon.</p>
</div>
@endforelse
</section>
<!-- Pagination / Load More (Conceptual) -->
<div class="mt-16 flex justify-center">
<button class="font-label-mono text-label-mono text-on-surface border border-outline-variant/50 hover:border-primary hover:text-primary rounded-full px-8 py-3 transition-all duration-300">
                Load More Articles
            </button>
</div>
</main>
<!-- Footer Shared Component -->
<footer class="bg-surface-container-lowest w-full py-12 border-t border-outline-variant/20">
<div class="grid grid-cols-1 md:grid-cols-12 gap-gutter px-margin-mobile md:px-margin-desktop max-w-[1280px] mx-auto">
<div class="md:col-span-6 flex flex-col justify-between mb-8 md:mb-0">
<div class="flex items-center gap-2 mb-6">
    <div class="w-8 h-8 rounded bg-primary/10 border border-primary/30 flex items-center justify-center">
        <span class="material-symbols-outlined text-primary text-[20px]">blur_on</span>
    </div>
    <span class="font-display text-h3 tracking-tighter text-on-surface">whoizney.</span>
</div>
<p class="font-body-md text-body-md text-primary opacity-80">
                    © 2024 {{ \App\Models\User::first()->name ?? 'Naila Hafidz Bachtiar' }}. Built with technical precision.
                </p>
</div>
<div class="md:col-span-6 flex justify-start md:justify-end items-end">
<nav class="flex gap-8 font-body-md text-body-md">
<a class="text-on-surface-variant hover:text-primary transition-colors" href="#">Terms</a>
<a class="text-on-surface-variant hover:text-primary transition-colors" href="#">Privacy</a>
<a class="text-on-surface-variant hover:text-primary transition-colors" href="#">Sitemap</a>
</nav>
</div>
</div>
</footer>
    <script>
        function filterJournals(category) {
            // Update buttons
            document.querySelectorAll('.filter-btn').forEach(btn => {
                if (btn.innerText === category) {
                    btn.classList.add('bg-primary', 'text-primary-container', 'border-primary');
                    btn.classList.remove('text-on-surface-variant', 'border-outline-variant/50');
                } else {
                    btn.classList.remove('bg-primary', 'text-primary-container', 'border-primary');
                    btn.classList.add('text-on-surface-variant', 'border-outline-variant/50');
                }
            });

            // Filter cards
            document.querySelectorAll('.journal-card').forEach(card => {
                if (category === 'All' || card.getAttribute('data-category') === category) {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            });
        }

        document.addEventListener('DOMContentLoaded', () => {
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
