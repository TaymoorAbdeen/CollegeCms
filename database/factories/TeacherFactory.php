<?php

use Faker\Generator as Faker;

$factory->define(App\Teacher::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'password' => bcrypt('secret'),
        'email' => $faker->safeEmail,
        'gender' => $faker->randomElement(['male', 'female']),
        'college_id' =>$faker->numberBetween(1,4),
        'department_id' =>$faker->numberBetween(1,8),
        'birthdate'=>  $faker->dateTimeBetween('1970', 'now'),
        'bio' =>$faker->paragraph(rand(2,5),true),
        'teaches'=>$faker->unique()->email,
         'created_at' => $faker->dateTime('now'),
         'graduated_at'=>$faker->dateTimeBetween('1970', 'now'),
         'updated_at' => $faker->dateTime('now'),
         'profile_picture' =>$faker->sentence(),
    
     ];
});
