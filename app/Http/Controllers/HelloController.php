<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;


class HelloController extends Controller
{
    // パラメータが省略されることを考えて、デフォルト値を設定している。
    public function index($id = 'I\'ts no ID.')
    {
        // データを渡すためには、view関数を実行するアクションメソッドの中で定義している。
        // view関数の第２引数にその変数を渡してやると、テンプレートに値を渡すことができる。
        // データを渡すときは、配列形式（連想配列）で渡す！
        $data = [
            'msg' => 'これはコントローラから渡されたメッセージです。',
            // パラメータをデータのれんそう配列にセットしている
            'id' => $id
        ];
        return view('hello.index', $data);
    }
}
