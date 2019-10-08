<?php
function calcula(){
	$a=1;
	$b=6;
	$r=null;
	 $r=$r.($a+$b).'<br>';
	 $r=$r.($a-$b).'<br>';
	 $r=$r.($a*$b).'<br>';
	 $r=$r.($a/$b).'<br>';
	 return $r;
}
echo calcula();
$a= calcula();
echo $a;
calcula();
calcula();
?>