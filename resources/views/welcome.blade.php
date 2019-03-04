<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <style>
            .sample{
                width: 100%;
                height: 700px;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .btnxx{
              border-radius: 25px;
              background-color: orange;
              padding: 30px;
              text-align: center;
              color: white;
              margin: 100px;
              font-size:1cm;
              font-weight:bold
            }
        </style>

        <title>ログイン画面</title>
    </head>
    <body>
        <div class="sample">
            <button class="btnxx" type="button" onclick="location.href='/login/github'">GitHubで<br>ログイン</button>
        </div>
    </body>
</html>