<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightbooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flightbooks', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('flight_id');
            $table->integer('flight_type_id');
            $table->string('flight_type');
            $table->string('class');
            $table->string('from_country');
            $table->string('to_country');
            $table->string('price');
            $table->string('person');
            $table->string('date');
            $table->string('status')->default(0);
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
        Schema::dropIfExists('flightbooks');
    }
}
