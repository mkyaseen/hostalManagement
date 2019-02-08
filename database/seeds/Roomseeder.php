<?php

use Illuminate\Database\Seeder;
use App\Room;
class Roomseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Room::create([
            'name'=>'room1',
            'status'=>'2',
            'capacity'=>3,
            'has_account'=>'se343'


        ]);

        Room::create([
            'name'=>'room2',
            'status'=>'22',
            'capacity'=>32,
            'has_account'=>'se3i43'


        ]);
        Room::create([
            'name'=>'room3',
            'status'=>'22',
            'capacity'=>32,
            'has_account'=>'se3i43'


        ]);
        Room::create([
            'name'=>'room4',
            'status'=>'22',
            'capacity'=>32,
            'has_account'=>'se3i43'


        ]);
        Room::create([
            'name'=>'room5',
            'status'=>'22',
            'capacity'=>32,
            'has_account'=>'se3i43'


        ]);
        Room::create([
            'name'=>'room6',
            'status'=>'22',
            'capacity'=>32,
            'has_account'=>'se3i43'


        ]);

    }
}
