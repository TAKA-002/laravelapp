<?php

namespace App\Http\Controllers;

// Responseクラスを使用するためにuse文を追加。
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class HelloController extends Controller
{

    // 引数にこの様に記述すると、Requestクラスのインスタンスを$requestに。Responseクラスのインスタンスを$responseに作成できる。
    // アクションメソッドに引数を追加すると、サービスインジェクションと呼ばれる機能によって、引数に対応するクラスのインスタンスが渡される。なので、newなどで作成しなくてもインスタンスが使える。

    // Requestクラスのメソッド例
    // ・$request->url() クエリ以外のアクセスしてきたurlを返す
    // ・$request->fullUrl() クエリも含めてのアクセスしたアドレス全てを返す
    // ・$request->path() ドメイン下のパスの部分だけを返す
    // Responseクラスのメソッド例
    // ・$response->status() クライアントに戻ってきたステータスコード
    // ・$response->content() コンテンツの取得
    // ・$response->setContent(値) 引数の値にコンテンツを変更する
    public function index(Request $request, Response $response)
    {
        $html = <<<EOF
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
        <h1>Hello</h1>
        <h3>Request</h3>
        <pre>{$request}</pre>
        <h3>Response</h3>
        <pre>{$response}</pre>
        </body>

        </html>

        EOF;

        $response->setContent($html);
        return $response;
    }
}
