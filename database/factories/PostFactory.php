<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'position' => $faker->sentence(15),
        'type' => $faker->sentence(6),
        'address' => $faker->sentence(3),
        'employer_type' => $faker->word(),
        'employer_number' => $faker->randomDigit(),
        'salary_amount' => $faker->numberBetween(10, 1000),
        'department' => $faker->sentence(10),
        'report_to' => $faker->name(),
        'job_description' => $faker->realText(200, 2),
        'job_requirement' => $faker->realText(200, 2),
        'urgent' => '0'
    ];
});
