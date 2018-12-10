@extends('layouts.app') 
@section('content')
<h1>{{$title}}</h1>
<p>WarBle is  made to bring people together on related news topics that peak the interests of common users. 
    At warble, you can view, share your opinions about news topics. With having the control of what you say.</p>
<p><b>Want to know how warble came to life…..</b></p>
<p>It was just a tweet and brainstorming for the pending project or a tweet while brainstorming for the project..</p>
<p>WarBle your moment and We Share to the world for you.</p>
<br>
<div class="row">
    <div class="col-md-4">
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="{{ asset('img/gaurav.png') }}" alt="Avatar" style="width:300px;height:300px;">
                </div>
                <div class="flip-card-back">
                    <h1>Gaurav Savanur</h1>
                    <p>Co-founder of WarBle</p>
                    <p>Bengaluru, India</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="{{ asset('img/sandy.png') }}" alt="Avatar" style="width:300px;height:300px;">
                </div>
                <div class="flip-card-back">
                    <h1>Sandupa Jayasiri</h1>
                    <p>CEO of WarBle</p>
                    <p>Colombo, Sri Lanka</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="{{ asset('img/hemant.png') }}" alt="Avatar" style="width:300px;height:300px;">
                </div>
                <div class="flip-card-back">
                    <h1>Hemant Sharma</h1>
                    <p>CFO of WarBle</p>
                    <p>Ohio, United States</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection