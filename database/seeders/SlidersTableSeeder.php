<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SlidersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sliders')->delete();
        
        \DB::table('sliders')->insert(array (
            0 => 
            array (
                'id' => 2,
                'image' => 'uploads/slider/1748725869375040.jpg',
                'title_en' => 'Natural Travel',
                'title_bn' => 'ন্যাটুরাল ভ্রমন',
                'description_en' => NULL,
                'description_bn' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => '2022-11-06 14:19:18',
            ),
        ));
        
        
    }
}