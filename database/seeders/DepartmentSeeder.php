<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
// 早稲田大学    
    public function run()
    {
        DB::table('departments')->insert([
                'university_id'=>1,
                'faculty_id'=>1,
                'name' => '政治学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>1,
                'faculty_id'=>1,
                'name' => '経済学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>1,
                'faculty_id'=>1,
                'name' => '国際政治経済学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>1,
                'faculty_id'=>3,
                'name' => '教育学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>1,
                'faculty_id'=>3,
                'name' => '国語国文学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>1,
                'faculty_id'=>3,
                'name' => '英語英文学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>1,
                'faculty_id'=>3,
                'name' => '社会科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>1,
                'faculty_id'=>3,
                'name' => '理学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>1,
                'faculty_id'=>3,
                'name' => '数学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>1,
                'faculty_id'=>3,
                'name' => '複合文化学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>1,
                'faculty_id'=>5,
                'name' => '社会科学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>1,
                'faculty_id'=>6,
                'name' => '国際教養学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>1,
                'faculty_id'=>7,
                'name' => '文化構想学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>1,
                'faculty_id'=>8,
                'name' => '文学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>1,
                'faculty_id'=>9,
                'name' => '数学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>1,
                'faculty_id'=>9,
                'name' => '応用数理学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>1,
                'faculty_id'=>9,
                'name' => '機械科学・航空宇宙学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>1,
                'faculty_id'=>9,
                'name' => '電子物理システム学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>1,
                'faculty_id'=>9,
                'name' => '情報理工学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>1,
                'faculty_id'=>9,
                'name' => '情報通信学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>1,
                'faculty_id'=>9,
                'name' => '表現工学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>1,
                'faculty_id'=>10,
                'name' => '建築学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>1,
                'faculty_id'=>10,
                'name' => '総合機械工学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>1,
                'faculty_id'=>10,
                'name' => '総合システム工学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>1,
                'faculty_id'=>10,
                'name' => '社会環境工学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>1,
                'faculty_id'=>10,
                'name' => '環境資源工学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>1,
                'faculty_id'=>11,
                'name' => '物理学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>1,
                'faculty_id'=>11,
                'name' => '応用物理学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>1,
                'faculty_id'=>11,
                'name' => '化学・生命科学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>1,
                'faculty_id'=>11,
                'name' => '応用科学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>1,
                'faculty_id'=>11,
                'name' => '生命医化学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>1,
                'faculty_id'=>11,
                'name' => '電気・情報生命工学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>1,
                'faculty_id'=>12,
                'name' => '人間環境科学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>1,
                'faculty_id'=>12,
                'name' => '健康福祉科学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>1,
                'faculty_id'=>12,
                'name' => '人間情報科学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>1,
                'faculty_id'=>13,
                'name' => 'スポーツ科学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
    
//慶応義塾大学
   
        DB::table('departments')->insert([
                'university_id'=>2,
                'faculty_id'=>14,
                'name' => '人間社会学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>2,
                'faculty_id'=>15,
                'name' => '経済学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>2,
                'faculty_id'=>16,
                'name' => '法律学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>2,
                'faculty_id'=>16,
                'name' => '政治学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>2,
                'faculty_id'=>17,
                'name' => '商学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>2,
                'faculty_id'=>18,
                'name' => '医学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>2,
                'faculty_id'=>19,
                'name' => '機械工学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>2,
                'faculty_id'=>19,
                'name' => '電気情報工学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>2,
                'faculty_id'=>19,
                'name' => '応用化学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>2,
                'faculty_id'=>19,
                'name' => '物理情報工学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>2,
                'faculty_id'=>19,
                'name' => '管理工学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>2,
                'faculty_id'=>19,
                'name' => '数理科学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>2,
                'faculty_id'=>19,
                'name' => '物理学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>2,
                'faculty_id'=>19,
                'name' => '化学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>2,
                'faculty_id'=>19,
                'name' => 'システムデザイン工学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>2,
                'faculty_id'=>19,
                'name' => '情報工学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>2,
                'faculty_id'=>19,
                'name' => '生命情報学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>2,
                'faculty_id'=>20,
                'name' => '総合政策学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>2,
                'faculty_id'=>21,
                'name' => '環境情報学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>2,
                'faculty_id'=>22,
                'name' => '看護学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>2,
                'faculty_id'=>23,
                'name' => '薬学科(6年制)',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>2,'faculty_id'=>23,
                'name' => '薬学科(4年制)',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
//明治大学
   
        DB::table('departments')->insert([
                'university_id'=>3,
                'faculty_id'=>24,
                'name' => '法律学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>3,
                'faculty_id'=>25,
                'name' => '商学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>3,
                'faculty_id'=>26,
                'name' => '政治学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>3,
                'faculty_id'=>26,
                'name' => '経済学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>3,
                'faculty_id'=>26,
                'name' => '地域行政学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>3,
                'faculty_id'=>27,
                'name' => '文学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>3,
                'faculty_id'=>27,
                'name' => '史学地理学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>3,
                'faculty_id'=>27,
                'name' => '心理社会学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>3,
                'faculty_id'=>28,
                'name' => '電気電子生命学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>3,
                'faculty_id'=>28,
                'name' => '機械工学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>3,
                'faculty_id'=>28,
                'name' => '機械情報工学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>3,
                'faculty_id'=>28,
                'name' => '建築学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>3,
                'faculty_id'=>28,
                'name' => '応用化学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>3,
                'faculty_id'=>28,
                'name' => '情報科学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>3,
                'faculty_id'=>28,
                'name' => '数学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>3,
                'faculty_id'=>28,
                'name' => '物理学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>3,
                'faculty_id'=>29,
                'name' => '農学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>3,
                'faculty_id'=>29,
                'name' => '農芸化学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>3,
                'faculty_id'=>29,
                'name' => '生命科学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>3,
                'faculty_id'=>29,
                'name' => '食料環境政策学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>3,
                'faculty_id'=>30,
                'name' => '経営学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>3,
                'faculty_id'=>30,
                'name' => '会計学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>3,
                'faculty_id'=>30,
                'name' => '公共経営学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>3,
                'faculty_id'=>31,
                'name' => '情報コミュニケーション学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>3,
                'faculty_id'=>32,
                'name' => '国際日本学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>3,
                'faculty_id'=>33,
                'name' => '現象数理学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>3,
                'faculty_id'=>33,
                'name' => '先端メディアサイエンス学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>3,
                'faculty_id'=>33,
                'name' => 'ネットワークデザイン学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
    
    //青山学院大学
   
        DB::table('departments')->insert([
                'university_id'=>4,
                'faculty_id'=>34,
                'name' => '英米文学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>4,
                'faculty_id'=>34,
                'name' => 'フランス文学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>4,
                'faculty_id'=>34,
                'name' => '日本文学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>4,
                'faculty_id'=>34,
                'name' => '史学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>4,
                'faculty_id'=>34,
                'name' => '比較芸術学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>4,
                'faculty_id'=>35,
                'name' => '教育学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>4,
                'faculty_id'=>35,
                'name' => '心理学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>4,
                'faculty_id'=>36,
                'name' => '経済学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>4,
                'faculty_id'=>36,
                'name' => '現代経済デザイン学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>4,
                'faculty_id'=>37,
                'name' => '法学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>4,
                'faculty_id'=>37,
                'name' => 'ヒューマンライツ学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>4,
                'faculty_id'=>38,
                'name' => '経営学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>4,
                'faculty_id'=>38,
                'name' => 'マーケティング学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>4,
                'faculty_id'=>39,
                'name' => '国際政治学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>4,
                'faculty_id'=>39,
                'name' => '国際経済学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>4,
                'faculty_id'=>39,
                'name' => '国際コミュニケーション学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>4,
                'faculty_id'=>40,
                'name' => '総合文化政策学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>4,
                'faculty_id'=>41,
                'name' => '物理科学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>4,
                'faculty_id'=>41,
                'name' => '物理サイエンス学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>4,
                'faculty_id'=>41,
                'name' => '化学・生命科学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>4,
                'faculty_id'=>41,
                'name' => '電気電子工学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>4,
                'faculty_id'=>41,
                'name' => '機械創造工学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>4,
                'faculty_id'=>41,
                'name' => '経営システム工学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>4,
                'faculty_id'=>41,
                'name' => '情報テクノロジー学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>4,
                'faculty_id'=>42,
                'name' => '社会情報学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>4,
                'faculty_id'=>43,
                'name' => '地球社会共生学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>4,
                'faculty_id'=>44,
                'name' => 'コミュニティ人間科学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
    
//立教大学
   
        DB::table('departments')->insert([
                'university_id'=>5,
                'faculty_id'=>45,
                'name' => 'キリスト教学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>5,
                'faculty_id'=>45,
                'name' => '文学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>5,
                'faculty_id'=>45,
                'name' => '史学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>5,
                'faculty_id'=>45,
                'name' => '教育学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>5,
                'faculty_id'=>46,
                'name' => '異文化コミュニケーション学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>5,
                'faculty_id'=>46,
                'name' => '経済学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>5,
                'faculty_id'=>46,
                'name' => '経済政策学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>5,
                'faculty_id'=>46,
                'name' => '会計ファイナンス学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>5,
                'faculty_id'=>47,
                'name' => '経営学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>5,
                'faculty_id'=>47,
                'name' => '国際経営学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>5,
                'faculty_id'=>48,
                'name' => '数学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>5,
                'faculty_id'=>48,
                'name' => '物理学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>5,
                'faculty_id'=>48,
                'name' => '化学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>5,
                'faculty_id'=>48,
                'name' => '生命理学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>5,
                'faculty_id'=>49,
                'name' => '社会学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>5,
                'faculty_id'=>49,
                'name' => '現代文化学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>5,
                'faculty_id'=>49,
                'name' => 'メディア社会学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>4,
                'faculty_id'=>50,
                'name' => '法学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>5,
                'faculty_id'=>50,
                'name' => '国際ビジネス法学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>5,
                'faculty_id'=>50,
                'name' => '政治学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>5,
                'faculty_id'=>51,
                'name' => '観光学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>5,
                'faculty_id'=>51,
                'name' => '交流文化学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>5,
                'faculty_id'=>52,
                'name' => 'コミュニティ政策学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>5,
                'faculty_id'=>52,
                'name' => '福祉学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>5,
                'faculty_id'=>53,
                'name' => '心理学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>5,
                'faculty_id'=>53,
                'name' => '映像身体学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>5,
                'faculty_id'=>54,
                'name' => 'スポーツウエルネス学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>5,
                'faculty_id'=>55,
                'name' => 'Global Liberal Arts Program (GLAP)',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
    
    //中央大学
    
        DB::table('departments')->insert([
                'university_id'=>6,
                'faculty_id'=>56,
                'name' => '法律学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>6,
                'faculty_id'=>56,
                'name' => '国際企業関係法学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>6,
                'faculty_id'=>56,
                'name' => '政治学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>6,
                'faculty_id'=>57,
                'name' => '経済学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>6,
                'faculty_id'=>57,
                'name' => '経済情報システム学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>6,
                'faculty_id'=>57,
                'name' => '国際経済学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>6,
                'faculty_id'=>57,
                'name' => '公共・環境経済学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>6,
                'faculty_id'=>58,
                'name' => '経営学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>6,
                'faculty_id'=>58,
                'name' => '会計学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>6,
                'faculty_id'=>58,
                'name' => '国際マーケティング学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>6,
                'faculty_id'=>58,
                'name' => '金融学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>6,
                'faculty_id'=>59,
                'name' => '数学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>6,
                'faculty_id'=>59,
                'name' => '物理学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>6,
                'faculty_id'=>59,
                'name' => '都市環境学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>6,
                'faculty_id'=>59,
                'name' => '精密機械工学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>6,
                'faculty_id'=>59,
                'name' => '電気電子情報通信工学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>6,
                'faculty_id'=>59,
                'name' => '応用化学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>6,
                'faculty_id'=>59,
                'name' => 'ビジネスデータサイエンス学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>6,
                'faculty_id'=>59,
                'name' => '情報工学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>6,
                'faculty_id'=>59,
                'name' => '生命科学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>6,
                'faculty_id'=>59,
                'name' => '人間総合理工学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>6,
                'faculty_id'=>60,
                'name' => '人文社会学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>6,
                'faculty_id'=>61,
                'name' => '政策科学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>6,
                'faculty_id'=>61,
                'name' => '国際政策文化学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>6,
                'faculty_id'=>62,
                'name' => '国際経営学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>6,
                'faculty_id'=>63,
                'name' => '国際情報学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
    
//法政大学
    
        DB::table('departments')->insert([
                'university_id'=>7,
                'faculty_id'=>64,
                'name' => '法律学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>7,
                'faculty_id'=>64,
                'name' => '政治学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>7,
                'faculty_id'=>64,
                'name' => '国際政治学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>7,
                'faculty_id'=>65,
                'name' => '哲学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>7,
                'faculty_id'=>65,
                'name' => '日本文学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>7,
                'faculty_id'=>65,
                'name' => '英文学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>7,
                'faculty_id'=>65,
                'name' => '史学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>7,
                'faculty_id'=>65,
                'name' => '地理学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>7,
                'faculty_id'=>65,
                'name' => '心理学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>7,
                'faculty_id'=>66,
                'name' => '経済学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>7,
                'faculty_id'=>66,
                'name' => '国際経済学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>7,
                'faculty_id'=>66,
                'name' => '現代ビジネス学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>7,
                'faculty_id'=>67,
                'name' => '社会政策学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>7,
                'faculty_id'=>67,
                'name' => '社会学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>7,
                'faculty_id'=>67,
                'name' => 'メディア社会学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>7,
                'faculty_id'=>68,
                'name' => '経営学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>7,
                'faculty_id'=>67,
                'name' => '経営戦略学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>7,
                'faculty_id'=>67,
                'name' => '市場経営学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>7,
                'faculty_id'=>68,
                'name' => '国際文化学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>7,
                'faculty_id'=>69,
                'name' => '人間環境学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>7,
                'faculty_id'=>70,
                'name' => '福祉コミュニティ学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>7,
                'faculty_id'=>70,
                'name' => '臨床心理学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>7,
                'faculty_id'=>71,
                'name' => 'キャリアデザイン学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>7,
                'faculty_id'=>72,
                'name' => 'グローバル教養学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>7,
                'faculty_id'=>73,
                'name' => 'スポーツ健康学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>7,
                'faculty_id'=>74,
                'name' => 'コンピュータ科学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>7,
                'faculty_id'=>74,
                'name' => 'ディジタルメディア学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>7,
                'faculty_id'=>75,
                'name' => '建築学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>7,
                'faculty_id'=>75,
                'name' => '都市環境デザイン工学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>7,
                'faculty_id'=>75,
                'name' => 'システムデザイン学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>7,
                'faculty_id'=>76,
                'name' => '機械工学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>7,
                'faculty_id'=>76,
                'name' => '電気電子工学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>7,
                'faculty_id'=>76,
                'name' => '応用情報工学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>7,
                'faculty_id'=>76,
                'name' => '経営システム工学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>7,
                'faculty_id'=>76,
                'name' => '創生科学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>7,
                'faculty_id'=>77,
                'name' => '生命機能学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
  
        DB::table('departments')->insert([
                'university_id'=>7,
                'faculty_id'=>77,
                'name' => '環境応用化学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>7,
                'faculty_id'=>77,
                'name' => '応用植物科学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
    
//日本大学
   
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>78,
                'name' => '法律学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>78,
                'name' => '政治経済学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>78,
                'name' => '新聞学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>78,
                'name' => '経営法学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
  
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>78,
                'name' => '公共政策学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>79,
                'name' => '法律学科第二部(夜間部)',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>80,
                'name' => '哲学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>80,
                'name' => '史学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>80,
                'name' => '国文学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>80,
                'name' => '中国語中国文化学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>80,
                'name' => '英文学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>80,
                'name' => 'ドイツ文学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>80,
                'name' => '社会学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>80,
                'name' => '社会福祉学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>80,
                'name' => '教育学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>80,
                'name' => '体育学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>80,
                'name' => '心理学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>80,
                'name' => '地理学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>80,
                'name' => '地球科学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>80,
                'name' => '数学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>80,
                'name' => '情報科学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>80,
                'name' => '物理学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>80,
                'name' => '生命科学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>80,
                'name' => '化学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>81,
                'name' => '経済学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>81,
                'name' => '産業経営学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>81,
                'name' => '金融公共経済学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>82,
                'name' => '商業学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>82,
                'name' => '経営学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>82,
                'name' => '会計学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>83,
                'name' => '写真学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>83,
                'name' => '映画学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>83,
                'name' => '美術学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>83,
                'name' => '音楽学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>83,
                'name' => '文芸学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>83,
                'name' => '演劇学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>83,
                'name' => '放送学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>83,
                'name' => 'デザイン学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>84,
                'name' => '国際総合政策学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>84,
                'name' => '国際教養学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>85,
                'name' => '危機管理学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>86,
                'name' => '競技スポーツ学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>87,
                'name' => '土木工学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>87,
                'name' => '交通システム工学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>87,
                'name' => '建築学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>87,
                'name' => '海洋建築学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>87,
                'name' => 'まちづくり工学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>87,
                'name' => '機械工学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>87,
                'name' => '精密機械工学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>87,
                'name' => '航空宇宙工学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>87,
                'name' => '電気工学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>87,
                'name' => '電子工学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>87,
                'name' => '応用情報工工学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>87,
                'name' => '物質応用化学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>87,
                'name' => '物理学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>87,
                'name' => '数学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>88,
                'name' => '機械工学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>88,
                'name' => '電気電子工学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>88,
                'name' => '土木工学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>88,
                'name' => '建築工学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>88,
                'name' => '応用分子化学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>88,
                'name' => 'マネジメント工学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>88,
                'name' => '数理情報工学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>88,
                'name' => '環境安全工学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>88,
                'name' => '創生デザイン学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>89,
                'name' => '土木工学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>89,
                'name' => '建築学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>89,
                'name' => '機械工学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>89,
                'name' => '電気電子工学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>89,
                'name' => '生命応用化学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>89,
                'name' => '情報工学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>90,
                'name' => '医学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>91,
                'name' => '歯学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>92,
                'name' => '歯学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>93,
                'name' => 'バイオサイエンス学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>93,
                'name' => '動物学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>93,
                'name' => '海洋生物学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>93,
                'name' => '森林学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>93,
                'name' => '環境学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>93,
                'name' => 'アグリサイエンス学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>93,
                'name' => '食品開発学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>93,
                'name' => '食品ビジネス学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>93,
                'name' => '国際共生学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>93,
                'name' => '獣医保険看護学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>93,
                'name' => '獣医学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>8,
                'faculty_id'=>94,
                'name' => '薬学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
    
//東洋大学    
   
        DB::table('departments')->insert([
                'university_id'=>9,
                'faculty_id'=>95,
                'name' => '哲学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>9,
                'faculty_id'=>95,
                'name' => '東洋思想文学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>9,
                'faculty_id'=>95,
                'name' => '日本文学文化学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>9,
                'faculty_id'=>95,
                'name' => '英米文学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>9,
                'faculty_id'=>95,
                'name' => '史学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>9,
                'faculty_id'=>95,
                'name' => '教育学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>9,
                'faculty_id'=>95,
                'name' => '国際文化コミュニケーション学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>9,
                'faculty_id'=>95,
                'name' => '東洋思想文学科(第2部・イブニングコース(夜))',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>9,
                'faculty_id'=>95,
                'name' => '日本文学文化学科(第2部・イブニングコース(夜))',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>9,
                'faculty_id'=>95,
                'name' => '教育学科(第2部・イブニングコース(夜))',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>9,
                'faculty_id'=>96,
                'name' => '経済学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>9,
                'faculty_id'=>96,
                'name' => '国際経済学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>9,
                'faculty_id'=>96,
                'name' => '総合政策学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>9,
                'faculty_id'=>96,
                'name' => '経済学科(第2部・イブニングコース(夜))',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>9,
                'faculty_id'=>97,
                'name' => '経営学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>9,
                'faculty_id'=>97,
                'name' => 'マーケティング学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>9,
                'faculty_id'=>97,
                'name' => '会計ファイナンス学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>9,
                'faculty_id'=>97,
                'name' => '経営学科(第2部・イブニングコース(夜)',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>9,
                'faculty_id'=>98,
                'name' => '法律学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>9,
                'faculty_id'=>98,
                'name' => '企業法学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>9,
                'faculty_id'=>98,
                'name' => '法律学科(第2部・イブニングコース(夜)',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>9,
                'faculty_id'=>99,
                'name' => '社会学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>9,
                'faculty_id'=>99,
                'name' => '国際社会学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>9,
                'faculty_id'=>99,
                'name' => 'メディアコミュニケーション学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>9,
                'faculty_id'=>99,
                'name' => '社会心理学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>9,
                'faculty_id'=>99,
                'name' => '社会学科(第2部・イブニングコース(夜)',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>9,
                'faculty_id'=>100,
                'name' => 'グローバル・イノベーション学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>9,
                'faculty_id'=>100,
                'name' => '国際地域学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>9,
                'faculty_id'=>101,
                'name' => '国際観光学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>9,
                'faculty_id'=>102,
                'name' => '情報連携学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>9,
                'faculty_id'=>103,
                'name' => '社会福祉学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>9,
                'faculty_id'=>103,
                'name' => '子ども支援学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>9,
                'faculty_id'=>103,
                'name' => '人間環境デザイン学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>9,
                'faculty_id'=>104,
                'name' => '健康スポーツ科学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>9,
                'faculty_id'=>104,
                'name' => '栄養科学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>9,
                'faculty_id'=>105,
                'name' => '機械工学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>9,
                'faculty_id'=>105,
                'name' => '電気電子情報工学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>9,
                'faculty_id'=>105,
                'name' => '応用化学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>9,
                'faculty_id'=>105,
                'name' => '都市環境デザイン学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>9,
                'faculty_id'=>105,
                'name' => '建築学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        DB::table('departments')->insert([
                'university_id'=>9,
                'faculty_id'=>106,
                'name' => '総合情報学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         
        DB::table('departments')->insert([
                'university_id'=>9,
                'faculty_id'=>107,
                'name' => '生命科学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>9,
                'faculty_id'=>107,
                'name' => '生体医工学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>9,
                'faculty_id'=>107,
                'name' => '生物資源学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>9,
                'faculty_id'=>108,
                'name' => '食環境科学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>9,
                'faculty_id'=>108,
                'name' => 'フードデータサイエンス学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>9,
                'faculty_id'=>108,
                'name' => '健康栄養学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
    
//駒澤大学
   
        DB::table('departments')->insert([
                'university_id'=>10,
                'faculty_id'=>109,
                'name' => '禅学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
  
        DB::table('departments')->insert([
                'university_id'=>10,
                'faculty_id'=>109,
                'name' => '仏教学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>10,
                'faculty_id'=>110,
                'name' => '国文学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>10,
                'faculty_id'=>110,
                'name' => '英米文学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>10,
                'faculty_id'=>110,
                'name' => '地理学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>10,
                'faculty_id'=>110,
                'name' => '歴史学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>10,
                'faculty_id'=>110,
                'name' => '社会学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>10,
                'faculty_id'=>110,
                'name' => '心理学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>10,
                'faculty_id'=>111,
                'name' => '経済学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>10,
                'faculty_id'=>111,
                'name' => '商学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>10,
                'faculty_id'=>111,
                'name' => '現代応用経済学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>10,
                'faculty_id'=>112,
                'name' => '法律学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>10,
                'faculty_id'=>112,
                'name' => '政治学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>10,
                'faculty_id'=>113,
                'name' => '経営学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    
        DB::table('departments')->insert([
                'university_id'=>10,
                'faculty_id'=>113,
                'name' => '市場戦略学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>10,
                'faculty_id'=>114,
                'name' => '診療放射線技術科学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
   
        DB::table('departments')->insert([
                'university_id'=>10,
                'faculty_id'=>115,
                'name' => 'グローバル・メディア学科',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
    
}
