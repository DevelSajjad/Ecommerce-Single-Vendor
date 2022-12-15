<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CouponsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('coupons')->delete();
        
        \DB::table('coupons')->insert(array (
            0 => 
            array (
                'id' => 2,
                'coupon_name' => 'Happy New',
                'coupon_discount' => 10,
                'coupon_validity' => '2022-11-17',
                'status' => 1,
                'created_at' => '2022-11-15 13:21:11',
                'updated_at' => '2022-11-16 16:49:22',
            ),
        ));
        
        
    }
}