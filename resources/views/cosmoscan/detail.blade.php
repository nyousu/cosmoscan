@extends('layouts.user_common')
@section('title', 'Reccomended Products Detail')
@section('text', 'おすすめ商品詳細')
@section('content')
<!DOCTYPE html>
<head>

      </section>
              <div class="media">
                    <!-- 1.画像の配置 -->
                    <a class="media-left" href="">
                        <img class="media-object" src=../../public/image/sisley_bihaku.jpg/>>
                    </a>
                    <!-- 2.画像の説明 -->
                    <div class="media-body">
                        <h4 class="media-heading" width:388px;>HAKU/ホワイトニングエッセンス</h4>
                        <h5>メーカー：資生堂</h5>
                        <h5>容量：50mL</h5>
                        <h5>価格：¥5,000</h5>
                        <h5>買える場所：ドラッグストア</h5>
                        <h5>効果：美白</h5>
                        <p>商品説明：シミ予防サイエンスの革新、薬用美白美容液。根本原因を整えシミの生成連鎖を抑止し、美白します。<br>美白有効成分４ＭＳＫ（4-メトキシサリチル酸カリウム塩）、ｍ－トラネキサム酸（トラネキサム酸）配合。なめらかな美容液が、ピタッと密着し、美白有効成分を肌のすみずみまで行きわたらせます。<br>乾燥や肌荒れを防ぎます。明るく澄んだ、生まれたての透けるような肌へ。
                                ※美白とは、メラニンの生成を抑え、シミ・そばかすを防ぐことです。</p>

                        <a href="{{route('cosmoscan.product')}} "  class="btn btn-sm btn-outline-secondary">戻る</a>

                    </div>

                </div>

    </body>
@endsection
