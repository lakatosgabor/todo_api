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

    public function show(){
        $todo = Todo::all();
        return response()->json($todo);
    }

    public function showbyid($id){
        if($id === null){
            return;
        }
        $todo = Todo::find($id);
        return response()->json($todo);
    }


    public function todoupdate($id, Request $request){
        if($id === null || $request->input("done") === null){
            return;
        }

        $todo = Todo::find($id);
        $todo -> done = $request->input("done");
        $todo -> save();

        return response()->json($todo);
    }

    public function tododelete($id){
        if($id === null){
            return;
        }
        $todo = Todo::find($id);
        $todo -> delete();

        return response()->json($todo);

    }
}
