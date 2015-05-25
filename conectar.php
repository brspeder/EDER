<?php

$conexion =mysql_connect("localhost","root","root") or die ("Problemas en la conexion");//conectando con el servidor
mysql_query("set names 'utf8'");
$db =mysql_select_db("USUARIO",$conexion)  or  die("Problemas en la selección de la base de datos");//conectado con la bases de datos
return $conexion;
return $db;

?>