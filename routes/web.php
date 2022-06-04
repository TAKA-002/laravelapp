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
<p>This is sample page.</p>
<p>これは、サンプルで作ったページです。</p>
</body>
</html>
EOF;


// Routeクラスgetメソッドでは、returnするものが用意できればそのままwebページが用意されるということ。
Route::get('/here', function () use ($html) {
    return $html;
});
