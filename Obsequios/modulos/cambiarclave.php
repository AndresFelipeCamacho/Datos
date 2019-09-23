<?php
include('../includes/conexion.php');
$operador = $_GET['operador'];
$sql = "select * from operador where codoperador='$operador'";
$result = mysql_query($sql,$link); 
if (mysql_num_rows($result)!=0)
{ 
$row = mysql_fetch_array($result);
echo '
<form name="form1" method="post" action="security/guardar.php">
  <table width="509" border="1">
    <tr>
      <td colspan="2"><div align="center" class="Estilo1">Cambiar Contrase&ntilde;a </div></td>';

  echo '<input name="operador" type="hidden" value="'.$operador.'">
    </tr>
    <tr>
      <td width="138">OPERADOR</td>
      <td width="355"><label>'.$row['nombre'].'</label></td>

    </tr>
    <tr>
      <td>NUEVA CLAVE</td>
      <td><input type="password" name="nuevapass"></td>
    </tr>
    <tr>  
      <td colspan="2">
        <div align="center"> <input type="submit" name="Submit" value="Actualizar"></div>
      </td>
    </tr>
  </table>
  </form>';
}
mysql_free_result($result); 
mysql_close($link);
?>