<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Sajjad',
                'phone' => '01719041636',
                'role_id' => 2,
                'is_bann' => 0,
                'last_seen' => '2022-12-18 11:41:03',
                'email' => 'Sajjad@gmail.com',
                'image' => 'fontend/media/1747470681836773.jpg',
                'email_verified_at' => NULL,
                'password' => '$2y$10$L7fducF8ORM0WDpakUgUIOCTsP.4gMAkvJMHUnhjLuxwS.fzlJFLW',
                'remember_token' => NULL,
                'created_at' => '2022-10-22 04:21:36',
                'updated_at' => '2022-12-18 11:47:08',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Sajjad',
                'phone' => '01719041636',
                'role_id' => 2,
                'is_bann' => 0,
                'last_seen' => '2022-12-26 06:52:30',
                'email' => 'sajjad.develpr@gmail.com',
                'image' => 'fontend/media/h.jpg',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Pnzirdt4I2.H1RMEPv78I.FkYOmZVI3SWBo06PvpNPlTx9ocqbuLG',
                'remember_token' => 'nkX7mMRsVIZ2Xt9DSqkvK2MuGilioo4t8wOaXSysDAcLkclubccuUH40gBsl',
                'created_at' => '2022-10-22 10:10:02',
                'updated_at' => '2022-12-26 06:52:30',
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'Admin',
                'phone' => '01303141330',
                'role_id' => 1,
                'is_bann' => 0,
                'last_seen' => '2022-12-26 10:39:09',
                'email' => 'admin@gmail.com',
                'image' => 'fontend/media/h.jpg',
                'email_verified_at' => NULL,
                'password' => '$2y$10$PkU2lVVWH9gUSo.l0ogtGunXvyxDymcGRmjsmcZJzCM3uGBkKneme',
                'remember_token' => NULL,
                'created_at' => '2022-10-24 07:57:30',
                'updated_at' => '2022-12-26 10:39:09',
            ),
        ));
        
        
    }
}