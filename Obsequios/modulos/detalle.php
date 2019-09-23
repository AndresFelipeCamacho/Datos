<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Detalle de los Obsequios Entregados </title>
</head>
<h1> </h1>
<strong> Detalle de los Obsequios Entregados</strong>
<h1> </h1>

<?php
$fecha = time();
echo 'Fecha Reporte: '.date("l, d/m/Y H:i:s",$fecha);
$agencia = $_GET['agencia'];
echo '<p></p>';
echo 'AGENCIA: ' . $agencia;
echo '<h1> </h1>';
include('../includes/conexion.php');
mysql_select_db("mydb", $link);
$sql ="SELECT e.nit,o.nombreinte,o.nombreagen,o.nombrezona,o.nombreciud,o.nombrempre,e.codoperador,e.fechaentrega FROM entrega e, obsequios o WHERE o.nit = e.nit  AND e.agencia LIKE '".$agencia."%' order by e.fechaentrega";

$result = mysql_query($sql, $link);
if ($row = mysql_fetch_array($result))
{
	echo "<table border = '1'>";
	echo "<tr>";
	echo "<td><b>Nit </b></td>";
	echo "<td><b>Nombre Asociado </b></td>";
	echo "<td><b>Agencia</b></td>";
	echo "<td><b>Zona</b></td>";
	echo "<td><b>Ciudad</b></td>";
	echo "<td><b>Empresa</b></td>";
	echo "<td><b>Operador Entrego</b></td>";
	echo "<td><b>Fecha de Entrega</b></td>";
	echo "</tr> \n";
	do{
		echo "<tr>";
		echo "<td>$row[0]</td>";
		echo "<td>$row[1]</td>";
		echo "<td>$row[2]</td>";
		echo "<td>$row[3]</td>";
		echo "<td>$row[4]</td>";
		echo "<td>$row[5]</td>";
		echo "<td>$row[6]</td>";
		echo "<td>$row[7]</td>";
		echo "</tr>";
	} while ($row = mysql_fetch_array($result));
	echo '</table> ';
	echo '<p><a href="home.php?mostrar=SI">Volver</a></p>';
}
else
{
echo "¡ La base de datos está vacia !";
echo '<p><a href="home.php?mostrar=SI">Volver</a></p>';
}

?>

<body>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>