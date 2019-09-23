<?php include('../includes/conexion.php');
$nit  = $_POST["nit"];
$operador = $_POST["operador"];
$agencia=$_POST["agencia"];
$sql = "INSERT INTO entrega (NIT,codoperador,agencia,fechaentrega,estado) VALUES ($nit,'$operador','$agencia',NOW(),'ENTREGADO')";
if (!mysql_query($sql,$link))
  {
  	if (mysql_errno() == 1062)
	{
  		header ("Location: error.php"); 
	}
	else
	{
		die('Error: ' . mysql_error(). ' ' . mysql_errno());
	}	
  }
else
{
	header ("Location: control1.php?asociado=$nit"); 
}
mysql_close($link); 
?> 