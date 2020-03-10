<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

use App\product;


$factory->define(product::class, function (Faker $faker) {
    return [
        //

        'product_name'=> $faker->sentence(3),
        'product_price'=>$faker->randomFloat(2),
        'product_description'=>$faker->text(200)

    ];
});
