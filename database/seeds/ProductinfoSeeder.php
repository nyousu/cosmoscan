<?php

use Illuminate\Database\Seeder;

class ProductinfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productinfo = factory(App\Productinfo::class, 10)->create();
    }
}
