<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 6,
                'category_name_en' => 'Monitor',
                'category_name_bn' => 'মনিটর',
                'category_slug_en' => 'monitor',
                'category_slug_bn' => 'মনিটর',
                'category_icon' => 'fa fa-television',
                'created_at' => '2022-11-07 08:43:10',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 7,
                'category_name_en' => 'Camera',
                'category_name_bn' => 'ক্যামেরা',
                'category_slug_en' => 'camera',
                'category_slug_bn' => 'ক্যামেরা',
                'category_icon' => 'fa fa-camera',
                'created_at' => '2022-11-07 08:44:20',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 10,
                'category_name_en' => 'Component',
                'category_name_bn' => 'কম্পোনেন্ট',
                'category_slug_en' => 'component',
                'category_slug_bn' => 'কম্পোনেন্ট',
                'category_icon' => 'fa fa-list-alt',
                'created_at' => '2022-11-07 08:49:11',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 5,
                'category_name_en' => 'Electronics',
                'category_name_bn' => 'ইলেকট্রনিক্স',
                'category_slug_en' => 'electronics',
                'category_slug_bn' => 'ইলেকট্রনিক্স',
                'category_icon' => 'fa fa-plug',
                'created_at' => '2022-11-05 12:05:08',
                'updated_at' => '2022-11-05 12:41:04',
            ),
            4 => 
            array (
                'id' => 8,
                'category_name_en' => 'Software',
                'category_name_bn' => 'সফ্টওয়ার',
                'category_slug_en' => 'software',
                'category_slug_bn' => 'সফ্টওয়ার',
                'category_icon' => 'fa fa-windows',
                'created_at' => '2022-11-07 08:46:32',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 9,
                'category_name_en' => 'Printer',
                'category_name_bn' => 'প্রিন্টার',
                'category_slug_en' => 'printer',
                'category_slug_bn' => 'প্রিন্টার',
                'category_icon' => 'fa fa-print',
                'created_at' => '2022-11-07 08:47:17',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}