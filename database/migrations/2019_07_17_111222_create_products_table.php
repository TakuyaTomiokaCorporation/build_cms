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
            $table->string('product_name');
            $table->string('thumbnail');
            $table->text('overview');
            $table->string('link_detail')->nullable();
            $table->string('link_ec')->nullable();
            $table->string('transmission_method');
            $table->string('waterproof');
            $table->integer('noise_canceling');
            $table->string('category');
            $table->string('compression_method');
            $table->string('sound_method');
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
