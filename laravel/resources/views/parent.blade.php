<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>
    <div id="left">
        @section('left')
            123 子类模板继承父类模板后会重写
        @show
    </div>
    <div id="right">
        @section('right')
            132 要想访问子类模板是显示父类模板内容 子类模板里加 @parent
            @show
    </div>
</div>

</body>
</html>