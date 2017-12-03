<?php

use Illuminate\Database\Seeder;

class ProvincesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('regions')->insert(['name' => 'ARMM']);
        
        $region = \DB::table('regions')->where(['name' => 'ARMM'])->first();
        
        $provinces = [
        	['name' => 'Basilan', 'region_id' => $region->id],
        	['name' => 'Lanao del Sur', 'region_id' => $region->id],
        	['name' => 'Maguindanao', 'region_id' => $region->id],
        	['name' => 'Sulu', 'region_id' => $region->id],
        	['name' => 'Tawi-Tawi', 'region_id' => $region->id],
        ];

        \DB::table('provinces')->insert($provinces);
    }
}
