<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modern Business - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('/')}}front/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('/')}}front/css/modern-business.css" rel="stylesheet">

</head>

<body>

@include('front.include.nav')
@yield('body')
@include('front.include.footer')

<!-- Bootstrap core JavaScript -->
<script src="{{asset('/')}}front/vendor/jquery/jquery.min.js"></script>
<script src="{{asset('/')}}front/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>

