<?php

namespace App\Http\Controllers;

use App\Complete;
use App\Http\Resources\Complete as CompleteResource;
use App\Http\Resources\CompleteCollection;
use Illuminate\Http\Request;

class CompleteController extends Controller
{
    private static $messages = [
        'required' => 'El campo :attribute es obligatorio.'
    ];
    public function index()
    {
        return new CompleteCollection(Complete::all());
    }

    public function show(Complete $complete)
    {
        return response()->json(new CompleteResource($complete), 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'complete_text' => 'required|string|max:1000',
            'hidden_text' => 'string|max:1000|require',
        ], self::$messages);
        $complete = Complete::create($request->all());
        return response()->json($complete, 201);
    }

    public function update(Request $request, Complete $complete)
    {
        $request->validate([
            'complete_text' => 'required|string|max:1000',
            'hidden_text' => 'string|max:1000|require',
        ], self::$messages);
        $complete->update($request->all());
        return response()->json($complete, 200);
    }

    public function delete(Complete $complete)
    {
        $complete->delete();
        return response()->json(null, 204);
    }
}
