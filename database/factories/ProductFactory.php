<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    $contacts = \App\Contact::pluck('id')->toArray();
    return [
        'name'=>$faker->name,
        'contact_id'=>$faker->randomElement($contacts)
    ];
});
