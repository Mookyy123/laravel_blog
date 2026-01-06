<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    // Inverse One to Many: Comment -> Post
    public function post() {
        return $this->belongsTo(Post::class);
    }
}
