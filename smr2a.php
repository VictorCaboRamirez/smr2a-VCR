<a href="http://192.168.0.170/smr2a-Jhostin/smr2a.php">Jhostin</a> Victor Cabo  <a href="http://192.168.0.161/smr2a_VictorFlorea/smr2a.php">Victor Florea</a>
<html>
	<h1>
		<a href="http://localhost/smr2a-VCR/catalogo.php">LISTA Clase</a>
	</h1>
	</html>
<?php
$f=fopen('visitas.txt','a');
fwrite($f,date('Y-m-d H:i'));
fwrite($f,$_SERVER['REMOTE_ADDR']."\r\n");
fclose($f);
?>
<?php
if(isset($_GET['correo'])){
	$f=fopen('suscriptores.txt','a');
	fwrite($f,$_GET['correo']."\r\n");
	fclose($f);
}
?>


<html>
<body>

<form>
    Email: <input type="email" name="correo"><br>
    <button>Enviar</button>
</form>

</body>
</html>