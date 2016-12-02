<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatronsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patrons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('onyen')->unique();
            $table->integer('pid')->unique();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('password');
            $table->integer('unc_status_id');
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
        Schema::drop('patrons');
    }
}
