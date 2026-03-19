<?php

use App\Models\Profile;

function profile()
{
    return Profile::first() ?? new Profile();
}

function navActive($route)
{
    return request()->routeIs($route) ? 'font-semibold text-emerald-700 border-b-2 border-emerald-500' : 'text-gray-700 hover:text-emerald-700 hover:border-b-2 hover:border-emerald-500 transition duration-300 ease-in-out';
}
