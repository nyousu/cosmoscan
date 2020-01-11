@extends('layouts.user_common')
@section('title', 'Your cosme data')
@section('text', 'あなたのコスメデータ')
@section('content')
登録しました！<br>

  <a href="{{route('cosmoscan.barcode')}} "  class="btn btn-sm btn-outline-secondary">バーコードをスキャンしましょう！</a>

@endsection
