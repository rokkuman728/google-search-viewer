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

<header class="text-gray-600 body-font">
  <div class="container py-8 mx-auto flex items-center sm:flex-row flex-col">
    <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
      <span class="ml-3 text-xl">検索結果一覧</span>
    </a>
    <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">検索ワード:{{ $query }}　約{{ number_format($serchInfo['totalResults']) }}件（{{ $serchInfo['searchTime'] }}秒）　-　10件表示
    </p>
    <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
    <form action="{{ route('search_index') }}" method="GET">
    @csrf
    <div class="float-right">
    <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">検索画面に戻る
      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
        <path d="M5 12h14M12 5l7 7-7 7"></path>
      </svg>
    </button>
    </form>
    </span>
  </div>
</header>

@if (count($results) > 0)
  <ul class="list-reset flex flex-col">
    @foreach ($results as $result)
      <li class="relative -mb-px block border p-4 border-grey">
        <a x-bind href="{{ $result['link'] }}" target="_blank" rel="noopener noreferrer"><p class="font-bold text-blue-700">{{ $result['title'] }}</p></a><br>
        <small x-text="gist.parsed.description">{{ $result['snippet'] }}</small>
      </li>
    @endforeach
  </ul>
@else
  <p>検索結果がありませんでした</p>
@endif

</body>