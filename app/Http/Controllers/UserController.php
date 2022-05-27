<?php

namespace App\Http\Controllers;
use App\Models\Registration;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /*function submit(Request $req){
        $registration = new Registration();
        $registration->name = $req->input('name');
        $registration->email = $req->input('email');
        $registration->password = $req->input('password');
        $registration->save();
        return redirect('/registration');
    }*/
    public function showLoginForm(){
        return view("auth.login");
    }
    public function login(Request $request){
        $data = $request->validate([
            "email" =>["required","email","string"],
            "password" =>["required"]
        ]);
        if(auth("web")->attempt($data)){
            return redirect("/home");
        }
        return redirect(route("login"))->withErrors(["email" => "User not found"]);
    }
    public function logout(){
        auth("web")->logout();
        return redirect("/home");
    }
    public function showRegisterForm(){
        return view("auth.register");
    }
    public function register(Request $request){
        $data = $request->validate([
           "name" => ["required","string"],
            "email" =>["required","email","string","unique:users,email"],
            "password" =>["required","confirmed"]
        ]);
        $user = User::create([
           "name"=>$data["name"],
            "email" => $data["email"],
            "password" => bcrypt($data["password"])
        ]);
        if($user){
            auth("web")->login($user);
        }
        return redirect('/register');
    }


}
