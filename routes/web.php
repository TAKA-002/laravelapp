<?php

use App\Http\Controllers\HelloController;
use Illuminate\Support\Facades\Route;

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


// トップページにアクセスした時の処理
Route::get('/', function () {

    // view関数でwelcomeというテンプレートをレンダリングして返している。
    // view関数で、viewsフォルダへアクセスできる
    return view('welcome');
});


// クロージャーではなく、controllerを呼び出している。
Route::get(
    // ルート情報をパラメータとして取得するように設定。任意パラメータにしているので、コントローラーのindexアクションではデフォルト値を設定している。
    'hello/{id?}',
    'App\Http\Controllers\HelloController@index' // バックスラッシュじゃなきゃいけないみたい。
);
