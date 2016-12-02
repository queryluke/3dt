<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('status_code');
            $table->integer('printer_id');
            $table->string('filename');
            $table->string('scale');
            $table->string('x_dimensions');
            $table->string('y_dimensions');
            $table->string('z_dimensions');
            $table->string('printer_type_id');
            $table->string('color_id');
            $table->text('notes');
            $table->integer('units');
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
        Schema::drop('items');
    }
}
