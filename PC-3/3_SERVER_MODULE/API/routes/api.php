<?php

use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BoardController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// ========== AUTHENTICATION ==========
Route::post('v1/auth/register', 'AuthController@register')->name('register');
Route::post('v1/auth/login', 'AuthController@login')->name('login');
Route::get('v1/auth/logout', 'AuthController@logout')->name('logout');


// ================== BOARD ===================
Route::post('v1/board', 'BoardController@create');
Route::put('v1/board/{board_id}', 'BoardController@update');
Route::delete('v1/board/{board_id}', 'BoardController@delete');
Route::get('v1/board/', 'BoardController@index');
Route::get('v1/board/{board_id}', 'BoardController@openboard');
Route::post('v1/board/{board_id}/member', 'BoardController@addteammember');
Route::delete('v1/board/{board_id}/member/{user_id}', 'BoardController@deleteteammember');



// ==================== LIST ======================
Route::post('v1/board/{board_id}/list', 'ListController@create');
Route::put('v1/board/{board_id}/list/{list_id}', 'ListController@update');
Route::delete('v1/board/{board_id}/list/{list_id}', 'ListController@delete');
Route::post('v1/board/{board_id}/list/{list_id}/right', 'ListController@movelisttoright');
Route::post('v1/board/{board_id}/list/{list_id}/left', 'ListController@movelisttoleft');



// ==================== CARD =========================
Route::post('v1/board/{board_id}/list/{list_id}/card', 'CardController@create');
Route::put('v1/board/{board_id}/list/{list_id}/card/{card_id}', 'CardController@update');
Route::delete('v1/board/{board_id}/list/{list_id}/card/{card_id}', 'CardController@update');
Route::post('v1/card/{card_id}/up', 'CardController@moveupcard');
Route::post('v1/card/{card_id}/down', 'CardController@movedowncard');
Route::post('v1/card/{card_id}/move/{list_id}', 'CardController@movecardtoanotherlist');
