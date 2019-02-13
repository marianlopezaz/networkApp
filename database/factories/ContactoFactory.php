<?php

use Faker\Generator as Faker;

$factory->define(App\Contacto::class, function (Faker $faker) {
    return [
        'nameCont' => $faker->name,
        'lastNameCont' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'user_id' => '1',
    ];
});
