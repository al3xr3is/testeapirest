<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Peca::class, function (Faker $faker) {
    return [
        'nome' => $faker->word,
        'descricao' => $faker->text,
        'preco' => $faker->randomFloat(2, 0, 8),
        'anunciante_id' => App\Anunciante::all(['id'])->random()
    ];
});
