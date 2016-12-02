<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('patron_id');
            $table->integer('consultation_staff_id');
            $table->integer('use_type_id');
            $table->text('description');
            $table->text('requirements');
            $table->timestamp('needed_by');
            $table->boolean('agree_terms');
            $table->boolean('can_share');
            $table->boolean('cdr_deposit');
            $table->integer('payment_staff_id');
            $table->integer('payment_method_id');
            $table->integer('department_id');
            $table->integer('charge');
            $table->timestamp('payment_received');
            $table->boolean('contacted_for_pickup');
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
        Schema::drop('jobs');
    }
}
