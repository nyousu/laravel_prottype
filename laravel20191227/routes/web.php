<?php

/*
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

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
Route::get('/cosmoscan/favor', 'CosmoscanController@favor')->name('cosmoscan.favor');

