<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - whoizney.</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=JetBrains+Mono:wght@500&display=swap" rel="stylesheet">
    <!-- Material Symbols -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
    <style>
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
        .glass-panel {
            background-color: rgba(19, 19, 20, 0.6);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(70, 70, 75, 0.3);
        }
    </style>
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
</head>
<body class="bg-background text-on-surface font-body-md antialiased flex h-screen overflow-hidden">

    <!-- Sidebar -->
    <aside class="w-64 bg-surface-container/30 border-r border-outline-variant/30 flex flex-col backdrop-blur-xl z-20">
        <div class="p-6 border-b border-outline-variant/30">
            <a href="/" class="flex items-center gap-2 group">
                <div class="w-8 h-8 rounded bg-primary/10 border border-primary/30 flex items-center justify-center group-hover:bg-primary/20 transition-all duration-300">
                    <span class="material-symbols-outlined text-primary text-[20px]">blur_on</span>
                </div>
                <span class="font-display text-h3 font-bold tracking-tighter text-on-surface group-hover:text-primary transition-colors">whoizney.</span>
            </a>
            <p class="font-label-mono text-[10px] text-on-surface-variant mt-2 tracking-widest uppercase">Command Center</p>
        </div>
        
        <nav class="flex-1 p-4 space-y-2 overflow-y-auto">
            <a href="#" class="flex items-center gap-3 px-4 py-3 bg-primary/10 text-primary rounded-lg font-label-mono text-[13px] border border-primary/20 transition-colors">
                <span class="material-symbols-outlined text-[18px]">dashboard</span> Dashboard
            </a>
            <a href="#recent-projects" class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:text-on-surface hover:bg-surface-container-highest rounded-lg font-label-mono text-[13px] transition-colors">
                <span class="material-symbols-outlined text-[18px]">folder_open</span> Projects
            </a>
            <a href="#recent-journals" class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:text-on-surface hover:bg-surface-container-highest rounded-lg font-label-mono text-[13px] transition-colors">
                <span class="material-symbols-outlined text-[18px]">edit_document</span> Journal
            </a>
            <a href="#experiences" class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:text-on-surface hover:bg-surface-container-highest rounded-lg font-label-mono text-[13px] transition-colors">
                <span class="material-symbols-outlined text-[18px]">timeline</span> Experience
            </a>
            <a href="#skills" class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:text-on-surface hover:bg-surface-container-highest rounded-lg font-label-mono text-[13px] transition-colors">
                <span class="material-symbols-outlined text-[18px]">psychology</span> Skills
            </a>
            <a href="#edit-info" class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:text-on-surface hover:bg-surface-container-highest rounded-lg font-label-mono text-[13px] transition-colors">
                <span class="material-symbols-outlined text-[18px]">person</span> Profile Settings
            </a>
        </nav>
        
        <div class="p-4 border-t border-outline-variant/30 space-y-2">
            <a href="/" class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:text-on-surface hover:bg-surface-container-highest rounded-lg font-label-mono text-[13px] transition-colors">
                <span class="material-symbols-outlined text-[18px]">home</span> Back to Site
            </a>
            <form method="POST" action="/logout">
                @csrf
                <button type="submit" class="w-full flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:text-red-400 hover:bg-red-400/10 rounded-lg font-label-mono text-[13px] transition-colors">
                    <span class="material-symbols-outlined text-[18px]">logout</span> Log Out
                </button>
            </form>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 flex flex-col overflow-hidden relative">
        <!-- Decorative Glow -->
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-primary/5 rounded-full blur-[100px] -z-10 pointer-events-none"></div>
        
        <!-- Header -->
        <header class="h-20 px-8 flex items-center justify-between border-b border-outline-variant/20 bg-surface/40 backdrop-blur-md z-10">
            <h1 class="font-display text-xl font-bold">Overview</h1>
            <div class="flex items-center gap-4">
                <button class="w-10 h-10 rounded-full bg-surface-container flex items-center justify-center border border-outline-variant/30 hover:border-primary/50 transition-colors">
                    <span class="material-symbols-outlined text-on-surface-variant text-[20px]">notifications</span>
                </button>
                <div class="flex items-center gap-3 border-l border-outline-variant/30 pl-4">
                    <div class="w-10 h-10 rounded-full bg-primary/20 border border-primary/50 flex items-center justify-center overflow-hidden">
                        <img src="{{ auth()->user()->profile_photo_url ? asset(auth()->user()->profile_photo_url) : 'https://ui-avatars.com/api/?name=' . urlencode(auth()->user()->name) . '&background=c4c6d2&color=131314' }}" alt="Admin" class="w-full h-full object-cover">
                    </div>
                    <div class="hidden md:block text-sm">
                        <p class="font-bold text-on-surface">{{ explode(' ', auth()->user()->name)[0] ?? 'Admin' }}</p>
                        <p class="text-on-surface-variant text-xs">Admin</p>
                    </div>
                </div>
            </div>
        </header>

        <!-- Scrollable Content -->
        <div class="flex-1 overflow-y-auto p-4 md:p-8 space-y-8">
            <!-- Flash Messages -->
            @if(session('success'))
                <div class="p-4 bg-green-500/10 border border-green-500/30 rounded-lg text-green-400">
                    {{ session('success') }}
                </div>
            @endif
            @if($errors->any())
                <div class="p-4 bg-red-500/10 border border-red-500/30 rounded-lg text-red-400">
                    <ul class="list-disc list-inside">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Stats -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                <div class="glass-panel p-6 rounded-xl flex items-center gap-4">
                    <div class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center border border-primary/20">
                        <span class="material-symbols-outlined text-primary">folder</span>
                    </div>
                    <div>
                        <p class="text-on-surface-variant text-sm font-label-mono uppercase tracking-wider">Total Projects</p>
                        <p class="text-3xl font-display font-bold text-on-surface mt-1">{{ count($projects) }}</p>
                    </div>
                </div>
                <div class="glass-panel p-6 rounded-xl flex items-center gap-4">
                    <div class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center border border-primary/20">
                        <span class="material-symbols-outlined text-primary">article</span>
                    </div>
                    <div>
                        <p class="text-on-surface-variant text-sm font-label-mono uppercase tracking-wider">Journal Entries</p>
                        <p class="text-3xl font-display font-bold text-on-surface mt-1">{{ count($journals) }}</p>
                    </div>
                </div>
                <div class="glass-panel p-6 rounded-xl flex items-center gap-4">
                    <div class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center border border-primary/20">
                        <span class="material-symbols-outlined text-primary">visibility</span>
                    </div>
                    <div>
                        <p class="text-on-surface-variant text-sm font-label-mono uppercase tracking-wider">Profile Views</p>
                        <p class="text-3xl font-display font-bold text-on-surface mt-1">1.2k</p>
                    </div>
                </div>
            </div>

            <!-- Quick Action & Recent -->
            <div class="grid grid-cols-1 xl:grid-cols-3 gap-8">
                <!-- Recent Projects -->
                <div id="recent-projects" class="xl:col-span-2 glass-panel rounded-xl border border-outline-variant/30 flex flex-col overflow-hidden">
                    <div class="p-6 border-b border-outline-variant/20 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                        <h2 class="font-bold text-lg">Recent Projects</h2>
                        <button onclick="openModal('newProjectModal'); handleCategoryChange('new');" class="font-label-mono text-xs text-purple-400 border border-purple-400/30 px-3 py-1.5 rounded hover:bg-purple-500/10 transition-colors flex items-center gap-1">
                            <span class="material-symbols-outlined text-[14px]">add</span> New Project
                        </button>
                    </div>
                    <div class="overflow-x-auto flex-1">
                        <table class="w-full text-left border-collapse min-w-[500px]">
                            <thead>
                                <tr class="border-b border-outline-variant/20 text-on-surface-variant text-sm font-label-mono">
                                    <th class="p-4 font-normal">Project Name</th>
                                    <th class="p-4 font-normal">Discipline</th>
                                    <th class="p-4 font-normal">Status</th>
                                    <th class="p-4 font-normal text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($projects ?? [] as $project)
                                <tr class="border-b border-outline-variant/10 hover:bg-surface-container-high/50 transition-colors">
                                    <td class="p-4 font-bold">{{ $project->title }}</td>
                                    <td class="p-4"><span class="px-2 py-1 text-xs rounded bg-surface-container-highest border border-outline-variant/30 text-on-surface-variant capitalize">{{ $project->category }}</span></td>
                                    <td class="p-4">
                                        @if($project->is_published)
                                            <span class="px-2 py-1 text-xs rounded bg-green-500/10 text-green-400 border border-green-500/20">Published</span>
                                        @else
                                            <span class="px-2 py-1 text-xs rounded bg-yellow-500/10 text-yellow-400 border border-yellow-500/20">Draft</span>
                                        @endif
                                    </td>
                                    <td class="p-4 flex gap-2 justify-end">
                                        <button onclick="editProject({{ json_encode($project) }})" class="text-on-surface-variant hover:text-primary transition-colors">
                                            <span class="material-symbols-outlined text-[18px]">edit</span>
                                        </button>
                                        <form action="{{ route('projects.destroy', $project) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-on-surface-variant hover:text-red-400 transition-colors" onclick="return confirm('Are you sure you want to delete this project?')"><span class="material-symbols-outlined text-[18px]">delete</span></button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="4" class="p-8 text-center text-on-surface-variant">No projects found. Create one!</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>


                <!-- Recent Journals -->
                <div id="recent-journals" class="xl:col-span-3 glass-panel rounded-xl border border-outline-variant/30 flex flex-col overflow-hidden">
                    <div class="p-6 border-b border-outline-variant/20 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                        <h2 class="font-bold text-lg">Journal Entries</h2>
                        <button onclick="openModal('newJournalModal')" class="font-label-mono text-xs text-fuchsia-400 border border-fuchsia-400/30 px-3 py-1.5 rounded hover:bg-fuchsia-500/10 transition-colors flex items-center gap-1">
                            <span class="material-symbols-outlined text-[14px]">add</span> New Entry
                        </button>
                    </div>
                    <div class="overflow-x-auto flex-1">
                        <table class="w-full text-left border-collapse min-w-[500px]">
                            <thead>
                                <tr class="border-b border-outline-variant/20 text-on-surface-variant text-sm font-label-mono">
                                    <th class="p-4 font-normal">Title</th>
                                    <th class="p-4 font-normal">Date</th>
                                    <th class="p-4 font-normal text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($journals ?? [] as $journal)
                                <tr class="border-b border-outline-variant/10 hover:bg-surface-container-high/50 transition-colors">
                                    <td class="p-4 font-bold">{{ $journal->title }}</td>
                                    <td class="p-4 text-on-surface-variant text-sm">{{ $journal->created_at->format('d M Y') }}</td>
                                    <td class="p-4 flex gap-2 justify-end">
                                        <button onclick="editJournal({{ json_encode($journal) }})" class="text-on-surface-variant hover:text-fuchsia-400 transition-colors">
                                            <span class="material-symbols-outlined text-[18px]">edit</span>
                                        </button>
                                        <form action="{{ route('journals.destroy', $journal) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-on-surface-variant hover:text-red-400 transition-colors" onclick="return confirm('Are you sure you want to delete this journal entry?')"><span class="material-symbols-outlined text-[18px]">delete</span></button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="3" class="p-8 text-center text-on-surface-variant">No journal entries found.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Experiences -->
                <div id="experiences" class="xl:col-span-3 glass-panel rounded-xl border border-outline-variant/30 flex flex-col overflow-hidden mt-8">
                    <div class="p-6 border-b border-outline-variant/20 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                        <h2 class="font-bold text-lg">Work Experience</h2>
                        <button onclick="openModal('newExperienceModal')" class="font-label-mono text-xs text-primary border border-primary/30 px-3 py-1.5 rounded hover:bg-primary/10 transition-colors flex items-center gap-1">
                            <span class="material-symbols-outlined text-[14px]">add</span> Add Experience
                        </button>
                    </div>
                    <div class="overflow-x-auto flex-1">
                        <table class="w-full text-left border-collapse min-w-[500px]">
                            <thead>
                                <tr class="border-b border-outline-variant/20 text-on-surface-variant text-sm font-label-mono">
                                    <th class="p-4 font-normal">Role & Company</th>
                                    <th class="p-4 font-normal">Duration</th>
                                    <th class="p-4 font-normal text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($experiences ?? [] as $exp)
                                <tr class="border-b border-outline-variant/10 hover:bg-surface-container-high/50 transition-colors">
                                    <td class="p-4">
                                        <p class="font-bold">{{ $exp->role }}</p>
                                        <p class="text-xs text-on-surface-variant">{{ $exp->company }}</p>
                                    </td>
                                    <td class="p-4 text-on-surface-variant text-sm">{{ $exp->duration }}</td>
                                    <td class="p-4 flex gap-2 justify-end">
                                        <button onclick="editExperience({{ json_encode($exp) }})" class="text-on-surface-variant hover:text-primary transition-colors">
                                            <span class="material-symbols-outlined text-[18px]">edit</span>
                                        </button>
                                        <form action="{{ route('experiences.destroy', $exp) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-on-surface-variant hover:text-red-400 transition-colors" onclick="return confirm('Are you sure you want to delete this experience?')"><span class="material-symbols-outlined text-[18px]">delete</span></button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="3" class="p-8 text-center text-on-surface-variant">No experience entries found.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>



                <!-- Skills -->
                <div id="skills" class="xl:col-span-3 glass-panel rounded-xl border border-outline-variant/30 flex flex-col overflow-hidden mt-8 mb-8">
                    <div class="p-6 border-b border-outline-variant/20 flex justify-between items-center">
                        <h2 class="font-bold text-lg">Technical Arsenal (Skills)</h2>
                        <button onclick="openModal('newSkillModal')" class="font-label-mono text-xs text-secondary border border-secondary/30 px-3 py-1.5 rounded hover:bg-secondary/10 transition-colors flex items-center gap-1">
                            <span class="material-symbols-outlined text-[14px]">add</span> Add Skill
                        </button>
                    </div>
                    <div class="p-6">
                        <div class="flex flex-wrap gap-3">
                            @forelse($skills ?? [] as $skill)
                            <div class="flex items-center gap-2 bg-surface-container-high border border-outline-variant/30 px-3 py-1.5 rounded-lg group transition-all hover:border-primary/50">
                                <span class="font-label-mono text-xs text-on-surface">{{ $skill->name }}</span>
                                <form action="{{ route('skills.destroy', $skill) }}" method="POST" class="opacity-0 group-hover:opacity-100 transition-opacity">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-400 hover:text-red-300 flex items-center"><span class="material-symbols-outlined text-[14px]">close</span></button>
                                </form>
                            </div>
                            @empty
                            <p class="text-on-surface-variant text-sm italic">No skills listed yet.</p>
                            @endforelse
                        </div>
                    </div>
                </div>

                <!-- Edit Profile Widget -->
                <div id="edit-info" class="xl:col-span-3 glass-panel rounded-xl border border-outline-variant/30 p-6 flex flex-col mt-8 mb-8">
                    <h2 class="font-bold text-lg mb-6 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">person_edit</span> Profile Settings
                    </h2>
                    <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data" class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        @csrf
                        <div>
                            <label class="block text-xs font-label-mono text-on-surface-variant mb-1 uppercase tracking-wider">Display Name</label>
                            <input type="text" name="name" value="{{ auth()->user()->name }}" class="w-full bg-surface-container border border-outline-variant/50 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:border-primary text-on-surface transition-colors placeholder-outline-variant">
                        </div>
                        <div>
                            <label class="block text-xs font-label-mono text-on-surface-variant mb-1 uppercase tracking-wider">Email Contact</label>
                            <input type="email" name="email" value="{{ auth()->user()->email }}" class="w-full bg-surface-container border border-outline-variant/50 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:border-primary text-on-surface transition-colors placeholder-outline-variant">
                        </div>
                        <div class="md:col-span-2">
                            <label class="block text-xs font-label-mono text-on-surface-variant mb-1 uppercase tracking-wider">Tagline</label>
                            <input type="text" name="tagline" value="{{ auth()->user()->tagline }}" class="w-full bg-surface-container border border-outline-variant/50 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:border-primary text-on-surface transition-colors placeholder-outline-variant">
                        </div>
                        <div>
                            <label class="block text-xs font-label-mono text-on-surface-variant mb-1 uppercase tracking-wider">Profile Photo (leave blank to keep current)</label>
                            <input type="file" name="photo" accept="image/*" class="w-full bg-surface-container border border-outline-variant/50 rounded-lg px-4 py-2 text-sm focus:outline-none focus:border-primary text-on-surface file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-xs file:font-label-mono file:bg-primary/20 file:text-primary hover:file:bg-primary/30">
                        </div>
                        <div>
                            <label class="block text-xs font-label-mono text-on-surface-variant mb-1 uppercase tracking-wider">CV / Resume PDF (leave blank to keep current)</label>
                            <input type="file" name="cv" accept="application/pdf" class="w-full bg-surface-container border border-outline-variant/50 rounded-lg px-4 py-2 text-sm focus:outline-none focus:border-primary text-on-surface file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-xs file:font-label-mono file:bg-primary/20 file:text-primary hover:file:bg-primary/30">
                        </div>
                        <div class="md:col-span-2 flex justify-end">
                            <button type="submit" class="bg-primary text-background font-bold rounded-lg px-8 py-3 hover:bg-primary/90 transition-colors shadow-lg shadow-primary/20">
                                Save Changes
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <!-- New Project Modal -->
    <div id="newProjectModal" class="fixed inset-0 bg-background/80 backdrop-blur-sm z-50 hidden items-center justify-center p-4">
        <div class="glass-panel w-full max-w-2xl rounded-2xl border border-outline-variant/30 shadow-2xl flex flex-col max-h-[90vh] overflow-hidden">
            <div class="p-6 border-b border-outline-variant/30 flex justify-between items-center bg-surface-container/50">
                <h2 class="font-bold text-lg flex items-center gap-2"><span class="material-symbols-outlined text-purple-400">add_circle</span> Create New Project</h2>
                <button type="button" onclick="closeModal('newProjectModal')" class="text-on-surface-variant hover:text-on-surface transition-colors"><span class="material-symbols-outlined">close</span></button>
            </div>
            <div class="p-6 overflow-y-auto">
                <form id="projectForm" action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="md:col-span-2">
                            <label class="block text-xs font-label-mono text-on-surface-variant mb-1 uppercase">Project Title</label>
                            <input type="text" name="title" required class="w-full bg-surface-container border border-outline-variant/50 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:border-purple-500 text-on-surface">
                        </div>
                        <div>
                            <label class="block text-xs font-label-mono text-on-surface-variant mb-1 uppercase">Category</label>
                            <select name="category" required class="w-full bg-surface-container border border-outline-variant/50 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:border-purple-500 text-on-surface">
                                <option value="data">Data</option>
                                <option value="design">Design</option>
                                <option value="business">Business</option>
                                <option value="uiux">UI/UX</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-xs font-label-mono text-on-surface-variant mb-1 uppercase">Client/Role</label>
                            <input type="text" name="client" class="w-full bg-surface-container border border-outline-variant/50 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:border-purple-500 text-on-surface">
                        </div>
                        <div class="md:col-span-2">
                            <label class="block text-xs font-label-mono text-on-surface-variant mb-1 uppercase">Cover Image</label>
                            <input type="file" name="image" accept="image/*" class="w-full bg-surface-container border border-outline-variant/50 rounded-lg px-4 py-2 text-sm focus:outline-none focus:border-purple-500 text-on-surface file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-xs file:font-label-mono file:bg-purple-500/20 file:text-purple-300 hover:file:bg-purple-500/30">
                        </div>
                        <div class="md:col-span-2">
                            <label class="block text-xs font-label-mono text-on-surface-variant mb-1 uppercase">Description</label>
                            <textarea name="description" rows="4" required class="w-full bg-surface-container border border-outline-variant/50 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:border-purple-500 text-on-surface"></textarea>
                        </div>
                        <div class="md:col-span-2 space-y-4" id="category_specific_fields">
                            <div id="tech_stack_container">
                                <label id="tech_stack_label" class="block text-xs font-label-mono text-on-surface-variant mb-1 uppercase">Tech Stack (comma separated)</label>
                                <input type="text" name="tech_stack" id="tech_stack" placeholder="e.g. Python, Pandas, SQL" class="w-full bg-surface-container border border-outline-variant/50 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:border-purple-500 text-on-surface">
                            </div>
                            <div id="github_url_container">
                                <label id="github_url_label" class="block text-xs font-label-mono text-on-surface-variant mb-1 uppercase">GitHub URL (optional)</label>
                                <input type="url" name="github_url" id="github_url" class="w-full bg-surface-container border border-outline-variant/50 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:border-purple-500 text-on-surface">
                            </div>
                        </div>
                        <div class="md:col-span-2">
                            <label class="block text-xs font-label-mono text-on-surface-variant mb-1 uppercase">Project PDF (optional)</label>
                            <input type="file" name="pdf" accept="application/pdf" class="w-full bg-surface-container border border-outline-variant/50 rounded-lg px-4 py-2 text-sm focus:outline-none focus:border-purple-500 text-on-surface file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-xs file:font-label-mono file:bg-purple-500/20 file:text-purple-300 hover:file:bg-purple-500/30">
                        </div>
                        <div class="md:col-span-2 flex items-center gap-2 mt-2">
                            <input type="checkbox" name="is_published" id="is_published" checked value="1" class="w-4 h-4 rounded bg-surface-container border-outline-variant text-purple-500 focus:ring-purple-500 focus:ring-offset-background">
                            <label for="is_published" class="text-sm text-on-surface-variant">Publish immediately?</label>
                        </div>
                    </div>
                </form>
            </div>
            <div class="p-6 border-t border-outline-variant/30 bg-surface-container/30 flex justify-end gap-3">
                <button type="button" onclick="closeModal('newProjectModal')" class="px-6 py-2.5 rounded-lg border border-outline-variant/50 text-on-surface-variant hover:bg-surface-container transition-colors font-label-mono text-sm">Cancel</button>
                <button type="submit" form="projectForm" class="px-6 py-2.5 rounded-lg bg-purple-600 hover:bg-purple-500 text-white font-bold transition-colors shadow-lg shadow-purple-500/20 font-label-mono text-sm">Save Project</button>
            </div>
        </div>
    </div>

    <!-- New Journal Modal -->
    <div id="newJournalModal" class="fixed inset-0 bg-background/80 backdrop-blur-sm z-50 hidden items-center justify-center p-4">
        <div class="glass-panel w-full max-w-2xl rounded-2xl border border-outline-variant/30 shadow-2xl flex flex-col max-h-[90vh] overflow-hidden">
            <div class="p-6 border-b border-outline-variant/30 flex justify-between items-center bg-surface-container/50">
                <h2 class="font-bold text-lg flex items-center gap-2"><span class="material-symbols-outlined text-fuchsia-400">edit_note</span> Create New Journal Entry</h2>
                <button type="button" onclick="closeModal('newJournalModal')" class="text-on-surface-variant hover:text-on-surface transition-colors"><span class="material-symbols-outlined">close</span></button>
            </div>
            <div class="p-6 overflow-y-auto">
                <form id="journalForm" action="{{ route('journals.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                    @csrf
                    <div class="grid grid-cols-1 gap-4">
                        <div>
                            <label class="block text-xs font-label-mono text-on-surface-variant mb-1 uppercase">Title</label>
                            <input type="text" name="title" required class="w-full bg-surface-container border border-outline-variant/50 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:border-fuchsia-500 text-on-surface">
                        </div>
                                                <div>
                            <label class="block text-xs font-label-mono text-on-surface-variant mb-1 uppercase">Category</label>
                            <select name="category" required class="w-full bg-surface-container border border-outline-variant/50 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:border-fuchsia-500 text-on-surface">
                                <option value="Design">Design</option>
                                <option value="Tech">Tech</option>
                                <option value="Business">Business</option>
                                <option value="Industry">Industry</option>
                                <option value="General">General</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-xs font-label-mono text-on-surface-variant mb-1 uppercase">Excerpt</label>
                            <input type="text" name="excerpt" class="w-full bg-surface-container border border-outline-variant/50 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:border-fuchsia-500 text-on-surface">
                        </div>
                        <div>
                            <label class="block text-xs font-label-mono text-on-surface-variant mb-1 uppercase">Image</label>
                            <input type="file" name="image" accept="image/*" class="w-full bg-surface-container border border-outline-variant/50 rounded-lg px-4 py-2 text-sm focus:outline-none focus:border-fuchsia-500 text-on-surface">
                        </div>
                        <div>
                            <label class="block text-xs font-label-mono text-on-surface-variant mb-1 uppercase">Content</label>
                            <textarea name="content" rows="6" required class="w-full bg-surface-container border border-outline-variant/50 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:border-fuchsia-500 text-on-surface"></textarea>
                        </div>
                        <div class="flex items-center gap-2 mt-2">
                            <input type="checkbox" name="is_published" id="journal_is_published" checked value="1" class="w-4 h-4 rounded bg-surface-container border-outline-variant text-fuchsia-500 focus:ring-fuchsia-500 focus:ring-offset-background">
                            <label for="journal_is_published" class="text-sm text-on-surface-variant">Publish immediately?</label>
                        </div>
                    </div>
                </form>
            </div>
            <div class="p-6 border-t border-outline-variant/30 bg-surface-container/30 flex justify-end gap-3">
                <button type="button" onclick="closeModal('newJournalModal')" class="px-6 py-2.5 rounded-lg border border-outline-variant/50 text-on-surface-variant hover:bg-surface-container transition-colors font-label-mono text-sm">Cancel</button>
                <button type="submit" form="journalForm" class="px-6 py-2.5 rounded-lg bg-fuchsia-600 hover:bg-fuchsia-500 text-white font-bold transition-colors shadow-lg shadow-fuchsia-500/20 font-label-mono text-sm">Save Entry</button>
            </div>
        </div>
    </div>

    <!-- Edit Project Modal -->
    <div id="editProjectModal" class="fixed inset-0 bg-background/80 backdrop-blur-sm z-50 hidden items-center justify-center p-4">
        <div class="glass-panel w-full max-w-2xl rounded-2xl border border-outline-variant/30 shadow-2xl flex flex-col max-h-[90vh] overflow-hidden">
            <div class="p-6 border-b border-outline-variant/30 flex justify-between items-center bg-surface-container/50">
                <h2 class="font-bold text-lg flex items-center gap-2"><span class="material-symbols-outlined text-primary">edit</span> Edit Project</h2>
                <button type="button" onclick="closeModal('editProjectModal')" class="text-on-surface-variant hover:text-on-surface transition-colors"><span class="material-symbols-outlined">close</span></button>
            </div>
            <div class="p-6 overflow-y-auto">
                <form id="editProjectForm" method="POST" enctype="multipart/form-data" class="space-y-4">
                    @csrf
                    @method('PUT')
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="md:col-span-2">
                            <label class="block text-xs font-label-mono text-on-surface-variant mb-1 uppercase">Project Title</label>
                            <input type="text" name="title" id="edit_title" required class="w-full bg-surface-container border border-outline-variant/50 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:border-primary text-on-surface">
                        </div>
                        <div>
                            <label class="block text-xs font-label-mono text-on-surface-variant mb-1 uppercase">Category</label>
                            <select name="category" id="edit_category" required class="w-full bg-surface-container border border-outline-variant/50 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:border-primary text-on-surface">
                                <option value="data">Data</option>
                                <option value="design">Design</option>
                                <option value="business">Business</option>
                                <option value="uiux">UI/UX</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-xs font-label-mono text-on-surface-variant mb-1 uppercase">Client/Role</label>
                            <input type="text" name="client" id="edit_client" class="w-full bg-surface-container border border-outline-variant/50 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:border-primary text-on-surface">
                        </div>
                        <div class="md:col-span-2">
                            <label class="block text-xs font-label-mono text-on-surface-variant mb-1 uppercase">Description</label>
                            <textarea name="description" id="edit_description" rows="4" required class="w-full bg-surface-container border border-outline-variant/50 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:border-primary text-on-surface"></textarea>
                        </div>
                        <div class="md:col-span-2 space-y-4" id="edit_category_specific_fields">
                            <div id="edit_tech_stack_container">
                                <label id="edit_tech_stack_label" class="block text-xs font-label-mono text-on-surface-variant mb-1 uppercase">Tech Stack (comma separated)</label>
                                <input type="text" name="tech_stack" id="edit_tech_stack" placeholder="React, Tailwind, Laravel" class="w-full bg-surface-container border border-outline-variant/50 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:border-primary text-on-surface">
                            </div>
                            <div id="edit_github_url_container">
                                <label id="edit_github_url_label" class="block text-xs font-label-mono text-on-surface-variant mb-1 uppercase">GitHub URL</label>
                                <input type="url" name="github_url" id="edit_github_url" class="w-full bg-surface-container border border-outline-variant/50 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:border-primary text-on-surface">
                            </div>
                        </div>
                        <div class="md:col-span-2">
                            <label class="block text-xs font-label-mono text-on-surface-variant mb-1 uppercase">Cover Image (leave blank to keep current)</label>
                            <input type="file" name="image" accept="image/*" class="w-full bg-surface-container border border-outline-variant/50 rounded-lg px-4 py-2 text-sm focus:outline-none focus:border-primary text-on-surface">
                        </div>
                        <div class="md:col-span-2">
                            <label class="block text-xs font-label-mono text-on-surface-variant mb-1 uppercase">Project PDF (leave blank to keep current)</label>
                            <input type="file" name="pdf" accept="application/pdf" class="w-full bg-surface-container border border-outline-variant/50 rounded-lg px-4 py-2 text-sm focus:outline-none focus:border-primary text-on-surface">
                        </div>
                        <div class="flex items-center gap-2 mt-2">
                            <input type="checkbox" name="is_published" id="edit_is_published" value="1" class="w-4 h-4 rounded bg-surface-container border-outline-variant text-primary focus:ring-primary focus:ring-offset-background">
                            <label for="edit_is_published" class="text-sm text-on-surface-variant">Published</label>
                        </div>
                    </div>
                </form>
            </div>
            <div class="p-6 border-t border-outline-variant/30 bg-surface-container/30 flex justify-end gap-3">
                <button type="button" onclick="closeModal('editProjectModal')" class="px-6 py-2.5 rounded-lg border border-outline-variant/50 text-on-surface-variant hover:bg-surface-container transition-colors font-label-mono text-sm">Cancel</button>
                <button type="submit" form="editProjectForm" class="px-6 py-2.5 rounded-lg bg-primary text-background font-bold transition-colors shadow-lg shadow-primary/20 font-label-mono text-sm">Update Project</button>
            </div>
        </div>
    </div>

    <!-- Edit Journal Modal -->
    <div id="editJournalModal" class="fixed inset-0 bg-background/80 backdrop-blur-sm z-50 hidden items-center justify-center p-4">
        <div class="glass-panel w-full max-w-2xl rounded-2xl border border-outline-variant/30 shadow-2xl flex flex-col max-h-[90vh] overflow-hidden">
            <div class="p-6 border-b border-outline-variant/30 flex justify-between items-center bg-surface-container/50">
                <h2 class="font-bold text-lg flex items-center gap-2"><span class="material-symbols-outlined text-fuchsia-400">edit_note</span> Edit Journal Entry</h2>
                <button type="button" onclick="closeModal('editJournalModal')" class="text-on-surface-variant hover:text-on-surface transition-colors"><span class="material-symbols-outlined">close</span></button>
            </div>
            <div class="p-6 overflow-y-auto">
                <form id="editJournalForm" method="POST" enctype="multipart/form-data" class="space-y-4">
                    @csrf
                    @method('PUT')
                    <div class="grid grid-cols-1 gap-4">
                        <div>
                            <label class="block text-xs font-label-mono text-on-surface-variant mb-1 uppercase">Title</label>
                            <input type="text" name="title" id="edit_journal_title" required class="w-full bg-surface-container border border-outline-variant/50 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:border-fuchsia-500 text-on-surface">
                        </div>
                                                <div>
                            <label class="block text-xs font-label-mono text-on-surface-variant mb-1 uppercase">Category</label>
                            <select name="category" id="edit_journal_category" required class="w-full bg-surface-container border border-outline-variant/50 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:border-fuchsia-500 text-on-surface">
                                <option value="Design">Design</option>
                                <option value="Tech">Tech</option>
                                <option value="Business">Business</option>
                                <option value="Industry">Industry</option>
                                <option value="General">General</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-xs font-label-mono text-on-surface-variant mb-1 uppercase">Excerpt</label>
                            <input type="text" name="excerpt" id="edit_journal_excerpt" class="w-full bg-surface-container border border-outline-variant/50 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:border-fuchsia-500 text-on-surface">
                        </div>
                        <div>
                            <label class="block text-xs font-label-mono text-on-surface-variant mb-1 uppercase">Image (leave blank to keep current)</label>
                            <input type="file" name="image" accept="image/*" class="w-full bg-surface-container border border-outline-variant/50 rounded-lg px-4 py-2 text-sm focus:outline-none focus:border-fuchsia-500 text-on-surface">
                        </div>
                        <div>
                            <label class="block text-xs font-label-mono text-on-surface-variant mb-1 uppercase">Content</label>
                            <textarea name="content" id="edit_journal_content" rows="6" required class="w-full bg-surface-container border border-outline-variant/50 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:border-fuchsia-500 text-on-surface"></textarea>
                        </div>
                        <div class="flex items-center gap-2 mt-2">
                            <input type="checkbox" name="is_published" id="edit_journal_is_published" value="1" class="w-4 h-4 rounded bg-surface-container border-outline-variant text-fuchsia-500 focus:ring-fuchsia-500 focus:ring-offset-background">
                            <label for="edit_journal_is_published" class="text-sm text-on-surface-variant">Published</label>
                        </div>
                    </div>
                </form>
            </div>
            <div class="p-6 border-t border-outline-variant/30 bg-surface-container/30 flex justify-end gap-3">
                <button type="button" onclick="closeModal('editJournalModal')" class="px-6 py-2.5 rounded-lg border border-outline-variant/50 text-on-surface-variant hover:bg-surface-container transition-colors font-label-mono text-sm">Cancel</button>
                <button type="submit" form="editJournalForm" class="px-6 py-2.5 rounded-lg bg-fuchsia-600 hover:bg-fuchsia-500 text-white font-bold transition-colors shadow-lg shadow-fuchsia-500/20 font-label-mono text-sm">Update Entry</button>
            </div>
        </div>
    </div>

    <!-- New Experience Modal -->
    <div id="newExperienceModal" class="fixed inset-0 bg-background/80 backdrop-blur-sm z-50 hidden items-center justify-center p-4">
        <div class="glass-panel w-full max-w-lg rounded-2xl border border-outline-variant/30 shadow-2xl flex flex-col">
            <div class="p-6 border-b border-outline-variant/30 flex justify-between items-center bg-surface-container/50">
                <h2 class="font-bold text-lg flex items-center gap-2"><span class="material-symbols-outlined text-primary">timeline</span> New Experience</h2>
                <button type="button" onclick="closeModal('newExperienceModal')" class="text-on-surface-variant hover:text-on-surface transition-colors"><span class="material-symbols-outlined">close</span></button>
            </div>
            <div class="p-6">
                <form id="experienceForm" action="{{ route('experiences.store') }}" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label class="block text-xs font-label-mono text-on-surface-variant mb-1 uppercase">Role</label>
                        <input type="text" name="role" required class="w-full bg-surface-container border border-outline-variant/50 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:border-primary text-on-surface">
                    </div>
                    <div>
                        <label class="block text-xs font-label-mono text-on-surface-variant mb-1 uppercase">Company</label>
                        <input type="text" name="company" required class="w-full bg-surface-container border border-outline-variant/50 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:border-primary text-on-surface">
                    </div>
                    <div>
                        <label class="block text-xs font-label-mono text-on-surface-variant mb-1 uppercase">Duration (e.g. 2022 - Present)</label>
                        <input type="text" name="duration" required class="w-full bg-surface-container border border-outline-variant/50 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:border-primary text-on-surface">
                    </div>
                    <div>
                        <label class="block text-xs font-label-mono text-on-surface-variant mb-1 uppercase">Description</label>
                        <textarea name="description" rows="3" class="w-full bg-surface-container border border-outline-variant/50 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:border-primary text-on-surface"></textarea>
                    </div>
                    <div class="flex items-center gap-2 mt-2">
                        <input type="checkbox" name="is_current" id="is_current" value="1" class="w-4 h-4 rounded bg-surface-container border-outline-variant text-primary focus:ring-primary focus:ring-offset-background">
                        <label for="is_current" class="text-sm text-on-surface-variant">Current Role</label>
                    </div>
                </form>
            </div>
            <div class="p-6 border-t border-outline-variant/30 bg-surface-container/30 flex justify-end gap-3">
                <button type="button" onclick="closeModal('newExperienceModal')" class="px-6 py-2.5 rounded-lg border border-outline-variant/50 text-on-surface-variant hover:bg-surface-container transition-colors font-label-mono text-sm">Cancel</button>
                <button type="submit" form="experienceForm" class="px-6 py-2.5 rounded-lg bg-primary text-background font-bold transition-colors shadow-lg shadow-primary/20 font-label-mono text-sm">Save Experience</button>
            </div>
        </div>
    </div>

    <!-- Edit Experience Modal -->
    <div id="editExperienceModal" class="fixed inset-0 bg-background/80 backdrop-blur-sm z-50 hidden items-center justify-center p-4">
        <div class="glass-panel w-full max-w-lg rounded-2xl border border-outline-variant/30 shadow-2xl flex flex-col">
            <div class="p-6 border-b border-outline-variant/30 flex justify-between items-center bg-surface-container/50">
                <h2 class="font-bold text-lg flex items-center gap-2"><span class="material-symbols-outlined text-primary">edit</span> Edit Experience</h2>
                <button type="button" onclick="closeModal('editExperienceModal')" class="text-on-surface-variant hover:text-on-surface transition-colors"><span class="material-symbols-outlined">close</span></button>
            </div>
            <div class="p-6">
                <form id="editExperienceForm" method="POST" class="space-y-4">
                    @csrf
                    @method('PUT')
                    <div>
                        <label class="block text-xs font-label-mono text-on-surface-variant mb-1 uppercase">Role</label>
                        <input type="text" name="role" id="edit_exp_role" required class="w-full bg-surface-container border border-outline-variant/50 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:border-primary text-on-surface">
                    </div>
                    <div>
                        <label class="block text-xs font-label-mono text-on-surface-variant mb-1 uppercase">Company</label>
                        <input type="text" name="company" id="edit_exp_company" required class="w-full bg-surface-container border border-outline-variant/50 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:border-primary text-on-surface">
                    </div>
                    <div>
                        <label class="block text-xs font-label-mono text-on-surface-variant mb-1 uppercase">Duration</label>
                        <input type="text" name="duration" id="edit_exp_duration" required class="w-full bg-surface-container border border-outline-variant/50 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:border-primary text-on-surface">
                    </div>
                    <div>
                        <label class="block text-xs font-label-mono text-on-surface-variant mb-1 uppercase">Description</label>
                        <textarea name="description" id="edit_exp_description" rows="3" class="w-full bg-surface-container border border-outline-variant/50 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:border-primary text-on-surface"></textarea>
                    </div>
                    <div class="flex items-center gap-2 mt-2">
                        <input type="checkbox" name="is_current" id="edit_exp_is_current" value="1" class="w-4 h-4 rounded bg-surface-container border-outline-variant text-primary focus:ring-primary focus:ring-offset-background">
                        <label for="edit_exp_is_current" class="text-sm text-on-surface-variant">Current Role</label>
                    </div>
                </form>
            </div>
            <div class="p-6 border-t border-outline-variant/30 bg-surface-container/30 flex justify-end gap-3">
                <button type="button" onclick="closeModal('editExperienceModal')" class="px-6 py-2.5 rounded-lg border border-outline-variant/50 text-on-surface-variant hover:bg-surface-container transition-colors font-label-mono text-sm">Cancel</button>
                <button type="submit" form="editExperienceForm" class="px-6 py-2.5 rounded-lg bg-primary text-background font-bold transition-colors shadow-lg shadow-primary/20 font-label-mono text-sm">Update Experience</button>
            </div>
        </div>
    </div>
    <!-- New Skill Modal -->
    <div id="newSkillModal" class="fixed inset-0 bg-background/80 backdrop-blur-sm z-50 hidden items-center justify-center p-4">
        <div class="glass-panel w-full max-w-sm rounded-2xl border border-outline-variant/30 shadow-2xl flex flex-col">
            <div class="p-6 border-b border-outline-variant/30 flex justify-between items-center bg-surface-container/50">
                <h2 class="font-bold text-lg flex items-center gap-2"><span class="material-symbols-outlined text-secondary">psychology</span> Add Skill</h2>
                <button type="button" onclick="closeModal('newSkillModal')" class="text-on-surface-variant hover:text-on-surface transition-colors"><span class="material-symbols-outlined">close</span></button>
            </div>
            <div class="p-6">
                <form id="skillForm" action="{{ route('skills.store') }}" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label class="block text-xs font-label-mono text-on-surface-variant mb-1 uppercase">Skill Name</label>
                        <input type="text" name="name" required placeholder="e.g. React" class="w-full bg-surface-container border border-outline-variant/50 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:border-primary text-on-surface">
                    </div>
                    <div>
                        <label class="block text-xs font-label-mono text-on-surface-variant mb-1 uppercase">Category</label>
                        <select name="category" required class="w-full bg-surface-container border border-outline-variant/50 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:border-primary text-on-surface">
                            <option value="core">Core Stack</option>
                            <option value="tool">Tool / Software</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="p-6 border-t border-outline-variant/30 bg-surface-container/30 flex justify-end gap-3">
                <button type="button" onclick="closeModal('newSkillModal')" class="px-6 py-2.5 rounded-lg border border-outline-variant/50 text-on-surface-variant hover:bg-surface-container transition-colors font-label-mono text-sm">Cancel</button>
                <button type="submit" form="skillForm" class="px-6 py-2.5 rounded-lg bg-secondary text-on-secondary font-bold transition-colors shadow-lg shadow-secondary/20 font-label-mono text-sm">Add Skill</button>
            </div>
        </div>
    </div>
    <script>
        function openModal(id) {
            document.getElementById(id).classList.remove('hidden');
            document.getElementById(id).classList.add('flex');
        }
        function closeModal(id) {
            document.getElementById(id).classList.add('hidden');
            document.getElementById(id).classList.remove('flex');
        }
        function handleCategoryChange(modalType) {
            const categorySelect = modalType === 'new' ? document.querySelector('#newProjectModal select[name="category"]') : document.getElementById('edit_category');
            const category = categorySelect.value;
            
            const prefix = modalType === 'new' ? '' : 'edit_';
            const techStackContainer = document.getElementById(prefix + 'tech_stack_container');
            const githubUrlContainer = document.getElementById(prefix + 'github_url_container');
            const techStackLabel = document.getElementById(prefix + 'tech_stack_label');
            const githubUrlLabel = document.getElementById(prefix + 'github_url_label');
            const techStackInput = document.getElementById(prefix + 'tech_stack');

            if (category === 'data') {
                techStackContainer.classList.remove('hidden');
                githubUrlContainer.classList.remove('hidden');
                techStackLabel.innerText = 'Tech Stack (comma separated)';
                githubUrlLabel.innerText = 'GitHub URL (optional)';
                techStackInput.placeholder = 'e.g. Python, Pandas, SQL';
            } else if (category === 'design' || category === 'uiux') {
                techStackContainer.classList.remove('hidden');
                githubUrlContainer.classList.remove('hidden');
                techStackLabel.innerText = 'Tools Used (e.g. Figma, Adobe XD)';
                githubUrlLabel.innerText = 'Project Link (Figma/Behance)';
                techStackInput.placeholder = 'e.g. Figma, Photoshop';
            } else if (category === 'business') {
                techStackContainer.classList.add('hidden');
                githubUrlContainer.classList.add('hidden');
            }
        }

        document.querySelector('#newProjectModal select[name="category"]').addEventListener('change', () => handleCategoryChange('new'));
        document.getElementById('edit_category').addEventListener('change', () => handleCategoryChange('edit'));

        function editProject(project) {
            const form = document.getElementById('editProjectForm');
            form.action = `/admin/projects/${project.id}`;
            
            document.getElementById('edit_title').value = project.title;
            document.getElementById('edit_category').value = project.category;
            document.getElementById('edit_client').value = project.client || '';
            document.getElementById('edit_description').value = project.description;
            document.getElementById('edit_tech_stack').value = project.tech_stack || '';
            document.getElementById('edit_github_url').value = project.github_url || '';
            document.getElementById('edit_is_published').checked = !!project.is_published;
            
            handleCategoryChange('edit');
            openModal('editProjectModal');
        }
        function editJournal(journal) {
            const form = document.getElementById('editJournalForm');
            form.action = `/admin/journals/${journal.id}`;
            
                        document.getElementById('edit_journal_title').value = journal.title;
            document.getElementById('edit_journal_category').value = journal.category || 'General';
            document.getElementById('edit_journal_excerpt').value = journal.excerpt || '';
            document.getElementById('edit_journal_content').value = journal.content;
            document.getElementById('edit_journal_is_published').checked = !!journal.is_published;
            
            openModal('editJournalModal');
        }
        function editExperience(exp) {
            const form = document.getElementById('editExperienceForm');
            form.action = `/admin/experiences/${exp.id}`;
            
            document.getElementById('edit_exp_role').value = exp.role;
            document.getElementById('edit_exp_company').value = exp.company;
            document.getElementById('edit_exp_duration').value = exp.duration;
            document.getElementById('edit_exp_description').value = exp.description || '';
            document.getElementById('edit_exp_is_current').checked = !!exp.is_current;
            
            openModal('editExperienceModal');
        }
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const scrollArea = document.querySelector('.flex-1.overflow-y-auto');
            const navLinks = document.querySelectorAll('aside nav a');
            const sections = Array.from(navLinks).map(link => {
                const href = link.getAttribute('href');
                if (href && href.startsWith('#')) {
                    return document.querySelector(href);
                }
                return null;
            }).filter(Boolean);

            // Handle click
            navLinks.forEach(link => {
                link.addEventListener('click', (e) => {
                    const href = link.getAttribute('href');
                    if (href && href.startsWith('#')) {
                        e.preventDefault();
                        const target = document.querySelector(href);
                        if (target) {
                            // Calculate scroll position accounting for header if needed
                            const topPos = target.offsetTop - scrollArea.offsetTop - 20; 
                            scrollArea.scrollTo({
                                top: topPos,
                                behavior: 'smooth'
                            });
                            history.pushState(null, null, href);
                        }
                    }
                });
            });

            // Intersection Observer for active state
            const observerOptions = {
                root: scrollArea,
                rootMargin: '-20% 0px -70% 0px',
                threshold: 0
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const id = entry.target.getAttribute('id');
                        // Update active link
                        navLinks.forEach(link => {
                            if (link.getAttribute('href') === `#${id}`) {
                                link.classList.remove('text-on-surface-variant', 'hover:text-on-surface', 'hover:bg-surface-container-highest');
                                link.classList.add('bg-primary/10', 'text-primary', 'border', 'border-primary/20');
                            } else if (link.getAttribute('href') !== '#') {
                                link.classList.add('text-on-surface-variant', 'hover:text-on-surface', 'hover:bg-surface-container-highest');
                                link.classList.remove('bg-primary/10', 'text-primary', 'border', 'border-primary/20');
                            }
                        });
                    }
                });
            }, observerOptions);

            sections.forEach(section => {
                observer.observe(section);
            });
            
            // Check initial hash
            if (window.location.hash) {
                const target = document.querySelector(window.location.hash);
                if (target) {
                    setTimeout(() => {
                        const topPos = target.offsetTop - scrollArea.offsetTop - 20; 
                        scrollArea.scrollTo({ top: topPos, behavior: 'smooth' });
                    }, 100);
                }
            }
        });
    </script>
</body>
</html>
