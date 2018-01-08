<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Institute::class, function (Faker $faker) {
    return [
        'name'=>$faker->company,
        'avatar'=>$faker->imageUrl(800, 600, 'cats'),
        'address'=>$faker->address,
        'city'=>$faker->city,
        'state'=>$faker->state,
        'state'=>$faker->state,
        'country'=>$faker->country,
        'type'=>'School',
        'user_id'=>$faker->numberBetween(1,10)
    ];
});
