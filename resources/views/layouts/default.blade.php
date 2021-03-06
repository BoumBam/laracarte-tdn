<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}"> -->

        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">

		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

        <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

	

        <title>Laravel</title>    

        <style>
        	body {
        		font-family: 'Open Sans', Helvetica, Arial, sans-serif;
        	}

        	footer {
        		margin-top: 4em;
        		margin-bottom: 4em;
        	}
        </style>
    </head>
    <body>
    	@include('layouts/partials/_nav')


        @yield('content')

        @include('layouts/partials/_footer')

        <!-- <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script> -->

        <script type="text/javascript" src="//code.jquery.com/jquery.min.js"></script>

        <!-- Latest compiled and minified JavaScript -->
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    </body>
</html>
