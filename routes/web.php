<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TodoController;
use App\Http\Requests\Auth\UserLogin;
use App\Models\Todo;
use Illuminate\View\View;
// use App\Http\Controllers\Auth\User


Route::get("/", fn(): View => view("home"));
Route::get("/dashboard", fn(): View => view("dashboard"));
Route::get("/register-user", fn(): View=> view("auth.register-user"));
Route::get("/login-user", fn(): View=> view("auth.login-user"))->name("login");

Route::post("/register-user", [ProfileController::class, "store"]);
Route::get("/dashboard", [ProfileController::class, "show"])->middleware("auth");
Route::post("/login-user", [UserLogin::class, "login"]);
Route::post("/logout", [UserLogin::class, "logout"])->middleware("auth");
Route::put("/update-user", [ProfileController::class, "update"])->middleware("auth");
Route::delete("/delete-user", [ProfileController::class, "destroy"])->middleware("auth");

Route::get("/update-user", function(){
    $user = Auth::user();
    return view("auth.update-user", ["user"=>$user]);
});
// todos    
Route::get("/add-todo", fn(): View => view("todos.add-todo"));
Route::post("/add-todo", [TodoController::class, "store"])->middleware("auth");
Route::get("/", [TodoController::class, "index"])->middleware("auth");
Route::get("/update-todo/{todo}", fn(Todo $todo):View=>view("update-todo", ["todo"=>$todo]))->middleware("auth");
Route::put("/update-todo/{todo}", [TodoController::class, "update"]);
Route::delete("/delete-todo/{todo}", [TodoController::class, "destroy"])->middleware("auth");