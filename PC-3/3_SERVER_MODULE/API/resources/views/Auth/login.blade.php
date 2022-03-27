<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('template/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('template/header.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('template/login.css') }}">
</head>

<body>
    <div class="header">
        <div>
            <a href="#">Papan</a>
        </div>
    </div>
    <div class="form">
        <header>Login</header>
        <form action="/v1/auth/login/add" method="post">
            {{ csrf_field() }}
            <input type="text" placeholder="Username" name="username">
            <input type="password" placeholder="Password" name="password">
            <input type="submit" value="Login">
        </form>
    </div>
</body>

</html>
