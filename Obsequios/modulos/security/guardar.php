<?php
include('../includes/conexion.php');
$newpass = $_POST['nuevapass'];
$operador = $_POST['operador'];
if (strlen($newpass)>6)
{
	$sql = "UPDATE 	operador SET clave = '$newpass' WHERE codoperador ='$operador'";
	$result = mysql_query($sql, $link);
	if (!$result)
	{
    	die('Invalid query: ' . mysql_error());
		echo '<p><a href="../home.php?mostrar=SI">Volver</a></p>';
	}
	else
	{
	echo '  <strong>Registro Actualizado</strong>';
	echo '<p><a href="../home.php?mostrar=SI">Volver</a></p>';
	}	
} 
else
{
	echo ' <strong>Clave muy Corta, por favor Cambiarla</strong>';
	echo '<p><a href="../home.php?mostrar=SI">Volver</a></p>';
} 
mysql_close($link);
?>