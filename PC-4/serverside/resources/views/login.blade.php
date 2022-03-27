@extends('layout.layout')

@section('body')
    

 
    <div class="container-fluid d-flex justify-content-center align-items-center vh-100 bg-secondary">
      <div class="container" style="width: 30rem">
        <h2 class="display-4 text-center mb-5 text-white">Login</h2>
          <form action="" method="POST">
            <input type="text" id="username" name="username" placeholder="Username" class="form-control mb-5" autofocus required>
            <input type="password" id="password" name="password" placeholder="Password" class="form-control mb-3" required>
            <div class="d-flex justify-content-center mb-3">
            <a href="register" class="text-white link-form">Didn't have any Account?</a>
            </div>
            <div class="d-flex">
            <button type="submit" class="btn btn-primary flex-grow-1" name="login">Login</button>
            </div>
          </form>
      </div>
    </div>

    @endsection
    