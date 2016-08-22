<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRetailerContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('retailer_contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->string('designation');
            $table->string('email');
            $table->string('apt_ste');
            $table->string('street_address');
            $table->string('city');
            $table->string('phone_number');
            $table->string('fax_number');
            $table->string('zip');
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
        Schema::drop('retailer_contacts');
    }
}
