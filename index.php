<!DOCTYPE html>
<html lang="en">
<head>
  <title>Decision fusion tool</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-fluid text-center">
	<?php include 'weightsassign.php'; ?>
	<table class="table table-bordered">
		<tbody>
		<?php
			$offset = 0;
			$cnt = 0;
			$num_columns = $sqrtlength; //adjust number of columns
			$table_html = "";
			$avg = 0;
			while($slice = array_slice($inputarr,$offset,$num_columns)){
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
			echo $table_html;
			$accuracy = (abs($avg-$outputlen)/$outputlen)*100;
		?>
		</tbody>
	</table>
	<?php echo $accuracy;?>
</div>

</body>
</html>