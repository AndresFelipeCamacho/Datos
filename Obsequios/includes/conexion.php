<?php
$link = mysql_connect("192.168.2.14","root","123456") or die("Error conect&aacute;ndose al servidor". mysql_error());
mysql_select_db("obsequios") or die("Error conect&aacute;ndose a la Base de Datos". mysql_error());
?>