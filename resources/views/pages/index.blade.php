<!-- Scripts -->
<script src="{{ asset('js/script.js') }}" defer></script>

@extends('layouts.app') 
@section('content')
<h1>{{$title}}</h1>
<p>Talk about what is already being talked. Warble allows you to follow up with what’s happening in the world and allows you to give your thoughts on it.</p>
<p><b>It is as easy as a WarBle</b></p>
<br>

<div class="row">
    <div class="col-lg-8">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ asset('img/one.jpeg') }}" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('img/two.jpeg') }}" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('img/three.jpeg') }}" alt="Third slide">
                </div>
            </div>
        </div>
        <script>
            $('.carousel').carousel({
                interval: 2000
            })
        </script>
    </div>

    <div class="col-lg-4">
        <div class="sidebar-module sidebar-module-inset">
            <br>
            <h4>Quote for the day</h4>
            <p>“Newspapers cannot be defined by the second word—paper.  They’ve got to be defined by the first word—news.”</p>
            <a href="#">-Arthur Sulzberg, Jr.</a>
            <hr>
            <h4>New Year's Countdown</h4>
            <p id="time"></p>
            <hr>
            <div class="sidebar-module">
                <h4>Connect with us</h4>
                <ol class="list-unstyled">
                    <li>
                        <a href="https://www.facebook.com/bbcnews/" target="_blank">Facebook</a>
                    </li>
                    <li>
                        <a href="https://github.com/WxrPro97/WarBle" target="_blank">Github</a>
                    </li>
                    <li>
                        <a href="https://plus.google.com/+BBCNews" target="_blank">Google Plus</a>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection