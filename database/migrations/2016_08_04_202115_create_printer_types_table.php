<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrinterTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('printer_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->decimal('price_per_unit');
            $table->string('unit_name');
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
        Schema::drop('printer_types');
    }
}
