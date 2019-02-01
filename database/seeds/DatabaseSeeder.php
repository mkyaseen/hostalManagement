<?php

use Illuminate\Database\Seeder;
use App\Room;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $this->call(Roomseeder::class);

      //  $this->call(Personseeder::class);

       // factory(App\Room::class,30)->create();
    }
}
