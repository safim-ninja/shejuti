<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    public function edit(Request $request): View
    {
        $profile = Profile::first() ?? new Profile();
        return view('admin.profile', compact('profile'));
    }

    public function update(Request $request)
    {
        $profile = Profile::first() ?? new Profile();
        $profile->name = $request->input('name');
        $profile->title = $request->input('title');
        $profile->email = $request->input('email');
        $profile->phone = $request->input('phone');
        $profile->linkedin_url = $request->input('linkedin_url');
        $profile->bio = $request->input('bio');
        if ($request->hasFile('profile_picture')) {
            $path = $request->file('profile_picture')->store('profiles', 'public');
            $profile->profile_picture = $path;
        }
        $profile->save();

        return Redirect::route('admin.profile')->with('status', 'profile-updated');
    }
}
