<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Skill::class, function (Faker $faker) {
    return [
        'name'=>$faker->randomElement(
          array('Helping Others','On task','Participating','Teamwork','Persistence','Working hard')),
          'image'=>'skill-icon'.rand(1,50).'.png',
          'type'=>'Positive',
          'point_weight'=>1,
          'user_id'=>rand(1,20),
          'class_id'=>1,
    ];
});
