@extends('layouts.master')

@section('title')
    Moon Sign
@endsection

@section('content')
<div class="my-paroller main-paroller" data-paroller-factor="0.6">
  <div class="paroller-container"></div>
</div>

    <div class="info-box">
        <h3>Want to know about yourself?</h3>
            <p>
            Wondering whether the career you are at current time
             is the best one for you or which aspect of life would
             it be better for you to make prime focus for to get the best out of life?<br/>
             Everything can be explained through Vedic Astrology.
            </p>
    </div>

    <!-- Main Body Contents -->

    <div class="container-fluid" style="padding-bottom:40px">
        <div class="row">
            <div class="col-md-8" style="padding:20px 0 0 20px;">
                <div style="font-size:17px;padding:80px 0 0 70px;">
                <p style="border-left:4px solid #d66108; padding-left:10px;">
                <span style="font-size:30px">WHO ARE WE?</span></br>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                 Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                 printer took a galley of type and scrambled it to make a type specimen book. It has survived
                  not only five centuries, but also the leap into electronic typesetting, remaining essentially
                </p><hr>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel bookmark-container">
                <center>
                    <div class="panel-header">
                    <h4 style="text-align:left">Bookmark Now</h4>
                    </div>
                    <div class="panel-body">
                    <h4 style="text-align:left">Available Date & Time</h4>
                    @if(count($date) == null)
                      <div class="alert alert-danger">No dates available!</div>
                    @endif
                    <ul class="list-group" style="margin-left:-20px">
                    @foreach($date as $date)
                    <li class="list-group-item">{{$date->date}}</li>
                    @endforeach
                    </ul>
                    </div>
                    <a href="{{url('/bookmark')}}" class="btn" style="">BOOKMARK</a>
                </center>
                </div>
            </div>
            </div>
        </div>
        <img src="{{url('images/Tree.jpg')}}" class="img-responsive" height="350" width="500"/>

        <hr>
        <div class="container" style="padding:40px 0 40px 0">
            <div class="row">
                <div class="col-md-7">
                <h3>WHAT IS VEDIC ASTROLOGY?</h3>
                <p style="font-size:17px;text-align:left">
            Vedic Astrology has been around for centuries formed by the
             greatest Rishis of ancient age. It is the time honored,
              traditional astrological art of Eastern culture especially
               famous in Nepal and India and has been continually defined
                and refined since ancient times. It is based upon an in-depth
                 analysis of your birth chart and astronomical data.
            With the creator said to be one of its eighteen great preceptors,
            Jyotish or Vedic Astrology is thought to be as old as this creation is.
             Planets are constantly moving with respect to earth in the skies.
              The position of Sun, Moon and some planets closest to earth can
         give important clues about the fortunes of individual human being
         and groups of human beings, that is the basic premise of astrology.
                </p>
                <hr>
                </div>
                <div class="col-md-5">
                    <img class="img-responsive" src="{{url('images/vedic.jpg')}}"/>
                </div>
            </div>
        </div>

@endsection
