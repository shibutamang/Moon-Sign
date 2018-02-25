<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
     <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Titillium Web"/>
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
    <!--facebook page plugin javaScript sdk -->
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12&appId=1460231647380367&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>


@include('layouts.navbar')

@yield('content')

@include('layouts.footer')
<script>
// initialize paroller.js
$('.my-paroller').paroller();
$('.test-paroller').paroller();
</script>
</body>
</html>
