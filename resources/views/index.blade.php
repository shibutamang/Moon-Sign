@extends('layouts.master')

@section('title')
    Moon Sign
@endsection

@section('content')
<div class="my-paroller" data-paroller-factor="0.5">
  <div class="paroller-container"><h3>We Make The World Even Better!</h3></div>
</div>

    <div class="info-box">
        <h3>Short Info</h3>
            <p>
                Lorem Ipsum dollar some random texts
                Lorem Ipsum dollar some random texts
            </p>
    </div>
      <div class="panel bookmark-container">
          <center>
          <div class="panel-header">
              <h4 style="text-align:left">Bookmark Now</h4>
          </div>
          <div class="panel-body">
              <h4 style="text-align:left">Available Date & Time</h4>
              <ul class="list-group" style="margin-left:-20px">
                @foreach($date as $date)
                <li class="list-group-item">{{$date->date}}</li>
                @endforeach
              </ul>
              <a href="{{url('/bookmark')}}" class="btn" style="">BOOKMARK</a>
          </div>
</center>
      </div>

    <!-- Main Body Contents -->

    <div class="container" style="max-width: 800px; padding: 70px; margin-top:100px;">
        <h1>What We Do ?</h1><hr>
        <p style=" font-size: 17px; padding-bottom: 20px;padding-top: 15px">
            Lorem Ipsum Dollar some random texts for this paragraph
            Lorem Ipsum Dollar some random texts for this paragraph
            Lorem Ipsum Dollar some random texts for this paragraph
            Lorem Ipsum Dollar some random texts for this paragraph
        </p>
        <a href="{{url('/bookmark')}}" class="btn btn-lg btn-primary" style="border-radius:0">Explore More!</a>
    </div>
    <hr>

    <div class="jumbotron">
        <center>
            <h2>Our Testimonials</h2>
            <div class="container" style="padding: 50px">
                <div class="row">
                    <div class="col-md-4">
                        <img class="img-circle" width="150" height="150" style="background-color: #0d3625"/><br>
                        <h4>Bucky Robert</h4>
                        <p style="font-size: 15px; max-width: 250px">Lorem Ipsum dollar some random texts
                            Lorem Ipsum dollar some random texts</p>
                    </div>
                    <div class="col-md-4">
                        <img class="img-circle" width="150" height="150" style="background-color: #0d3625"/><br>
                        <h4>Bucky Robert</h4>
                        <p style="font-size: 15px; max-width: 250px">Lorem Ipsum dollar some random texts
                            Lorem Ipsum dollar some random texts</p>
                    </div>
                    <div class="col-md-4">
                        <img class="img-circle" width="150" height="150" style="background-color: #0d3625"/><br>
                        <h4>Bucky Robert</h4>
                        <p style="font-size: 15px; max-width: 250px">Lorem Ipsum dollar some random texts
                            Lorem Ipsum dollar some random texts</p>
                    </div>
                </div>
            </div>
        </center>
    </div>


@endsection
