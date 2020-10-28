<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Contact;
use Faker\Generator as Faker;

$factory->define(Contact::class, function (Faker $faker) {
    return [
//        'company_id' => factory(App\Company::class),
        'name' => $faker->name,
        'phone' => $faker->e164PhoneNumber
    ];
});
