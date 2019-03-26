<!-- エラーメッセージ。なければ表示しない -->
@if ($errors->any())
<ul>
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif

<form action="/bbs" method="POST" enctype="multipart/form-data">
    名前:<br>
    <input name="name">
    <br>
    コメント:<br>
    <textarea name="comment" rows="4" cols="40"></textarea>
    <br>
    <label for="photo">画像ファイル:</label>
    <input type="file" class="form-control" name="file">
    <br>
    {{ csrf_field() }}
    <button class="btn btn-success"> 送信 </button>
</form>