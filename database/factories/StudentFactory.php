<?php

use Faker\Generator as Faker;

$factory->define(App\Student::class, function (Faker $faker) {
    return [
        //
        
        'name' => $faker->name,
        'password' => bcrypt('secret'),
        'email' => $faker->safeEmail,
        'gender' => $faker->randomElement(['male', 'female']),
        'college_id' =>$faker->numberBetween(1,2),
        'department_id' =>$faker->numberBetween(1,3),
        'stage' =>$faker->numberBetween(1,4),
         'birthdate'=>  $faker->dateTimeBetween('1994', 'now'),
        'bio' =>$faker->paragraph(rand(2,5),true),
         'created_at' => $faker->dateTime('now'),
         'updated_at' => $faker->dateTime('now'),
         'profile_picture' =>$faker->sentence(),

    ];
});
