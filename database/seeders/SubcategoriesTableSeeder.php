<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SubcategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('subcategories')->delete();
        
        \DB::table('subcategories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'category_id' => 5,
                'subcategory_name_en' => 'Mobile',
                'subcategory_name_bn' => 'মোবাইল',
                'subcategory_slug_en' => 'mobile',
                'subcategory_slug_bn' => 'মোবাইল',
                'created_at' => '2022-11-05 12:11:44',
                'updated_at' => '2022-11-05 12:51:07',
            ),
            1 => 
            array (
                'id' => 6,
                'category_id' => 6,
                'subcategory_name_en' => 'Gaming Monitor',
                'subcategory_name_bn' => 'গ্যামিং মনিটর',
                'subcategory_slug_en' => 'gaming monitor',
                'subcategory_slug_bn' => 'গ্যামিং মনিটর',
                'created_at' => '2022-11-07 08:50:30',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 4,
                'category_id' => 5,
                'subcategory_name_en' => 'Laptop',
                'subcategory_name_bn' => 'ল্যাপটপ',
                'subcategory_slug_en' => 'laptop',
                'subcategory_slug_bn' => 'ল্যাপটপ',
                'created_at' => '2022-11-05 12:13:34',
                'updated_at' => '2022-11-05 12:50:09',
            ),
            3 => 
            array (
                'id' => 7,
                'category_id' => 10,
                'subcategory_name_en' => 'Ram',
                'subcategory_name_bn' => 'র‌্যাম',
                'subcategory_slug_en' => 'ram',
                'subcategory_slug_bn' => 'র‌্যাম',
                'created_at' => '2022-11-07 08:51:15',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 8,
                'category_id' => 10,
                'subcategory_name_en' => 'SSD',
                'subcategory_name_bn' => 'এসএসডি',
                'subcategory_slug_en' => 'ssd',
                'subcategory_slug_bn' => 'এসএসডি',
                'created_at' => '2022-11-07 08:52:17',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 9,
                'category_id' => 6,
                'subcategory_name_en' => 'Desktop Monitor',
                'subcategory_name_bn' => 'ডেক্সটপ মনিটর',
                'subcategory_slug_en' => 'desktop monitor',
                'subcategory_slug_bn' => 'ডেক্সটপ মনিটর',
                'created_at' => '2022-11-07 09:04:34',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}