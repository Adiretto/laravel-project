@extends('layouts.app')
@section('hero-img')
    <div class="hero"><img src="/images/register.png" style="height: 100vh;"></div>
@endsection
@section('register')
    <div class="register" >
        <div class="container p-5" id="Modal">
            <form action="/registration-submit" method="post">
                @csrf
                <div class="container_register">
                    <h1>Register</h1>
                    <p>Please fill in this form to create an account.</p>
                    <hr>

                    <label for="name"><b>Name</b></label>
                    <div class="input_box">
                        <input type="text" placeholder="Enter name" name="name" required autofocus >
                    </div>

                    <label for="email"><b>Email</b></label>
                    <div class="input_box">
                        <input type="text" placeholder="Enter Email (@gmail.com)" name="email" pattern="\w+@gmail.com" required autofocus>
                    </div>

                    <label  for="password"><b>Password</b></label>
                    <div class="input_box">
                        <input type="password" placeholder="Enter Password" name="password" pattern="\w{8,30}" id="psw_1" required>
                        <span class="eye" id="eye_1">
                            <i class="fa fa-eye" style="font-size: 20px;" id= "eye_icon_1"></i>
                            <i class="fa fa-eye-slash" style="font-size: 20px; "id="eye_icon_slash_1"></i>
                        </span>
                    </div>

                    <!--
                    <label for="password-repeat"><b>Repeat Password</b></label>
                    <div class="input_box">
                        <input type="password" placeholder="Repeat Password" name="password-repeat" pattern="\w{8,20}" id="psw_2">
                        <span class="eye" id="eye_2">
                            <i class="fa fa-eye" style="font-size: 20px;" id= "eye_icon_2" ></i>
                            <i class="fa fa-eye-slash" style="font-size: 20px;" id="eye_icon_slash_2"></i>
                        </span>
                    </div>
                    -->
                    <hr>
                    <button type="submit" class="registerbtn">Register</button>
                </div>
            </form>
        </div>
    </div>
@endsection
