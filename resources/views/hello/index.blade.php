<html>

<head>
    <title>Hello/Index</title>
    <style>
        body {
            font-size: 16px;
            color: #999;
        }

        h1 {
            font-style: 50px;
            text-align: right;
            color: #f6f6f6;
            margin: -20px 0 -30px 0;
            letter-spacing: -4px;
        }
    </style>
</head>

<body>
    <h1>Blade/Index</h1>
    <p>{{$msg}}</p>

    <form action="/hello" method="POST">
        <!--
            @csrfは、「Bladeディレクティブ」決まったコードを生成して書き出すもの
            CSRFは「Cross Site Request Forgery」WEBサイト攻撃の一種。
            @csrfは、トークンを発行してそのトークン情報を持つものだけを受け付ける。用意されたフォームからの送信か見分けるために使う。
            laravelではフォームを利用する際には必ず必要なもの。書かれていないと受け付けられない。˜
        -->
        @csrf
        <input type="text" name="msg" id="">
        <input type="submit" value="">
    </form>

</body>

</html>
