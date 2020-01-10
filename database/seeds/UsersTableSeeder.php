<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // 1レコード
  $user = new \App\User([
    'id' => '1',
    'name' => '川端 莉緒',
    'age' => '38',
    'address' => '東京都世田谷区赤堤１−２−３',
    'skintype' => '乾燥肌',
    'skintrouble' => '肌荒れ',
    'favorite_brand' => '資生堂クレドポー',
    'buying_place' => 'ドラッグストア',
  ]);
    $user->save();

         // 2レコード
         $user = new \App\User([
            'id' => '2',
            'name' => '山田花子',
            'age' => '38',
            'address' => '東京都港区西麻布１−２−３',
            'skintype' => '混合肌',
            'skintrouble' => '毛穴',
            'favorite_brand' => 'ランコム',
            'buying_place' => '百貨店',
          ]);
            $user->save();

    // 3レコード
  $user = new \App\User([
    'id' => '3',
    'name' => '吉永美智子',
    'age' => '45',
    'address' => '東京都千代田区麹町１−２−３',
    'skintype' => '乾燥肌',
    'skintrouble' => 'しわ',
    'favorite_brand' => '資生堂クレドポー',
    'buying_place' => '百貨店',
  ]);
    $user->save();

    // 4レコード
 $user = new \App\User([
   'id' => '4',
   'name' => '清水潔子',
   'age' => '43',
   'address' => '東京都渋谷区神宮前２−４−１',
   'skintype' => '混合肌',
   'skintrouble' => '毛穴',
   'favorite_brand' => 'ランコム',
   'buying_place' => '百貨店',
          ]);
            $user->save();

   // 5レコード
   $user = new \App\User([
    'id' => '5',
    'name' => '加藤綾子',
    'age' => '44',
    'address' => '東京都渋谷区神宮前２−３−５',
    'skintype' => '混合肌',
    'skintrouble' => 'たるみ',
    'favorite_brand' => 'ランコム',
    'buying_place' => '百貨店',
           ]);
             $user->save();

  // 6レコード
  $user = new \App\User([
    'id' => '6',
    'name' => '田沢明美',
    'age' => '41',
    'address' => '東京都渋谷区神宮前４−５−５',
    'skintype' => '混合肌',
    'skintrouble' => 'しわ',
             'favorite_brand' => 'ランコム',
             'buying_place' => '百貨店',
           ]);
             $user->save();

 // 7レコード
 $user = new \App\User([
    'id' => '7',
    'name' => '佐藤明美',
    'age' => '41',
    'address' => '東京都新宿区神楽坂４−５−５',
    'skintype' => '混合肌',
    'skintrouble' => 'しわ',
             'favorite_brand' => 'ランコム',
             'buying_place' => '百貨店',
           ]);
             $user->save();

 // 8レコード
 $user = new \App\User([
    'id' => '8',
    'name' => '佐藤晴美',
    'age' => '41',
    'address' => '東京都新宿区神楽坂４−５−５',
    'skintype' => '混合肌',
    'skintrouble' => 'しわ',
             'favorite_brand' => 'アルビオン',
             'buying_place' => '百貨店',
           ]);
             $user->save();

 // 9レコード
 $user = new \App\User([
    'id' => '9',
    'name' => '佐藤夏菜子',
    'age' => '35',
    'address' => '東京都新宿区神楽坂１−２−３',
    'skintype' => '混合肌',
    'skintrouble' => 'しわ',
             'favorite_brand' => 'アルビオン',
             'buying_place' => '百貨店',
           ]);
             $user->save();

// 10レコード
$user = new \App\User([
    'id' => '10',
    'name' => '田村陽子',
    'age' => '35',
    'address' => '東京都新宿区新宿１−２−３',
    'skintype' => '混合肌',
    'skintrouble' => 'しわ',
             'favorite_brand' => 'アルビオン',
             'buying_place' => '百貨店',
           ]);
             $user->save();





    }
}
