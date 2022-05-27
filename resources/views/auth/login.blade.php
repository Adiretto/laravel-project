@extends('layouts.app')
@section('hero-img')
    <div class="hero"><img src="/images/login.png" style="height: 100vh;"></div>
@endsection
@section('login')
    <div class="login" >
        <div class="container p-5" id="Modal">
            <form action="{{route("login_process")}}" method="post">
                @csrf
                <div class="container_register">
                    <h1>Login</h1>
                    <p>Please fill in this form to create an account.</p>
                    <hr>

                    <label for="email"><b>Email</b></label>
                    <div class="input_box">
                        <input type="text" placeholder="Enter Email (@gmail.com)" name="email" pattern="\w+@gmail.com"  >
                        @error('email')
                            <p class="text-red-500">{{$message}}</p>
                        @enderror
                    </div>

                    <label  for="psw"><b>Password</b></label>
                    <div class="input_box">
                        <input type="password" placeholder="Enter Password" name="password" pattern="\w{8,30}" id="psw_1" >
                        <span class="eye" id="eye_1">
                            <i class="fa fa-eye" style="font-size: 20px;" id= "eye_icon_1"></i>
                            <i class="fa fa-eye-slash" style="font-size: 20px; "id="eye_icon_slash_1"></i>
                        </span>
                        @error('password')
                            <p class="text-red-500">{{$message}}</p>
                        @enderror
                    </div>

                    <hr>
                    <button type="submit" class="registerbtn">Login</button>
                </div>
            </form>
        </div>
    </div>
@endsection
