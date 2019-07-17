<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpecsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('product_name');
            $table->text('drive_system')->nullable();
            $table->text('driver')->nullable();
            $table->text('driver_size')->nullable();
            $table->text('soc')->nullable();
            $table->text('mic')->nullable();
            $table->text('mic_noise')->nullable();
            $table->text('frequency')->nullable();
            $table->text('weight')->nullable();
            $table->text('max_call_time')->nullable();
            $table->text('max_play_time')->nullable();
            $table->text('charge_time')->nullable();
            $table->text('codec')->nullable();
            $table->text('profile')->nullable();
            $table->text('waterproof')->nullable();
            $table->text('battery')->nullable();
            $table->text('bluetooth')->nullable();
            $table->text('bluetooth_multi_pairing')->nullable();
            $table->text('bluetooth_multi_point')->nullable();
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
        Schema::dropIfExists('specs');
    }
}
