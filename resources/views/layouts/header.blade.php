<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo App</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<header class="bg-white p-4 shadow-md flex justify-between items-center">
    <h1 class="text-3xl font-bold">ToDo</h1>
    <div class="flex items-center space-x-4">
        <input type="text" placeholder="検索" class="border border-gray-300 p-2 rounded-md">
        <a href="{{route('task.create')}}">
            <button class="bg-yellow-400 text-white py-2 px-4 rounded-md">新規投稿</button>
        </a>
        <div class="text-gray-700">User Name</div>
    </div>
</header>
@yield('contents')