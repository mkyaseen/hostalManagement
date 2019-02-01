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
            'name'=>'ali',
            'status'=>'2',
            'capacity'=>3,
            'has_account'=>'se343'


        ]);

        Room::create([
            'name'=>'imran',
            'status'=>'22',
            'capacity'=>32,
            'has_account'=>'se3i43'


        ]);
        Room::create([
            'name'=>'imran',
            'status'=>'22',
            'capacity'=>32,
            'has_account'=>'se3i43'


        ]);
        Room::create([
            'name'=>'imran',
            'status'=>'22',
            'capacity'=>32,
            'has_account'=>'se3i43'


        ]);
        Room::create([
            'name'=>'imran',
            'status'=>'22',
            'capacity'=>32,
            'has_account'=>'se3i43'


        ]);
        Room::create([
            'name'=>'imran',
            'status'=>'22',
            'capacity'=>32,
            'has_account'=>'se3i43'


        ]);

    }
}
