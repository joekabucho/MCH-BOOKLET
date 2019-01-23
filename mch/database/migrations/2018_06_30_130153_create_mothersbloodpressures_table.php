<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMothersbloodpressuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mothersbloodpressures', function (Blueprint $table) {
            $table->increments('id');
            $table->date('month')->nullable();
            $table->integer('systole')->nullable();
            $table->integer('diastole')->nullable();


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
        Schema::dropIfExists('mothersbloodpressures');
    }
}
