<?php

use Illuminate\Database\Seeder;

class AdminUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_users')->delete();
        
        \DB::table('admin_users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'username' => 'admin',
                'password' => '$2y$10$GtvqsCYbEqgLtnbUvMBBO.9laaD0B0UlP8ZbzzvODTFFhdMi8ar..',
                'name' => 'Administrator',
                'avatar' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-09-10 02:27:29',
                'updated_at' => '2020-09-10 02:27:29',
            ),
        ));
        
        
    }
}