<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="{{ asset('/css/header.css') }}">
    <title>掲示板</title>
</head>
<body>

<header class="site-header">
    <h1 class="site-logo"><img src="{{ asset('/img/logogo.png') }}" >MAKOINSTA</h1>
    <nav class="gnav">
        <ul class="gnav__menu">
            <li class="gnav__menu__item"><a href="/bbs">ホーム</a></li>
            <li class="gnav__menu__item"><a href="/">ログイン</a></li>
            <li class="gnav__menu__item"><a href="/home">投稿</a></li>
        </ul>
    </nav>
</header>

<div class="hero"><img src="{{ asset('/img/logo.jpg') }}" alt="hero"></div>
<div class="content">
    <h1>掲示板</h1>

<!-- エラーメッセージエリア -->
@if ($errors->any())
    <h2>エラーメッセージ</h2>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

    @isset ($filename)
    <div>
        <img src="{{ asset('storage/' . $filename) }}"width="300" height="200">
    </div>
    @endisset

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

<!-- フォームエリア -->
<h2>フォーム</h2>
<form action="/bbs" method="POST">
    名前:<br>
    <input name="name">
    <br>
    コメント:<br>
    <textarea name="comment" rows="4" cols="40"></textarea>
    <br>
    {{ csrf_field() }}
    <button class="btn btn-success"> 送信 </button>
</form>
</div>
<footer class="site-footer">
    <p class="copyright">@2019 MAKOINSTA</p>
</footer>

</body>
</html>