<?php

	function page_title($title){

		$base_title = 'Laracarte - List of artisans';

		if($title == ''){

			return $base_title;
		}

		return $title.' | '.$base_title;
	}