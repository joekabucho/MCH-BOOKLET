<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id')->latest();
            $table->integer('user_type')->default(1);
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('avatar')->default('default-user.png');
            $table->string('cover')->default('default-cover.png');
            $table->boolean('account_active')->default(false);
            $table->boolean('is_admin')->default(false);
            $table->string('telephone')->nullable();
            $table->string('type')->nullable();
            $table->string('keph_level')->nullable();
            $table->string('facility_type')->nullable();
            $table->string('owner')->nullable();
            $table->string('regulatory_body')->nullable();
            $table->string('bed_capacity')->nullable();
            $table->string('branches')->nullable();
            $table->string('working_days')->nullable();
            $table->string('brief_description_of_services')->nullable();
            $table->string('insurance')->nullable();
            $table->string('company_name')->nullable();
            $table->string('legal_name')->nullable();
            $table->string('tax_id')->nullable();
            $table->string('street_address')->nullable();
            $table->string('city')->nullable();
            $table->string('county')->nullable();
            $table->string('address')->nullable();
            $table->string('sub_county')->nullable();
            $table->string('ward')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
