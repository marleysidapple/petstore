<?php

use App\RetailerContact;
use App\Role;
use App\State;
use App\Store;
use App\User;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(State::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->state,
        'abbr' => $faker->stateAbbr
    ];
});

$factory->define(User::class, function (Faker\Generator $faker) {
	$states = State::lists('id')->toArray();
    $roles = Role::lists('id')->toArray();

    return [
        'name' => $faker->name,
        'username' => $faker->userName,
        'email' => $faker->safeEmail,
        'password' => bcrypt('password'),
        'role_id' => $faker->randomElement($roles),
        'company_store_name' => $faker->company,
        'street_address' => $faker->streetAddress,
        'apt' => $faker->address,
        'city' => $faker->city,
        'phone_number' => $faker->phoneNumber,
        'fax_number' => $faker->phoneNumber,
        'state_id' => $faker->randomElement($states),
        'zip' => '00977',
        'website' => $faker->domainName,
        'tax_id' => '4344854905',
        'remember_token' => str_random(10),
    ];
});

$factory->define(Store::class, function (Faker\Generator $faker) {
    $states = State::lists('id')->toArray();
    $storeName = $faker->company;

    return [
        'store_name' => $storeName,
        'slug' => rtrim(implode('-', explode(' ', strtolower($storeName))), '.'),
        'store' => $faker->name,
        'suite' => $faker->name,
        'email' => $faker->safeEmail,
        'street_address' => $faker->streetAddress,
        'city' => $faker->city,
        'phone_number' => $faker->phoneNumber,
        'private_phone_number' => $faker->phoneNumber,
        'fax_number' => $faker->phoneNumber,
        'zip' => '00977',
        'website' => $faker->domainName,
        'state_id' => $faker->randomElement($states)
    ];
});

$factory->define(RetailerContact::class, function (Faker\Generator $faker) {
    $states = State::lists('id')->toArray();
    $storeName = $faker->company;

    return [
        'name' => $storeName,
        'slug' => rtrim(implode('-', explode(' ', strtolower($storeName))), '.'),
        'designation' => $faker->name,
        'email' => $faker->safeEmail,
        'apt_ste' => $faker->streetAddress,
        'street_address' => $faker->streetAddress,
        'city' => $faker->city,
        'phone_number' => $faker->phoneNumber,
        'fax_number' => $faker->phoneNumber,
        'zip' => '00977',
        'state_id' => $faker->randomElement($states)
    ];
});