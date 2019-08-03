<?php

use Faker\Generator as Faker;
use App\Modules\Member\Models\Member;
use Illuminate\Support\Facades\Hash;

$factory->define(Member::class, function (Faker $faker) {
    return [
        'cellphone' => $faker->phoneNumber,
        'password' => Hash::make('secret'), // secret
        'remember_token' => str_random(10),
    ];
});
