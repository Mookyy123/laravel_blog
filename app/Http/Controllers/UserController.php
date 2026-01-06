<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showPosts($id) {
        $user = User::find($id);
        $posts = $user->posts;
        foreach($posts as $post) {
            echo $post->title . "<br>";
        }
    }

    public function showLatestComment($id) {
        $user = User::find($id);
        $latestComment = $user->latestCommentThroughPost;
        dd($latestComment->comment);
    }

    public function showUserComments($id) {
        $user = User::find($id);
        $comments = $user->commentsThroughPosts;
        foreach($comments as $comment) {
            echo $comment->comment . "<br>";
        }
    }
}
