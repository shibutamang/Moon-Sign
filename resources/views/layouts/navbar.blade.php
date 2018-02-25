<!-- Main Navbar -->
<nav class="navbar navbar-default navbar-fixed-top" id="navbar">
    <div class="container" id="navbar-item">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
            <a href="{{url('/')}}" class="navbar-brand"><img src="{{asset('images/logo-transparent.png')}}" height="62" width="62" style="margin-top:-21px"/></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
            <li><a href="{{url('/')}}">HOME</a> </li>
            <li><a href="#">ABOUT</a> </li>
            <li><a href="#">INFORMATION</a></li>
            <li><a href="{{url('/bookmark')}}">BOOKMARK</a></li>
            <li><a href="#">FAQ</a> </li>
        </ul>
        </div>
    </div>
</nav>
