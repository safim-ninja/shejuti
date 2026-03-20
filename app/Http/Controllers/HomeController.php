<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Experience;
use App\Models\Project;
use App\Models\Research;
use App\Models\Seminar;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $experiences = Experience::latest()->get();
        return view('home', compact('experiences'));
    }

    public function blogs()
    {
        $blogs = Blog::latest()->get();
        return view('blogs', compact('blogs'));
    }

    public function blog($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blog-details', compact('blog'));
    }

    public function experience()
    {
        $experiences = Experience::latest()->get();
        return view('experience', compact('experiences'));
    }
    public function about()
    {
        $researches = Research::latest()->get();
        $experiences = Experience::latest()->get();
        $projects = Project::latest()->get();
        $seminars = Seminar::latest()->get();
        return view('about', compact('researches', 'experiences', 'projects', 'seminars'));
    }

    public function contact()
    {
        return view('contact');
    }
}
