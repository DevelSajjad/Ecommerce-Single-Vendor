<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ShipStatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ship_states')->delete();
        
        \DB::table('ship_states')->insert(array (
            0 => 
            array (
                'id' => 4,
                'division_id' => 1,
                'district_id' => 3,
                'state_name' => 'Fulbari',
                'created_at' => '2022-11-22 13:32:58',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 3,
                'division_id' => 1,
                'district_id' => 3,
                'state_name' => 'Birampur',
                'created_at' => '2022-11-22 13:32:35',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 5,
                'division_id' => 1,
                'district_id' => 3,
                'state_name' => 'Parbotipur',
                'created_at' => '2022-11-22 13:33:18',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 6,
                'division_id' => 1,
                'district_id' => 3,
                'state_name' => 'Dinajpur Sadar',
                'created_at' => '2022-11-22 13:33:39',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}