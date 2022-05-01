<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use \App\Models\Todo; 
class TodoController extends Controller
{
    public function create(Request $request){
        $validated = $request->validate([
            'description' => 'required',
        ]);

        $todo = new Todo();
        $todo -> description = $request->input("description");
        $todo -> done = $request->input("done");
        $todo -> save();

        return response()->json($request);
    }
}
