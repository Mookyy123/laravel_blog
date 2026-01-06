<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function postedUser($id) {
        $post = Post::find($id);
        dd($post->user->name);
    }
}
