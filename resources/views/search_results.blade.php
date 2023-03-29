<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>検索結果一覧</title>
</head>
<body>
    <h1>google検索結果一覧</h1>
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