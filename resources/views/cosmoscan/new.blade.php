@extends('layouts.user_common')
@section('title', 'New Resister')
@section('text', '新規登録')
@section('content')

<form action="/blog/public/cosmoscan/save"  method="POST">
<!--resources/views/cosmoscan/new.blade.php-->

   {{csrf_field()}}

    <p>氏名<input type="text" name="name"></p>
    <p>年齢<input type="text" name="age"></p>
    <p>email<input type="text" name="email"></p>
    <p>住所<textarea name="address" id="" cols="30" rows="3"></textarea></p>
    <div class="overflow-auto"></div>


    <div class="col-40">
    <select name="skintype" id="">
        <option value="0">肌質を選んでください</option>
        <option value="1">普通肌</option>
        <option value="2">乾燥肌</option>
        <option value="3">脂性肌</option>
        <option value="4">混合肌</option>
        <option value="5">敏感肌</option>
        </select>
        <div class="mx-auto" style="width: 200px;">

    </div>

        <select name="buy_place" id="">
        <option value="0">化粧品を買うところを選んでください</option>
        <option value="1">ドラッグストア</option>
        <option value="2">百貨店</option>
        <option value="3">バラエティストア</option>
        <option value="4">GMS（スーパー、ショッピングモールなど）</option>
        <option value="5">セミセルフ（ルミネなど）</option>
        <option value="6">通販</option>
        <option value="7">直営店</option>
        <option value="8">その他</option>
        </select>
        <div class="mx-auto" style="width: 200px;">

            </div>

        <select name="skintrouble" id="">
                <option value="0">肌トラブルを選んでください</option>
                <option value="1">乾燥</option>
                <option value="2">しわ</option>
                <option value="3">しみ</option>
                <option value="4">テカリ</option>
                <option value="5">たるみ</option>
                <option value="6">毛穴の開き</option>
                <option value="7">毛穴の黒ずみ</option>
                <option value="8">くま</option>
                <option value="9">ニキビ</option>
                <option value="7">くすみ</option>
                </select>

        <p><input type="submit" class="btn btn-secondary my-2" a href="{{route('cosmoscan.store')}} "  value="送信"></p>
     @endsection



