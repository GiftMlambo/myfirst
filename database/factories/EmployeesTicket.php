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

$factory->define(App\Employees::class, function (Faker $faker) {
    return [
        //Employee
        'name' => $faker->name,
        'surname' => $faker-> lastName,
        'idnumber' => $faker-> e164PhoneNumber,
        'dob' => $faker-> date($format = 'Y-m-d'),
        'gender' => $faker -> word,
        'address' => $faker-> address,
        
        //Work
        'position' => $faker-> word,
        'yearsActive' => $faker-> randomDigit,
        'salary' => $faker-> randomNumber($nbDigits = NULL, $strict = false),
        'currentStatus' => $faker-> word,

    ];
});
