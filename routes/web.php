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


Route::get(
    // helloルートにアクセスしたとき。
    'hello',
    // HelloControllerのindexアクションメソッドを使用する
    'App\Http\Controllers\HelloController@index'
);

// ここでは、POST通信された際の処理をRoute::postで実行している。
Route::post(
    // helloルートにアクセスしたときにフォームがactionでhelloページをリロードする
    // そのとき、コントローラのpostアクションでmsgには上書きされたデータが配列に格納されている。
    'hello',
    'App\Http\Controllers\HelloController@post'
);
