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
	<?php
		$inputfile = file('input.txt', FILE_IGNORE_NEW_LINES);
		$input = implode("",$inputfile);
		$inputlen = strlen($input);
		$inputarr = [];
		for($i = 0; $i <= ($inputlen-1); $i++){
			$inputarr[$i][0] = $input[$i];
			if($i <= (sqrt($inputlen)-1)){
				$weight = (rand(0,10)/10);
			}
			else{
				$weight = $inputarr[($i-sqrt($inputlen))][1];
			}
			$inputarr[$i][1] = $weight;
		}
	?>
	<table class="table table-bordered">
		<tbody>
		<?php
			for($i = 0; $i <= (sqrt($inputlen)-1); $i++){
				if($i > 0){
					$num = $i+5;
				}
				else{
					$num = $i;
				}
				echo '<tr>
						<td>'.$inputarr[$num][0].' ('.$inputarr[$num][1].')</td>
						<td>'.$inputarr[$num+1][0].' ('.$inputarr[$num+1][1].')</td>
						<td>'.$inputarr[$num+2][0].' ('.$inputarr[$num+2][1].')</td>
						<td>'.$inputarr[$num+3][0].' ('.$inputarr[$num+3][1].')</td>
					  </tr>';
			}
		?>
		</tbody>
	</table>
</div>

</body>
</html>