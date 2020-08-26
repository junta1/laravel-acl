<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\PostsModel::class, function (Faker $faker) {

    $users = DB::table('users')->pluck('id');

    return [
        'user_id' => $faker->randomElement($users),
        'title' => $faker->title(),
        'description' => $faker->text()
    ];
});
