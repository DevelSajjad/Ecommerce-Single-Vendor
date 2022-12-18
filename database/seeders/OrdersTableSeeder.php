<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('orders')->delete();
        
        \DB::table('orders')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 2,
                'division_id' => 1,
                'district_id' => 3,
                'state_id' => 3,
                'post_code' => 5280,
                'name' => 'Mamun',
                'email' => 'mamun@gmail.com',
                'phone' => '01751151078',
                'note' => '',
                'payment_type' => NULL,
                'payment_method' => 'SSL Easy',
                'transaction_id' => '6399b73e75efe',
                'currency' => 'BDT',
                'amount' => 200000.0,
                'order_number' => NULL,
                'invoice_no' => 'GML45374338',
                'order_date' => '14 December 2022',
                'order_month' => 'December',
                'order_year' => '2022',
                'confirm_date' => NULL,
                'processing_date' => NULL,
                'shipped_date' => NULL,
                'picked_date' => NULL,
                'delivered_date' => NULL,
                'cancel_date' => NULL,
                'return_date' => NULL,
                'return_reason' => NULL,
                'status' => 'Processing',
                'created_at' => '2022-12-14 11:45:02',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 2,
                'division_id' => 1,
                'district_id' => 3,
                'state_id' => 3,
                'post_code' => 5280,
                'name' => 'Mamun',
                'email' => 'mamun@gmail.com',
                'phone' => '01751151078',
                'note' => '',
                'payment_type' => NULL,
                'payment_method' => 'SSL Easy',
                'transaction_id' => '6399b73fe554d',
                'currency' => 'BDT',
                'amount' => 200000.0,
                'order_number' => NULL,
                'invoice_no' => 'GML65698393',
                'order_date' => '14 December 2022',
                'order_month' => 'December',
                'order_year' => '2022',
                'confirm_date' => NULL,
                'processing_date' => NULL,
                'shipped_date' => NULL,
                'picked_date' => NULL,
                'delivered_date' => NULL,
                'cancel_date' => NULL,
                'return_date' => NULL,
                'return_reason' => NULL,
                'status' => 'Processing',
                'created_at' => '2022-12-14 11:45:03',
                'updated_at' => '2022-12-14 13:50:33',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 2,
                'division_id' => 1,
                'district_id' => 3,
                'state_id' => 3,
                'post_code' => 5280,
                'name' => 'Mamun',
                'email' => 'mamun@gmail.com',
                'phone' => '01751151078',
                'note' => NULL,
                'payment_type' => 'stripe',
                'payment_method' => NULL,
                'transaction_id' => 'txn_3MEtQVIvvg37wLtG2t3ol8Iy',
                'currency' => 'bdt',
                'amount' => 50500.0,
                'order_number' => '6399b7baa5cfc',
                'invoice_no' => 'SML84194510',
                'order_date' => '14 December 2022',
                'order_month' => 'December',
                'order_year' => '2022',
                'confirm_date' => NULL,
                'processing_date' => NULL,
                'shipped_date' => NULL,
                'picked_date' => NULL,
                'delivered_date' => NULL,
                'cancel_date' => NULL,
                'return_date' => NULL,
                'return_reason' => NULL,
                'status' => 'Processing',
                'created_at' => '2022-12-14 11:47:11',
                'updated_at' => '2022-12-14 13:44:02',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 2,
                'division_id' => 1,
                'district_id' => 3,
                'state_id' => 3,
                'post_code' => 5280,
                'name' => 'Mamun',
                'email' => 'mamun@gmail.com',
                'phone' => '01751151078',
                'note' => NULL,
                'payment_type' => NULL,
                'payment_method' => 'SSL Host',
                'transaction_id' => '6399b80ef020c',
                'currency' => 'BDT',
                'amount' => 178000.0,
                'order_number' => NULL,
                'invoice_no' => 'GML95961114',
                'order_date' => '14 December 2022',
                'order_month' => 'December',
                'order_year' => '2022',
                'confirm_date' => NULL,
                'processing_date' => NULL,
                'shipped_date' => NULL,
                'picked_date' => NULL,
                'delivered_date' => NULL,
                'cancel_date' => NULL,
                'return_date' => NULL,
                'return_reason' => NULL,
                'status' => 'Picked',
                'created_at' => '2022-12-14 11:48:30',
                'updated_at' => '2022-12-14 14:51:43',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 2,
                'division_id' => 1,
                'district_id' => 3,
                'state_id' => 3,
                'post_code' => 5280,
                'name' => 'Mamun',
                'email' => 'mamun@gmail.com',
                'phone' => '01751151078',
                'note' => '',
                'payment_type' => NULL,
                'payment_method' => 'SSL Easy',
                'transaction_id' => '6399b952db137',
                'currency' => 'BDT',
                'amount' => 50500.0,
                'order_number' => NULL,
                'invoice_no' => 'GML13487643',
                'order_date' => '14 December 2022',
                'order_month' => 'December',
                'order_year' => '2022',
                'confirm_date' => NULL,
                'processing_date' => NULL,
                'shipped_date' => NULL,
                'picked_date' => NULL,
                'delivered_date' => NULL,
                'cancel_date' => NULL,
                'return_date' => NULL,
                'return_reason' => NULL,
                'status' => 'Cancel',
                'created_at' => '2022-12-14 11:53:54',
                'updated_at' => '2022-12-14 15:04:21',
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 2,
                'division_id' => 1,
                'district_id' => 3,
                'state_id' => 3,
                'post_code' => 5280,
                'name' => 'Mamun',
                'email' => 'mamun@gmail.com',
                'phone' => '01751151078',
                'note' => '',
                'payment_type' => NULL,
                'payment_method' => 'SSL Easy',
                'transaction_id' => '6399b9543442d',
                'currency' => 'BDT',
                'amount' => 50500.0,
                'order_number' => NULL,
                'invoice_no' => 'GML92534114',
                'order_date' => '14 December 2022',
                'order_month' => 'December',
                'order_year' => '2022',
                'confirm_date' => NULL,
                'processing_date' => NULL,
                'shipped_date' => NULL,
                'picked_date' => NULL,
                'delivered_date' => NULL,
                'cancel_date' => NULL,
                'return_date' => '15 December 2022',
                'return_reason' => 'asfd',
                'status' => 'Delivered',
                'created_at' => '2022-12-14 11:53:56',
                'updated_at' => '2022-12-15 05:26:46',
            ),
        ));
        
        
    }
}