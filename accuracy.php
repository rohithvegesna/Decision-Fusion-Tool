<?php
	function accuracy() {
		global $sqrtlength, $output, $outputlen, $changedarr;
			$offset = 0;
			$cnt = 0;
			$num_columns = $sqrtlength; //adjust number of columns
			$avg = 0;
			while($slice = array_slice($changedarr,$offset,$num_columns)){
				$offset += $num_columns;
				$y = 0;
				$n = 0;			
				foreach($slice as $num){
					if($num[0] == 'Y'){
						$y = $y+$num[1];
					}
					elseif($num[0] == 'N'){
						$n = $n+$num[1];
					}
				}
				if($y > $n)
				{
					$greater = $y;
					$choise = 'Y';
				}
				else
				{
					$greater = $n;
					$choise = 'N';
				}
				
				if($choise == $output[$cnt]){
					$avg++;
				}
				$cnt++;
			}
			$accuracy = ($avg/$outputlen)*100;
			return $accuracy;
	}
?>