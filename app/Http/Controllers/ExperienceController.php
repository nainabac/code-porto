<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'role' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'duration' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $validated['is_current'] = $request->has('is_current');

        Experience::create($validated);

        return back()->with('success', 'Experience added successfully!');
    }

    public function update(Request $request, Experience $experience)
    {
        $validated = $request->validate([
            'role' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'duration' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $validated['is_current'] = $request->has('is_current');

        $experience->update($validated);

        return back()->with('success', 'Experience updated successfully!');
    }

    public function destroy(Experience $experience)
    {
        $experience->delete();
        return back()->with('success', 'Experience deleted successfully!');
    }
}
