<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|array',
            'category.*' => 'string|in:data,design,business,uiux',
            'client' => 'nullable|string|max:255',
            'duration' => 'nullable|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|max:2048',
            'tech_stack' => 'nullable|string|max:255',
            'github_url' => 'nullable|url|max:255',
            'pdf' => 'nullable|file|mimes:pdf|max:10240',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('projects', 'public');
            $validated['image_url'] = '/storage/' . $path;
        }

        if ($request->hasFile('pdf')) {
            $path = $request->file('pdf')->store('projects/pdfs', 'public');
            $validated['pdf_url'] = '/storage/' . $path;
        }

        $validated['is_published'] = $request->has('is_published');

        Project::create($validated);

        return back()->with('success', 'Project created successfully!');
    }

    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|array',
            'category.*' => 'string|in:data,design,business,uiux',
            'client' => 'nullable|string|max:255',
            'duration' => 'nullable|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|max:2048',
            'tech_stack' => 'nullable|string|max:255',
            'github_url' => 'nullable|url|max:255',
            'pdf' => 'nullable|file|mimes:pdf|max:10240',
        ]);

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($project->image_url && !str_starts_with($project->image_url, 'http')) {
                Storage::disk('public')->delete(str_replace('/storage/', '', $project->image_url));
            }
            $path = $request->file('image')->store('projects', 'public');
            $validated['image_url'] = '/storage/' . $path;
        }

        if ($request->hasFile('pdf')) {
            // Delete old PDF if exists
            if ($project->pdf_url && !str_starts_with($project->pdf_url, 'http')) {
                Storage::disk('public')->delete(str_replace('/storage/', '', $project->pdf_url));
            }
            $path = $request->file('pdf')->store('projects/pdfs', 'public');
            $validated['pdf_url'] = '/storage/' . $path;
        }

        $validated['is_published'] = $request->has('is_published');

        $project->update($validated);

        return back()->with('success', 'Project updated successfully!');
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return back()->with('success', 'Project deleted successfully!');
    }
}
