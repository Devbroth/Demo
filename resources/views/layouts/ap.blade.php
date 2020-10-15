<!DOCTYPE html>
<html lang="en">
<head>
    <title>Indian Grocery Supplier</title>
    <link rel="shortcut icon" href="{{URL::asset('assets/images/')}}">
    <link href="{{URL::asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{URL::asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{URL::asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">
    <script src="{{URL::asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/popper.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/modernizr.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/detect.js')}}"></script>
    <script src="{{URL::asset('assets/js/jquery.slimscroll.js')}}"></script>
</head>
<body>
    <div id="app">
      

        <main >


            @yield('content')
        </main>
    </div>