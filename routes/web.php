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

// ルートパラメータの付け方は、ルートに以前の時と同じ様に{パラメータ}として記述。
// 必須パラメータなら「?」はなし。任意パラメータなら「?」あり。
// あとはコントローラ側に記述
Route::get(
    'hello/{id?}/{pass?}',
    'App\Http\Controllers\HelloController@index'
);
