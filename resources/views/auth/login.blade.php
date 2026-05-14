<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - whoizney.</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=JetBrains+Mono:wght@500&display=swap" rel="stylesheet">
    <!-- Material Symbols -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
    <!-- Tailwind Config -->
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#c4c6d2",
                        "on-surface": "#e5e2e2",
                        "on-surface-variant": "#c7c6cc",
                        "surface": "#131314",
                        "surface-container": "#201f20",
                        "surface-container-high": "#2a2a2a",
                        "surface-container-highest": "#353435",
                        "outline-variant": "#46464b",
                        "background": "#131314"
                    },
                    fontFamily: {
                        "display": ["Inter"],
                        "body-md": ["Inter"],
                        "h3": ["Inter"],
                        "label-mono": ["JetBrains Mono"]
                    }
                }
            }
        }
    </script>
    <style>
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
        .glass-panel {
            background-color: rgba(19, 19, 20, 0.6);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(70, 70, 75, 0.3);
        }
    </style>
</head>
<body class="bg-background text-on-surface font-body-md antialiased min-h-screen flex items-center justify-center relative overflow-hidden px-4">
    <!-- Decorative Glow -->
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-primary/10 rounded-full blur-[120px] -z-10 pointer-events-none"></div>

    <div class="glass-panel w-full max-w-md rounded-2xl p-8 border border-outline-variant/30 shadow-2xl relative z-10">
        <div class="flex justify-center mb-8">
            <a href="/" class="flex items-center gap-2 group">
                <div class="w-10 h-10 rounded bg-primary/10 border border-primary/30 flex items-center justify-center group-hover:bg-primary/20 transition-all duration-300">
                    <span class="material-symbols-outlined text-primary text-[24px]">blur_on</span>
                </div>
                <span class="font-display text-2xl font-bold tracking-tighter text-on-surface group-hover:text-primary transition-colors">whoizney.</span>
            </a>
        </div>
        
        <div class="text-center mb-8">
            <h1 class="font-display text-xl font-bold">Admin Access</h1>
            <p class="text-on-surface-variant text-sm mt-1">Please enter your credentials to continue.</p>
        </div>

        <form method="POST" action="{{ route('login') }}" class="space-y-5">
            @csrf
            @if ($errors->any())
                <div class="p-3 bg-red-500/10 border border-red-500/30 rounded-lg text-red-400 text-sm text-center">
                    {{ $errors->first() }}
                </div>
            @endif
            
            <div>
                <label class="block text-xs font-label-mono text-on-surface-variant mb-2 uppercase tracking-wider">Email Address</label>
                <div class="relative">
                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant text-[18px]">mail</span>
                    <input type="email" name="email" required autofocus class="w-full bg-surface-container border border-outline-variant/50 rounded-lg pl-10 pr-4 py-3 text-sm focus:outline-none focus:border-primary text-on-surface transition-colors placeholder-outline-variant" placeholder="neyahafidz@gmail.com">
                </div>
            </div>
            
            <div>
                <label class="block text-xs font-label-mono text-on-surface-variant mb-2 uppercase tracking-wider">Password</label>
                <div class="relative">
                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant text-[18px]">lock</span>
                    <input type="password" name="password" required class="w-full bg-surface-container border border-outline-variant/50 rounded-lg pl-10 pr-4 py-3 text-sm focus:outline-none focus:border-primary text-on-surface transition-colors placeholder-outline-variant" placeholder="••••••••">
                </div>
            </div>

            <button type="submit" class="w-full bg-primary text-background font-bold rounded-lg px-4 py-3.5 mt-2 hover:bg-primary/90 transition-colors shadow-lg shadow-primary/20 flex justify-center items-center gap-2">
                Sign In <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
            </button>
            
            <div class="text-center pt-4">
                <a href="/" class="text-xs text-on-surface-variant hover:text-primary transition-colors font-label-mono flex items-center justify-center gap-1">
                    <span class="material-symbols-outlined text-[14px]">arrow_back</span> Return to Portfolio
                </a>
            </div>
        </form>
    </div>
</body>
</html>
