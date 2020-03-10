<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

use App\employee;


$factory->define(employee::class, function (Faker $faker) {
    return [
        //
        'employee_name'=> $faker->sentence(6),
        'employee_salary'=>$faker->randomFloat(2)
        

    ];
});
