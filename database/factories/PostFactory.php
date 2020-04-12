<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id' => random_int(1, 10),
        'title' => $faker->sentence(),
        'body' => $faker->text(),
        'published' => random_int(0, 1),
        'published_at' => $faker->date(),
    ];
});
