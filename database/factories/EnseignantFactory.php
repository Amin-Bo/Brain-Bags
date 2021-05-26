<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Enseignant;
use Faker\Generator as Faker;

$factory->define(Enseignant::class, function (Faker $faker) {
    return [
        'nom'=> $faker->firstName,
        'prenom'=> $faker->lastName,
        'email'=>  $faker->freeEmail,
        'mdp'=> $faker->password,
        'image'=> $faker->imageUrl,
        'ville'=> $faker->address,
        'departement'=> $faker->randomElement(['Technologie_de_l_information', 'Mecanique', 'électrique','Commerce']),
        'created_at'=> now()
    ];
});
