<?php

use App\Post;
use Illuminate\Database\Seeder;

class DemoPostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Post::class, 5)->create();
    }
}
