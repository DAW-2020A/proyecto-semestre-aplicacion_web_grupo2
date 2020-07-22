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
//Rutas courses
Route::get('courses', 'CourseController@index');
Route::get('courses/{course}', 'CourseController@show');
Route::put('courses/{course}', 'CourseController@update');
Route::delete('courses/{course}', 'CourseController@delete');
//Rutas question
Route::get('questions', 'QuestionController@index');
Route::get('questions/{question}', 'QuestionController@show');
Route::post('questions', 'QuestionController@store');
Route::put('questions/{question}', 'QuestionController@update');
Route::delete('questions/{question}', 'QuestionController@delete');
//Rutas complete
Route::get('completes', 'CompleteController@index');
Route::get('completes/{complete}', 'CompleteController@show');
Route::post('completes', 'CompleteController@store');
Route::put('completes/{complete}', 'CompleteController@update');
Route::delete('completes/{complete}', 'CompleteController@delete');
//Rutas MultipleChoice
Route::get('multiple_choices', 'MultipleChoiceController@index');
Route::get('multiple_choices/{multiple}', 'MultipleChoiceController@show');
Route::post('multiple_choices', 'MultipleChoiceController@store');
Route::put('multiple_choices/{multiple}', 'MultipleChoiceController@update');
Route::delete('multiple_choices/{multiple}', 'MultipleChoiceController@delete');
//Rutas Test
Route::get('tests', 'TestController@index');
Route::get('tests/{test}', 'TestController@show');
Route::post('tests', 'TestController@store');
Route::put('tests/{test}', 'TestController@update');
Route::delete('tests/{test}', 'TestController@delete');

