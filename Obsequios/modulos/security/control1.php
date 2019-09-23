<?php include('../includes/conexion.php');
//Sentencia SQL para buscar un usuario con esos datos 
$asociado = $_POST['asociado'];
if ($asociado=='')
{
  $asociado =0;
  session_start(); 
	$_SESSION['NIT']="";
	$_SESSION['NOMBREINTE']="";
	$_SESSION['NOMBREAGEN']="";
	$_SESSION['NOMBREZONA']="";
    $_SESSION['NOMBRECIUD']="";
    $_SESSION['NOMBREMPRE']="";
    $_SESSION['MOTIVO']="";
    $_SESSION['DOCFALTA']="";
}
$sql = "select * from obsequios where nit=$asociado";
//Ejecuto la sentencia 
$result = mysql_query($sql,$link); 
//vemos si el usuario y contraseña es váildo 
//si la ejecución de la sentencia SQL nos da algún resultado 
//es que si que existe esa conbinación usuario/contraseña 
if (mysql_num_rows($result)!=0)
{ 
    $row = mysql_fetch_array($result);
    session_start(); 
	$_SESSION['NIT']=$asociado;
	$_SESSION['NOMBREINTE']=$row["NOMBREINTE"];
	$_SESSION['NOMBREAGEN']=$row["NOMBREAGEN"];
	$_SESSION['NOMBREZONA']=$row["NOMBREZONA"];
    $_SESSION['NOMBRECIUD']=$row["NOMBRECIUD"];
    $_SESSION['NOMBREMPRE']=$row["NOMBREMPRE"];
    $_SESSION['MOTIVO']=$row["MOTIVO"];
    $_SESSION['DOCFALTA']=$row["DOCFALTA"];
	$sql = "SELECT nit,codoperador,agencia,estado, DATE_FORMAT(fechaentrega,'%d/%m/%Y %H:%i:%s')AS fechaentrega  FROM entrega where nit=$asociado";
	$result = mysql_query($sql,$link);
	if (mysql_num_rows($result)!=0)
		{
			 $row = mysql_fetch_array($result);	
			 $_SESSION['OPERADORENTREGA']=$row["codoperador"];
 			 $_SESSION['AGENCIAENTREGA']=$row["agencia"];
			 $_SESSION['FECHAENTREGA']=$row["fechaentrega"];
			 $_SESSION['ESTADOENTREGA']=$row["estado"];
		}
	else
		{
			 $_SESSION['OPERADORENTREGA']="";
 			 $_SESSION['AGENCIAENTREGA']="";
			 $_SESSION['FECHAENTREGA']="";
			 $_SESSION['ESTADOENTREGA']="NO ENTREGADO";
		}
	header ("Location: ../home.php?mostrar=SI"); 
}else { 
  session_start(); 
	$_SESSION['NIT']="";
	$_SESSION['NOMBREINTE']="";
	$_SESSION['NOMBREAGEN']="";
	$_SESSION['NOMBREZONA']="";
    $_SESSION['NOMBRECIUD']="";
    $_SESSION['NOMBREMPRE']="";
    $_SESSION['MOTIVO']="";
    $_SESSION['DOCFALTA']="";
   header("Location: ../home.php?errorusuario=si"); 
} 
mysql_free_result($result); 
mysql_close($link); ?> 