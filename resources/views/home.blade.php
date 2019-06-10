<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <p>こんにちは！</p>
    @auth
        {{ \Auth::user()->name }}さん
        <a href="/auth/logout">ログアウト</a>
    @else
        ゲストさん<br>
        <a href="/auth/login"   >ログイン</a>
        <a href="/auth/register">会員登録</a>
    @endauth
</body>
</html>
