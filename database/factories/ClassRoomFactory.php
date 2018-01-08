<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\ClassRoom::class, function (Faker $faker) {
    return [
        'class_name'=>$faker->word,
        'avatar'=>$faker->randomElement(array(
        "class1.png",
        "class2.png",
        "class3.png",
        "class4.png",
        "class5.png",
        "class6.png",
        "class7.png",
        "class8.png",
        "class9.png",
        "class10.png",
        "class11.png",
        "class12.png",
        "class14.png",
        "class15.png",
        "class16.png",
        "class17.png",
        "class18.png")),
        'institute_id'=>$faker->randomElement(array(6,7,10,11,12)),
        'user_id'=>11,
    ];
});
