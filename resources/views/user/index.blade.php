<?php
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
</head>
<body>
@include('inc.alert');
<h1>Hello User</h1>
<a class="btn btn-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
							document.getElementById('logout-form').submit();">{{Auth::user()->name}} -> Logout <i class="fas fa-sign-out-alt"></i></a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/bs-animation.js')}}"></script>
</body>
</html>
