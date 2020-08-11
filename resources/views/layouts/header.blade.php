<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}" />
		<meta name="description" content="">
		<meta name="author" content="">

        <title>iNET SPATIAL TEST</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
		<!-- Ionicons -->
		<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<!-- icheck bootstrap -->
		<link rel="stylesheet" href="{{ asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
		<!-- Theme style -->
		<link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
		<!-- jQuery -->
		<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
        <!-- Styles -->
        <style>
            html, body {
                background-color: #000;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body data-spy="scroll" data-target=".navbar-collapse">
        @yield('content')
		
		<!-- Bootstrap 4 -->
		<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
		<!-- AdminLTE App -->
		<script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>
		<script src="{{ asset('assets/js/signals.min.js') }}"></script>
		<script src="{{ asset('assets/js/hasher.min.js') }}"></script>    
		<script src="{{ asset('assets/js/crossroads.min.js') }}"></script>  
		<script src="{{ asset('assets/js/handlebars.runtime.min-v4.7.6.js') }}"></script>
		<script src="{{ asset('assets/js/bootbox.min.js') }}"></script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
		<script src="{{ asset('assets/js/app.js') }}"></script>
		<script src="{{ asset('assets/js/events.js') }}"></script>
    </body>
</html>
