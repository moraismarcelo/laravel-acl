<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Noticia;
use Faker\Generator as Faker;

$factory->define(Noticia::class, function (Faker $faker) {
    return [
        'user_id' => factory('App\User')->create()->id,
        'titulo' => $faker->title,
        'conteudo' => $faker->text,
    ];
});
