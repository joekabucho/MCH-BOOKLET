->nullable()<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhysicalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('physicals', function (Blueprint $table) {
            $table->increments('id');
            $table->text('general')->nullable();
            $table->text('cvs')->nullable();
            $table->text('respiration')->nullable();
            $table->text('breasts')->nullable();
            $table->text('abdomen')->nullable();
            $table->text('vaginal_examination')->nullable();
            $table->text('discharge_dud')->nullable();
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
        Schema::dropIfExists('physicals');
    }
}
