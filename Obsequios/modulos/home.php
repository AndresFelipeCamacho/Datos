<?php
$titulo="Registro de Entrega de Obsequios 2013 Version 4.0";
include "../includes/header.php";
session_start();
?>
<style type="text/css">
<!--
.Estilo7 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
.Estilo20 {
	color: #FF0000;
	font-weight: bold;
}
-->
</style>
<p>
<form action="security/control1.php" method="post">
  <table class="principal" align="left" width="301" cellspacing="1" cellpadding="1" border="0">
		<tr valign="middle">
    		<td class="principal" colspan="2" <?php if ($_GET["errorusuario"]=="si"){?> bgcolor=red>
			  <div align="left"><span style="color:ffffff"><b>No Existe Cedula....</b></span>
				<?php }else{ ?>
				bgcolor=#3399cc>Identificaci&oacute;n
                <?php } ?>
			  </div></td>
		</tr>
		<tr>
			<td class="principal">
				<div align="left">
				  <table bgcolor="#d5d5d5" align="center" width="100%" height="100%">
				    <tr>
				      <td class="principal">Cedula Afiliado:</td>
   					    <td class="principal"><input type="Text" name="asociado" size="20" maxlength="50"></td>
				    </tr>
			      </table>
		  </div></td>
		</tr>
		<tr>
		    <td class="principal" colspan="2" align="center"><div align="left">
		      <input type="Submit" value="Verificar ...">
		      </div></td>
		</tr>
  </table>
</form>
<?php
if ($mostrar ='SI')
{
echo '<table width="495" border="1">
     <tr>
    <td width="178"><span class="Estilo2"><b>CEDULA ASOCIADO:</b></span></td>
    <td width="301">';
echo '<p align="center">'.$_SESSION['NIT'].'</p>'; 
echo '	
	</td>
  </tr>
  <tr>
    <td><span class="Estilo2"><b>NOMBRE ASOCIADO:</b></span></td>
    <td>';
echo '<p align="center">'.$_SESSION['NOMBREINTE'].'</p>'; 
echo '
</td>
  </tr>
  <tr>
    <td><span class="Estilo2"><b>NOMBRE AGENCIA:</b></span></td>
    <td>';
echo '<p align="center">'.$_SESSION['NOMBREAGEN'].'</p>'; 
echo'
</td>
  </tr>
  <tr>
    <td><span class="Estilo2"><b>NOMBRE ZONA:</b></span></td>
    <td>';
echo '<p align="center">'.$_SESSION['NOMBREZONA'].'</p>'; 
echo '
</td>
  </tr>
  <tr>
    <td><span class="Estilo2"><b>NOMBRE CIUDAD:</b></span></td>
    <td>';
echo '<p align="center">'.$_SESSION['NOMBRECIUD'].'</p>'; 
echo '
</td>
  </tr>
  <tr>
    <td><span class="Estilo2"><b>NOMBRE EMPRESA:</b></span></td>
    <td>';
echo '<p align="center">'.$_SESSION['NOMBREMPRE'].'</p>'; 
echo '
</td>
  </tr>
  <tr>
    <td><span class="Estilo20"><b>MOTIVO:</b></span></td>
    <td>';
echo '<p align="center" class="Estilo20">'.$_SESSION['MOTIVO'].'</p>'; 
echo '
</td>
  </tr>
  <tr>
    <td><span class="Estilo20"><b>DOCUMENTO FALTA:</b></span></td>
    <td>';
echo '<p align="center" class="Estilo20">'.$_SESSION['DOCFALTA'].'</p>'; 
echo '
  </tr>
</table>

<p>&nbsp;</p>
<table width="659" border="1">
  <tr>
    <td colspan="5"><div align="center" class="Estilo19"><b>Estado Entrega </b></div></td>
  </tr>
  <tr>
    <td width="132"><span class="Estilo19"><b>Cedula Afiliado </b></span></td>
    <td width="125"><span class="Estilo19"><b>Fecha Entrega </b></span></td>
    <td width="154"><span class="Estilo19"><b>Operador que Entrego </b></span></td>
    <td width="93"><span class="Estilo19"><b>Agencia</b></span></td>
    <td width="101"><span class="Estilo19"><b>Estado</b></span></td>
  </tr>
  <tr>
    <td><span class="Estilo18">'.$_SESSION['NIT'].'</span></td>
    <td><span class="Estilo18">'.$_SESSION['FECHAENTREGA'].'</span></td>
    <td><span class="Estilo18">'.$_SESSION['OPERADORENTREGA'].'</span></td>
    <td><span class="Estilo18">'.$_SESSION['AGENCIAENTREGA'].'</span></td>
    <td><span class="Estilo18">'.$_SESSION['ESTADOENTREGA'].'</span></td>
  </tr>
</table>';
}

echo '<p>&nbsp;</p>';
echo '<form id="form1" name="form1" method="POST" action="security/entregar.php">';
echo '<input name="nit" type="hidden" value="'.$_SESSION['NIT'].'">';
echo '<input name="agencia" type="hidden" value="'.$_SESSION['NOMBREAGENCIA'].'">';
echo '<input name="operador" type="hidden" value="'.$_SESSION['USUARIO'].'">';
echo'  <input type="Submit" name="Entregar" Value="Entregar_Obsequio"/>
  <span class="Estilo20">&lt;-- Al Presionar Este Boton Queda Registrado la Entrega del Obsequio..  </span>
</form>';
echo '<p><a href="cambiarclave.php?operador='.$_SESSION['USUARIO'].'">Cambiar-Contrasena</a></p>';
?>
<table width="500" border="1">
  <tr>
    <td width="72"><div align="center"><strong><span class="Estilo7">Operador</span></strong></div></td>
    <td width="295"><div align="center"><strong><span class="Estilo7">Nombre Funcionario </span></strong></div></td>
    <td width="158"><div align="center"><strong><span class="Estilo7">Agencia</span></strong></div></td>
  </tr>
  <tr>
    <td height="20"><span class="Estilo7"><?php echo '<p align="justify">'.$_SESSION['USUARIO'].'</p>'; ?></span></td>
    <td><span class="Estilo7"><?php echo '<p align="justify">'.$_SESSION['NOMBRE'].'</p>'; ?></span></td>
    <td><span class="Estilo7"><?php echo '<p align="justify">'.$_SESSION['NOMBREAGENCIA'].'</p>'; ?></span></td>
  </tr>
</table>
<?php
echo ' ';		
include "../includes/footer.php"; 