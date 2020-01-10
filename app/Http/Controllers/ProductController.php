<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "hello";

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($JANcode)
    {
        $product= Productinfo::where('jan',$JANcode)->get();
        $cnt = count($product);
        // 変数にリダイレクト先URLを格納する（パラメータ付きURLにリダイレクトさせる想定）
        $url1 = "https://www.shiseido.co.jp/haku/";
        $url2 = "https://www.sofina.co.jp/whitening/";
        $url3 = "https://www.pola.co.jp/brand/whiteshot/";
        $url4 = "https://www.albion.co.jp/products/skincare/exw_wt";
        $url5 = "https://www.lancome.jp/skincare/";
        $url6 = "https://www.sisley-paris.com/ja-JP/?utm_source=google&utm_medium=cpc&utm_campaign=brand&gclid=CjwKCAiAu9vwBRAEEiwAzvjq-0lAvZtI7zxpMDYqUSX-hbgWY7xXMmJKXZrbrieoH1s8DMAZlFb31xoCr9EQAvD_BwE";
        $url7 = "https://onlineshop.rmkrmk.com/shopbrand/skincare/";
        $url8 = "https://www.esteelauder.jp/products/1216/Product-Catalog/Skincare/By-Category";
        $url9 = "https://www.acseine.co.jp/shop/?utm_source=google&utm_medium=CPC&utm_campaign=top&gclid=CjwKCAiAu9vwBRAEEiwAzvjq-5ApSefkSdHpa1Do1POWO80HSb9h257MX6DCfnZlm-S6HIqR4ld4cRoCOoUQAvD_BwE";
        $url10 = "https://mobile.chanel.com/ja_JP/fragrance-beauty/skincare/p/by-category/serums-_-concentrates/le-blanc-serum-healthy-light-creatorbrrevitalizing---brightening---nourishing-p141216.html#skuid-0141216";

        if ( $cnt==1 && $JANcode=="9784802611848" ) {
            return $url1;

        }elseif ($cnt==1 && $JANcode=="493456789012" ){
            return $url2;

        }elseif ($cnt==1 && $JANcode=="494567890123" ){
            return $url3;

        }elseif ($cnt==1 && $JANcode=="495678901234" ){
            return $url4;

        }elseif ($cnt==1 && $JANcode=="496789012345" ){
            return $url5;

        }elseif ($cnt==1 && $JANcode=="497890123456" ){
            return $url6;

        }elseif ($cnt==1 && $JANcode=="498901234567" ){
            return $url7;

        }elseif ($cnt==1 && $JANcode=="499012345678" ){
            return $url8;

        }elseif ($cnt==1 && $JANcode=="499123456789" ){
            return $url9;

        }elseif ($cnt==1 && $JANcode=="499234567890" ){
            return $url10;
        }else{
            return "該当する商品はありません";
          }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
