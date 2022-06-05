<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// シングルアクションコントローラーの基本形
class HelloController extends Controller
{

    public function __invoke()
    {
        return <<<EOF
        <html>
        <head>
        <title>Hello</title>
        <style>
        body{
            font-size: 16px;
            color: #999;
        }
        h1{
            font-size: 100px;
            text-align: right;
            color: #eee;
            margin: 15px 0 0 0;
        }
        </style>
        </head>

        <body>
        <h1>Single Action</h1>
        <p>これは、シングルアクションコントローラーのアクションです。</p>
        </body>

        </html>

        EOF;
    }

    // シングルアクションコントローラーの中でもアクションメソッドは追加できるけど、基本的にはアクションとして使用しないように。
    // やってみたら呼び出せ、ページの表示もされたけど、使い方としては間違いなので、otherアクションを削除。
}
