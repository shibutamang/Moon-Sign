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
                <li><a href="#"><span class="fa fa-image"></span> Image Slider</a></li>
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
                  <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#dateInsert" style="float:right">Add Date</button>
                </div>
                <div class="panel-body">

                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Date & Time</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody id="date-info">
                                @foreach($date as $date)
                        <tr>
                            <td>{{$date->date}}</td>
                            <td><a class="btn btn-success btn-sm" id="edit" data-toggle="modal" data-target="#date-update"><span class="fa fa-pencil"></span></a>
                               <a href="{{url('/delete/'.$date->id)}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span></a></td>
                        </tr>
                            @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap model for edit-->

<div class="modal fade" id="date-update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Date</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="{{url('/update')}}" id="frm-update">
          <div class="form-group">
            <input type="text" class="form-control" id="date" name="date" value="" />
          </div>
          <input type="submit" class="btn btn-primary" value="Update"/>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>

      </div>
    </div>
  </div>
</div>

<!-- Bootstrap model for date insertion-->

<div class="modal fade" id="dateInsert" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Date</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="/insert">
          {{csrf_field()}}
          <div class="form-group">
            <input type="text" class="form-control" name="inputDate" placeholder="Input Date" />
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
