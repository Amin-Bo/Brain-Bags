<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Administrateur;
use App\Soutenance;
use Faker\Generator as Faker;

$factory->define(Administrateur::class, function (Faker $faker) {
    return [
        'soutenace_id'=> Soutenance::get('id')->random(),
        'nom'=> $faker->firstName,
        'prenom'=> $faker->lastName,
        'email'=>  $faker->freeEmail,
        'mdp'=> $faker->password,
        'image'=> $faker->imageUrl,
        'ville'=> $faker->address,
        'role'=> $faker->randomElement(['sous_directeur', 'chef_de_département', 'enseignant']),
        'created_at'=> now() 

    ];
});
