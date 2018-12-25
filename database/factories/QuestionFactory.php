<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Question::class, function (Faker $faker) {
    return [
        'Question'=>$faker->text(40)
    ];
});
