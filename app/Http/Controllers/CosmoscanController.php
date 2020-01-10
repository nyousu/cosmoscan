<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cosmoscan;
use App\Productinfo;
use App\Skintrouble;
use App\Skintype;

//新しく読みこんで使用する場合に書く

class CosmoscanController extends Controller
{
    public function getIndexPage() {

        $cosmoscans = Cosmoscan::all(); //指定したテーブル全てを表示
        //var_dump($cosmoscans);

          return view('cosmoscan.index',['cosmoscans'=>$cosmoscans]);//矢印左側がblade上で表記すると変数を呼び出す
       }

       public function getEntryForm() {
        $news = Cosmoscan::all(); //指定したテーブル全てを表示
           return view('cosmoscan.new',['new'=>$news]);
       }



       public function storeNewData(Request $request) {
           //formから受け取ったデータを必要に応じてデータベースを保存する

       $cosmoscan = new Cosmoscan();
       //phpmyadminのデータを新しく１行分取ってきます宣言
       $cosmoscan->name = $request->name;
       //->nameは入力フォームのname属性のnameから取ってきます
       $cosmoscan->age = $request->age;
       $cosmoscan->address = $request->address;
       $cosmoscan->skintype = $request->skintype;
       $cosmoscan->buy_place = $request->buy_place;

       $cosmoscan->save();
       //保存する宣言が必要。削除だとdestry();,更新だとupdate();

       return redirect('/cosmoscan/');
       //送信されました画面。。。（）内はurl(routeのweb.php参照)
       }


       public function updateNewData(Request $request) {
           //formから受け取ったデータを必要に応じてデータベースを更新

       $cosmoscan = Cosmoscan::find($request->id);
       //phpmyadminのデータを新しく１行分取ってきます宣言
       $cosmoscan->name = $request->name;
       //->titleは入力フォームのname属性のnameから取ってきます
       $cosmoscan->age = $request->age;
       $cosmoscan->address = $request->address;
       $cosmoscan->save();
       //保存する宣言が必要。削除だとdestry();,更新だとupdate();

       return redirect('/cosmoscan/');
       //送信されました画面。。。（）内はurl(routeのweb.php参照)

       }

       public function destroyNewData(Request $request) {
           //formから受け取ったデータを必要に応じてデータベースを更新


       Cosmoscan::destroy($request->id);
       //保存する宣言が必要。削除だとdestry();,更新だとupdate();

       return redirect('/cosmoscan/');
       //送信されました画面。。。（）内はurl(routeのweb.php参照)

       }


//1215追記↓

       public function recommend() {
        $cosmoscanrecommends = [
            [
            'product_image' => '3',
            'product_name' => '2',
            'product_quantity' => '3',
            'product_price' => '4',
            'product_place' => '5',
            'product_effect' => '6',
            'product_brand' => '7',
            'product_jan' => '8'
            ]
            ];

        return view('cosmoscan.cosmoscanrecommend', compact('cosmoscanrecommends'));
    }

    public function storeProductInfo(Request $request) {
        //formから受け取ったデータを必要に応じてデータベースを保存する

    $product_info = new Cosmoscan();
    //phpmyadminのデータを新しく１行分取ってきます宣言
    $product_info->product_image = $request->product_image;
    //->nameは入力フォームのname属性のnameから取ってきます
    $product_info->product_name = $request->product_name;
    $product_info->product_quantity = $request->product_quantity;
    $product_info->product_price = $request->product_price;
    $product_info->product_place = $request->product_place;
    $product_info->product_effect = $request->product_effect;
    $product_info->product_brand = $request->product_brand;
    $product_info->product_jan = $request->product_jan;
    $product_info->save();
    //保存する宣言が必要。削除だとdestry();,更新だとupdate();

    return redirect('/cosmoscan/');
    //送信されました画面。。。（）内はurl(routeのweb.php参照)
    }

    public function productFavor() {

        $productFavors = Cosmoscan::all(); //指定したテーブル全てを表示
        //var_dump($);

          return view('cosmoscan.productFavor',['productFavor'=>$productFavors]);//矢印左側がblade上で表記すると変数を呼び出す
       }

       public function getIndexDetailPage() {

        $details = Cosmoscan::all(); //指定したテーブル全てを表示
        //var_dump($cosmoscans);

          return view('cosmoscan.detail',['detail'=>$details]);//矢印左側がblade上で表記すると変数を呼び出す
       }

       public function getIndexProductlPage() {

        $products = Cosmoscan::all(); //指定したテーブル全てを表示
        //var_dump($cosmoscans);

          return view('cosmoscan.product',['product'=>$products]);//矢印左側がblade上で表記すると変数を呼び出す
       }

       //scanページのコントローラー
       public function getIndexScanPage() {

        $scans = Cosmoscan::all(); //指定したテーブル全てを表示
        //var_dump($cosmoscans);

          return view('cosmoscan.scan',['scan'=>$scans]);//矢印左側がblade上で表記すると変数を呼び出す
       }

        //scanページのコントローラー
        public function getCouponPage() {

            $coupons = Cosmoscan::all(); //指定したテーブル全てを表示
                            //var_dump($cosmoscans);

             return view('cosmoscan.coupon',['coupon'=>$coupons]);//矢印左側がblade上で表記すると変数を呼び出す
               }

                 //shoppingページのコントローラー
        public function getShoppingPage() {

            $shoppings = Cosmoscan::all(); //指定したテーブル全てを表示
                            //var_dump($cosmoscans);

             return view('cosmoscan.shopping',['shopping'=>$shoppings]);//矢印左側がblade上で表記すると変数を呼び出す
               }




         public function getBarcodePage() {

            $barcodes = Cosmoscan::all(); //指定したテーブル全てを表示

                  return view('cosmoscan.barcode',['barcode'=>$barcodes]);//矢印左側がblade上で表記すると変数を呼び出す
               }


}
