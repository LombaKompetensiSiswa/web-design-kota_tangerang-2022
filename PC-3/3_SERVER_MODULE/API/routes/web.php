<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('v1/auth/login');
});

// ========== AUTHENTICATION ==========
Route::get('v1/auth/register', 'AuthController@pageRegisterNonApi');
Route::post('v1/auth/register/add', 'AuthController@registerNonApi');

Route::get('v1/auth/login', 'AuthController@pageLoginNonApi');
Route::post('v1/auth/login/add', 'AuthController@loginNonApi');

Route::get('v1/auth/logout', 'AuthController@logoutNonApi');

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
