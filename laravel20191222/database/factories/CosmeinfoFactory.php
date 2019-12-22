<?php

use Faker\Generator as Faker;

$factory->define(App\Cosmeinfo::class, function (Faker $faker) {
    return [
        'skintype_id'=> 2,
        'use_brand' => $faker->company,
        'like_brand' => $faker->company,
    ];
});
