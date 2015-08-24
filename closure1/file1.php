<?php
	$stringn = "This is an example";
	$claus = function () use ($stringn) {
		echo $stringn;
	};
	
	$claus();