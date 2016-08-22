<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShipToTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ship_to', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name');
            $table->string('contact_address');
            $table->string('phone_number');
            $table->string('email');
            $table->string('ein_sale_tax');
            $table->string('fax_number');
            $table->string('shipping_address');
            $table->string('billing_address');
            $table->string('zip');
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
        Schema::drop('ship_to');
    }
}
