<?php

use Faker\Generator as Faker;

$factory->define(App\Provincia::class, function (Faker $faker) {
    return [
        'nombreProvincia' => $faker->name(),
        'pais_id' =>'1',
       
    ];
});
