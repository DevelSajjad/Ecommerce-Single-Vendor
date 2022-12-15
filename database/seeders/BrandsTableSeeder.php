<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('brands')->delete();
        
        \DB::table('brands')->insert(array (
            0 => 
            array (
                'id' => 13,
                'brand_name_en' => 'Dell',
                'brand_name_bn' => 'ডেল',
                'brand_slug_en' => 'dell',
                'brand_slug_bn' => 'ডেল',
                'brand_image' => 'uploads/brand/1748659666424563.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 12,
                'brand_name_en' => 'Samsung',
                'brand_name_bn' => 'স্যামসাং',
                'brand_slug_en' => 'samsung',
                'brand_slug_bn' => 'স্যামসাং',
                'brand_image' => 'uploads/brand/1748659384182454.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 14,
                'brand_name_en' => 'HP',
                'brand_name_bn' => 'এইচপি',
                'brand_slug_en' => 'hp',
                'brand_slug_bn' => 'এইচপি',
                'brand_image' => 'uploads/brand/1748662134319693.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 15,
                'brand_name_en' => 'ASUS',
                'brand_name_bn' => 'আসুস',
                'brand_slug_en' => 'asus',
                'brand_slug_bn' => 'আসুস',
                'brand_image' => 'uploads/brand/1748827332553467.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}