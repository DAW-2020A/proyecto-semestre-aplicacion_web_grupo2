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

//rutas publicas
Route::group(['middleware' => ['cors']], function () {
    Route::post('register', 'UserController@register');
    Route::post('login', 'UserController@authenticate');

    Route::group(['middleware' => ['jwt.verify']], function() {
        //Rutas courses
        Route::post('logout', 'UserController@logout');
        Route::get('courses', 'CourseController@index');
        Route::get('courses/{course}', 'CourseController@show');
        Route::put('courses/{course}', 'CourseController@update');
        Route::post('courses', 'CourseController@store');
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
        Route::get('courses/{course}/tests', 'TestController@index');
        Route::get('courses/{course}/tests/{test}', 'TestController@show');
        Route::post('courses/{course}/tests', 'TestController@store');
        Route::put('courses/{course}/tests/{test}', 'TestController@update');
        Route::delete('courses/{course}/tests/{test}', 'TestController@delete');

        //Rutas WordSearch
        Route::get('searches', 'WordSearchController@index');
        Route::get('searches/{search}', 'WordSearchController@show');
        Route::post('searches', 'WordSearchController@store');
        Route::put('searches/{search}', 'WordSearchController@update');
        Route::delete('searches/{search}', 'WordSearchController@delete');

        //Rutas Activity
        Route::get('activities', 'ActivityController@index');
        Route::get('activities/{activity}', 'ActivityController@show');
        Route::post('activities', 'ActivityController@store');
        Route::put('activities/{activity}', 'ActivityController@update');
        Route::delete('activities/{activity}', 'ActivityController@delete');

        //Rutas Word
        Route::get('words', 'WordController@index');
        Route::get('words/{word}', 'WordController@show');
        Route::post('words', 'WordController@store');
        Route::put('words/{word}', 'WordController@update');
        Route::delete('words/{word}', 'WordController@delete');
    
        //Crosswords
        Route::get('crosswords', 'CrosswordController@index');
        Route::get('crosswords/{crossword}', 'CrosswordController@index');
});
