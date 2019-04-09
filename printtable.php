<?php
	echo 'Accuracy : '.$acchigh;
	$offset = 0;
	$cnt = 0;
	$num_columns = $sqrtlength; //adjust number of columns
	$table_html = '<table class="table table-bordered"><tbody>';
	$avg = 0;
	while($slice = array_slice($finalarr,$offset,$num_columns)){
		$offset += $num_columns;
		$row_html = '';	
		$y = 0;
		$n = 0;			
		foreach($slice as $num){
			if($num[0] == 'Y'){
				$y = $y+$num[1];
			}
			elseif($num[0] == 'N'){
				$n = $n+$num[1];
			}
			$row_html .= "<td>".$num[0]."(".$num[1].")</td>";
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
		$row_html .= "<td style='border-width: 5px; border-color: cadetblue;'>".$choise."(".$greater.")</td>";
		$row_html .= "<td style='border-width: 5px; border-color: darkgreen;'>".$output[$cnt]."</td>";
		$table_html .= "<tr>$row_html</tr>";
		
		if($choise == $output[$cnt]){
			$avg++;
		}
		$cnt++;
	}
	$table_html .= '</tbody></table>';
	echo $table_html.'<br><br>';
?>