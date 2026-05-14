@extends('layouts.app')

@section('title', $journal->title . ' - Journal')

@section('content')
<main class="pt-32 pb-24 px-margin-mobile md:px-margin-desktop max-w-[900px] mx-auto min-h-screen flex flex-col relative">
    <div class="absolute top-0 right-1/4 w-[500px] h-[500px] bg-purple-600/10 rounded-full blur-[120px] -z-10 pointer-events-none"></div>

    <article class="space-y-12">
        <!-- Header -->
        <header class="space-y-6">
            <div class="flex items-center gap-4">
                <a href="/journal" class="flex items-center gap-2 text-on-surface-variant hover:text-primary transition-colors font-label-mono text-sm">
                    <span class="material-symbols-outlined text-[18px]">arrow_back</span> Back to Archive
                </a>
                <span class="w-1 h-1 rounded-full bg-outline-variant"></span>
                <span class="text-tertiary font-label-mono text-xs uppercase tracking-widest">Archive</span>
            </div>
            
            <h1 class="font-display text-4xl md:text-6xl font-bold tracking-tighter text-on-surface leading-[1.1]">
                {{ $journal->title }}
            </h1>

            <div class="flex flex-wrap items-center gap-6 pt-4 border-t border-outline-variant/20">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-surface-container border border-outline-variant/30 flex items-center justify-center">
                        <span class="material-symbols-outlined text-primary">person</span>
                    </div>
                    <div>
                        <p class="text-on-surface text-sm font-bold">{{ \App\Models\User::first()->name ?? 'Naila Hafidz' }}</p>
                        <p class="text-on-surface-variant text-xs">{{ $journal->created_at->format('M d, Y') }}</p>
                    </div>
                </div>
                <div class="h-8 w-px bg-outline-variant/20 hidden md:block"></div>
                <div class="flex items-center gap-2 text-on-surface-variant font-label-mono text-xs uppercase tracking-wider">
                    <span class="material-symbols-outlined text-[16px]">schedule</span>
                    {{ ceil(str_word_count($journal->content) / 200) }} min read
                </div>
            </div>
        </header>

        <!-- Cover Image -->
        @if($journal->image_url)
        <div class="w-full aspect-[21/9] rounded-2xl overflow-hidden border border-outline-variant/30 glass-panel shadow-2xl">
            <img src="{{ asset($journal->image_url) }}" alt="{{ $journal->title }}" class="w-full h-full object-cover">
        </div>
        @endif

        <!-- Content -->
        <div class="prose prose-invert prose-purple max-w-none">
            <div class="font-body-lg text-xl text-on-surface-variant leading-relaxed space-y-8 whitespace-pre-wrap">
{!! nl2br(e($journal->content)) !!}
            </div>
        </div>

        <!-- Footer -->
        <footer class="pt-12 border-t border-outline-variant/20 flex flex-col md:flex-row justify-between items-center gap-8">
            <div class="flex items-center gap-4">
                <p class="text-on-surface-variant text-sm font-label-mono uppercase tracking-widest">Share this transmission</p>
                <div class="flex gap-2">
                    <button class="w-10 h-10 rounded-full border border-outline-variant flex items-center justify-center text-on-surface-variant hover:text-primary hover:border-primary transition-all duration-300">
                        <span class="material-symbols-outlined text-[18px]">share</span>
                    </button>
                    <button class="w-10 h-10 rounded-full border border-outline-variant flex items-center justify-center text-on-surface-variant hover:text-primary hover:border-primary transition-all duration-300">
                        <span class="material-symbols-outlined text-[18px]">link</span>
                    </button>
                </div>
            </div>
            <a href="/journal" class="bg-surface-container-highest text-on-surface font-label-mono text-sm font-bold uppercase tracking-wider px-8 py-4 rounded-full border border-outline-variant/50 hover:bg-surface-container hover:border-primary/50 hover:text-primary transition-all active:scale-95">
                Explore More Thoughts
            </a>
        </footer>
    </article>
</main>
@endsection
