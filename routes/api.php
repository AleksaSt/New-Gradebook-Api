<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('/register', 'RegisterController@store');
Route::post('/login', 'LoginController@authenticate');
Route::get('/gradebooks', 'GradebooksController@index');
Route::post('/gradebooks/create', 'GradebooksController@store');
Route::get('/professors', 'ProfessorsController@index');
Route::post('/professors/create', 'ProfessorsController@store');




