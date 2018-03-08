@extends('layouts.master')

@section('title')
    Bookmark
@endsection

@section('content')
    <div class="container" style="margin-top: 60px; padding-bottom:40px; padding-top:30px">
        <h3>Bookmark Here</h3>
          @if($errors->all())
              <div class="alert alert-danger">
                <span>All the field is required !</span>
              </div>
          @endif
        <form action="{{url('bookmark/send')}}" method="post" style="max-width:500px; border-left:3px solid #e38d13; padding-left:15px">
          {{csrf_field()}}
          <div class="form-group">
            <label>First Name:</label>
            <input type="text" class="form-control" name="fname" placeholder="First Name"/>
          </div>
          <div class="form-group">
            <label>Last Name:</label>
            <input type="text" class="form-control" name="lname" placeholder="Last Name"/>
          </div>
          <div class="form-group">
            <label>Email:</label>
            <input type="email" class="form-control" name="email" placeholder="Email"/>
          </div>
          <div class="form-group">
            <label>Phone No:</label>
            <input type="text" class="form-control" name="phone" placeholder="Phone no."/>
          </div>
          <label><input type="checkbox" id="hasAgent"/> Without an Agent?</label>
          <select name="agent_select" style="padding:10px" id="select">
            <option>Select your Agent</option>
            @foreach($agent as $agent)
            <option value="{{ $agent->email }}">{{ $agent->name }}</option>
            @endforeach
          </select><br><br>
          <label>Appointment Date:</label>
          <select name="date_select">
            <option>-------------</option>
            @foreach($date as $date)
            <option value="{{$date->date}}">{{$date->date}}</option>
            @endforeach
          </select><br><br>
          <input type="submit" class="btn btn-primary" value="Bookmark Now!"/>
        </form>
    </div>

    <script type="text/javascript">
      $(document).ready(function(e){
        $('#hasAgent').change(function(e){
          if(this.checked){
            $('#select').attr('disabled', 'disabled');
          }
          else {
            $('#select').removeAttr('disabled');
          }
        });
      });
    </script>
@endsection
