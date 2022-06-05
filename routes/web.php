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

// アクションにルートを割り当てることで、表示されるようになる。
// laravel8だと本のままではエラーになる。解決策はAppから書くことと名前空間をインポートすること。ここはAppから書いている。
Route::get(
    'hello',
    'App\Http\Controllers\HelloController@index'
);
