<?php
	function changevals($col, $colval, $values){
		global $sqrtlength, $inputarr, $output, $outputlen, $inputlen;
		for($i = 0; $i < $inputlen; $i++){
			if(($i%$outputlen)== $col){
				$inputarr[$i][1] = ($colval/10);
			}
			else{
				$inputarr[$i][1] = ($values/10);
			}
		}
		return $inputarr;
	}
?>