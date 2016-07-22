<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('hotel', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nameOfProperty', 50);
            $table->enum('propertyType', ['Hotel','Lodge','Guest house']);
            $table->string('email', 45)->unique();
            $table->string('address', 100);
            $table->string('city', 45);
            $table->text('description');
            $table->string('website', 30);
            $table->string('phone', 25);
            $table->enum('rating', ['not rated','1 star','2 stars','3 stars',',4 stars','5 stars']);
            $table->binary('image');
            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('hotel');
    }
}
