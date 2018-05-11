<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
       DB::table("products-category")->insert([
         'product_id'  => '1',
         'category_id'  => '3',
       ]);

       DB::table("products-category")->insert([
         'product_id'  => '2',
         'category_id'  => '2',
       ]);

       DB::table("products-category")->insert([
         'product_id'  => '3',
         'category_id'  => '1',
       ]);

     }
}
