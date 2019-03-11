<?php

use Faker\Generator as Faker;
use App\Department;

$factory->define(App\Employee::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'salary' => $faker->numberBetween($min = 1000, $max = 9000),
        'department_id' => function(){
            return Department::all()->random();
        }
    ];
});
