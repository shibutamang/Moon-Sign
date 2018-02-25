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
                  <span style="font-size:18px">Available Dates</span>
                  <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#dateInsert" style="float:right"><span class="fa fa-plus"></span> Add Date</button>
                </div>
                <div class="panel-body">

                    <table class="table table-striped">
                      <thead>
                        @if(count($date) == null)
                          <div class="alert alert-danger">No any dates available!</div>
                        @endif
                        @if(count($date) > 0)
                        <tr>
                          <th>Date & Time</th>
                          <th>Action</th>
                        </tr>
                        @endif
                      </thead>
                      <tbody id="date-info">
                                @foreach($date as $date)
                        <tr>
                            <td>{{$date->date}}</td>
                            <td><a href="{{url('home/edit'.$date->id)}}" title="Edit" class="btn btn-success btn-sm"><span class="fa fa-pencil"></span></a>
                               <a title="Delete" href="{{url('/delete/'.$date->id)}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span></a></td>
                        </tr>
                            @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Bootstrap model to add date -->
<div id="dateInsert" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add new date</h4>
      </div>
      <div class="modal-body">
        <form action="{{url('insert')}}" method="post">
          {{csrf_field()}}
          <div class="form-group">
            <input type="text" class="form-control" placeholder="New date" name="date"/>
          </div>
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          <input type="submit" class="btn btn-primary"/>
        </form>
      </div>
    </div>

  </div>
</div>


@endsection
