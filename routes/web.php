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
    // ルート情報は、クエリ文字列を取得する場合でも、特に何も特別なことはしない。
    // で、ブラウザにクエリ付きのURLでアクセスしてみる。（http://localhost:8000/hello?id=query_string_sample）
    // さらに、もしもクエリが複数あるときは、「&」で繋げられるので、それも取得できる。（http://localhost:8000/hello?id=query_string_sample&name=takayuki）
    'hello',
    'App\Http\Controllers\HelloController@index' // バックスラッシュじゃなきゃいけないみたい。
);
