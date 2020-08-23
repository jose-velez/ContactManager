<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Contact;
use Faker\Generator as Faker;

$factory->define(Contact::class, function (Faker $faker) {
    $contactMethod = ["phone","email","text"];
    $role = ["marketPartner", "vip"];
    return [
        "name"=>$faker->name,
        "email"=>$faker->email,
        "birth_date"=>$faker->dateTimeThisCentury,
        "phone"=>$faker->phoneNumber,
        "contact_method"=>$faker->randomElement($contactMethod),
        "role"=>$faker->randomElement($role),
        "user_id"=>1
    ];
});
