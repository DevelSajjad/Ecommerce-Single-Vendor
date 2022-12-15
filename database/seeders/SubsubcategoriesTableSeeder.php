<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SubsubcategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('subsubcategories')->delete();
        
        \DB::table('subsubcategories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'category_id' => 5,
                'subcategory_id' => 4,
                'subsubcategory_name_en' => 'Dell',
                'subsubcategory_name_bn' => 'ডেল',
                'subsubcategory_slug_en' => 'dell',
                'subsubcategory_slug_bn' => 'ডেল',
                'created_at' => '2022-11-05 12:51:47',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'category_id' => 5,
                'subcategory_id' => 4,
                'subsubcategory_name_en' => 'HP',
                'subsubcategory_name_bn' => 'এইচপি',
                'subsubcategory_slug_en' => 'hp',
                'subsubcategory_slug_bn' => 'এইচপি',
                'created_at' => '2022-11-05 12:52:17',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'category_id' => 5,
                'subcategory_id' => 1,
                'subsubcategory_name_en' => 'I-Phone',
                'subsubcategory_name_bn' => 'আইফোন',
                'subsubcategory_slug_en' => 'i-phone',
                'subsubcategory_slug_bn' => 'আইফোন',
                'created_at' => '2022-11-05 12:52:53',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'category_id' => 5,
                'subcategory_id' => 1,
                'subsubcategory_name_en' => 'Samsung',
                'subsubcategory_name_bn' => 'স্যামসাং',
                'subsubcategory_slug_en' => 'samsung',
                'subsubcategory_slug_bn' => 'স্যামসাং',
                'created_at' => '2022-11-05 12:54:51',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'category_id' => 5,
                'subcategory_id' => 4,
                'subsubcategory_name_en' => 'MSI',
                'subsubcategory_name_bn' => 'এমএসআই',
                'subsubcategory_slug_en' => 'msi',
                'subsubcategory_slug_bn' => 'এমএসআই',
                'created_at' => '2022-11-05 13:08:51',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'category_id' => 6,
                'subcategory_id' => 6,
                'subsubcategory_name_en' => 'TUF',
                'subsubcategory_name_bn' => 'টাফ',
                'subsubcategory_slug_en' => 'tuf',
                'subsubcategory_slug_bn' => 'টাফ',
                'created_at' => '2022-11-07 08:53:38',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'category_id' => 6,
                'subcategory_id' => 6,
                'subsubcategory_name_en' => 'ROG',
                'subsubcategory_name_bn' => 'রগ',
                'subsubcategory_slug_en' => 'rog',
                'subsubcategory_slug_bn' => 'রগ',
                'created_at' => '2022-11-07 08:54:03',
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'category_id' => 10,
                'subcategory_id' => 7,
                'subsubcategory_name_en' => 'Gaming RAM',
                'subsubcategory_name_bn' => 'গ্যামিং র‌্যাম',
                'subsubcategory_slug_en' => 'gaming ram',
                'subsubcategory_slug_bn' => 'গ্যামিং র‌্যাম',
                'created_at' => '2022-11-07 08:55:10',
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'category_id' => 10,
                'subcategory_id' => 7,
                'subsubcategory_name_en' => 'Desktop Ram',
                'subsubcategory_name_bn' => 'ডেক্সটপ র‌্যাম',
                'subsubcategory_slug_en' => 'desktop ram',
                'subsubcategory_slug_bn' => 'ডেক্সটপ র‌্যাম',
                'created_at' => '2022-11-07 08:55:43',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}