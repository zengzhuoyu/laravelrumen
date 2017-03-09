<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    // return [
    //     'name' => $faker->name,
    //     'email' => $faker->safeEmail,
    //     'password' => bcrypt(str_random(10)),
    //     'remember_token' => str_random(10),
    // ];
    
    $date_time = $faker->date . ' ' . $faker->time;
    static $password;

    // return [
    //     'name' => $faker->name,
    //     'email' => $faker->safeEmail,
    //     'password' => $password ?: $password = bcrypt('secret'),
    //     'remember_token' => str_random(10),
    //     'created_at' => $date_time,
    //     'updated_at' => $date_time,
    // ];    
    
    // return [
    //     'name' => $faker->name,
    //     'email' => $faker->safeEmail,
    //     'is_admin' => false,
    //     'password' => $password ?: $password = bcrypt('123123'),
    //     'remember_token' => str_random(10),
    //     'created_at' => $date_time,
    //     'updated_at' => $date_time,
    // ];    

    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'is_admin' => false,
        'activated' => true,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];    
});

$factory->define(App\Models\Status::class, function (Faker\Generator $faker) {
    $date_time = $faker->date . ' ' . $faker->time;
    return [
        'content'    => $faker->text(),
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});