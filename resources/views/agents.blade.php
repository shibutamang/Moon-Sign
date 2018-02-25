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
            <div class="panel panel-default">
                <div class="panel-heading">
                  <span style="font-size:18px">Available Agents</span>
                  <button class="btn btn-sm btn-primary pull-right" data-toggle="modal"  data-target="#agent" ><span class="fa fa-plus"></span> Add</button>
                </div>

                <div class="panel-body">
                  <table class="table table-striped">
                    @if(count($agents) != null)
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone No.</th>
                        <th>Address</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    @endif
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
                      <td><a title="Edit" href="{{url('/home/agents/edit'.$agent->id)}}" class="btn btn-success btn-sm"><span class="fa fa-pencil"></span></a>
                         <a title="Delete" href="{{url('/home/agents/delete'.$agent->id)}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span></a></td>
                  </tr>
                    @endforeach

                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- -->

<div class="modal fade" id="agent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Agent</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="/home/agents/create">
          {{csrf_field()}}
          <div class="form-group">
            <label>Agent name:</label>
            <input type="text" class="form-control" name="name" placeholder="Name" />
          </div>
          <div class="form-group">
            <label>Address:</label>
            <input type="text" class="form-control" name="address" placeholder="Address" />
          </div>
          <div class="form-group">
            <label>Email:</label>
            <input type="email" class="form-control" name="email" placeholder="Email" />
          </div>
          <div class="form-group">
            <label>Phone No:</label>
            <input type="number" class="form-control" name="phone" placeholder="Phone" />
          </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Insert</button>
      </div>
      </form>
      </div>
    </div>
  </div>
</div>

@endsection
