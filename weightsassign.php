<?php

	$inputfile = file('input.txt', FILE_IGNORE_NEW_LINES);
	$input = implode("",$inputfile);
	$inputlen = strlen($input);
	$sqrtlength = sqrt($inputlen);
	$outfile = file('out.txt', FILE_IGNORE_NEW_LINES);
	$output = implode("",$outfile);
	$outputlen = strlen($output);
	$inputarr = [];
	for($i = 0; $i < $inputlen; $i++){
		$inputarr[$i][0] = $input[$i];
		if($i < $sqrtlength){
			$weight = (rand(0,10)/10);
		}
		else{
			$weight = $inputarr[($i-$sqrtlength)][1];
		}
		$inputarr[$i][1] = $weight;
	}
	
?>