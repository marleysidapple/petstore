<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPublishedAtToTestomonialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('testomonials', function (Blueprint $table) {
            $table->timestamp('published_at')->default(NULL);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('testomonials', function (Blueprint $table) {
            $table->dropColumn('published_at');
        });
    }
}
