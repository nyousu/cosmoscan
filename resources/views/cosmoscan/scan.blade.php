@extends('layouts.user_common')
@section('title', 'スキャン')
@section('text', '商品をカメラにかざしてください')
@section('content')
<fieldset>
        <label>バーコードの画像</label>
        <input type="file" id="barcode">
      </fieldset>

      <div id="preview">
      </div>

      <fieldset>
        <label>結果</label>
        <input type="text" id="result" readonly>
      </fieldset>

@endsection

