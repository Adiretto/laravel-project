@extends('layouts.app')
@section('hero-img')
    <div class="hero"><img src="/images/Hero Image.png" style="height: 100vh;"></div>
@endsection
@section('our_mission')
    <div class="container2 container" id="container2">
        <div class="row p-5">
            <div class="col p-5 m-5 container2_text">
                <h1 class="h1">Our mission.</h1>
                <p class="p">We are distinguished by our unsurpassed motivating atmosphere, knowledgeable
                    staff, and premier exercise equipment, which supports our members in meeting
                    their individual fitness goals.
                    <br><br>
                    The strength of our heart-felt identity is utilized to inspire every person that steps
                    foot into our gyms to better themselves.
                </p>
                <a class="btn btn_joinNow btn-outline-dark border"><dt>Join now</dt></a>
            </div>
        </div>
    </div>
    <div class="container mb-5">
        <div class="row">
            <div class="col-sm-6 col-12 align-self-center" style="font-family: 'Inter', sans-serif;">
                <center><h1 style="font-weight: bold">We are here</h1></center>
            </div>
            <div class="col-sm-6 col-12">
                <div id="map" style="width:100%; height:60vh"></div>
            </div>
        </div>
    </div>
@endsection


