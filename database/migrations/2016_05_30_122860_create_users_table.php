<?php

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
            $table->increments('id');
            $table->string('name');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('role_id')->unsigned();
            $table->foreign('role_id')->references('id')->on('roles');
            $table->string('company_store_name');
            $table->string('street_address');
            $table->string('apt');
            $table->string('city');
            $table->integer('state_id')->unsigned();
            $table->foreign('state_id')->references('id')->on('states');
            $table->string('zip');
            $table->string('phone_number');
            $table->string('fax_number');
            $table->string('website');
            $table->string('tax_id');
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
        Schema::drop('users');
    }
}
