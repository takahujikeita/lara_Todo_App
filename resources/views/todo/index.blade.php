@extends('layouts.header')
@section('contents')
    <main class="container mx-auto p-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- 繰り返し -->
            @foreach($tasks as $task)
            <div class="bg-white p-4 rounded-lg shadow-md">
                <div class=" h-40 flex items-center justify-center">
                    {{-- <span class="text-white text-xl">画像</span> --}}
                    {{-- <img src="{{ $task->image_at }}" alt=""> --}}
                    <img src="{{ asset('storage/' . $task->image_at) }}" alt="" class="h-full object-cover">
                </div>
                <h2 class="text-xl font-semibold mt-4">{{$task->title}}</h2>
                <p class="text-gray-600">{{$task->contents}}</p>
                <div class="flex justify-between items-center mt-4">
                    <button class="text-pink-500"><i class="far fa-heart"></i> ♥</button>
                    <div class="space-x-2 flex">
                        <a href="{{ route('task.edit', $task->id) }}">
                            <button class="bg-blue-500 text-white py-1 px-4 rounded-md">編集</button>
                        </a>
                        <form action="" method="POST">
                            <button class="bg-red-500 text-white py-1 px-4 rounded-md">削除</button>
                        </form>
                        
                    </div>
                </div>
            </div>
            @endforeach
            <!-- 上記のカードを必要な数だけ繰り返します -->
        </div>
    </main>
    @endsection

</html>
