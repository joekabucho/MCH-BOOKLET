<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurgicalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surgicals', function (Blueprint $table) {
            $table->increments('id');
            $table->text('surgicaloperation')->nullable();
            $table->text('bloodtransfusion')->nullable();
            $table->text('familyhistory')->nullable();
            $table->text('twins')->nullable();
            $table->text('tuberculosis')->nullable();
            $table->text('diabetes')->nullable();
            $table->text('hypertension')->nullable();
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
        Schema::dropIfExists('surgicals');
    }
}
