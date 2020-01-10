<!--/resources/views/cosmoscan/recommend.blade.php-->
@extends('layouts.user_common')
@section('title', 'Reccomended Products Favor')
@section('text', '商品を評価しましょう！')
@section('content')
<form>
        <fieldset>
        お名前：<input type="text" name="yourname"><br>
        満足度（5段階）：
        <input type="range" name="manzoku" min="0" max="5">
        <output name="result" onforminput="value=manzoku.value"></output><br>
        <input type="submit" value="送信">
        </fieldset>
</form>

@endsection
