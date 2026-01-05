<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    //
    public function store(Request $request){
        $todo = $request->validate([
            "title"=>["required", "string", "max:50"],
             "description"=>["nullable", "string", "max:255"],
             "category"=>["nullable", "string", "max:50"],
              "due_date"=>["nullable", "date"],
               "due_time"=>["nullable", "date_format:H:i"]]);
        Auth::user()->todos()->create($todo);
        return redirect("/");
    }
    public function index(Request $request){
        $allTodos = Auth::user()->todos()->latest()->get();
        return view("home",["todos"=>$allTodos] );
    }
    public function show(Todo $todo){
        return view("update-todo", ["todo"=>$todo]);
    }
    public function update(Todo $todo, Request $request){
        if(Auth::guest()){
            return redirect("/login");
        }
        $data = $request->validate(["title"=>["nullable", "string","max:20"], "description"=>["nullable", "string", "min:2"], "category"=>["nullable", "string", "max:20"],"due_date"=>["nullable", "date"],"due_time"=>["nullable", "date_format:H:i"],]);
        $todo->update($data);
return redirect("/");
    }

    public function destroy(Todo $todo){
        if(Auth::guest()){
            return redirect("/login");
        }
        $todo->delete();
        return redirect("/");
    }
}
