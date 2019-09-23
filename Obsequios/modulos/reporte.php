<html>
<title>Reporte de Obsequios Entregados - Obsequios 2013</title>
<body>
<h1> </h1>
<strong> Reporte de Obsequios Entregados </strong>
<h1> </h1>
<?php
include('../includes/conexion.php');
mysql_select_db("mydb", $link);
$sql ='SELECT agencia, COUNT(nit) FROM entrega GROUP BY agencia ORDER BY 2 DESC';
$result = mysql_query($sql, $link);
if ($row = mysql_fetch_array($result))
{
	echo "<table border = '1'>";
	echo "<tr>";
	echo "<td><b>Agencia </b></td>";
	echo "<td><b>Total Obsequios Entregados</b></td>";
	echo "<td><b>Verificar</b></td>";
	echo "</tr> \n";
	do{
		echo "<tr>";
		echo "<td>$row[0]</td>";
		echo "<td align='center'>$row[1]</td>";
		echo "<td><a href=detalle.php?agencia=$row[0]>Detalle</a></td>";
		echo "</tr>";
	} while ($row = mysql_fetch_array($result));
	echo '</table> ';
	echo '<p></p>';
}
else
{
echo "¡ La base de datos está vacia !";
}
$sql ='SELECT nombreagen,COUNT(nit) FROM obsequios where nit not IN (select nit from entrega) GROUP BY nombreagen ORDER BY 2 desc';
echo 'Obsequios que Faltan por Entregar';
$result = mysql_query($sql, $link);
if ($row = mysql_fetch_array($result))
{
	echo "<table border = '1'>";
	echo "<tr>";
	echo "<td><b>Agencia </b></td>";
	echo "<td><b>Obsequios Por Entregar</b></td>";
	echo "<td><b>Verificar</b></td>";
	echo "</tr> \n";
	do{
		echo "<tr>";
		echo "<td>$row[0]</td>";
		echo "<td align='center'>$row[1]</td>";
		echo "<td><a href=detalle1.php?agencia=$row[0]>Detalle</a></td>";
		echo "</tr>";
	} while ($row = mysql_fetch_array($result));
	echo '</table> ';
}
else
{
echo "¡ No se han registrado informacion - La base de datos está vacia !";
}
echo '<p><a href="home.php?mostrar=SI">Volver</a></p>';
?>
</body>
</html>