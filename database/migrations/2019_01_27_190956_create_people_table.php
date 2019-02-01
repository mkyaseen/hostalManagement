<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('people', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 250);
            $table->string('phone',250)->nullable();
            $table->string('date_of_birth', 250);
            $table->string('institute', 250);
            $table->string('cnic', 100);
            $table->unsignedInteger('room_id');

            $table->foreign('room_id')->references('id')->on('rooms');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::enableForeignKeyConstraints();
        Schema::dropIfExists('people');
    }
}
