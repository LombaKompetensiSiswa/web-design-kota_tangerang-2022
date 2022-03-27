<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers;
use Validator;
use Illuminate\Support\Facades\DB;
use Hash;
class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

// ================== API ========================
    
    public function register(Request $request){


        $validator = Validator::make($request->all(),[
            'firstname' => 'required|alpha|min:2|max:20',
            'lastname' => 'required|alpha|min:2|max:20',
            'username' => 'required|unique:users',
            'password' => 'required|min:5|max:12',
        ]);

        if($validator->fails()){
            return response($validator->messages(), 422);
        } 

        $role = 'creator';
        $token = bcrypt($request->username);
        
        $insert = DB::table('users')->insert([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'token' => $token,
            'role' => $role,
        ]);

        return response()->json([
            'message' => 'Register Success',
            'username' => $request->username,
            'token' => $token,
            'role' => $role,
        ],200);
    }


    public function login(Request $request){

        // =============== CEK APAKAH REQUEST KOSONG ATAU TIDAK ===================
        if($request->username == null || $request->password == null){
            return response()->json([
                "messages" => "Invalid login"
            ],401);
        }
        
        // =========== CARI USER PADA DATABASE BERDASARKAN VALUE REQUEST =========
        $getUser = User::where(['username' => $request->username]);
        $user = $getUser->first();
        if(!$user){
            return response()->json([
                "messages" => "Invalid login"
            ],401);
        }
        
        // ======== CEK APAKAH PASSWORD INPUT SAMA DENGAN PASSWORD DB =============
        $cekPassword = Hash::check($request->password, $user->password);
        if(!$cekPassword){
            return response()->json([
                "messages" => "Invalid login"
            ],401);
        }
        
        $token = str_random(32);
        $getUser->update(['token' => $token]);

        return response()->json([
            'message' => 'Success login',
            'token' => $token,
            'role' => $user->role
        ], 200);
    }
    
    
    public function logout(Request $request){
        $getUser = User::where(['token' => $request->token]);
        $user = $getUser->first();
        
        if(!$user){
            return response()->json([
                'message' => 'Unauthorized user',
            ], 401);
        }
        
        $getUser->update(['token' => null]);

        return response()->json([
            'message' => 'Logout success',
        ], 200);
    }


// ================== NON API =================================

    public function pageRegisterNonApi(){
        return view('Auth.register');
    }

    public function registerNonApi(Request $request){
        
        
        $validator = Validator::make($request->all(),[
            'firstname' => 'required|alpha|min:2|max:20',
            'lastname' => 'required|alpha|min:2|max:20',
            'username' => 'required|unique:users',
            'password' => 'required|min:5|max:12',
        ]);

        if($validator->fails()){
            return response($validator->messages(), 422);
        } 

        $role = 'creator';
        $token = bcrypt($request->username);
        
        $insert = DB::table('users')->insert([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'token' => $token,
            'role' => $role,
        ]);

        return response()->json([
            'message' => 'Register Success',
            'username' => $request->username,
            'token' => $token,
            'role' => $role,
        ],200);
    }

    public function pageLoginNonApi(){
        return view('Auth.login');
    }

    public function loginNonApi(Request $request){

         // =============== CEK APAKAH REQUEST KOSONG ATAU TIDAK ===================
         if($request->username == null || $request->password == null){
            return response()->json([
                "messages" => "Invalid login"
            ],401);
        }
        
        // =========== CARI USER PADA DATABASE BERDASARKAN VALUE REQUEST =========
        $getUser = User::where(['username' => $request->username]);
        $user = $getUser->first();
        if(!$user){
            return response()->json([
                "messages" => "Invalid login"
            ],401);
        }
        
        // ======== CEK APAKAH PASSWORD INPUT SAMA DENGAN PASSWORD DB =============
        $cekPassword = Hash::check($request->password, $user->password);
        if(!$cekPassword){
            return response()->json([
                "messages" => "Invalid login"
            ],401);
        }
        
        $token = str_random(32);
        $getUser->update(['token' => $token]);

        return response()->json([
            'message' => 'Success login',
            'token' => $token,
            'role' => $user->role
        ], 200);

    }

    public function logoutNonApi(Request $request){
        $getUser = User::where(['token' => $request->token]);
        $user = $getUser->first();
        
        if(!$user){
            return response()->json([
                'message' => 'Unauthorized user',
            ], 401);
        }
        
        $getUser->update(['token' => null]);

        return response()->json([
            'message' => 'Logout success',
        ], 200);
    }


}
