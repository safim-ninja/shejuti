<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Experience;
use App\Models\Profile;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }    
    public function experiences()
    {
        $experiences = Experience::latest()->get();
        return view('admin.experience', compact('experiences'));
    }
    public function createExperience()
    {
        return view('admin.create-experience');
    }
    public function storeExperience(Request $request)
    {
        $experience = new Experience();
        $experience->position = $request->input('position');
        $experience->organization = $request->input('organization');
        $experience->organization_url = $request->input('organization_url');
        $experience->period = $request->input('period');
        $experience->description = $request->input('description');
        $experience->save();

        return redirect()->route('admin.experience')->with('status', 'Experience created successfully!');
    }

    public function projects()
    {
        return view('admin.projects');
    }

    public function expertises()
    {
        return view('admin.expertise');
    }

    public function education()
    {
        return view('admin.education');
    }

    public function awards()
    {
        return view('admin.awards');
    }

    public function contact()
    {
        return view('admin.contact');
    }

    public function settings()
    {
        return view('admin.settings');
    }
}
