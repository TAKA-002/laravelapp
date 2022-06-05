<html>

<head>
    <title>Hello/Index</title>
    <style>
        body {
            font-size: 16px;
            color: #999;
        }

        h1 {
            font-size: 100px;
            text-align: right;
            color: #f6f6f6;
            margin: -50px 0 0 0;
        }
    </style>
</head>

<body>
    <h1>Index</h1>
    <!--
        変数$msgはコントローラーから渡される。
        dateメソッドはphpの関数。
        基本的に、このテンプレートの中は、phpのスクリプトを使用できる。
        問題は、コントローラーからテンプレートにデータを渡す方法を知らないといけない。
     -->
    <p><?php echo $msg; ?></p>
    <p><?php echo date("Y年n月j日"); ?></p>

</body>

</html>
