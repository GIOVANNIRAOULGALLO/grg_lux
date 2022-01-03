<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $categories=['Clothing','Accessories','Shoes','Bags','House','Premium'];
        // foreach($categories as $category){
        //     DB::table('categories')->insert([
        //         'name'=>$category,
        //         'created_at'=>Carbon::now(),
        //         'updated_at'=>Carbon::now()
        //     ]);
        // }
        // $brands=['Armani','Prada','Gucci','Fendi','Givenchy','Yves Saint Laurent'];
        // foreach($brands as $brand){
        //     DB::table('brands')->insert([
        //         'name'=>$brand,
        //         'created_at'=>Carbon::now(),
        //         'updated_at'=>Carbon::now()
        //     ]);
        //}
    }
}
