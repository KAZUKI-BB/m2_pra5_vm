<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ログイン</h1>
    <form action="#" method="post">
        @csrf
        <div>
            <label for="email">メールアドレス</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="password">パスワード</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit">ログイン</button>
    </form>
    @if ($errors->has('login'))
        <div class="alert alert-danger">
            {{ $errors->first('login') }}
        </div>
    @endif

</body>
</html>