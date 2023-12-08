<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
                'user_id'=>1,
                'class_name' => '国際協力論',
                'teacher' => '佐藤直史',
                'evaluation' => 'テスト',
                'method' => '0',
                'term' => '1',
                'fulfillment' => '4',
                'obtaining_unit_ease' => '4',
                'textbook_presence' => '0',
                'supplementaly_information'=> 'null',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         
        DB::table('posts')->insert([
                'user_id'=>1,
                'class_name' => 'メディア・コミュニケーション論',
                'teacher' => '高橋徹',
                'evaluation' => 'レポート',
                'method' => '0',
                'term' => '1',
                'fulfillment' => '2',
                'obtaining_unit_ease' => '5',
                'textbook_presence' => '1',
                'supplementaly_information' => 'null',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
        DB::table('posts')->insert([
                'user_id'=>1,
                'class_name' => '国際組織法',
                'teacher' => '雨野統',
                'evaluation' => 'テスト',
                'method' => '0',
                'term' => '0',
                'fulfillment' => '2',
                'obtaining_unit_ease' => '3',
                'textbook_presence' => '0',
                'supplementaly_information'=> 'null',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         
    }
}
