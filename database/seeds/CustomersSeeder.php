<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert(['name'=> 'Ail', 'phone'=> 554567890]);
        DB::table('customers')->insert(['name'=> 'khaled', 'phone'=> 555162485]);
        DB::table('customers')->insert(['name'=> 'saleh', 'phone'=> 557485962]);
    }
}
