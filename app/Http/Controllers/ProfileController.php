<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Email;
use Illuminate\Validation\Rules\Password;
use Illuminate\View\View;

class ProfileController extends Controller{
    // create user
    public function store(){
        // validate
        $validateAttributes = request()->validate(
            rules: [
                "first_name"=>["required", "max:50"],
                "last_name"=>["required", "max:50"],
                "password"=>["required", "confirmed", Password::min(6)],
                "email"=>["required", "string", "email", "max:255", "unique:users,email"]
            ]);
        // store
        $user = User::create($validateAttributes);
        Auth::login($user);
        // redirect
        return redirect("/dashboard");
    }
    // login user
    // get authenticated user
    public function show(){
        $user =  Auth::user();
        
        return view("dashboard", ["user"=>$user]);
    }

    public function update(){
        // validate
        $user = Auth::user();
        $credentials = request()->validate([
            "first_name"=>["required", "max:50"],
            "last_name"=>["required", "max:50"],
            "email"=>["required", "string", "email", "max:255", Rule::unique("users", "email")->ignore($user->getKey())]
            
        ]);
        // store
        $user->update($credentials);
        // redirect
        return redirect("/dashboard");
    }

    public function destroy(){
        $user = Auth::user();
        // logout
        Auth::logout();
        // delete
        $user->delete();
        // clear session
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect("/");
    }
   
}
