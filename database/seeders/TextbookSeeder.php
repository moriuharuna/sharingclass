<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class TextbookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('textbooks')->insert([
                'post_id'=>2,
                'department_id'=>1,
                'name' => '国際協力論',
                'condition' => 1,
                'price' => 300,
                'exchange' => 0,
                'supplementaly_information'=> null,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         
        DB::table('textbooks')->insert([
                'department_id'=>2,
                'post_id'=>1,
                'name' => '金融論',
                'condition' => 4,
                'price' => 500,
                'exchange' => 0,
                'supplementaly_information'=> null,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
        DB::table('textbooks')->insert([
                'department_id'=>3,
                'post_id'=>3,
                'name' => 'ミクロ経済学',
                'condition' => 3,
                'price' => 800,
                'exchange' => 1,
                'supplementaly_information'=> null,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}
