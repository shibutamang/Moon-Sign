@extends('layouts.master')

@section('title')
    Bookmark
@endsection

@section('content')
    <div class="container" style="margin-top: 60px; padding-bottom:40px; padding-top:30px">
        <h3>Bookmark Here</h3>
        <form action="#" method="post" enctype="multipart/form-data" style="max-width:500px; border-left:3px solid #e38d13; padding-left:15px">
          <div class="form-group">
            <label>First Name:</label>
            <input type="text" class="form-control" placeholder="First Name"/>
          </div>
          <div class="form-group">
            <label>Last Name:</label>
            <input type="text" class="form-control" placeholder="Last Name"/>
          </div>
          <div class="form-group">
            <label>Email:</label>
            <input type="email" class="form-control" placeholder="Email"/>
          </div>
          <div class="form-group">
            <label>Phone No:</label>
            <input type="text" class="form-control" placeholder="Phone no."/>
          </div>
          <label><input type="checkbox" id="hasAgent"/> Without an Agent?</label>
          <select name="agents" style="padding:10px" id="select">
            <option>Select your Agent</option>
            <option>Bucky Robert</option>
            <option>David San</option>
          </select><br><br>
          <label>Appointment Date:</label>
          <select name="date">
            <option>-------------</option>
            <option>jan-21, 2018</option>
            <option>feb-02, 2018</option>
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
