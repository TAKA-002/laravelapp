<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

global $head, $style, $body, $end;
$head = '<html><head>';
$style = <<<EOF
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
EOF;
$body = '</head><body>';
$end = '</body></html>';

function tag($tag, $txt)
{
    return "<${tag}>" . $txt . "</${tag}>";
}
class HelloController extends Controller
{

    public function index($id = "no name", $pass = "unknown")
    {
        global $head, $style, $body, $end;

        $html = $head
            . tag("title", "Hello/Index")
            . $style
            . $body
            . tag("h1", "Index")
            . tag("p", "これはHello/INDEXページです。")
            . '<a href="./other">Go to Other Page.</a>'
            . $end;

        return $html;
    }

    public function other()
    {
        global $head, $style, $body, $end;

        $html =
            $head
            . tag("title", "OTHER")
            . $style
            . $body
            . tag("h1", "Other")
            . tag("p", "これはOTHERページです。")
            . $end;

        return $html;
    }
}
