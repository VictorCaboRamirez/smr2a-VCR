<a href="http://192.168.0.93/smr2a_alberto/smr2a.php">Alberto</a> Victor Cabo <a href="http://192.168.0.58/smr2a_Gabi/smr2a.php">Gabi</a>
<html>
	<h1>
		<a href="http://localhost/smr2a-VCR/catalogo.php">LISTA Clase</a>
	</h1>
	
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
<html>
<head>
<Title> Duke Nukem </title>
</head>
<Body background="descargas/derechito.jpg" text="Red">
</body>
</html>