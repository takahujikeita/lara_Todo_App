<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo List</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>
    <div class="container">
        <header>
            <h1 class=logo>Todo List</h1>
            <a href="#" class="btn btn-primary">新規作成</a>
        </header>
        <table>
            <thead>
                <tr>
                    <th>タイトル</th>
                    <th>内容</th>
                    <th>アクション</th>
                </tr>
            </thead>
            @foreach($tasks as $task)
            <tbody>
                <tr>
                    <td>{{$task->title}}</td>
                    <td>{{$task->contents}}</td>
                    <td>
                    <a href="{{ route('task.edit', $task->id) }}" class="btn btn-edit">編集</a>
                        <!-- 削除ボタンも必要に応じて追加できます -->
                        <form action="#" method="POST" style="display:inline;"> 
                            {{-- @csrf
                            @method('DELETE') --}}
                            <button type="submit" class="btn btn-delete">削除</button>
                        </form> 
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
</body>
</html>
