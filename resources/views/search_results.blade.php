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
  {{-- popper.js CSS --}}
  <style>
    #tooltip {
      background: #333;
      color: white;
      font-weight: bold;
      padding: 4px 8px;
      font-size: 10px;
      border-radius: 4px;
    }
  </style>
</head>
<body>
<div class="alert alert-success" role="alert">
google検索結果一覧
<div>

@if (count($results) > 0)
  <ul>
    @foreach ($results as $result)
      <li>
        <a href="{{ $result['link'] }}">{{ $result['title'] }}</a>
        <p>{{ $result['snippet'] }}</p>
      </li>
    @endforeach
  </ul>
@else
  <p>検索結果がありませんでした</p>
@endif

</body>