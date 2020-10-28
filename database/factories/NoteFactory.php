<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Note;
use Faker\Generator as Faker;

$factory->define(Note::class, function (Faker $faker) {
    return [
//        'contact_id' => factory(App\Contact::class),
        'text' => $faker->text(50)
    ];
});
