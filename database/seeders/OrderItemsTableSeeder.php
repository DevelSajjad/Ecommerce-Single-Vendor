<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrderItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('order_items')->delete();
        
        \DB::table('order_items')->insert(array (
            0 => 
            array (
                'id' => 1,
                'order_id' => 1,
                'product_id' => 10,
                'color' => 'Silver',
                'size' => '43 inch',
                'qty' => '1',
                'price' => 200000.0,
                'created_at' => '2022-12-14 11:45:02',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'order_id' => 2,
                'product_id' => 10,
                'color' => 'Silver',
                'size' => '43 inch',
                'qty' => '1',
                'price' => 200000.0,
                'created_at' => '2022-12-14 11:45:04',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'order_id' => 3,
                'product_id' => 11,
                'color' => 'Black',
                'size' => '27 inch',
                'qty' => '1',
                'price' => 50500.0,
                'created_at' => '2022-12-14 11:47:17',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'order_id' => 4,
                'product_id' => 9,
                'color' => 'Black',
                'size' => NULL,
                'qty' => '1',
                'price' => 178000.0,
                'created_at' => '2022-12-14 11:48:30',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'order_id' => 5,
                'product_id' => 11,
                'color' => 'Black',
                'size' => '27 inch',
                'qty' => '1',
                'price' => 50500.0,
                'created_at' => '2022-12-14 11:53:54',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'order_id' => 6,
                'product_id' => 11,
                'color' => 'Black',
                'size' => '27 inch',
                'qty' => '1',
                'price' => 50500.0,
                'created_at' => '2022-12-14 11:53:56',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}