<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MultiImgsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('multi_imgs')->delete();
        
        \DB::table('multi_imgs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'product_id' => 3,
                'photo_name' => 'uploads/multiImg/1748307717310274.jpg',
                'created_at' => '2022-11-01 15:22:47',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 16,
                'product_id' => 8,
                'photo_name' => 'uploads/multiImg/1748661568632145.jpg',
                'created_at' => '2022-11-05 13:07:06',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 17,
                'product_id' => 9,
                'photo_name' => 'uploads/multiImg/1748662507963410.jpg',
                'created_at' => '2022-11-05 13:22:02',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 18,
                'product_id' => 9,
                'photo_name' => 'uploads/multiImg/1748662508345425.jpg',
                'created_at' => '2022-11-05 13:22:02',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'product_id' => 5,
                'photo_name' => 'uploads/multiImg/1748351558615369.jpg',
                'created_at' => '2022-11-02 02:59:39',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 8,
                'product_id' => 6,
                'photo_name' => 'uploads/multiImg/1748544120313325.png',
                'created_at' => '2022-11-04 06:00:19',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 9,
                'product_id' => 6,
                'photo_name' => 'uploads/multiImg/1748546583328550.png',
                'created_at' => '2022-11-04 06:00:19',
                'updated_at' => '2022-11-04 06:39:28',
            ),
            7 => 
            array (
                'id' => 15,
                'product_id' => 8,
                'photo_name' => 'uploads/multiImg/1748661568121714.jpg',
                'created_at' => '2022-11-05 13:07:06',
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 14,
                'product_id' => 8,
                'photo_name' => 'uploads/multiImg/1748661567776015.jpg',
                'created_at' => '2022-11-05 13:07:05',
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 19,
                'product_id' => 9,
                'photo_name' => 'uploads/multiImg/1748662508646781.jpg',
                'created_at' => '2022-11-05 13:22:02',
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 20,
                'product_id' => 10,
                'photo_name' => 'uploads/multiImg/1748828064616151.jpg',
                'created_at' => '2022-11-07 09:13:29',
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 21,
                'product_id' => 10,
                'photo_name' => 'uploads/multiImg/1748828065022981.jpg',
                'created_at' => '2022-11-07 09:13:29',
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 22,
                'product_id' => 10,
                'photo_name' => 'uploads/multiImg/1748828065306497.jpg',
                'created_at' => '2022-11-07 09:13:30',
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 23,
                'product_id' => 11,
                'photo_name' => 'uploads/multiImg/1748828563262417.jpg',
                'created_at' => '2022-11-07 09:21:24',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}