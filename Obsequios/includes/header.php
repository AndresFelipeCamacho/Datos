<?php 
include "../security/seguridad.php";
include "../modulos/fecha.js";
echo'
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>'.$GLOBALS['titulo'].' - CANAPRO o.c.</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<link href="../CSS/estilos.css" type="text/css" rel="stylesheet">
<body>
<table width="60%" height="55%" border="0" cellpadding="7" cellspacing="0">
	<tr height="1%">
		<td class="principal" width="40%" background="../images/header_banner.png"><b>Registro de Entrega de Obsequios </b></td>
		<td class="principal" width="15%" background="../images/salir.png"><a href="reporte.php"><b>Reportes</b></a></td>
		<td class="principal" width="15%" background="../images/salir.png"><a href="../security/salir.php"><b>Salir...</b></a></td>
	</tr>
		<tr height="90%">
		<td class="principal" width="100%" colspan="6">
';?>