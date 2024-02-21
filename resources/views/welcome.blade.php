<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset('frontend/img/favicon.png')}}"/>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Oswald&amp;family=Barlow:wght@300;400;500;600;700&amp;display=swap">
    <link rel="stylesheet" href="{{asset('frontend/css/plugins.css')}}"/>
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}"/>
    @vite('resources/css/app.css')
    <title>Fitnesszone</title>

</head>
<body>

<div id="app">
    <router-view></router-view>
</div>


@vite('resources/js/app.js')
<script src="{{asset('frontend/js/jquery-3.6.3.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery-migrate-3.0.0.min.js')}}"></script>
<script src="{{asset('frontend/js/modernizr-2.6.2.min.js')}}"></script>
<script src="{{asset('frontend/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.isotope.v3.0.2.js')}}"></script>
<script src="{{asset('frontend/js/popper.min.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/js/scrollIt.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.magnific-popup.js')}}"></script>
<script src="{{asset('frontend/js/YouTubePopUp.js')}}"></script>
<script src="{{asset('frontend/js/custom.js')}}"></script>

</body>
</html>
