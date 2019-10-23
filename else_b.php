<?php
function calcula($a){
	$r="Notable";
	if ($a < 7) 	
	$r="Aprobado";
	
	if ($a < 5) 
		$r="Pendiente";
	
	if ($a >= 7) 
		$r="Notable";
		
	if ($a > 8.5) 
		$r="Sobresaliente";
		return $r;
	}	
	
echo calcula (4.99);
?>