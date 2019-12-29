<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

         //実行対象のSeederクラス
        $this->call(ShipmentsTableSeeder::class);

        Model::reguard();
    }
}

?>
