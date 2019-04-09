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
	<?php include 'accuracy.php'; ?>
	<?php include 'changevals.php'; ?>
			<?php
				$finalarr = [];
				$acchigh = 0;
				for($i = 0; $i <= ($outputlen-1); $i++){
					for($j = 0; $j <= 10; $j++){
						for($k = 0; $k <= 10; $k++){
							$changedarr = changevals($i, ($j/10), ($k/10));
							$accuracy = accuracy($changedarr);
							if($accuracy >= $acchigh){
								$finalarr = $changedarr;
								$acchigh = $accuracy;
							}
						}
					}
				}
			?>
			<?php include 'printtable.php'; ?>
</div>

</body>
</html>