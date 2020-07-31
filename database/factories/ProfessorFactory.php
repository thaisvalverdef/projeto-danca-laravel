<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Professor;
use Faker\Generator as Faker;

$factory->define(Professor::class, function (Faker $faker) {
    return [
        'nome' => $faker->word($nbWords = 1, $variableNbWords = true),
        'sobrenome' => $faker->word($nbWords = 1, $variableNbSentences = true),
        'email' => $faker->unique()->safeEmail,
        'apresentacao' => $faker->paragraph($nbSentences = 1, $variableNbSentences = true)

    ];
});
