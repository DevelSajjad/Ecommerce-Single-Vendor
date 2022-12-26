<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductReviewsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_reviews')->delete();
        
        \DB::table('product_reviews')->insert(array (
            0 => 
            array (
                'id' => 3,
                'user_id' => 2,
                'product_id' => 11,
                'comment' => 'ulala',
                'rating' => 5,
                'status' => 'Approve',
                'created_at' => '2022-12-25 08:56:31',
                'updated_at' => '2022-12-26 07:14:29',
            ),
            1 => 
            array (
                'id' => 4,
                'user_id' => 2,
                'product_id' => 10,
                'comment' => 'xsdf',
                'rating' => 3,
                'status' => 'Approve',
                'created_at' => '2022-12-26 06:52:30',
                'updated_at' => '2022-12-26 07:14:26',
            ),
        ));
        
        
    }
}