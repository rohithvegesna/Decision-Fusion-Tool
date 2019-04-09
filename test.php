<?php
$abc=0;
$ab=0;
for($i=0; $i<=10; $i++){
	$ab=$i;
	for($j=0; $j<=10; $j++){
		$abc=$j;
		if($j == 4){
			break;
		}
	}
	
	if($abc == 4){
		break;
	}
}
echo $ab.'|'.$abc;
?>