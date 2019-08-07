<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('product_name')->nullable();
            $table->string('thumbnail')->nullable();
            $table->text('overview')->nullable();
            $table->string('link_detail')->nullable();
            $table->string('link_ec')->nullable();
            $table->string('transmission_method')->nullable();
            $table->string('waterproof')->nullable();
            $table->integer('noise_canceling')->nullable();
            $table->string('category')->nullable();
            $table->string('compression_method')->nullable();
            $table->string('sound_method')->nullable();
            $table->softDeletes();
            // $table->string('color');
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
        Schema::dropIfExists('products');
    }
}
