@extends('layouts.app')
@section('hero-img')
    <div class="hero"><img src="/images/community.png" style="height: 100vh;"></div>
@endsection
@section('community')
    <div class="container-fluid container5 my-5 py-5" id="container5">
        <div class="row">
            <div class="col-md-3 col-10 Community_title">
                <center><h1>Community.</h1></center>
            </div>
            <div class="col-md-3 col-10 community_section">
                <div class="Community" >
                    <img class = "img-fluid rounded" src="/images/community1.png"  id="Community_img_1">
                    <div class="paragraph_com position-static">
                        <p class="text-black">“Great location, great price and great, helpful people. What to want more?”</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-10 community_section">
                <div class="Community" >
                    <img class = "img-fluid rounded" src="/images/community2.png"  id="Community_img_2">
                    <div class="paragraph_com">
                        <p >“Gymme changed my life. Not only physically but mentally as well. I’m a better mother, and all around better human being because of this gym.”</p>
                    </div>

                </div>
            </div>
            <div class="col-md-3 col-10 community_section">
                <div class="Community" >
                    <img class = "img-fluid rounded" src="/images/community3.png" id="Community_img_3">
                    <div class="paragraph_com">
                        <p >“Love these workouts! Trainers are knowledgeable and motivating. Gymme is wonderful!”</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container container6 my-5 justify-content-start d-flex" id="container6">
        <div class="col last_image">
            <img class = "img-fluid rounded ms-5 ps-5" src="/images/last photo.png">
        </div>
        <div class="col container6_text align-self-center">
            <h1 class="h1">Wanna join &<br>have fun?	</h1>
            <p>We’ll keep you updated on the things you need to<br> know about Gymme. Nothing more, nothing less.</p>
            <button class="btn btn_com text-dark text-white btn-lg" style="background: black"> <dt>Join now</dt> </button>
        </div>
    </div>
@endsection
