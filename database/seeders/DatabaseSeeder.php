<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Create 5 Users
        User::factory(5)->create()->each(function($user){
            // Each user creates 3 Posts
            Post::factory(3)->create(['user_id' => $user->id])->each(function($post) use ($user){
                // Each Post has 2 Comments
                Comment::factory(2)->create(['post_id' => $post->id]);

                // Random Users like the Post
                $userIds = User::pluck('id')->random(rand(1,3));
                $post->likers()->attach($userIds);
            });
        });
    }
}
