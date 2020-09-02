<?php

namespace App\Http\Controllers;

use App\Http\Resources\CrosswordCollection;
use Illuminate\Http\Request;
use App\Crossword;
use App\Http\Resources\Crossword as CrosswordResource;
class CrosswordController extends Controller
{
    public function index()
    {
        return new CrosswordCollection(Crossword::all());
    }
    public function show(Crossword $word)
    {
        return response()->json(new CrosswordResource($word), 200);
    }
}
