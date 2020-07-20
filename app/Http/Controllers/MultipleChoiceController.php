<?php

namespace App\Http\Controllers;

use App\Http\Resources\MultipleChoiceCollection;
use App\Http\Resources\MultipleChoice as MultipleChoiceResource;
use App\MultipleChoice;
use Illuminate\Http\Request;

class MultipleChoiceController extends Controller
{
    public function index()
    {
        return new MultipleChoiceCollection(MultipleChoice::all());
    }

    public function show(MultipleChoice $multiple)
    {
        return response()->json(new MultipleChoiceResource ($multiple), 200);
    }

    public function store(Request $request)
    {
        $multiple = MultipleChoice::create($request->all());
        return response()->json($multiple, 201);
    }

    public function update(Request $request, MultipleChoice $multiple)
    {
        $multiple->update($request->all());
        return response()->json($multiple, 200);
    }

    public function delete(MultipleChoice $multiple)
    {
        $multiple->delete();
        return response()->json(null, 204);
    }
}
