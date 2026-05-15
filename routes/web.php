<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Storage;

Route::get('/', function () {
    $counts = [
        'data' => \App\Models\Project::whereJsonContains('category', 'data')->count(),
        'design' => \App\Models\Project::whereJsonContains('category', 'design')->count(),
        'business' => \App\Models\Project::whereJsonContains('category', 'business')->count(),
        'uiux' => \App\Models\Project::whereJsonContains('category', 'uiux')->count(),
    ];
    return view('welcome', compact('counts'));
});

Route::get('/about', function () {
    $experiences = \App\Models\Experience::orderBy('order')->orderBy('created_at', 'desc')->get();
    $skills = \App\Models\Skill::all();
    return view('about', compact('experiences', 'skills'));
});

Route::get('/journal', function () {
    $journals = \App\Models\Journal::where('is_published', true)->latest()->get();
    return view('journal', compact('journals'));
});

Route::get('/journal/{journal}', function (\App\Models\Journal $journal) {
    return view('journal-show', compact('journal'));
})->name('journal.show');

Route::get('/data', function () {
    $projects = App\Models\Project::whereJsonContains('category', 'data')->where('is_published', true)->get();
    return view('data-projects', compact('projects'));
});

Route::get('/project/{project}', function (App\Models\Project $project) {
    return view('project-detail', compact('project'));
})->name('project.show');

Route::get('/design', function () {
    $projects = App\Models\Project::whereJsonContains('category', 'design')->where('is_published', true)->get();
    return view('design-projects', compact('projects'));
});

Route::get('/business', function () {
    $projects = App\Models\Project::whereJsonContains('category', 'business')->where('is_published', true)->get();
    return view('business-projects', compact('projects'));
});

Route::get('/ui-ux', function () {
    $projects = App\Models\Project::whereJsonContains('category', 'uiux')->where('is_published', true)->get();
    return view('uiux-projects', compact('projects'));
});

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

use App\Models\Project;
use App\Http\Controllers\ProjectController;

Route::middleware('auth')->group(function () {
    Route::get('/admin', function () {
        $projects = Project::latest()->get();
        $journals = \App\Models\Journal::latest()->get();
        $experiences = \App\Models\Experience::orderBy('order')->orderBy('created_at', 'desc')->get();
        $skills = \App\Models\Skill::all();
        return view('admin', compact('projects', 'journals', 'experiences', 'skills'));
    })->name('admin');

    Route::post('/admin/projects', [ProjectController::class, 'store'])->name('projects.store');
    Route::put('/admin/projects/{project}', [ProjectController::class, 'update'])->name('projects.update');
    Route::delete('/admin/projects/{project}', [ProjectController::class, 'destroy'])->name('projects.destroy');

    Route::post('/admin/journals', [\App\Http\Controllers\JournalController::class, 'store'])->name('journals.store');
    Route::put('/admin/journals/{journal}', [\App\Http\Controllers\JournalController::class, 'update'])->name('journals.update');
    Route::delete('/admin/journals/{journal}', [\App\Http\Controllers\JournalController::class, 'destroy'])->name('journals.destroy');

    Route::post('/admin/experiences', [\App\Http\Controllers\ExperienceController::class, 'store'])->name('experiences.store');
    Route::put('/admin/experiences/{experience}', [\App\Http\Controllers\ExperienceController::class, 'update'])->name('experiences.update');
    Route::delete('/admin/experiences/{experience}', [\App\Http\Controllers\ExperienceController::class, 'destroy'])->name('experiences.destroy');

    Route::post('/admin/skills', [\App\Http\Controllers\SkillController::class, 'store'])->name('skills.store');
    Route::delete('/admin/skills/{skill}', [\App\Http\Controllers\SkillController::class, 'destroy'])->name('skills.destroy');

    Route::post('/admin/profile', function (\Illuminate\Http\Request $request) {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'tagline' => 'nullable|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . auth()->id(),
            'photo' => 'nullable|image|max:2048',
            'cv' => 'nullable|file|mimes:pdf|max:10240',
        ]);

        /** @var \App\Models\User $user */
        $user = auth()->user();

        if ($request->hasFile('photo')) {
            if ($user->profile_photo_url && !str_starts_with($user->profile_photo_url, 'http')) {
                Storage::disk('public')->delete(str_replace('/storage/', '', $user->profile_photo_url));
            }
            $path = $request->file('photo')->store('profile', 'public');
            $validated['profile_photo_url'] = '/storage/' . $path;
        }

        if ($request->hasFile('cv')) {
            if ($user->cv_url && !str_starts_with($user->cv_url, 'http')) {
                Storage::disk('public')->delete(str_replace('/storage/', '', $user->cv_url));
            }
            $path = $request->file('cv')->store('cvs', 'public');
            $validated['cv_url'] = '/storage/' . $path;
        }

        $user->update($validated);

        return back()->with('success', 'Profile updated successfully!');
    })->name('profile.update');
});
