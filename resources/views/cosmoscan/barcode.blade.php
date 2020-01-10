<script src="{{ asset('../resources/assets/js/quaggaJS-master/dist/quagga.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.js"></script>


@extends('layouts.user_common')
@section('title', 'Barcode')
@section('text', 'バーコード読み取り画面')
@section('content')


    <div id="interactive" class="viewport"></div>

    <script>
        alert("カメラを起動します")

        Quagga.init({
            inputStream: { type : 'LiveStream' },
            decoder: {
                readers: [{
                    format: 'ean_reader',
                    config: {}
                }]
            }
        }, (err) => {

            if(!err) {

                Quagga.start();

            }

        });

        let checking = false;

        Quagga.onDetected((result) => {
            console.log(result);
            var code = result.codeResult.code;
            const url = '../api/products/'+code;
            axios.get(url, { code: code })
            .then((response) => {
                console.log(response);
        if(result==1) {
            location.href= "https://www.shiseido.co.jp/haku/";

        } elseif(result==2)  {
            location.href= "https://www.sofina.co.jp/whitening/";

        } elseif(result==3)  {
            location.href= "https://www.pola.co.jp/brand/whiteshot/";

        } elseif(result==4)  {
            location.href= "https://www.albion.co.jp/products/skincare/exw_wt";

        } elseif(result==5)  {
            location.href= "https://www.lancome.jp/skincare/";

        } elseif(result==6)  {
            location.href= "https://www.sisley-paris.com/ja-JP/?utm_source=google&utm_medium=cpc&utm_campaign=brand&gclid=CjwKCAiAu9vwBRAEEiwAzvjq-0lAvZtI7zxpMDYqUSX-hbgWY7xXMmJKXZrbrieoH1s8DMAZlFb31xoCr9EQAvD_BwE";

        } elseif(result==7)  {
            location.href= "https://onlineshop.rmkrmk.com/shopbrand/skincare/";

        } elseif(result==8)  {
            location.href= "https://www.esteelauder.jp/products/1216/Product-Catalog/Skincare/By-Category";

        } elseif(result==9)  {
            location.href= "https://www.acseine.co.jp/shop/?utm_source=google&utm_medium=CPC&utm_campaign=top&gclid=CjwKCAiAu9vwBRAEEiwAzvjq-5ApSefkSdHpa1Do1POWO80HSb9h257MX6DCfnZlm-S6HIqR4ld4cRoCOoUQAvD_BwE";

        } elseif(result==10)  {
            location.href= "https://mobile.chanel.com/ja_JP/fragrance-beauty/skincare/p/by-category/serums-_-concentrates/le-blanc-serum-healthy-light-creatorbrrevitalizing---brightening---nourishing-p141216.html#skuid-0141216";


        } else {
            alert('この商品は登録されていません。');

}

})}
.catch((error) => {})
.then(() => {

checking = false;

});)

    </script>
     @endsection
