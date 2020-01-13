<script src="https://cdnjs.cloudflare.com/ajax/libs/quagga/0.12.1/quagga.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.js"></script>


@extends('layouts.user_common')
@section('title', 'Barcode')
@section('text', 'バーコード読み取り画面')
@section('content')

<script>
Quagga.init({
    inputStream: {
      name: 'Live',
      type: 'LiveStream',
      target: document.querySelector('#quagga')
    },
    decoder : {
      readers: ["code_128_reader"]
    }
  }, err => {
    if(!err){
      console.log("Initialization finished. Ready to start")
      Quagga.start()
    } else {
      console.error("An error has occured. Detail:")
      console.error(err)
    }
  })

</script>


// <div id="interactive" class="viewport"></div>

// <script>
//         window.axios.defaults.headers.common = {
//         'Accept':'application/json',
//         'Content-Type':'application/json'
//     };
//         alert("カメラを起動します")
//         Quagga.init({
//             inputStream: { type : 'LiveStream' },
//             decoder: {
//                 readers: [{
//                     format: 'ean_reader',
//                     config: {}
//                 }]
//             }
//         }, (err) => {
//             if(!err) {
//                 Quagga.start();
//             }
// })
//     let checking = false;
//     Quagga.onDetected(success => {
//         if(checking === true){
//             return;
//         }
//         const code = success.codeResult.code;
//         console.log(success.codeResult.code)
//         // if(calc(code)) alert(code);
//         checking = true;
//         const url = 'http://cosmoscan.sakura.ne.jp/api/products/{id}'+code;
//         console.log('url',url)
//             axios.get(url)
//                 .then((response) => {
//                 console.log(response);
//                 checking = false;
//                 if(code == "4901872964413") {
//             location.href= "{{route('cosmoscan.product')}} ";
//             //location.href= "https://www.shiseido.co.jp/haku/";

//         } else if(code ==2)  {
//             location.href= "https://www.sofina.co.jp/whitening/";

//         } else if(code ==3)  {
//             location.href= "https://www.pola.co.jp/brand/whiteshot/";

//         } else if(code ==4)  {
//             location.href= "https://www.albion.co.jp/products/skincare/exw_wt";

//         } else if(code ==5)  {
//             location.href= "https://www.lancome.jp/skincare/";

//         } else if(code ==6)  {
//             location.href= "https://www.sisley-paris.com/ja-JP/?utm_source=google&utm_medium=cpc&utm_campaign=brand&gclid=CjwKCAiAu9vwBRAEEiwAzvjq-0lAvZtI7zxpMDYqUSX-hbgWY7xXMmJKXZrbrieoH1s8DMAZlFb31xoCr9EQAvD_BwE";

//         } else if(code ==7)  {
//             location.href= "https://onlineshop.rmkrmk.com/shopbrand/skincare/";

//         } else if(code ==8)  {
//             location.href= "https://www.esteelauder.jp/products/1216/Product-Catalog/Skincare/By-Category";

//         } else if(code ==9)  {
//             location.href= "https://www.acseine.co.jp/shop/?utm_source=google&utm_medium=CPC&utm_campaign=top&gclid=CjwKCAiAu9vwBRAEEiwAzvjq-5ApSefkSdHpa1Do1POWO80HSb9h257MX6DCfnZlm-S6HIqR4ld4cRoCOoUQAvD_BwE";

//         } else if(code ==10)  {
//             location.href= "https://mobile.chanel.com/ja_JP/fragrance-beauty/skincare/p/by-category/serums-_-concentrates/le-blanc-serum-healthy-light-creatorbrrevitalizing---brightening---nourishing-p141216.html#skuid-0141216";


//         } else {
//             alert('この商品は登録されていません。');
//     };
//             })
//             .catch((error) => {
//                 console.error('error',error)
//             })
//     })


// // const calc = isbn => {
//     const arrIsbn = isbn
//     .toString()
//     .split("")
//     .map(num => parseInt(num));
//     let remainder = 0;
//     const checkDigit = arrIsbn.pop();

//     arrIsbn.forEach((num, index) => {
//         remainder += num * (index % 2 === 0 ? 1 : 3);
//     });
//     remainder %= 10;
//     remainder = remainder === 0 ? 0 : 10 - remainder;

//     return checkDigit === remainder;
// }
</script>
<br>
<a href="{{route('cosmoscan.product')}} "  class="btn btn-sm btn-outline-secondary">レコメンド商品一覧</a>

@endsection
