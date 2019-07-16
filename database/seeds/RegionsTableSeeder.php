<?php

use Illuminate\Database\Seeder;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $regions = [
            
            ['region_name' => '北海道'],
            ['region_name' => '東北地方'],
            ['region_name' => '関東地方'],
            ['region_name' => '中部地方'],
            ['region_name' => '近畿地方'],
            ['region_name' => '中国地方'],
            ['region_name' => '四国地方'],
            ['region_name' => '九州地方']
        ];

        DB::table('regions')->insert($regions);
    }
}
