<?php

	function page_title($title){

		$base_title = config('app.name'). ' - List of artisans';

		if($title == ''){

			return $base_title;
		}

		return $title.' | '.$base_title;
	}

	function set_active_route($route){

		return Route::is($route) ? 'active' : '';
	}