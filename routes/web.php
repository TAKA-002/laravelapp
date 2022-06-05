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

// ルーティングとアクションをURLの関係と同期させる方がいいのでそこだけ注意
// http://アプリケーションのアドレス/コントローラー/アクション
// hello/index.htmlページには、アクションのindexを割り当てる。ここでhelloとしているのは、「index.html」は省略されることがおおいから。
Route::get(
    'hello',
    'App\Http\Controllers\HelloController@index'
);

// なので、hello/other.htmlの場合には、アクション名はotherにするべき。
// このコメントアウトみたいに、otherのルーティングにアクション名が異なるものを使用すると混乱のもと。
// Route::get(
//     'hello/other',
//     'App\Http\Controllers\HelloController@next'
// );
Route::get(
    'hello/other',
    'App\Http\Controllers\HelloController@other'
);
