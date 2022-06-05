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
    <p><?php echo $msg; ?></p>
    <!-- もしもクエリが複数あるときは、「&」で繋げられるので、それも取得できる。（http://localhost:8000/hello?id=query_string_sample&name=takayuki） -->
    <p><?php echo 'ID：' . $id; ?></p>
    <p><?php echo 'NAME：' . $name; ?></p>
    <p><?php echo date("Y年n月j日"); ?></p>

</body>

</html>
