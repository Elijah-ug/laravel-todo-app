<?php

use App\Http\Controllers\ProfileController;
use Illuminate\View\View;


Route::get("/", fn(): View => view("home"));
Route::get("/dashboard", fn(): View => view("dashboard"));
Route::get("/register-user", fn(): View=> view("auth.register-user"));
Route::get("/login-user", fn(): View=> view("auth.login-user"));

Route::post("/register-user", [ProfileController::class, "store"]);
Route::get("/user/dashboard", [ProfileController::class, "show"]);