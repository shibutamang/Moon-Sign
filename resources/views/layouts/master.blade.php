<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{asset('images/logo-transparent.png')}}" />
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{url('font-awesome/css/font-awesome.min.css')}}"/>
    <link rel="stylesheet" href="{{url('css/style.css')}}"/>
    <script type="text/javascript" src="{{url('js/jquery-3.2.1.min.js')}}"></script>
    <script type="text/javascript" src="{{url('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{url('js/jquery.paroller.min.js')}}"></script>
    <script type="text/javascript" src="{{url('js/main.js')}}"></script>
</head>
<body>
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
            <li><a href="#">FAQ</a> </li>
        </ul>
        </div>
    </div>
</nav>


@yield('content')


<!-- Footer Section -->

<footer class="container-fluid">
    <div class="container">
        <div class="row" id="footer-items">
            <div class="col-md-4">
                <h5>MY BRAND</h5>
                <P style="max-width: 300px">Some adhsjfhakljsehfkadsf
                    Some adhsjfhakljsehfkadsf
                    Some adhsjfhakljsehfkadsf
                    Some adhsjfhakljsehfkadsf
                <form>
                    <label>News Later</label>
                    <div class="form-group-sm" id="news-letter">
                        <input type="email" class="form-control" placeholder="Your Email" style="border-radius:0"/>
                        <input type="submit" class="btn btn-sm btn-primary" value="SUBMIT" style="border-radius:0"/>
                    </div>
                </form>
                </P>
            </div>
            <div class="col-md-4">
                <h5>FIND US</h5>
                <P>
                    <i class="fa fa-map-marker"> <span>Tinkune, Subidhanagar</span></i><br>
                    <i class="fa fa-phone"> <span>041-23518, 9823656754</span></i><br>
                    <i class="fa fa-envelope">  <span>info@random.com.np</span></i>
                </P>
            </div>
            <div class="col-md-4" id="quick-link">
                <h5>QUICK LINKS</h5>
                <P>
                <ul>
                    <li>&raquo; <a href="#">Who we are?</a> </li>
                    <li>&raquo; <a href="#">Email Us</a> </li>
                    <li>&raquo; <a href="#">Bookmark now</a> </li>
                </ul>
                </P>
            </div>
        </div>
    </div>
</footer>
<div class="container-fluid" id="copy-right">
    <p>&copy; copyright 2018- My Brand</p>
</div>
<script>
// initialize paroller.js
$('.my-paroller').paroller();
</script>
</body>
</html>
