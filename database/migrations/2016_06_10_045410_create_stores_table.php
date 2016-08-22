<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('store_name');
            $table->string('slug');
            $table->string('store');
            $table->string('suite');
            $table->string('email');
            $table->string('street_address');
            $table->string('city');
            $table->string('phone_number');
            $table->string('private_phone_number');
            $table->string('fax_number');
            $table->string('zip');
            $table->string('website');
            $table->integer('state_id')->unsigned();
            $table->foreign('state_id')->references('id')->on('states');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('stores');
    }
}
