@extends('layouts.default')

@section('content')
    <div class="container">
    	<h1>What is Laracarte?</h1>
    	<p>Laracarte is a clone app of <a href="https://laramap.com" target="_blank">Laramap.com</a></p>

    	<div class="row">
    		<div class="col-md-6">
    			<p class="alert alert-warning">
    				<strong><i class="fas fa-exclamation-triangle"></i>This app have been built by <a href="https:///twitter.com/etsmo">@etsmo</a> for learning purposes.</strong>
    			</p>
    		</div>
    	</div>

    	<p>Feel free to help to improve the <a href=""></a>source code.</p>

    	<hr>

    	<h2>What is laramap?</h2>
    	<p>Laramap is the website by which laracarte was inspired :).</p>
    	<p>More info <a href="https//laramap.com/p/about">here</a>.</p>

    	<hr>

    	<h2>Which tools and services are used in laracarte?</h2>
    	<p>Basically it's built on laravel &amp; Bootstrap. But there is a bunch of services used for email and other sections.</p>

    	<ul>
    		<li>Laravel</li>
    		<li>Bootstrap</li>
    		<li>Amazon S3</li>
    		<li>Mandrill</li>
    		<li>Google Maps</li>
    		<li>Gravatar</li>
    		<li>Anoty Martin's Geolocation Package</li>
    		<li>Michel Fortin's Markdow Parser Package</li>
    		<li>Heroku</li>
    	</ul>
    </div>
@endsection
