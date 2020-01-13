
<!--/resources/views/cosmoscan/recommend.blade.php-->
@extends('layouts.user_common')
@section('title', 'Reccomended Products')
@section('text', 'スキャンされた製品からおすすめ商品一覧')
@section('content')

<!DOCTYPE html>

      <div class="album py-5 bg-light">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="0%" height="0" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="43%" y="50%" fill="#eceeef" dy=".3em">商品画像</text></svg>
                <img src="http://cosmoscan.sakura.ne.jp/image/haku_bihaku.jpeg" alt="..." class="img-thumbnail">
                <div class="card-body">
                  <p class="card-text">資生堂HAKU/ホワイトニングエッセンス<br>¥5,000</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="{{route('cosmoscan.detail')}} "  class="btn btn-sm btn-outline-secondary">Detail</a>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Delete</button>
                      <a href="{{route('cosmoscan.productFavor')}} "  class="btn btn-sm btn-outline-secondary">評価</a>
                    </div>
                    <small class="text-muted">50m以内</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="0%" height="0" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="43%" y="50%" fill="#eceeef" dy=".3em">商品画像</text></svg>
                <img src="http://cosmoscan.sakura.ne.jp/image/kao_bihaku.jpg" alt="..." class="img-thumbnail">
                <div class="card-body">
                  <p class="card-text">花王/ブライトニングエッセンス<br>¥5,000</p>
                  <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                        <a href="{{route('cosmoscan.detail')}} "  class="btn btn-sm btn-outline-secondary">Detail</a>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Delete</button>
                      <a href="{{route('cosmoscan.productFavor')}} "  class="btn btn-sm btn-outline-secondary">評価</a>
                    </div>
                    <small class="text-muted">50m以内</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="0%" height="0" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="43%" y="50%" fill="#eceeef" dy=".3em">商品画像</text></svg>
                <img src="http://cosmoscan.sakura.ne.jp/image/pola_bihaku.jpg" alt="..." class="img-thumbnail">
                <div class="card-body">
                  <p class="card-text">ポーラ/ホワイトコンクルージョン<br>¥12,000</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                            <a href="{{route('cosmoscan.detail')}} "  class="btn btn-sm btn-outline-secondary">Detail</a>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Delete</button>
                      <a href="{{route('cosmoscan.productFavor')}} "  class="btn btn-sm btn-outline-secondary">評価</a>
                    </div>
                    <small class="text-muted">100m以内</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                      <svg class="bd-placeholder-img card-img-top" width="0%" height="0" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="43%" y="50%" fill="#eceeef" dy=".3em">商品画像</text></svg>
                      <img src="http://cosmoscan.sakura.ne.jp/image/exage_bihaku.jpg" alt="..." class="img-thumbnail">
                      <div class="card-body">
                        <p class="card-text">エクサージュ/ホワイトニングエッセンス<br>¥8,000</p>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                                <a href="{{route('cosmoscan.detail')}} "  class="btn btn-sm btn-outline-secondary">Detail</a>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Delete</button>
                            <a href="{{route('cosmoscan.productFavor')}} "  class="btn btn-sm btn-outline-secondary">評価</a>
                          </div>
                          <small class="text-muted">150m以内</small>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                      <svg class="bd-placeholder-img card-img-top" width="0%" height="0" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="43%" y="50%" fill="#eceeef" dy=".3em">商品画像</text></svg>
                      <img src="http://cosmoscan.sakura.ne.jp/image/lancom_bihaku.jpg" alt="..." class="img-thumbnail">
                      <div class="card-body">
                        <p class="card-text">ランコム/イルミネーションエッセンス<br>¥18,000</p>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                                <a href="{{route('cosmoscan.detail')}} "  class="btn btn-sm btn-outline-secondary">Detail</a>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Delete</button>
                            <a href="{{route('cosmoscan.productFavor')}} "  class="btn btn-sm btn-outline-secondary">評価</a>
                          </div>
                          <small class="text-muted">300m以内</small>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                      <svg class="bd-placeholder-img card-img-top" width="0%" height="0" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="43%" y="50%" fill="#eceeef" dy=".3em">商品画像</text></svg>
                      <img src="http://cosmoscan.sakura.ne.jp/image/sisley_bihaku.jpg" alt="..." class="img-thumbnail">
                      <div class="card-body">
                        <p class="card-text">シスレー/イルミネーションエッセンス<br>¥20,000</p>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                                <a href="{{route('cosmoscan.detail')}} "  class="btn btn-sm btn-outline-secondary">Detail</a>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Delete</button>
                            <a href="{{route('cosmoscan.productFavor')}} "  class="btn btn-sm btn-outline-secondary">評価</a>
                          </div>
                          <small class="text-muted">300m以内</small>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                          <svg class="bd-placeholder-img card-img-top" width="0%" height="0" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="43%" y="50%" fill="#eceeef" dy=".3em">商品画像</text></svg>
                          <img src="http://cosmoscan.sakura.ne.jp/image/rmk_bihaku.jpg" alt="..." class="img-thumbnail">
                          <div class="card-body">
                            <p class="card-text">RMK/ホワイトニングスポッツ<br>¥8,000</p>
                            <div class="d-flex justify-content-between align-items-center">
                              <div class="btn-group">
                                    <a href="{{route('cosmoscan.detail')}} "  class="btn btn-sm btn-outline-secondary">Detail</a>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Delete</button>
                                <a href="{{route('cosmoscan.productFavor')}} "  class="btn btn-sm btn-outline-secondary">評価</a>
                              </div>
                              <small class="text-muted">500m以内</small>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                          <svg class="bd-placeholder-img card-img-top" width="0%" height="0" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="43%" y="50%" fill="#eceeef" dy=".3em">商品画像</text></svg>
                          <img src="http://cosmoscan.sakura.ne.jp/image/estee_bihaku.jpg" alt="..." class="img-thumbnail">
                          <div class="card-body">
                            <p class="card-text">エスティローダー/ホワイトエッセンス<br>¥12,000</p>
                            <div class="d-flex justify-content-between align-items-center">
                              <div class="btn-group">
                                    <a href="{{route('cosmoscan.detail')}} "  class="btn btn-sm btn-outline-secondary">Detail</a>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Delete</button>
                                <a href="{{route('cosmoscan.productFavor')}} "  class="btn btn-sm btn-outline-secondary">評価</a>
                              </div>
                              <small class="text-muted">500m以内</small>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                              <svg class="bd-placeholder-img card-img-top" width="0%" height="0" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="43%" y="50%" fill="#eceeef" dy=".3em">商品画像</text></svg>
                              <img src="http://cosmoscan.sakura.ne.jp/image/lancom_bihaku.jpg" alt="..." class="img-thumbnail">
                              <div class="card-body">
                                <p class="card-text">アクセーヌ/センシティブホワイトニング<br>¥7,000</p>
                                <div class="d-flex justify-content-between align-items-center">
                                  <div class="btn-group">
                                        <a href="{{route('cosmoscan.detail')}} "  class="btn btn-sm btn-outline-secondary">Detail</a>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Delete</button>
                                    <a href="{{route('cosmoscan.productFavor')}} "  class="btn btn-sm btn-outline-secondary">評価</a>
                                  </div>
                                  <small class="text-muted">500m以内</small>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                          </div>
                      </div>
                    </div>

                    </body>
@endsection


