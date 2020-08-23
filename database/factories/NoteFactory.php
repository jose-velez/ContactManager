<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Note;
use Faker\Generator as Faker;

$factory->define(Note::class, function (Faker $faker) {
    $contacts = \App\Contact::pluck('id')->toArray();
    return [
        "body"=>$faker->text,
        "contact_id"=>$faker->randomElement($contacts)
    ];
});
