<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use PharIo\Manifest\Url;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public static function login(){
        return view('login', [
            "title" => "Login"
        ]);
    }

    public static function index(){
        return view('index', [
            "title" => "Schedule"
        ]);
    }

    public static function register(){
        return view('register', [
            "title" => "Register"
        ]);
    }
}
