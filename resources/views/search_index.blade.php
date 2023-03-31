<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Google検索フォーム</title>
    {{-- CSS --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- JS --}}
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
<!-- main -->
<div class="flex justify-center">
    <div>
        <img class="w-2/3 ml-auto mr-auto mt-10 mb-10" src="{{ url('images/icon0154.png') }}" alt="googleロゴ">
    <form action="/search" method="POST">
    <div class="flex border border-gray-200 rounded-full p-4 shadow text-xl">
        <div>🔍</div>
        @csrf
        <input type="text" name="search_term" class="w-full outline-none px-3" placeholder="検索ワードを入力してください">
    </div>
    <div class="mt-8 text-center">
        <button class="mr-3 bg-gray-200 border border-gray-300 py-3 px-4 rounded hover:bg-gray-400 hover:border-gray-500">検索</button>
    </div>
    </form>
    </div>
</div>
</body>