<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Journal;

class JournalController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'nullable|string|max:500',
            'content' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('journals', 'public');
            $validated['image_url'] = '/storage/' . $path;
        }

        $validated['is_published'] = $request->has('is_published');

        Journal::create($validated);

        return back()->with('success', 'Journal entry created successfully!');
    }

    public function update(Request $request, Journal $journal)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'nullable|string|max:500',
            'content' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($journal->image_url && !str_starts_with($journal->image_url, 'http')) {
                Storage::disk('public')->delete(str_replace('/storage/', '', $journal->image_url));
            }
            $path = $request->file('image')->store('journals', 'public');
            $validated['image_url'] = '/storage/' . $path;
        }

        $validated['is_published'] = $request->has('is_published');

        $journal->update($validated);

        return back()->with('success', 'Journal entry updated successfully!');
    }

    public function destroy(Journal $journal)
    {
        $journal->delete();
        return back()->with('success', 'Journal entry deleted successfully!');
    }
}
