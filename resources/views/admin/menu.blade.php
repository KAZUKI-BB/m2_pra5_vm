<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>管理メニュー</h1>
    <ul>
        <li><a href="#">イベント管理</a></li>
        <li><a href="#">人材管理</a></li>
        <li><a href="#">派遣情報管理</a></li>
    </ul>
    <form action="#" method="POST">
        @csrf
        <button type="submit">ログアウト</button>
    </form>
</body>
</html>