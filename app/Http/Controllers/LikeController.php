<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function showLikedPosts($userId) {
        $user = User::find($userId);
        $likedPosts = $user->likedPosts;
        foreach($likedPosts as $post) {
            echo $post->title . "<br>";
        }
    }

    public function showPostLikers($postId) {
        $post = Post::find($postId);
        $likers = $post->likers;
        foreach($likers as $user) {
            echo $user->name . "<br>";
        }
    }
}
