<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function profile()
    {
        return view('admin.profile');
    }

    public function experience()
    {
        return view('admin.experience');
    }

    public function projects()
    {
        return view('admin.projects');
    }

    public function expertise()
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
