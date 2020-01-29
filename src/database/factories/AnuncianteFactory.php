<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Anunciante::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'contato' => $faker->unique()->safeEmail,
        'tipo' => $faker->randomElement(['administrador', 'anunciante'])
    ];
});
