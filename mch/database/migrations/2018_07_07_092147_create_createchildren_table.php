<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreatechildrenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('createchildren', function (Blueprint $table) {
            $table->increments('id')->nullable();
            $table->string('child_name')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('mothers_name')->nullable();
            $table->string('parity')->nullable();
            $table->string('weight')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('createchildren');
    }
}
