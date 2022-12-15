<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MigrationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('migrations')->delete();
        
        \DB::table('migrations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'migration' => '2014_10_12_000000_create_users_table',
                'batch' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'migration' => '2014_10_12_100000_create_password_resets_table',
                'batch' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'migration' => '2019_08_19_000000_create_failed_jobs_table',
                'batch' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'migration' => '2019_12_14_000001_create_personal_access_tokens_table',
                'batch' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'migration' => '2022_10_19_020152_create_roles_table',
                'batch' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'migration' => '2022_10_25_043049_create_brands_table',
                'batch' => 2,
            ),
            6 => 
            array (
                'id' => 7,
                'migration' => '2022_10_26_082713_create_categories_table',
                'batch' => 3,
            ),
            7 => 
            array (
                'id' => 8,
                'migration' => '2022_10_26_124636_create_subcategories_table',
                'batch' => 4,
            ),
            8 => 
            array (
                'id' => 9,
                'migration' => '2022_10_28_024954_create_subsubcategories_table',
                'batch' => 5,
            ),
            9 => 
            array (
                'id' => 10,
                'migration' => '2022_10_28_131117_create_products_table',
                'batch' => 6,
            ),
            10 => 
            array (
                'id' => 11,
                'migration' => '2022_10_28_144307_create_multi_imgs_table',
                'batch' => 6,
            ),
            11 => 
            array (
                'id' => 12,
                'migration' => '2022_11_04_141818_create_sliders_table',
                'batch' => 7,
            ),
            12 => 
            array (
                'id' => 13,
                'migration' => '2022_11_13_113952_create_wishlists_table',
                'batch' => 8,
            ),
            13 => 
            array (
                'id' => 14,
                'migration' => '2022_11_15_103355_create_coupons_table',
                'batch' => 9,
            ),
            14 => 
            array (
                'id' => 15,
                'migration' => '2022_11_17_054321_create_ship_divisions_table',
                'batch' => 10,
            ),
            15 => 
            array (
                'id' => 16,
                'migration' => '2022_11_17_054350_create_ship_districts_table',
                'batch' => 10,
            ),
            16 => 
            array (
                'id' => 17,
                'migration' => '2022_11_17_054427_create_ship_states_table',
                'batch' => 10,
            ),
            17 => 
            array (
                'id' => 18,
                'migration' => '2022_11_22_084808_create_shippings_table',
                'batch' => 11,
            ),
            18 => 
            array (
                'id' => 21,
                'migration' => '2022_11_24_024442_create_orders_table',
                'batch' => 12,
            ),
            19 => 
            array (
                'id' => 22,
                'migration' => '2022_11_24_024504_create_order_items_table',
                'batch' => 12,
            ),
        ));
        
        
    }
}