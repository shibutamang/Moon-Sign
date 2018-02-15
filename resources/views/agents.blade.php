@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 left-menu">
            <ul>
                <li style="background:black"><h3><a style="color: rgb(189, 110, 6)" href="{{url('/home')}}">Moon Sign<span style="color:#ccc;font-size:14px">.org</span></a></h3></li>
                <li><a href="{{url('/home')}}"><span class="fa fa-dashboard"></span> Dash Board</a></li>
                <li><a href="{{url('/agents')}}"><span class="fa fa-user"></span> Agents</a></li>
                <li><a href="{{url('/customer')}}"><span class="fa fa-users"></span> Customers</a></li>
            </ul>
        </div>
        <div class="col-md-8 main-container">
            <div class="panel panel-default">
                <div class="panel-heading">
                  <span style="font-size:18px">Available Agents</span>
                </div>

                <div class="panel-body">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone No.</th>
                        <th>Address</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @if(count($agents) == null)
                        <div class="alert alert-danger">No any Agents available!</div>
                      @endif
                      @foreach($agents as $agent)
                  <tr>
                      <td>{{$agent->name}}</td>
                      <td>{{$agent->email}}</td>
                      <td>{{$agent->phone}}</td>
                      <td>{{$agent->address}}</td>
                      <td><button class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal"><span class="fa fa-pencil"></span></button>
                         <a href="{{url('/agents/delete'.$agent->id)}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span></a></td>
                  </tr>
                    @endforeach

                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
