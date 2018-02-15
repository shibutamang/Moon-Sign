@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 left-menu">
            <ul>
              <li style="background:black"><h3><a style="color: rgb(189, 110, 6)" href="{{url('/home')}}">Moon Sign<span style="color:#ccc;font-size:14px">.org</span></a></h3></li>
                <li><a href="{{url('/home')}}"><span class="fa fa-dashboard"></span> Dash Board</a></li>
                <li><a href="{{url('/agents')}}"><span class="fa fa-user"></span> Agents</a></li>
                <li><a href="#"><span class="fa fa-users"></span> Customers</a></li>

            </ul>
        </div>
        <div class="col-md-8 main-container">
            <div class="panel panel-default">
                <div class="panel-heading">
                  <span style="font-size:18px">Bookmarks from Customers</span>
                </div>

                <div class="panel-body">
                    <span>No any customers available right now!</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
