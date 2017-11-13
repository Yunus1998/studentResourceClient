<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">

	<link rel="stylesheet" href="{{asset('css/AdminLTE.min.css')}}">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    @yield('styles')
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        @include('layouts.nav')

        <div class="container">
            
            @yield('content')


        </div>

        @include('layouts.footer')
        <script srcs="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/adminlte.min.js')}}"></script>
        <script src="{{asset('js/app.js')}}"></script>
        <!-- <script src="{{asset('')}}"></script> -->
        @yield('scripts')


    </div>
</body>
</html>
