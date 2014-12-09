<?php
	$n = 100;
	$arr = [];
	$res = [];
	$len = $n;

	for($i = 0;$i < $n;$i++) {
		$arr[] = $i;
	}
	
	for($i = 0;$i < $n;$i++) {
		$key = rand(0,$len - 1);
		$res[] = $arr[$key];
		$arr[$key] = $arr[$len - 1];
		$len--;
	}

	print_r($res);
