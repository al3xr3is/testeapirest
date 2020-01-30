<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Pedido::class, function (Faker $faker) {
    return [
        'description' => $faker->text,
        'status' => $faker->randomElement(['src/Assets/baseline-check_circle_outline.svg', 'src/Assets/baseline-highlight_off.svg']),
        'adress' => $faker->address,
        'pecas_id' => App\Peca::all(['id'])->random(),
        'users_id' => App\User::all(['id'])->random()
    ];
});
