<?php

use Illuminate\Database\Seeder;

class ShipmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shipping_products = [
            '9784167908782' => 'Jimmy',
            '9784800270665' => 'スマホを落としただけなのに',
            '9784334768805' => '舟を編む'
        ];
        foreach ($shipping_products as $product_code => $product_name) {

            $shipment = new \App\Shipment();
            $shipment->product_code = $product_code;
            $shipment->product_name = $product_name;
            $shipment->address = '東京都墨田区押上１丁目１−２';
            $shipment->status = 'shipping'; // 配送中
            $shipment->save();
    }
}

}
