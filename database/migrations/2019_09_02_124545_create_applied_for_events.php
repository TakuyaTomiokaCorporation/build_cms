<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppliedForEvents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applied_for_events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email');
            $table->string('sex')->nullable();
            $table->integer('age')->nullable();
            $table->text('recognition_from')->nullable();
            $table->text('considered_product')->nullable();
            $table->text('purchased_product')->nullable();
            $table->text('purchased_from')->nullable();
            $table->text('exception')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applied_for_events');
    }
}
