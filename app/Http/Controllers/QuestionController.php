<?php

namespace App\Http\Controllers;

use App\Http\Resources\QuestionCollection;
use App\Question;
use App\Http\Resources\Question as QuestionResource;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    private static $messages = [
        'required' => 'El campo :attribute es obligatorio.'
    ];

    public function index (){
        return new QuestionCollection (Question::all());
    }

    public function show (Question $question){
        return response()->json(new QuestionResource ($question),200);
    }
    public function store(Request $request){
        $request->validate([
            'word' => 'required|string|max:15',
            'definition' => 'string|max:250|require'
        ], self::$messages);
        $question = Question::create($request->all());
        return response()->json($question, 201);
    }
    public function update(Request $request, Question $question){
        $request->validate([
            'word' => 'required|string|max:15',
            'definition' => 'string|max:250|require'
        ], self::$messages);
        $question->update($request->all());
        return response()->json($question, 200);
    }
    public function delete (Question $question){$question->delete();
    return response()->json(null, 204);
    }
}
