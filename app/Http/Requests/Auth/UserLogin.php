<?php
namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
class UserLogin extends FormRequest{
        public function login(){
            $credentials = request()->validate(
                rules:["email"=>["required", "email"], "password"=>["required"]]
            );
            if(Auth::attempt($credentials)){
                request()->session()->regenerate();
                return redirect("/dashboard");
            }
        }
        public function logout(){
            $user = Auth::user();
            if($user){
                Auth::logout();
                return redirect("/dashboard");
            }

            return redirect("/dashboard");
            
        }

}