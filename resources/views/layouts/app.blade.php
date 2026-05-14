<!DOCTYPE html>
<html class="dark" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>@yield('title', 'Nayla Portfolio')</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;family=JetBrains+Mono:wght@500&amp;display=swap" rel="stylesheet"/>
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
<body class="bg-background text-on-background antialiased selection:bg-primary/30 min-h-screen flex flex-col">
    <!-- TopNavBar -->
    <nav class="fixed top-0 w-full bg-surface/60 backdrop-blur-xl border-b border-outline-variant/30 shadow-sm z-50 transition-all duration-300">
        <div class="flex justify-between items-center px-margin-mobile md:px-margin-desktop h-20 max-w-[1280px] mx-auto z-50">
            <a href="/" class="flex items-center gap-2 group">
                <div class="w-8 h-8 rounded bg-primary/10 border border-primary/30 flex items-center justify-center group-hover:bg-primary/20 transition-all duration-300">
                    <span class="material-symbols-outlined text-primary text-[20px]">blur_on</span>
                </div>
                <span class="font-display text-h3 tracking-tighter text-on-surface group-hover:text-primary transition-colors">whoizney.</span>
            </a>
            <div class="hidden md:flex gap-lg items-center">
                <a class="{{ request()->is('/') ? 'text-primary font-bold border-b border-primary' : 'text-on-surface-variant hover:text-on-surface' }} pb-1 font-label-mono text-label-mono active:scale-95 transition-all duration-300 px-3 py-1 rounded-md" href="/">Home</a>
                <a class="{{ request()->is('data*') || request()->is('design*') || request()->is('business*') || request()->is('ui-ux*') ? 'text-primary font-bold border-b border-primary' : 'text-on-surface-variant hover:text-on-surface' }} pb-1 font-label-mono text-label-mono active:scale-95 transition-all duration-300 px-3 py-1 rounded-md" href="/data">Work</a>
                <a class="{{ request()->is('about') ? 'text-primary font-bold border-b border-primary' : 'text-on-surface-variant hover:text-on-surface' }} pb-1 font-label-mono text-label-mono active:scale-95 transition-all duration-300 px-3 py-1 rounded-md" href="/about">About</a>
                <a class="{{ request()->is('journal*') ? 'text-primary font-bold border-b border-primary' : 'text-on-surface-variant hover:text-on-surface' }} pb-1 font-label-mono text-label-mono active:scale-95 transition-all duration-300 px-3 py-1 rounded-md" href="/journal">Journal</a>
            </div>
            <button onclick="window.location.href='mailto:{{ \App\Models\User::first()->email ?? 'nailahafidzhaha@gmail.com' }}?subject=Project%20Inquiry%20-%20whoizney'" class="bg-primary/10 hover:bg-primary/20 text-primary border border-primary/30 font-label-mono text-label-mono px-4 py-2 rounded-full uppercase tracking-wider transition-colors">
                Hire Me
            </button>
        </div>
    </nav>

    @yield('content')

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
                <p class="font-body-md text-body-md text-primary">© {{ date('Y') }} {{ \App\Models\User::first()->name ?? '{{ \App\Models\User::first()->name ?? 'Naila Hafidz Bachtiar' }}' }}. Built with technical precision.</p>
            </div>
            <div class="col-span-1 md:col-span-4 flex justify-end gap-6">
                <a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors" href="#">Terms</a>
                <a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors" href="#">Privacy</a>
                <a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors" href="#">Sitemap</a>
            </div>
        </div>
    </footer>
</body>
</html>
