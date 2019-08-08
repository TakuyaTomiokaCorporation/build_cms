<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPostNumberToShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('shops', function (Blueprint $table) {
<<<<<<< HEAD
            $table->string('post_number', '10');
=======
            $table->string('post_number', '10')->nullable();
>>>>>>> c30607e2dae65b7e0a220dda4c33e5629cfbecbb
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shops', function (Blueprint $table) {
            $table->dropColumn('post_number');
        });
    }
}
