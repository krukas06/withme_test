<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Активация регистрации нового ползователя</title>
</head>
<body>
@if(isset($user))
<h1>Спасибо за регистрацию!, {{$user->name}}</h1>
@endif
@if(!isset($user))
<h1>Ваш пароль, {{$password}}!</h1>
@endif
@if(isset($user))
<p>
    Перейдите <a href='{{ url("register/confirm/{$user->token}") }}'>по ссылке </a>чтобы завершить регистрацию!
</p>
@endif
</body>
</html>


