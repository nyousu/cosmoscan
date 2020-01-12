<!--/resources/views/cosmoscan/recommend.blade.php-->
@extends('layouts.user_common')
@section('title', 'Reccomended Products Favor')
@section('text', '商品を評価しましょう！')
@section('content')
<form>
 <fieldset>
    <!--    <h2>評価お願いします</h2>
        <input type="range" name="manzoku" min="0" max="5">
        <output name="result" onforminput="value=manzoku.value"></output><br>
        <input type="submit" value="送る"><br> -->

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>sample</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <h2>使ったコスメはどうでしたか？</h2>

        <div class="star-rating">
            <div class="star-rating-front" style="width: 100%">★★★★★</div>
            <div class="star-rating-back">★★★★★</div>
        </div>
    </body>
</html>
</fieldset>
</form>




@endsection
