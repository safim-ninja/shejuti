<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Research;
use Illuminate\Http\Request;

class ResearchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $researches = Research::all();
        return view('admin.research.index', compact('researches'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.research.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'published_at' => 'required|date',
            'topic' => 'required|string|max:255',
            'link' => 'nullable|url',
        ]);

        $research = new Research();
        $research->title = $request->title;
        $research->description = $request->description;
        $research->published_at = $request->published_at;
        $research->topic = $request->topic;
        $research->link = $request->link;
        $research->save();

        return redirect()->route('admin.research.index')->with('success', 'Research created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Research $research)
    {
        return view('admin.research.show', compact('research'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Research $research)
    {
        return view('admin.research.edit', compact('research'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Research $research)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'published_at' => 'required|date',
            'topic' => 'required|string|max:255',
            'link' => 'nullable|url',
        ]);

        $research->title = $request->title;
        $research->description = $request->description;
        $research->published_at = $request->published_at;
        $research->topic = $request->topic;
        $research->link = $request->link;
        $research->save();

        return redirect()->route('admin.research.index')->with('success', 'Research updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Research $research)
    {
        $research->delete();

        return redirect()->route('admin.research.index')->with('success', 'Research deleted successfully.');
    }
}
