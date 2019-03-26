<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('/css/header.css') }}">
        <title>github</title>
    </head>
    <body>
        <header class="site-header">
            <h1 class="site-logo"><img src="{{ asset('/img/logogo.png') }}" >MAKOINSTA</h1>
            <nav class="gnav">
                <ul class="gnav__menu">
                    <li class="gnav__menu__item"><a href="/github">ホーム</a></li>
                    <li class="gnav__menu__item"><a href="/">ログアウト</a></li>
                    <li class="gnav__menu__item"><a href="/home">投稿</a></li>
                </ul>
            </nav>
        </header>

        <div class="hero"><img src="{{ asset('/img/logo.jpg') }}" alt="hero"></div>
        <div class="content">

                <!-- エラーメッセージエリア -->
        @if ($errors->any())
            <h2>エラーメッセージ</h2>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

                <!-- 投稿表示エリア（編集するのはここ！） -->
        @isset($bbs)
        @foreach ($bbs as $d)
        <div style="padding: 10px; margin-bottom: 10px; border: 1px solid #333333;width:300px;margin-left:auto;margin-right:auto;">
            <h2>{{ $d->name }}さんの投稿</h2>
            {{ $d->comment }}
            <br><hr>
        </div>
        @endforeach
        @endisset

        <form action="/user" method="post">
            {{ csrf_field() }}

            <div>お名前 : <input type="text" name="name" value="{{$user->name}}"></div>

            <div>コメント : <input type="text" name="comment" value="{{$user->comment}}"></div>

            <input type="submit" value="Confirm">
        </form>

        <div>ようこそ{{ $nickname }}さん</div>
        <div>あなたのトークンは{{ $token }}です</div>
        <div><img src="https://avatars1.githubusercontent.com/u/45539499?v=4"></div>
        <div>リポジトリ一覧</div>
        <ul>
        @foreach($repos as $repo)
            <li>{{ $repo }}</li>
        @endforeach
        </ul>
    </body>
</html>