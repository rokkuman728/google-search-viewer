<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>検索フォーム</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="cover.css" rel="stylesheet">
</head>

    {{-- CSS --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- JS --}}
    <script src="{{ asset('js/app.js') }}"></script>
    {{-- popper.js CSS --}}
</head>
<body>
<div class="alert alert-success" role="alert">
google検索フォーム
<div>

<div class="input-group">
<form action="/search" method="POST">
    @csrf
    <input type="text" class="form-control" name="search_term" placeholder="キーワードを入力">
    <button class="btn btn-outline-success" type="submit" id="button-addon2"><i class="fas fa-search"></i> 検索</button>
        {{-- <input type="text" name="search_term">
        <button type="submit">検索</button> --}}
    </form>
</div>
</body>