<?php

namespace App\Http\Controllers;
use App\Models\Registration;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function submit(Request $req){
        $registration = new Registration();
        $registration->name = $req->input('name');
        $registration->email = $req->input('email');
        $registration->password = $req->input('password');
        $registration->save();
        return redirect('/registration');
    }

}
