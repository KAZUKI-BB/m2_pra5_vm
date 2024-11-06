<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>人材編集</title>
</head>
<body>
    <h1>人材編集</h1>
    <form action="{{  route('workers.update', $worker->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">名前</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div>
            <label for="email">メールアドレス</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div>
            <label for="password">パスワード(変更する場合のみ入力)</label>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <label for="password_confirmation">パスワード確認(変更する場合のみ入力)</label>
            <input type="password" name="password_confirmation" id="password_confirmation">
        </div>
        <button type="submit">更新</button>
    </form>
    <a href="{{ url()->previous() }}"></a>
</body>
</html>