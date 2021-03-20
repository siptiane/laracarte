@extends('layouts/default',['title' => 'about'])

@section('content')

    <div class="container espace">

    	<h2>What is {{config('app.name')}}</h2>
    	<p>{{config('app.name')}} is a clone app of <a href="https://laramap.com" target="_blank">Laramap.com</a></p>

    	<div class="row">
    		<div class="col-md-6">
    			<p class="alert alert-warning"> 
    				<i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
					This app has been build by 
    				<a href="htts://facebook.com">@seba</a> for learning purposes.
    			</p>
    		</div>
    	</div>
    	<p>Feel free to help to improve the 
    		<a href="https://github.com/siptiane/laracarte">source code</a></p>

    	<hr>

    	<h2>What is Laramap?</h2>
    	<p>Laramap is the website by which {{config('app.name')}} is inspired :).</p>
    	<p>More info <a href="https://laramap.com">here</a></p>

    	<hr>

    	<h2>Which tools and services are used in Laracarte</h2>
    	<p>
    		basically it's build on laravel &amp; bootstrap. but there's a bunch of services 
    		used for email and other sections
    	</p>

    	<ul>
    		<li>laravel</li>
    		<li>Bootstrap</li>
    		<li>Amazone S3</li>
    		<li>Mandril</li>
    		<li>Google map</li>
    		<li>Gravatar</li>
    		<li>Antony Martins Geolocation package</li>
    		<li>Michel fortin's Markdown parser package</li>
    		<li>Heroku</li>
    	</ul>
    </div>
@endsection