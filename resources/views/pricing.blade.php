@extends('layouts.app')
@section('hero-img')
    <div class="hero"><img src="/images/pricing.png" style="height: 100vh;"></div>
@endsection
@section("pricing_plan")
    <div class="container container4 mb-5" id="container4">
        <center><h1 class="h1">Pricing plan.</h1></center>
        <div class="row pricing_plan">
            <div class="col-lg col-md-6">
                <div class="pricing">
                    <button class="btn btn_pricing bg-dark text-light"><dt>Basic</dt></button>
                    <h1>20$</h1>
                    <p class="month">/month</p>
                    <p> <img src="/images/pricing-2_vector.png"> unlimited gym access</p>
                    <br>
                    <p> <img src="/images/pricing-2_vector.png"> 1 training programs</p>
                    <br>
                    <p> <img src="/images/pricing-2_vector.png"> free fitness consultation</p>
                    <br><br>
                    <button class="btn btn_joinNow btn-outline-dark btn_pricing_1"><dt>Join now</dt></button>
                </div>
            </div>

            <div class="col-lg col-md-6 ">
                <div class="pricing">
                    <button class="btn btn_pricing bg-dark text-light"><dt>Premium</dt></button>
                    <h1>35$</h1>
                    <p class="month"> /month</p>
                    <p> <img src="/images/pricing-2_vector.png"> unlimited gym access</p>
                    <p> <img src="/images/pricing-2_vector.png"> 5 training programs</p>
                    <p> <img src="/images/pricing-2_vector.png"> free fitness consultation</p>
                    <p> <img src="/images/pricing-2_vector.png"> personal trainer</p>
                    <button class="btn btn_joinNow btn-outline-dark btn_pricing_2"><dt>Join now</dt></button>
                </div>
            </div>

            <div class="col-lg col-md-6">
                <div class="pricing">
                    <button class="btn btn_pricing bg-dark text-light"><dt>Elite</dt></button>
                    <h1>49$</h1>
                    <p class="month">/month</p>
                    <p> <img src="/images/pricing-2_vector.png"> unlimited gym access</p>
                    <p> <img src="/images/pricing-2_vector.png"> all training programs</p>
                    <p> <img src="/images/pricing-2_vector.png"> free fitness consultation</p>
                    <p> <img src="/images/pricing-2_vector.png"> personal trainer</p>
                    <p> <img src="/images/pricing-2_vector.png"> 50% off drinks</p>
                    <button class="btn btn_joinNow btn-outline-dark btn_pricing_3"><dt>Join now</dt></button>
                </div>
            </div>
        </div>
    </div>
@endsection
