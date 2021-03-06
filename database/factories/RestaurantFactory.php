<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Restaurant;
use Faker\Generator as Faker;

$factory->define(Restaurant::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        // 'type_id' => rand(1, 8),
        'type' => "Restaurant Type Testing",
        'opening_hour' => '9:00AM',
        'closing_hour' => '9:00PM',
        'logo' => 'restaurants/name/logo.png',
        'description' => $faker->sentence(3, true),
        'address' => $faker->sentence(5, true),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
