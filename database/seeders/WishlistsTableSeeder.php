<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WishlistsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('wishlists')->delete();
        
        \DB::table('wishlists')->insert(array (
            0 => 
            array (
                'id' => 9,
                'user_id' => 1,
                'product_id' => 9,
                'created_at' => '2022-11-21 10:14:16',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 10,
                'user_id' => 2,
                'product_id' => 11,
                'created_at' => '2022-12-18 14:48:41',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 11,
                'user_id' => 4,
                'product_id' => 11,
                'created_at' => '2022-12-18 15:35:12',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 2,
                'product_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}