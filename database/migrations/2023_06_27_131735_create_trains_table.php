<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company');
            $table->string('departure_station', 30);
            $table->string('arrival_station', 30);
            $table->time('departure_time');
            $table->datetime('departure_date');
            $table->time('arrival_time');
            $table->datetime('arrival_date');
            $table->char('train_code', 8);
            $table->tinyinteger('number_of_carriages');
            $table->boolean('on_time');
            $table->boolean('deleted');
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
        Schema::dropIfExists('trains');
    }
};
