## 概要
Laravelで個人制作したサイトです。<br>
ユーザーが文字列入力フォームにキーワードを入力し、入力したキーワードでGoogle検索結果一覧を表示するサイトです。

https://user-images.githubusercontent.com/99527608/229330608-d7fb015a-b3bb-48bf-85ef-dde7050bded4.mov

## 使用技術
- PHP7.3
- Laravel 8.75
- TailwindCSS 

Custom Search JSON API 使用<br>   
レスポンシブ対応<br><br>

## ローカルサーバ起動手順
.env.exsampleファイルを複製いただき、.envファイルの作成をお願いいたします。<br>
プロジェクトのルートディレクトリにおいてcomposer install実行後、php artisan serveでローカルサーバの起動をお願いいたします。<br>
下記のエラーが発生した場合は、お手数ですがphp artisan key:generateコマンドを実行後、再度起動をお願いします。
```
Illuminate\Encryption\MissingAppKeyException
No application encryption key has been specified.
```
