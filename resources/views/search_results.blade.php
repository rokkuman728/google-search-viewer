<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>検索結果一覧</title>
  {{-- CSS --}}
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  {{-- JS --}}
  <script src="{{ asset('js/app.js') }}"></script>
</head>

<div class="h-full bg-white text-gray-800 p-4 lg:p-8" 
    x-data="gistsData()" 
    x-init="init()">

  <header class="flex items-center mb-3">
    <h1 class="flex-grow" x-text="title">Google検索結果一覧</h1>
    <button class="inline-flex text-white bg-indigo-500 border-0 py-3 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg" x-on:click="goToTop( )">検索画面に戻る</button>
  </header>

@if (count($results) > 0)
  <ul class="list-reset flex flex-col">
    @foreach ($results as $result)
      <li class="relative -mb-px block border p-4 border-grey">
        <a x-bind href="{{ $result['link'] }}"><p class="font-bold">{{ $result['title'] }}</p></a><br>
        <small x-text="gist.parsed.description">{{ $result['snippet'] }}</small>
      </li>
    @endforeach
  </ul>
@else
  <p>検索結果がありませんでした</p>
@endif

<script>
function goToWelcome() {
    retun view('search_index');
}
</script>

</body>