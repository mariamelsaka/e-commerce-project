<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- normalize css -->
    <link rel="stylesheet" href="{{asset("assets/css/normalize.css")}}">
    <!-- boostrap css -->
    <link rel="stylesheet" href="{{asset("assets/css/css/bootstrap.min.css")}}">
    <!-- fontawesome css -->
    <link rel="stylesheet" href="{{asset("assets/css/all.min.css")}}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{asset("assets/css/animate.css")}}">
    <!-- style css -->
    <link rel="stylesheet" href="{{"assets/style/style.css"}}">
    <title>@yield('title')</title>
</head>
<body>

@yield('content')




<!-- boostrap js -->
<script src="{{asset("assets/js/bootstrap.bundle.min.js")}}"></script>
<!-- fontawesome js -->
<script src="{{asset("assets/js/all.min.js")}}"></script>
<!-- animate js -->
<script src="{{asset("assets/js/wow.min.js")}}"></script>


</body>
