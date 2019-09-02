<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

use App\models\Article;
use App\models\Category;
use App\models\Offer;
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
$factory->define(Article::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->text(500),
        'user_id' => $faker->numberBetween(1,User::count()),
    ];
});
