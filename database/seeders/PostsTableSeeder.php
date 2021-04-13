<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

// Import Post
use App\Models\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // First method
        $post = new Post;
        $post->title = "How I Got My Super Strength";
        $post->body = "This should be long but I don't know what to write, so I'm gon' keep it short like this, thanks.";
        $post->author = "Zubs, The Great One";
        $post->save();

        // Second method
        Post::create([
        	"title" => "Another Story",
        	"body" => "Well, I wrote some funny stuff in the last post, I guess you like 'em, 'cause I can't think of no better reason why you're reading this. I love you, bro",
        	"author" => "Another King"
        ]);

        // Finally
        Post::factory()->count(50)->create();
    }
}
