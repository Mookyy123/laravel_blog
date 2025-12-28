<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = Profile::with('user')->first(); // get first profile
        $user_name = $profile->user->name;
        $profile_id = $profile->id;

        return view('profile-user', compact('user_name', 'profile_id'));
    }
}
