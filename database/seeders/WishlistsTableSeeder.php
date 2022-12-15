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
                'id' => 4,
                'user_id' => 2,
                'product_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}