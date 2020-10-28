<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
<<<<<<< HEAD
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password $2y$10$plbNRGHWZJKHkpLP1Z8uOuO2fGtEw.epDzmtRhk9QNqy4V.J6gspK
=======
        'password' => '$2y$10$plbNRGHWZJKHkpLP1Z8uOuO2fGtEw.epDzmtRhk9QNqy4V.J6gspK', // password
>>>>>>> 2cf8506b327f2496663dcc4bcae7729b74a6997a
        'remember_token' => Str::random(10),
    ];
});
