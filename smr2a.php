<a href="http://192.168.0.170/smr2a-Jhostin/smr2a.php">Jhostin</a> Victor Cabo  <a href="http://192.168.0.161/smr2a_VictorFlorea/smr2a.php">Victor Florea</a>
<?php
$f=fopen('visitas.txt','a');
fwrite($f,$_SERVER['REMOTE_ADDR']."\r\n");
fclose($f);
?>