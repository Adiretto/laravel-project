@extends('layouts.app')
@section('hero-img')
    <div class="hero"><img src="/images/workouts1.png" style="height: 100vh;"></div>
@endsection
@section('training_programs')
    <div class="container-fluid container3" id="container3">

        <center><h1>Training programs.</h1></center>

        <div class="row" id="Image">
            <div class="col-lg-2.4 col-md column_training">
                <div class="content" id="content_1">
                    <img src="/images/T1.png" class="rounded" id="image_1">
                    <button type= "button" class="btn btn-outline-dark training_programs_btn btn-light btn-sm"><dt>Body training</dt></button>
                </div>
            </div>
            <div class="col-lg-2.4 col-md column_training_2" >
                <div class="content" id="content_2">
                    <img src="/images/T2.png" class="rounded" id="image_2">
                    <button type= "button"class="btn btn-outline-dark training_programs_btn btn-light btn-sm"id = "training_programs_btn"><dt>Boxing</dt></button>
                </div>
            </div>
            <div class="col-lg-2.4 col-md column_training">
                <div class="content" id="content_3">
                    <img src="/images/T3.png" class="rounded " id="image_3">
                    <button type= "button"class="btn btn-outline-dark training_programs_btn btn-light btn-sm"><dt>Body Pump</dt></button>
                </div>
            </div>
            <div class="col-lg-2.4 col-md column_training_2">

                <div class="content" id="content_4">
                    <img src="/images/T4.png" class="rounded " id="image_4">
                    <button type= "button"class="btn btn-outline-dark training_programs_btn btn-light btn-sm"id = "training_programs_btn"><dt>Yoga</dt></button>
                </div>

            </div>
            <div class="col-lg-2.4 col-md col-sm-12 column_training_last">
                <div class="content" id="content_5">
                    <img src="/images/T5 (3).png" class="rounded img_Training" id="image_5">
                    <button type= "button"class="btn btn-outline-dark training_programs_btn btn-light btn-sm"><dt>Full Body</dt></button>
                </div>
            </div>
        </div>

    </div>
@endsection
