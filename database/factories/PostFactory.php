<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'position' => $faker->jobTitle(),
        'experience' => $faker->randomDigit(),
        'type' => $faker->randomElement(array("Full Time", "Part Time")),
        'address' => $faker->address(),
        'employer_type' => $faker->randomElement(array("Male", "Female", "M/F")),
        'employer_number' => $faker->randomDigit(),
        'salary_amount' => $faker->numberBetween(10, 1000),
        'department' => $faker->word(),
        'report_to' => $faker->name(),
        'job_description' => $faker->realText(200, 2),
        'job_requirement' => $faker->realText(200, 2),
        'urgent' => '0'
    ];
});
