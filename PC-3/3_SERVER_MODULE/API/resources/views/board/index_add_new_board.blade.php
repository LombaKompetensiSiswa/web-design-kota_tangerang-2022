<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('template/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('template/header.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('template/home.css') }}">
</head>

<body>
    <div class="header">
        <div>
            <a href="">Home</a>
        </div>
        <div class="right">
            <a href="">John Doe</a>
            <a href="">Logout</a>
        </div>
    </div>
    <div class="container">
        <div class="board-container">
            <div class="board-wrapper">
                <div class="board">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                </div>
            </div>
            <div class="board-wrapper">
                <div class="board">test</div>
            </div>
            <div class="board-wrapper">
                <div class="board">test</div>
            </div>
            <div class="board-wrapper">
                <div class="board">test</div>
            </div>
            <div class="board-wrapper">
                <div class="board">test</div>
            </div>
            <div class="board-wrapper">
                <div class="board">test</div>
            </div>
            <div class="board-wrapper">
                <div class="board new-board">
                    <!-- use Enter to submit create -->
                    <input type="text" placeholder="New Board Name" autofocus>
                </div>
            </div>
        </div>
</body>

</html>