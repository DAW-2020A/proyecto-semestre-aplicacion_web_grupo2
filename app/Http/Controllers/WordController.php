<?php

namespace App\Http\Controllers;

use App\Http\Resources\Word as WordResource;
use App\Http\Resources\WordCollection;
use App\Word;
use Illuminate\Http\Request;

class WordController extends Controller
{
    private static $messages = [
        'required' => 'El campo :attribute es obligatorio.'
    ];

    public function index()
    {
        return new WordCollection(Word::all());
    }

    public function show(Word $word)
    {
        return response()->json(new WordResource($word), 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'word' => 'required|string|max:10',
        ], self::$messages);
        $word = Word::create($request->all());
        return response()->json($word, 201);
    }

    public function update(Request $request, Word $word)
    {
        $request->validate([
            'word' => 'required|string|max:10',
        ], self::$messages);
        $word->update($request->all());
        return response()->json($word, 200);
    }

    public function delete(Word $word)
    {
        $word->delete();
        return response()->json(null, 204);
    }
}
