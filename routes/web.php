<?php

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

Route::get('/hello', function () {
    // view関数は、bladeファイルを読み込みその中のテンプレをレンダリングするが、ここではbladeファイルがないのでview関数はいらない。
    return '<html><body><h1>Hello</h1><p>This is sample page.</p></body></html>';
});


// アクセスしたURLからパラメーターを取得することができる
// urlのパラメータが、無名関数の引数として渡される。受け取るクロージャー側の変数名は任意でOKだし、同じでもいい。
Route::get('hello/{msg}', function ($message) {
$html = <<<EOF
<html>
<head>
<title>Hello</title>
<style>
body{font-size:16px; color:#999; }
h1{font-size:100px; text-align:right; color:#eee; margin:-40px 0 -50px 0; }
</style>
</head>

<body>
<h1>Hello</h1>
<p>{$message}</p>
<p>これはパラメーターのサンプルページです。</p>
</body>
</html>
EOF;

return $html;
});
