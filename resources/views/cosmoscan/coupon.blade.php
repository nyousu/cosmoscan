@extends('layouts.user_common')
@section('title', 'Reccomended Products Coupon')
@section('text', 'おすすめ商品一覧クーポン')
@section('content')

<!DOCTYPE html>

      <div class="album py-5 bg-light">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#FF6666"/><text x="43%" y="50%" fill="#111111" dy=".3em" >30%オフ</text></svg>
                <div class="card-body">
                  <p class="card-text">資生堂HAKU/ホワイトニングエッセンス<br>¥5,000</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary"  a href= "https://www.shiseido.co.jp/haku/"> shopping site</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Delete</button>
                    </div>
                    <small class="text-muted">50m以内</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#AEFFBD"/><text x="30%" y="50%" fill="#111111" dy=".3em">カウンセリングサービス</text></svg>
                <div class="card-body">
                  <p class="card-text">花王/ブライトニングエッセンス<br>¥5,000</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Detail</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Delete</button>
                    </div>
                    <small class="text-muted">50m以内</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#FFFFAA"/><text x="35%" y="50%" fill="#111111" dy=".3em">サンプルクーポン</text></svg>
                <div class="card-body">
                  <p class="card-text">ポーラ/ホワイトコンクルージョン<br>¥12,000</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Detail</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Delete</button>
                    </div>
                    <small class="text-muted">100m以内</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
                    <div class="card mb-4 shadow-sm" >
                      <svg class="bd-placeholder-img card-img-top"  width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><rect width="100%" height="100%" fill="#FFFFAA" text-danger/><text x="35%" y="50%" fill="#111111"
                         dy=".3em">サンプルクーポン</text></svg>
                      <div class="card-body">
                        <p class="card-text">エクサージュ/ホワイトニングエッセンス<br>¥8,000</p>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Detail</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Delete</button>
                          </div>
                          <small class="text-muted">150m以内</small>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                      <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#DCC2FF"/><text x="36%" y="50%" fill="#111111" dy=".3em">ポイント対象商品</text></svg>
                      <div class="card-body">
                        <p class="card-text">ランコム/イルミネーションエッセンス<br>¥18,000</p>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Detail</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Delete</button>
                          </div>
                          <small class="text-muted">300m以内</small>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                      <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#DCC2FF"/><text x="36%" y="50%" fill="#111111" dy=".3em">ポイント対象商品</text></svg>
                      <div class="card-body">
                        <p class="card-text">シスレー/イルミネーションエッセンス<br>¥20,000</p>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Detail</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Delete</button>
                          </div>
                          <small class="text-muted">300m以内</small>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                          <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#AEFFBD"/><text x="30%" y="50%" fill="#111111" dy=".3em">カウンセリングサービス</text></svg>
                          <div class="card-body">
                            <p class="card-text">RMK/ホワイトニングスポッツ<br>¥8,000</p>
                            <div class="d-flex justify-content-between align-items-center">
                              <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Detail</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Delete</button>
                              </div>
                              <small class="text-muted">500m以内</small>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                          <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#FFFFAA"/><text x="35%" y="50%" fill="#111111" dy=".3em">サンプルクーポン</text></svg>
                          <div class="card-body">
                            <p class="card-text">エスティローダー/ホワイトエッセンス<br>¥12,000</p>
                            <div class="d-flex justify-content-between align-items-center">
                              <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Detail</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Delete</button>

                              </div>
                              <small class="text-muted">500m以内</small>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                          <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#FFFFAA"/><text x="35%" y="50%" fill="#111111" dy=".3em">サンプルクーポン</text></svg>
                          <div class="card-body">
                            <p class="card-text">アクセーヌ/センシティブホワイトニング<br>¥7,000</p>
                            <div class="d-flex justify-content-between align-items-center">
                              <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Detail</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Delete</button>
                              </div>
                              <small class="text-muted">500m以内</small>
                            </div>
                          </div>
                        </div>
                      </div>
                    </body>
@endsection


