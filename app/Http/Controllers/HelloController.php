<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;


class HelloController extends Controller
{
    public function index()
    {
        // ルートからではなく、コントローラーのindexアクションでview関数を呼び、viewsのhelloフォルダのindexファイルをレンダリングする。
        return view('hello.index');
    }
}
