<?php include('../includes/conexion.php');
//Sentencia SQL para buscar un usuario con esos datos 
$asociado = $_POST['asociado'];
$sql = "select * from obsequios where nit=$asociado";
//Ejecuto la sentencia 
$result = mysql_query($sql,$link); 
//vemos si el usuario y contraseña es váildo 
//si la ejecución de la sentencia SQL nos da algún resultado 
//es que si que existe esa conbinación usuario/contraseña 
if (mysql_num_rows($result)!=0){ 
    //usuario y contraseña válidos 
    //defino una sesion y guardo datos 
    $row = mysql_fetch_array($result);
    session_start(); 
	$_SESSION['NIT']=$asociado;
	$_SESSION['NOMBREINTE']=$row["NOMBREINTE"];
	$_SESSION['NOMBREAGEN']=$row["NOMBREAGEN"];
	$_SESSION['NOMBREZONA']=$row["NOMBREZONA"];
    $_SESSION['NOMBRECIUD']=$row["NOMBRECIUD"];
    $_SESSION['NOMBREMPRE']=$row["NOMBREMPRE"];
    $_SESSION['MOTIVO']=$row["MOTIVO"];
	header ("Location: ../modulos/home.php?mostrar=SI"); 
	
}else { 
   header("Location: ../Listados.php?errorusuario=si"); 
} 
mysql_free_result($result); 
mysql_close($link); ?> 