<?php

use App\Http\Controllers\ProfileController;
use Illuminate\View\View;


Route::post("/register-user", [ProfileController::class, "store"]); 