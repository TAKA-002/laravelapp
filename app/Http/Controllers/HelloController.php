<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;


class HelloController extends Controller
{
    // 表示用のアクション。
    // indexアクションメソッドでは、
    public function index()
    {

        // データを用意。キーmsgにテキストを格納し、
        $data = [
            'msg' => 'これは、Bladeを利用したサンプルです。',
        ];

        // view関数を使って、viewsフォルダのhelloフォルダのindexテンプレート（index.blade.php）を使う。
        // その時、$data配列を引数で渡す。
        return view('hello.index', $data);
    }

    // postアクションメソッドでは、view関数の呼び出し時に、Requestインスタンスを作成し、
    public function post(Request $request)
    {
        // インスタンスで、フォーム入力した「name="msg"」データをサーバーに取りに行く。それを$msg変数へ格納。
        // フォームで入力した値は、nameプロパティをrequestインスタンスから取り出せる。
        $msg = $request->msg;

        // データ配列に、フォーム入力したデータを使った文章を作成して再代入。
        $data = [
            'msg' => 'こんにちは、' . $msg . 'さん',
        ];

        // view関数でviewフォルダのhelloフォルダのindex.blade.phpを再度呼び出す。
        // そのときに、$dataを引数にする。
        return view('hello.index', $data);
    }
}
