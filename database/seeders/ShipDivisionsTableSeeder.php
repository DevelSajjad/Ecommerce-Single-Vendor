<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ShipDivisionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ship_divisions')->delete();
        
        \DB::table('ship_divisions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'division_name' => 'Rangpur',
                'created_at' => '2022-11-17 06:49:14',
                'updated_at' => '2022-11-17 06:49:14',
            ),
            1 => 
            array (
                'id' => 3,
                'division_name' => 'Rajshahi',
                'created_at' => '2022-11-17 10:53:37',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 4,
                'division_name' => 'Khulna',
                'created_at' => '2022-11-22 15:22:17',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}