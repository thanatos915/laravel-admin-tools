<?php

use Illuminate\Database\Seeder;

class AdminOperationLogTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_operation_log')->delete();
        
        
        
    }
}