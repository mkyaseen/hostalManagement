<?php

use Faker\Generator as Faker;

$factory->define(App\Person::class, function (Faker $faker) {

       $r1 =  Room::find(1)->id;
       $r2 =  Room::find(2)->id;
    return [
        'name' => $faker->name,
        'phone' =>'846784',
        'date_of_birth' =>'10-04-1995',
        'institute' =>'xuperior12',
        'cnic' =>'36202-3189355-1',
        'room_id' => $faker->randomElement([$r1, $r2])

    ];
});
