<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ShipDistrictsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ship_districts')->delete();
        
        \DB::table('ship_districts')->insert(array (
            0 => 
            array (
                'id' => 3,
                'division_id' => 1,
                'district_name' => 'Dinajpur',
                'created_at' => '2022-11-18 05:39:09',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 4,
                'division_id' => 1,
                'district_name' => 'Thakugaon',
                'created_at' => '2022-11-22 13:27:36',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 5,
                'division_id' => 1,
                'district_name' => 'Gobindaganj',
                'created_at' => '2022-11-22 13:28:27',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 6,
                'division_id' => 1,
                'district_name' => 'Joypurhat',
                'created_at' => '2022-11-22 13:28:42',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 7,
                'division_id' => 1,
                'district_name' => 'Lalmonirhat',
                'created_at' => '2022-11-22 13:30:52',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 8,
                'division_id' => 1,
                'district_name' => 'Nilphamari',
                'created_at' => '2022-11-22 13:31:07',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 9,
                'division_id' => 1,
                'district_name' => 'Panchagar',
                'created_at' => '2022-11-22 13:31:41',
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 10,
                'division_id' => 1,
                'district_name' => 'Rangpur',
                'created_at' => '2022-11-22 13:31:52',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}