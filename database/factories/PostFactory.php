<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => Str::before($faker->sentence(3), '.'),
        'content' => $faker->paragraphs(3, true),
        'author' => $faker->name(),
    ];
});
