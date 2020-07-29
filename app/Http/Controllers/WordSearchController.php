<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WordSearch;
use App\Http\Resources\WordSearchCollection;
use App\Http\Resources\WordSearch as WordSearchResource;

class WordSearchController extends Controller
{
    private static $messages = [
        'required' => 'El campo :attribute es obligatorio.'
    ];

    public function index()
    {
        return new WordSearchCollection(WordSearch::all());
    }

    public function show(WordSearch $search)
    {
        return response()->json(new WordSearchResource($search), 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'clue' => 'required|boolean',
            'size' => 'required|string|max:20'
        ], self::$messages);
        $search = WordSearch::create($request->all());
        return response()->json($search, 201);
    }

    public function update(Request $request, WordSearch $search)
    {
        $request->validate([
            'clue' => 'required|boolean',
            'size' => 'required|string|max:20'
        ], self::$messages);
        $search->update($request->all());
        return response()->json($search, 200);
    }

    public function delete(WordSearch $search)
    {
        $search->delete();
        return response()->json(null, 204);
    }

}

