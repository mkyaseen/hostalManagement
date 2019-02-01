<?php

use Illuminate\Database\Seeder;
use App\Person;
class Personseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Person::create([
            'name'=>'ali',
            'phone'=>18467847384,
            'date_of_birth'=>10-04-2017,
            'institute'=>'superior',
            'cnic'=>3620236,
            'room_id'=>3



        ]);

        Person::create([
            'name'=>'ali',
            'phone'=>18467847384,
            'date_of_birth'=>10-04-2017,
            'institute'=>'superior',
            'cnic'=>3620236,
            'room_id'=>3



        ]);
        Person::create([
            'name'=>'ali',
            'phone'=>18467847384,
            'date_of_birth'=>10-04-2017,
            'institute'=>'superior',
            'cnic'=>3620236,
            'room_id'=>3



        ]);
    }
}
