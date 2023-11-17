<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class UniversitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('universities')->insert([
                'name' => '早稲田大学',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
           
        DB::table('universities')->insert([
                'name' => '慶応義塾大学',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('universities')->insert([
                'name' => '慶応義塾大学',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('universities')->insert([
                'name' => '明治大学',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('universities')->insert([
                'name' => '青山学院大学',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('universities')->insert([
                'name' => '立教大学',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('universities')->insert([
                'name' => '中央大学',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('universities')->insert([
                'name' => '法政大学',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('universities')->insert([
                'name' => '日本大学',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('universities')->insert([
                'name' => '東洋大学',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('universities')->insert([
                'name' => '駒澤大学',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}
