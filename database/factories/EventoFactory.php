<?php

use Faker\Generator as Faker;

$factory->define(App\Evento::class, function (Faker $faker) {
    return [
       'nombreEvento' => $faker->name(),
       'fechaEvento' =>'2018-1-10',
       'horaEvento' => $faker->time(),
       'detalleEvento' => $faker->sentence(3),
       'user_id' => '1',

    ];
});
