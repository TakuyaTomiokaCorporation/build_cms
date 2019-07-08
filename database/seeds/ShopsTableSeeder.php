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
        DB::table('shops') -> insert([
            'region_id' => 1,
            'pre_id' => 1,
            'shop_name' => 'テックランド函館店',
            'shop_address' => '北海道函館市亀田本町66-5',
            'shop_tel' => '0138-44-4001',
            'post_number' => '041-0813',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
