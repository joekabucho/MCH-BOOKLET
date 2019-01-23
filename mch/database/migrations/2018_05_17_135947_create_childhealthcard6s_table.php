<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChildhealthcard6sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('childhealthcard6s', function (Blueprint $table) {
            $table->increments('id');
            $table->text('hospitalname')->nullable();
            $table->integer('admissionnumber')->nullable();
            $table->date('dateofadmission')->nullable();
            $table->date('dateofdischarge')->nullable();
            $table->text('dischargediagnosis')->nullable();
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
        Schema::dropIfExists('childhealthcard6s');
    }
}
