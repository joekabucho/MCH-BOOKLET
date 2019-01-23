->nullable()<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChildhealthcard3sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('childhealthcard3s', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('social')->nullable();
            $table->integer('head')->nullable();
            $table->integer('turn')->nullable();
            $table->integer('extend')->nullable();
            $table->integer('sitting')->nullable();
            $table->integer('standing')->nullable();
            $table->integer('walking')->nullable();
            $table->integer('talking')->nullable();

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
        Schema::dropIfExists('childhealthcard3s');
    }
}
