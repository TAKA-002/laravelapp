<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    // パラメータは、任意パラメータを受け取る場合には、デフォルト値を引数に設定しておく。
    // 必須パラメータの時には不要だが、もしもパラメータが渡ってきていない場合には、エラーになる。無名関数（クロージャー）の時の引数と同じ。
    public function index($id = "no name", $pass = "unknown")
    {
        return <<<EOF
    <html>
    <head>
    <title>Hello/Index</title>
    <style>
    body{
        font-size:16px;
        color:#999;
    }
    h1{
        font-size:100px;
        text-align:right;
        color:#eee;
        margin:-40px 0 -50px 0;
    }
    </style>
    </head>

    <body>
    <h1>Index</h1>
    <p>これはHelloコントローラのindexアクションです。</p>
    <ul>
    <li>ID: {$id}</li>
    <li>PASS: {$pass}</li>
    </ul>
    </body>
    </html>
    EOF;
    }
}
