<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Contact;
use Faker\Generator as Faker;

$factory->define(Contact::class, function (Faker $faker) {
    return [
        'company_id' => factory(App\Company::class),
        'name' => $faker->name,
        'phone' => substr($faker->phoneNumber,0,14)
    ];
});
