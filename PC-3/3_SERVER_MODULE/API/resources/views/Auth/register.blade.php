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
        <header>Register</header>
        <form action="/v1/auth/register/add" method="post">
            {{ csrf_field() }}
            <input type="text" placeholder="First Name" name="firstname">
            <input type="text" placeholder="Last Name" name="lastname">
            <input type="text" placeholder="Username" name="username">
            <input type="password" placeholder="Password" name="password">
            <input type="password" placeholder="Confirm Password" name="confirmpassword">
            <input type="submit" value="Register">
        </form>
    </div>
</body>

</html>
