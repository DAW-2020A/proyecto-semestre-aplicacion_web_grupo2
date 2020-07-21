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
//Rutas teachers
Route::get('teachers', 'TeacherController@index');
Route::get('teachers/{teacher}', 'TeacherController@show');
Route::put('teachers/{teacher}', 'TeacherController@update');
Route::delete('teachers/{teacher}', 'TeacherController@delete');
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
//Rutas Student
Route::get('students', 'StudentController@index');
Route::get('students/{student}', 'StudentController@show');
Route::post('students', 'StudentController@store');
Route::put('students/{student}', 'StudentController@update');
Route::delete('students/{student}', 'StudentController@delete');
