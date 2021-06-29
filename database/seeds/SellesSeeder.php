<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SellesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Selles')->insert(['part_id'=> 0, 'quantity'=> 1, 'total'=> 211.85, 'customer_id'=>0]);
        DB::table('Selles')->insert(['part_id'=> 2, 'quantity'=> 1, 'total'=> 1549.99, 'customer_id'=>0]);
        DB::table('Selles')->insert(['part_id'=> 1, 'quantity'=> 5, 'total'=> 211.85, 'customer_id'=>1]);
        DB::table('Selles')->insert(['part_id'=> 1, 'quantity'=> 1, 'total'=> 1589.50, 'customer_id'=>2]);
        DB::table('Selles')->insert(['part_id'=> 2, 'quantity'=> 1, 'total'=> 1549.99, 'customer_id'=>2]);
    }
}
