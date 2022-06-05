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

// ルート情報から直接テンプレートを使う場合。
// クロージャーから、view関数でテンプレートを指定する。
// view関数の引数は、「フォルダ.ファイル」で記述すること。（なんかイメージとしてはviewsフォルダをオブジェクトにみたてて、中を参照している感じに受け取った。）
// どうやらviewにテンプレートを設定したから表示されているというよりは、挙動としては、viewはResponseインスタンスを返しているようで、そのResponseインスタンスがテンプレートをセットしているらしい。
Route::get('hello', function () {
    return view('hello.index');
});
