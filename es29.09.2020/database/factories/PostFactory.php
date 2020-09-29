<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\post;
use Faker\Generator as Faker;

$factory->define(post::class, function (Faker $faker) {
    return [
      'title'    => $faker ->  word(),
      'text'     => $faker ->  word(),
      'category' => $faker ->  word(),
      'like'     => $faker ->  numberBetween(1, 50),
      'dislike'  => $faker ->  numberBetween(1, 50)
    ];
});
