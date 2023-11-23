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
                'department_id'=>1,
                'name' => 'ab',
                'condition' => '国際協力論',
                'price' => '佐藤直史',
                'supplementaly_information'=> 'null',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         
        DB::table('textbooks')->insert([
                'department_id'=>2,
                'name' => 'aaaaaa',
                'condition' => 'uuuuu',
                'price' => 'yyyyy',
                'supplementaly_information'=> 'null',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
        DB::table('textbooks')->insert([
                'department_id'=>3,
                'name' => 'jjjjjj',
                'condition' => '777777',
                'price' => 'kkkkk',
                'supplementaly_information'=> 'null',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}
