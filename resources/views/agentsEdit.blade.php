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
          <div class="panel" style="box-shadow:0 0 4px #ccc">
            <div class="panel-body">
          <form method="post" action="{{url('home/agents/update'.$agent->id)}}"style="max-width:600px">
            {{csrf_field()}}
            <div class="form-group">
              <label>Agent name:</label>
              <input type="text" class="form-control" name="name" value="{{$agent->name}}" />
            </div>
            <div class="form-group">
              <label>Address:</label>
              <input type="text" class="form-control" name="address" value="{{$agent->address}}" />
            </div>
            <div class="form-group">
              <label>Email:</label>
              <input type="email" class="form-control" name="email" value="{{$agent->email}}"  />
            </div>
            <div class="form-group">
              <label>Phone No:</label>
              <input type="number" class="form-control" name="phone" value="{{$agent->phone}}"  />
            </div>
          <a href="{{url('/home/agents')}}" class="btn btn-danger">&laquo; Back</a>
          <button type="submit" class="btn btn-primary">Update</button>
        </form>
        <div>
        </div>
        </div>
    </div>
</div>


@endsection
