<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class FacultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     
    //早稲田大学
    public function run()
    {
        DB::table('faculties')->insert([
                'university_id'=>1,
                'name' => '政治経済学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>1,
                'name' => '法学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>1,
                'name' => '教育学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>1,
                'name' => '商学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('faculties')->insert([
                'university_id'=>1,
                'name' => '社会科学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('faculties')->insert([
                'university_id'=>1,
                'name' => '国際教養学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>1,
                'name' => '文化構想学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>1,
                'name' => '文学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>1,
                'name' => '基幹理工学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>1,
                'name' => '創造理工学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>1,
                'name' => '先進理工学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>1,
                'name' => '人間科学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>1,
                'name' => 'スポーツ科学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         //慶応義塾大学
        DB::table('faculties')->insert([
                'university_id'=>2,
                'name' => '文学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('faculties')->insert([
                'university_id'=>2,
                'name' => '経済学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>2,
                'name' => '法学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>2,
                'name' => '商学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>2,
                'name' => '医学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>2,
                'name' => '理工学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('faculties')->insert([
                'university_id'=>2,
                'name' => '総合政策学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>2,
                'name' => '環境情報学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>2,
                'name' => '看護医療学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>2,
                'name' => '薬学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
    
//明治大学

        DB::table('faculties')->insert([
                'university_id'=>3,
                'name' => '法学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>3,
                'name' => '商学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>3,
                'name' => '政治経済学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>3,
                'name' => '文学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>3,
                'name' => '理工学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>3,
                'name' => '農学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>3,
                'name' => '経営学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>3,
                'name' => '情報コミュニケーション学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('faculties')->insert([
                'university_id'=>3,
                'name' => '国際日本学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>3,
                'name' => '総合数理学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
 
//青山学院大学
   
        DB::table('faculties')->insert([
                'university_id'=>4,
                'name' => '文学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>4,
                'name' => '教育人間科学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>4,
                'name' => '経済学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>4,
                'name' => '法学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>4,
                'name' => '経営学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>4,
                'name' => '国際政治経済学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
  
        DB::table('faculties')->insert([
                'university_id'=>4,
                'name' => '総合文化政策学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>4,
                'name' => '理工学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
  
        DB::table('faculties')->insert([
                'university_id'=>4,
                'name' => '社会情報学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>4,
                'name' => '地球社会共生学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>4,
                'name' => 'コミュニティ人間科学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
//立教大学
  
        DB::table('faculties')->insert([
                'university_id'=>5,
                'name' => '文学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>5,
                'name' => '異文化コミュニケーション学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>5,
                'name' => '経済学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>5,
                'name' => '経営学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>5,
                'name' => '理学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>5,
                'name' => '社会学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>5,
                'name' => '法学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>5,
                'name' => '観光学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('faculties')->insert([
                'university_id'=>5,
                'name' => 'コミュニティ福祉学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>5,
                'name' => '現代心理学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>5,
                'name' => 'スポーツウエルネス学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>5,
                'name' => 'Global Liberal Arts PrograGlobal Liberal Arts Program (GLAP))',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
//中央大学 
   
        DB::table('faculties')->insert([
                'university_id'=>6,
                'name' => '法学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>6,
                'name' => '経済学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>6,
                'name' => '商学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>6,
                'name' => '理工学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>6,
                'name' => '文学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>6,
                'name' => '総合政策学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>6,
                'name' => '国際経営学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>6,
                'name' => '国際情報学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
//法政大学
   
        DB::table('faculties')->insert([
                'university_id'=>7,
                'name' => '法学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>7,
                'name' => '文学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>7,
                'name' => '経済学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('faculties')->insert([
                'university_id'=>7,
                'name' => '社会学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>7,
                'name' => '経営学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>7,
                'name' => '国際文化学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>7,
                'name' => '人間環境学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>7,
                'name' => '現代福祉学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>7,
                'name' => 'キャリアデザイン学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>7,
                'name' => 'GIS (グローバル教養学部)',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>7,
                'name' => 'スポーツ健康学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>7,
                'name' => '情報科学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>7,
                'name' => 'デザイン工学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>7,
                'name' => '理工学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('faculties')->insert([
                'university_id'=>7,
                'name' => '生命科学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);

//日本大学
    
        DB::table('faculties')->insert([
                'university_id'=>8,
                'name' => '法学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>8,
                'name' => '法学部第二部(夜間部)',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('faculties')->insert([
                'university_id'=>8,
                'name' => '文理学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>8,
                'name' => '経済学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('faculties')->insert([
                'university_id'=>8,
                'name' => '商学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>8,
                'name' => '芸術学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>8,
                'name' => '国際関係学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>8,
                'name' => '危機管理学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>8,
                'name' => 'スポーツ科学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
  
        DB::table('faculties')->insert([
                'university_id'=>8,
                'name' => '理工学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>8,
                'name' => '生産工学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>8,
                'name' => '工学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('faculties')->insert([
                'university_id'=>8,
                'name' => '医学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>8,
                'name' => '松戸歯学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         
        DB::table('faculties')->insert([
                'university_id'=>8,
                'name' => '生産医療科学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>8,
                'name' => '薬学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>8,
                'name' => '通信教育部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
//東洋大学
    
        DB::table('faculties')->insert([
                'university_id'=>9,
                'name' => '文学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>9,
                'name' => '経済学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>9,
                'name' => '経営学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>9,
                'name' => '法学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>9,
                'name' => '社会学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>9,
                'name' => '国際学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>9,
                'name' => '国際観光学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>9,
                'name' => '情報連携学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>9,
                'name' => '福祉社会デザイン学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>9,
                'name' => '健康スポーツ科学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>9,
                'name' => '理工学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>9,
                'name' => '総合情報学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>9,
                'name' => '生命科学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>9,
                'name' => '食環境科学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
//駒澤大学
    
        DB::table('faculties')->insert([
                'university_id'=>10,
                'name' => '仏教学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>10,
                'name' => '文学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>10,
                'name' => '経済学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         
        DB::table('faculties')->insert([
                'university_id'=>10,
                'name' => '法学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('faculties')->insert([
                'university_id'=>10,
                'name' => '経営学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>10,
                'name' => '医療健康科学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('faculties')->insert([
                'university_id'=>10,
                'name' => 'グローバル・メディア・スタディーズ学部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}
