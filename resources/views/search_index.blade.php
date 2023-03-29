<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>検索フォーム</title>
</head>
<body>
    <h1>google検索フォーム</h1>
<div>
    <form action="/search" method="POST">
        @csrf
        <input type="text" name="search_term">
        <button type="submit">検索</button>
    </form>
</div>
</body>

{{-- 
<script async src="https://cse.google.com/cse.js?cx=35ae9abbb246b4f11">
</script>
<div class="gcse-search"></div> --}}