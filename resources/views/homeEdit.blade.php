@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 left-menu">
            <ul>
                <li style="background:black"><h3><a style="color: rgb(189, 110, 6)" href="{{url('/home')}}">Moon Sign<span style="color:#ccc;font-size:14px">.org</span></a></h3></li>
                <li><a href="{{url('/home')}}"><span class="fa fa-dashboard"></span> Dash Board</a></li>
                <li><a href="{{url('/home/agents')}}"><span class="fa fa-user"></span> Agents</a></li>
                <li><a href="{{url('/home/bookmark')}}"><span class="fa fa-bookmark"></span> Bookmark</a></li>
            </ul>
        </div>
        <div class="col-md-8 main-container">

          @if(session('status'))
          <div class="alert alert-success alert-dismissable fade in">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <span>{{session('status')}}!</span>
          </div>
          @endif


            <div class="panel panel-default" style="box-shadow:1px 1px 3px #ccc">
                <div class="panel-heading" style="padding-bottom:16px">
                  <span style="font-size:18px"></span>
                <div class="panel-body">
                    <form method="post" action="{{url('home/edit/update'.$date->id)}}" style="max-width:450px">
                      {{csrf_field()}}
                      <label><h4>Edit date</h4></label>
                      <div class="form-group">
                        <input type="text" name="date" value="{{$date->date}}" class="form-control"/>
                      </div><hr>
                      <a href="{{url('home')}}" class="btn btn-danger">&laquo; Back</a>
                      <input type="submit" class="btn btn-primary" value="Update"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
