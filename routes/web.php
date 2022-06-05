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

// シングルアクションコントローラーで呼び出すと、下のotherは基本的に使うことはできない。挙動はしたが、ルール違反。
// コンストラクターの様にこのコントローラーでは__invokeのアクションを実行するという書き方。
Route::get(
    'hello',
    'App\Http\Controllers\HelloController'
);
