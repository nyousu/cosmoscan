<?php

use Faker\Generator as Faker;

$factory->define(App\Productinfo::class, function (Faker $faker) {
    return [
        'product_name' => $faker->name,
        'product_quantity' => $faker->numberBetween(30,100) ."\n",
        'product_price' => $faker->numberBetween(500,30000) ."\n",
        'product_brand' => $faker->randomElement(['資生堂', 'コーセー', '花王', 'アルビオン', 'カネボウ', 'ロート製薬', 'ノエビア']) . "\n",
        'product_effect' => $faker->randomElements(['保湿', '美白', 'エイジングケア', '毛穴引き締め', 'リンクルケア', '引き締め', 'くすみ'], 2),
        'product_place' => $faker->randomElement(['ドラッグストア', '百貨店', 'コンビニエンスストア', '量販店', '通販', '直営店', 'バラエティストア']) . "\n",
        'product_jan'=> $faker->creditCardNumber,

    ];
});
