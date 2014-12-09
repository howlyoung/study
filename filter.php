<?php
	
	function filter($str){
		if(empty($str)){
			return '';
		}

		$i = -1;
		$flag = true;
		$pos = -1;
		$offset = -1;
		$lock = false;
		while(isset($str[++$i])){
			if(' ' == $str[$i]){
				if($flag){
					$pos = ($pos >= 0)?($pos + $offset + 2):$i;
					$offset = -1;
					$flag = false;
					$lock = true;
				} else {
					!$lock&&($flag = true);
				}
			} else {
				if($pos >= 0){
					$offset++;
					$tmp = $str[$i];
					$str[$i] = ' ';
					$str[$pos + $offset] = $tmp;
					$lock = false;
				}
				$flag = false;
			}
		}
		return $str;
	}

	$str = '123    456789  abc    def    ghijkl';
	echo $str."\n";
	echo filter($str);