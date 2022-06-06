<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;


class HelloController extends Controller
{
    // Bladeを利用した設定方法は、特にない。
    // Blade.phpとindex.phpファイルがviewsに存在していた場合には、bladeを優先して使われる。
    public function index()
    {
        $data = [
            'msg' => 'これは、Bladeを利用したサンプルです。',
        ];
        return view('hello.index', $data);
    }
}
