<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $user = User::with('profile')->first(); // get first user
        $bio = $user->profile->bio;
        $user_id = $user->profile->user_id;

        return view('user-profile', compact('bio', 'user_id'));
    }
}
