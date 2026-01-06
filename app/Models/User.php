<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    // One to Many: User -> Posts
    public function posts() {
        return $this->hasMany(Post::class);
    }

    // Many to Many: User -> Liked Posts
    public function likedPosts() {
        return $this->belongsToMany(Post::class, 'post_user_likes')->withTimestamps();
    }

    // Has One Through: Latest Comment through Post
    public function latestCommentThroughPost() {
        return $this->hasOneThrough(
            Comment::class,
            Post::class,
            'user_id', // FK on posts
            'post_id', // FK on comments
            'id',      // PK on users
            'id'       // PK on posts
        )->latestOfMany();
    }

    // Has Many Through: All Comments through Posts
    public function commentsThroughPosts() {
        return $this->hasManyThrough(
            Comment::class,
            Post::class,
            'user_id',
            'post_id',
            'id',
            'id'
        );
    }
}
