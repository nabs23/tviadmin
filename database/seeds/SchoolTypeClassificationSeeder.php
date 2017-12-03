<?php

use Illuminate\Database\Seeder;

class SchoolTypeClassificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $classifications = [
        	['name' => 'TVIs'],
        	['name' => 'HEIs'],
        	['name' => 'Enterprise/Company'],
        	['name' => 'NGO/Foundation'],
        ];

        $types = [
        	['name' => 'Public'],
        	['name' => 'Private'],
        ];

        \DB::table('school_classifications')->insert($classifications);
        \DB::table('school_types')->insert($types);
    }
}
