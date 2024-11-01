<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>派遣情報一覧</h1>
    <a href="{{ route('dispatches.create') }}">新規派遣登録</a>
    <table>
        <thead>
            <tr>
                <td>イベント名</td>
                <td>人材名</td>
                <td>承諾状況</td>
                <td>操作</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($dispatches as $dispatch)
                <tr>
                    <td>{{ $dispatch->event->name }}</td>
                    <td>{{ $dispatch->worker->name }}</td>
                    <td>{{ $dispatch->accepted ? '承諾' : '未承諾' }}</td>
                    <td>
                        <a href="{{ route('dispatches.edit', $dispatch->id) }}">編集</a>
                        <form action="{{ route('dispatches.destroy',$dispatch->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">削除</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('admin') }}">管理画面に戻る</a>
</body>
</html>