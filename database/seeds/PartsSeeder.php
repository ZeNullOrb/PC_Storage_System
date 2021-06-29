<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('parts')->insert(['title'=> 'cpu i5-10th', 'quantity'=> 3, 'price'=> 211.85]);
        DB::table('parts')->insert(['title'=> 'cpu i7-11th', 'quantity'=> 7, 'price'=> 317.90]);
        DB::table('parts')->insert(['title'=> 'gpu 3070 ti', 'quantity'=> 2, 'price'=> 1549.99]);
    }
}
