<?php

/*@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <a href="{{route('cosmoscan.index')}} "  class=btn btn-primary>あなたの化粧品情報を登録します</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*routes/web.php*/

Route::get('/', function () {
    return view('sample');
});

Auth::routes();

Route::get('/home','HomeController@index')->name('home');

Route::get('users','UsersController@index');

//二段階認証
Route::get('two_factor_auth/login_form', 'TwoFactorAuthController@login_form');
Route::post('ajax/two_factor_auth/first_auth', 'TwoFactorAuthController@first_auth');
Route::post('ajax/two_factor_auth/second_auth', 'TwoFactorAuthController@second_auth');


//topページ表示
Route::get('/cosmoscan', 'CosmoscanController@getIndexPage')->name('cosmoscan.index');

//新規登録ページを表示
Route::get('/cosmoscan/new', 'CosmoscanController@getEntryForm')->name('cosmoscan.new');

//情報を保存
Route::post('/cosmoscan/store', 'CosmoscanController@storeNewData')->name('cosmoscan.store');

//情報を更新
Route::post('/cosmoscan/update/{id}', 'CosmoscanController@updateNewData')->name('cosmoscan.update');

//情報を削除
Route::post('/cosmoscan/destroy/{id}', 'CosmoscanController@destroyNewData')->name('cosmoscan.destroy');

//商品レコメンドページを表示
Route::get('/cosmoscan/recommend', 'CosmoscanController@recommend')->name('cosmoscan.recommend');

//商品スキャンページを表示
Route::get('/cosmoscan/scan', 'CosmoscanController@scan')->name('cosmoscan.scan');

//商品好意度ページを表示
Route::get('/cosmoscan/favor', 'CosmoscanController@productFavor')->name('cosmoscan.productFavor');

Route::group(['prefix' => 'admin', 'middleware' => 'guest:admin'], function() {
    Route::get('/home', function () {
        return view('admin.home');
    });
    Route::get('login', 'Admin\Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Admin\Auth\LoginController@login')->name('admin.login');
    Route::get('register', 'Admin\Auth\RegisterController@showRegisterForm')->name('admin.register');
    Route::post('register', 'Admin\Auth\RegisterController@register')->name('admin.register');
});
//prefix=>admin 右の名前でグループ化（URLでグループ化）
//middleware...ログインページの手前でチェックする機能（ログインページを表示していいかどうか判断）
Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function(){
    Route::post('logout', 'Admin\Auth\LoginController@logout')->name('admin.logout');
    Route::get('home', 'Admin\HomeController@index')->name('admin.home');
});


//商品詳細ページを表示
Route::get('/cosmoscan/detail', 'CosmoscanController@getIndexDetailPage')->name('cosmoscan.detail');

//商品ページを表示
Route::get('/cosmoscan/product', 'CosmoscanController@getIndexProductlPage')->name('cosmoscan.product');

//スキャンページを表示
Route::get('/cosmoscan/scan', 'CosmoscanController@getIndexScanPage')->name('cosmoscan.scan');

//クーポンページを表示
Route::get('/cosmoscan/coupon', 'CosmoscanController@getCouponPage')->name('cosmoscan.coupon');

//オンライン購入ページを表示
Route::get('/cosmoscan/shopping', 'CosmoscanController@getShoppingPage')->name('cosmoscan.shopping');


//ユーザー情報保存
Route::get('/', function () {
    return view('welcome');
});

// 以下を追加
Route::post('/cosmoscan/save', 'UsersController@getSavePage')->name('cosmoscan.save');

//バーコードを表示
Route::get('/cosmoscan/barcode', 'CosmoscanController@getBarcodePage')->name('cosmoscan.barcode');
