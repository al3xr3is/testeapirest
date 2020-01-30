<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Pedido::class, function (Faker $faker) {
    return [
        'descricao' => $faker->text,
        'endereco' => $faker->address,
        'status' => $faker->randomElement(['aberto', 'finalizado']),
        'peca_id' => App\Peca::all(['id'])->random(),
        'anunciante_id' => App\Anunciante::all(['id'])->random()
    ];
});
