<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>{{ $project->title }} - NAYLA</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;family=JetBrains+Mono:wght@500&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
                      "surface-variant": "#353435",
                      "accent-data": "#00E5FF" // Added based on style guidance for Data discipline
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
                      "h1": ["48px", {"lineHeight": "1.2", "letterSpacing": "-0.01em", "fontWeight": "700"}],
                      "body-md": ["16px", {"lineHeight": "1.6", "fontWeight": "400"}],
                      "h2": ["32px", {"lineHeight": "1.3", "fontWeight": "600"}],
                      "body-lg": ["18px", {"lineHeight": "1.6", "fontWeight": "400"}],
                      "label-mono": ["14px", {"lineHeight": "1.0", "letterSpacing": "0.05em", "fontWeight": "500"}],
                      "h3": ["24px", {"lineHeight": "1.4", "fontWeight": "600"}],
                      "display": ["64px", {"lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                      "h1-mobile": ["32px", {"lineHeight": "1.2", "fontWeight": "700"}]
              }
            }
          }
        }
      </script>
<style>
        .glass-surface { background: rgba(19, 22, 31, 0.6); backdrop-filter: blur(20px); -webkit-backdrop-filter: blur(20px); }
        .glass-border { border: 1px solid rgba(144, 144, 150, 0.2); }
        .glass-border-hover:hover { border-color: rgba(0, 229, 255, 0.5); box-shadow: inset 0 1px 0 rgba(0, 229, 255, 0.2); }
        .glow-bloom { box-shadow: 0 0 40px rgba(0, 229, 255, 0.15); }
    </style>
</head>
<body class="bg-background text-on-surface antialiased min-h-screen flex flex-col">
<!-- TopNavBar -->
<header class="fixed top-0 w-full bg-surface/60 backdrop-blur-xl border-b border-outline-variant/30 shadow-sm z-50">
<div class="flex justify-between items-center px-margin-mobile md:px-margin-desktop h-20 max-w-[1280px] mx-auto z-50">
<a href="/" class="flex items-center gap-2 group">
    <div class="w-8 h-8 rounded bg-primary/10 border border-primary/30 flex items-center justify-center group-hover:bg-primary/20 transition-all duration-300">
        <span class="material-symbols-outlined text-primary text-[20px]">blur_on</span>
    </div>
    <span class="font-display text-h3 tracking-tighter text-on-surface group-hover:text-primary transition-colors">whoizney.</span>
</a>
<nav class="hidden md:flex gap-xl">
<a class="text-on-surface-variant hover:text-on-surface transition-colors font-label-mono text-label-mono" href="/">Home</a>
<a class="text-primary font-bold border-b border-primary pb-1 font-label-mono text-label-mono" href="/data">Work</a>
<a class="text-on-surface-variant hover:text-on-surface transition-colors font-label-mono text-label-mono" href="/about">About</a>
<a class="text-on-surface-variant hover:text-on-surface transition-colors font-label-mono text-label-mono" href="/journal">Journal</a>
</nav>
<button onclick="window.location.href='mailto:{{ \App\Models\User::first()->email ?? 'nailahafidzhaha@gmail.com' }}?subject=Project%20Inquiry%20-%20whoizney'" class="font-label-mono text-label-mono text-primary hover:backdrop-blur-2xl hover:bg-surface-bright/20 transition-all duration-300 px-4 py-2 rounded-DEFAULT glass-border">Hire Me</button>
</div>
</header>
<main class="flex-grow pt-24 pb-20 md:pt-32 px-margin-mobile md:px-margin-desktop max-w-[1280px] mx-auto w-full relative">
    <div class="absolute top-0 right-1/4 w-[500px] h-[500px] bg-purple-600/20 rounded-full blur-[120px] -z-10 pointer-events-none"></div>

<!-- Breadcrumb -->
<nav class="mb-8 font-label-mono text-label-mono text-on-surface-variant flex items-center gap-2">
<a class="hover:text-primary transition-colors" href="/">Home</a>
<span class="material-symbols-outlined text-sm">chevron_right</span>
<a class="hover:text-primary transition-colors" href="/data">Work</a>
<span class="material-symbols-outlined text-sm">chevron_right</span>
@php
    $firstCategory = is_array($project->category) ? ($project->category[0] ?? 'data') : $project->category;
@endphp
<a class="hover:text-primary transition-colors text-accent-data" href="/{{ strtolower($firstCategory === 'uiux' ? 'ui-ux' : $firstCategory) }}">{{ $firstCategory === 'uiux' ? 'UI/UX' : ucfirst($firstCategory) }}</a>
<span class="material-symbols-outlined text-sm">chevron_right</span>
<span class="text-on-surface">{{ $project->title }}</span>
</nav>
<!-- Hero Section -->
<section class="mb-16 rounded-xl overflow-hidden glass-surface glass-border relative group h-[400px] md:h-[600px]">
<div class="absolute inset-0 bg-gradient-to-t from-background via-transparent to-transparent z-10"></div>
<img alt="{{ $project->title }}" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700" src="{{ $project->image_url ? asset($project->image_url) : 'https://placehold.co/1200x600/131314/c4c6d2?text=No+Image' }}"/>
<div class="absolute bottom-0 left-0 p-8 z-20 w-full">
<div class="flex items-center gap-4 mb-4">
<div class="w-1 h-8 bg-accent-data rounded-full shadow-[0_0_10px_rgba(0,229,255,0.8)]"></div>
<h1 class="font-h1-mobile md:font-h1 text-h1-mobile md:text-h1 text-on-surface">{{ $project->title }}</h1>
</div>
</div>
</section>
<!-- Meta Bar -->
<section class="mb-16 grid grid-cols-2 md:grid-cols-4 gap-gutter glass-surface glass-border p-6 rounded-lg">
<div class="flex flex-col gap-2">
<span class="font-label-mono text-label-mono text-on-surface-variant uppercase">Discipline</span>
<span class="font-body-lg text-body-lg text-accent-data">
    {{ collect($project->category)->map(fn($c) => $c === 'uiux' ? 'UI/UX' : ucfirst($c))->join(', ') }}
</span>
</div>
<div class="flex flex-col gap-2">
<span class="font-label-mono text-label-mono text-on-surface-variant uppercase">Year</span>
<span class="font-body-lg text-body-lg text-on-surface">{{ $project->created_at->format('Y') }}</span>
</div>
<div class="flex flex-col gap-2">
<span class="font-label-mono text-label-mono text-on-surface-variant uppercase">Client/Role</span>
<span class="font-body-lg text-body-lg text-on-surface">{{ $project->client ?? 'Analyst' }}</span>
</div>
@if($project->tech_stack)
<div class="flex flex-col gap-2">
<span class="font-label-mono text-label-mono text-on-surface-variant uppercase">{{ in_array('data', $project->category ?? []) ? 'Tech Stack' : 'Tools' }}</span>
<div class="flex flex-wrap gap-2">
        @foreach(explode(',', $project->tech_stack) as $tech)
            @if(trim($tech))
                <span class="px-2 py-1 border border-accent-data/50 text-accent-data font-label-mono text-label-mono rounded text-xs">{{ trim($tech) }}</span>
            @endif
        @endforeach
</div>
</div>
@endif
</section>
<!-- Overview Section -->
<section class="mb-20 max-w-3xl">
<h2 class="font-h2 text-h2 text-on-surface mb-6">Project Overview</h2>
<p class="font-body-lg text-body-lg text-on-surface-variant mb-4 whitespace-pre-line">
                {{ $project->description }}
            </p>
</section>
@if(in_array('data', $project->category ?? []))
<!-- Key Insights (Bento Grid Style) -->
<section class="mb-20">
<h2 class="font-h2 text-h2 text-on-surface mb-8">Key Insights</h2>
<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
<div class="glass-surface glass-border rounded-xl p-8 glass-border-hover transition-all duration-300 relative overflow-hidden group">
<div class="absolute top-0 left-0 w-1 h-full bg-accent-data opacity-50 group-hover:opacity-100 transition-opacity glow-bloom"></div>
<span class="material-symbols-outlined text-accent-data mb-4 text-4xl block">trending_up</span>
<div class="font-display text-h2 md:text-display text-on-surface mb-2">+32%</div>
<div class="font-label-mono text-label-mono text-on-surface-variant uppercase">Revenue Growth</div>
<p class="font-body-md text-body-md text-on-surface-variant mt-4 opacity-80">Identified new cross-selling opportunities in Q3.</p>
</div>
<div class="glass-surface glass-border rounded-xl p-8 glass-border-hover transition-all duration-300 relative overflow-hidden group">
<div class="absolute top-0 left-0 w-1 h-full bg-accent-data opacity-50 group-hover:opacity-100 transition-opacity glow-bloom"></div>
<span class="material-symbols-outlined text-accent-data mb-4 text-4xl block">speed</span>
<div class="font-display text-h2 md:text-display text-on-surface mb-2">4x</div>
<div class="font-label-mono text-label-mono text-on-surface-variant uppercase">Query Speed</div>
<p class="font-body-md text-body-md text-on-surface-variant mt-4 opacity-80">Optimized data pipeline execution time.</p>
</div>
<div class="glass-surface glass-border rounded-xl p-8 glass-border-hover transition-all duration-300 relative overflow-hidden group">
<div class="absolute top-0 left-0 w-1 h-full bg-accent-data opacity-50 group-hover:opacity-100 transition-opacity glow-bloom"></div>
<span class="material-symbols-outlined text-accent-data mb-4 text-4xl block">group</span>
<div class="font-display text-h2 md:text-display text-on-surface mb-2">15k</div>
<div class="font-label-mono text-label-mono text-on-surface-variant uppercase">Active Users</div>
<p class="font-body-md text-body-md text-on-surface-variant mt-4 opacity-80">Tracked daily active engagement metrics.</p>
</div>
</div>
</section>
<!-- Code Snippet -->
<section class="mb-20">
<h2 class="font-h3 text-h3 text-on-surface mb-6">Data Transformation Logic</h2>
<div class="glass-surface glass-border rounded-lg overflow-hidden border-t-2 border-t-accent-data">
<div class="bg-surface-container-highest px-4 py-2 border-b border-outline-variant/30 flex items-center justify-between">
<span class="font-label-mono text-label-mono text-on-surface-variant">etl_pipeline.py</span>
<span class="material-symbols-outlined text-on-surface-variant text-sm">content_copy</span>
</div>
<pre class="p-6 overflow-x-auto text-sm font-label-mono text-primary-fixed-dim leading-relaxed"><code class="language-python">import pandas as pd
import numpy as np

def transform_sales_data(df):
    """
    Cleans and aggregates raw sales transactions.
    """
    # Standardize column names
    df.columns = df.columns.str.lower().str.replace(' ', '_')
    
    # Handle missing values
    df['revenue'].fillna(0, inplace=True)
    
    # Calculate rolling averages
    df['7_day_avg'] = df.groupby('region')['revenue'] \
                        .transform(lambda x: x.rolling(7, min_periods=1).mean())
                        
    return df</code></pre>
</div>
</section>
<!-- Process Timeline -->
<section class="mb-20">
<h2 class="font-h2 text-h2 text-on-surface mb-10">Process Timeline</h2>
<div class="relative">
<!-- Line -->
<div class="absolute top-1/2 left-0 w-full h-0.5 bg-outline-variant/50 -translate-y-1/2 hidden md:block"></div>
<div class="grid grid-cols-1 md:grid-cols-5 gap-8">
<!-- Step 1 -->
<div class="relative z-10 flex flex-col items-center text-center">
<div class="w-12 h-12 rounded-full bg-surface-container-highest border-2 border-accent-data flex items-center justify-center mb-4 glow-bloom">
<span class="material-symbols-outlined text-accent-data">lightbulb</span>
</div>
<h3 class="font-h3 text-h3 text-on-surface mb-2">Ideation</h3>
</div>
<!-- Step 2 -->
<div class="relative z-10 flex flex-col items-center text-center">
<div class="w-12 h-12 rounded-full bg-surface-container-highest border-2 border-outline-variant flex items-center justify-center mb-4">
<span class="material-symbols-outlined text-on-surface-variant">search</span>
</div>
<h3 class="font-h3 text-h3 text-on-surface mb-2">Research</h3>
</div>
<!-- Step 3 -->
<div class="relative z-10 flex flex-col items-center text-center">
<div class="w-12 h-12 rounded-full bg-surface-container-highest border-2 border-outline-variant flex items-center justify-center mb-4">
<span class="material-symbols-outlined text-on-surface-variant">code</span>
</div>
<h3 class="font-h3 text-h3 text-on-surface mb-2">Build</h3>
</div>
<!-- Step 4 -->
<div class="relative z-10 flex flex-col items-center text-center">
<div class="w-12 h-12 rounded-full bg-surface-container-highest border-2 border-outline-variant flex items-center justify-center mb-4">
<span class="material-symbols-outlined text-on-surface-variant">bug_report</span>
</div>
<h3 class="font-h3 text-h3 text-on-surface mb-2">Test</h3>
</div>
<!-- Step 5 -->
<div class="relative z-10 flex flex-col items-center text-center">
<div class="w-12 h-12 rounded-full bg-surface-container-highest border-2 border-outline-variant flex items-center justify-center mb-4">
<span class="material-symbols-outlined text-on-surface-variant">rocket_launch</span>
</div>
<h3 class="font-h3 text-h3 text-on-surface mb-2">Deploy</h3>
</div>
</div>
</div>
</section>
@endif
<!-- CTAs -->
<section class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-24 border-t border-outline-variant/20 pt-12">
@if($project->github_url)
<a href="{{ $project->github_url }}" target="_blank" rel="noopener noreferrer" class="w-full sm:w-auto px-8 py-4 bg-accent-data/10 text-accent-data border border-accent-data font-label-mono text-label-mono uppercase rounded hover:bg-accent-data hover:text-background transition-all duration-300 flex items-center justify-center gap-2 glow-bloom">
<span class="material-symbols-outlined">code_blocks</span>
                View on GitHub
            </a>
@endif
@if($project->pdf_url)
<a href="{{ asset($project->pdf_url) }}" target="_blank" class="w-full sm:w-auto px-8 py-4 glass-surface text-on-surface border border-outline-variant font-label-mono text-label-mono uppercase rounded hover:border-on-surface transition-all duration-300 flex items-center justify-center gap-2">
<span class="material-symbols-outlined">download</span>
                Download Report PDF
            </a>
@endif
</section>
<!-- Navigation Next/Prev -->
<nav class="flex justify-between items-center glass-surface glass-border p-6 rounded-xl">
<a class="flex flex-col gap-1 group" href="#">
<span class="font-label-mono text-label-mono text-on-surface-variant flex items-center gap-1 group-hover:text-primary transition-colors">
<span class="material-symbols-outlined text-sm">arrow_left</span> Previous Project
                </span>
<span class="font-h3 text-h3 text-on-surface">Customer Churn Model</span>
</a>
<a class="flex flex-col gap-1 items-end group" href="#">
<span class="font-label-mono text-label-mono text-on-surface-variant flex items-center gap-1 group-hover:text-primary transition-colors">
                    Next Project <span class="material-symbols-outlined text-sm">arrow_right</span>
</span>
<span class="font-h3 text-h3 text-on-surface">Inventory Forecasting</span>
</a>
</nav>
</main>
<!-- Footer -->
<footer class="w-full py-12 bg-surface-container-lowest border-t border-outline-variant/20 mt-auto">
<div class="grid grid-cols-1 md:grid-cols-12 gap-gutter px-margin-mobile md:px-margin-desktop max-w-[1280px] mx-auto">
<div class="col-span-1 md:col-span-4 flex items-center gap-2 mb-2 md:mb-0">
    <div class="w-8 h-8 rounded bg-primary/10 border border-primary/30 flex items-center justify-center">
        <span class="material-symbols-outlined text-primary text-[20px]">blur_on</span>
    </div>
    <span class="font-display text-h3 tracking-tighter text-on-surface">whoizney.</span>
</div>
<div class="col-span-1 md:col-span-4 text-left md:text-right font-body-md text-body-md text-on-surface-variant">
                © 2024 {{ \App\Models\User::first()->name ?? 'Naila Hafidz Bachtiar' }}. Built with technical precision.
            </div>
<div class="md:col-span-6 flex gap-8 justify-start md:justify-end items-center">
<a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors" href="#">Terms</a>
<a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors" href="#">Privacy</a>
<a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors" href="#">Sitemap</a>
</div>
</div>
</footer>
</body></html>
