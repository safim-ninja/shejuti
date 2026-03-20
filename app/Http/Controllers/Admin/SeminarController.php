<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Seminar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SeminarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $seminars = Seminar::all();
        return view('admin.seminars.index', compact('seminars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.seminars.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $table->string('title');
        // $table->text('description');
        // $table->string('location')->nullable();
        // $table->dateTime('time')->nullable();
        // $table->string('image')->nullable();
        // $table->string('video_link')->nullable();
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'required|string|max:255',
            'time' => 'required|date',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'video_link' => 'nullable|url',
        ]);

        $seminar = new Seminar();
        $seminar->title = $request->title;
        $seminar->description = $request->description;
        $seminar->location = $request->location;
        $seminar->time = $request->time;
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('seminars', 'public');
            $seminar->image = $path;
        }
        $seminar->video_link = $request->video_link;
        $seminar->save();

        return redirect()->route('admin.seminars.index')->with('success', 'Seminar created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Seminar $seminar)
    {
        return view('admin.seminars.show', compact('seminar'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Seminar $seminar)
    {
        return view('admin.seminars.edit', compact('seminar'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Seminar $seminar)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'required|string|max:255',
            'time' => 'required|date',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'video_link' => 'nullable|url',
        ]);

        $seminar->title = $request->title;
        $seminar->description = $request->description;
        $seminar->location = $request->location;
        $seminar->time = $request->time;
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($seminar->image) {
                Storage::disk('public')->delete($seminar->image);
            }
            $path = $request->file('image')->store('seminars', 'public');
            $seminar->image = $path;
        }
        $seminar->video_link = $request->video_link;
        $seminar->save();

        return redirect()->route('admin.seminars.index')->with('success', 'Seminar updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Seminar $seminar)
    {
        // Delete image if exists
        if ($seminar->image) {
            Storage::disk('public')->delete($seminar->image);
        }
        $seminar->delete();
        return redirect()->route('admin.seminars.index')->with('success', 'Seminar deleted successfully.');
    }
}
