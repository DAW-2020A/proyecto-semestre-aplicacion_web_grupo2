<?php

use App\Administrator;
use Illuminate\Http\Request;

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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
//Rutas administrador
Route::get('administrators', 'AdministratorController@index');
Route::get('administrators/{administrator}', 'AdministratorController@show');
Route::post('administrators', 'AdministratorController@store');
Route::put('administrators/{administrator}', 'AdministratorController@update');
Route::delete('administrators/{administrator}', 'AdministratorController@delete');
//Rutas question
Route::get('questions', 'QuestionController@index');
Route::get('questions/{question}', 'QuestionController@show');
Route::post('questions', 'QuestionController@store');
Route::put('questions/{question}', 'QuestionController@update');
Route::delete('questions/{question}', 'QuestionController@delete');
//Rutas MultipleChoice
Route::get('multiple_choices', 'MultipleChoiceController@index');
Route::get('multiple_choices/{multiple}', 'MultipleChoiceController@show');
Route::post('multiple_choices', 'MultipleChoiceController@store');
Route::put('multiple_choices/{multiple}', 'MultipleChoiceController@update');
Route::delete('multiple_choices/{multiple}', 'MultipleChoiceController@delete');
