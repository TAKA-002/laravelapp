<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;


class HelloController extends Controller
{
    // クエリー文字列を取得するには、Requestクラスをまずインスタンスする
    public function index(Request $request)
    {
        $data = [
            'msg' => 'これはコントローラから渡されたメッセージです。',
            // idに、Requestインスタンスのidメソッドをセット。これは、URLの「?キー名=xxxxxxxxxxxxxxxxxx」の情報を取得するメソッド。
            // もし「?キー名」のキーがidじゃなかったら、「$request->キー名」も変わる。
            // もしクエリが複数あったら、「＆」でつなげられるので、それもこのように取得できるみたい。
            'id' => $request->id,
            'name' => $request->name
        ];
        return view('hello.index', $data);
    }
}
