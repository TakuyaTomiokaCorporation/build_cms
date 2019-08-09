<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ShopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $file = new SplFileObject('database/csv/shop.csv');
        DB::table('shops') -> insert();
    }
}
