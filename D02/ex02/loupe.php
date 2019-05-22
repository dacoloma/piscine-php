#!/usr/bin/php
<?php
	if ($argc - 1 == 1 && file_exists($argv[1])){
		$page = file_get_contents($argv[1]);
		// echo "$page \n";
		$page = preg_replace_callback(
			"/(<a )(.*?)(>)(.*)(<\/a>)/si",
			function ($matches){
				// echo "$matches[0] \n";
				$matches[0] = preg_replace_callback(
					"/(title=\")(.*?)(\")/mi",
					function($matches){
						// print_r($matches);
						return ($matches[1].strtoupper($matches[2]).$matches[3]);
					}, $matches[0]);
				$matches[0] = preg_replace_callback(
					"/(>)(.*?)(<)/si",
					function($matches){
						return ($matches[1].strtoupper($matches[2]).$matches[3]);
					}, $matches[0]);
					return ($matches[0]);
			}, $page);
			echo $page;
	}
  ?>
