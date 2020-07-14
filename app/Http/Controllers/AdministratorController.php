<?php

namespace App\Http\Controllers;

use App\Administrator;
use Illuminate\Http\Request;

class AdministratorController extends Controller
{
     public function index(){
         return Administrator::all();
     }
     public function show(Administrator $administrator){
         return $administrator;
     }
     public function store(Request $request){
         $administrator = Administrator::create($request->all());
         return response()->json($administrator, 201);
     }
     public function update(Request $request, Administrator $administrator){
         $administrator->update($request->all());
         return response()->json($administrator, 200);
     }
     public function delete(Request $request, Administrator $administrator){
         $administrator->delete();
         return response()->json(null, 204);
     }
}
