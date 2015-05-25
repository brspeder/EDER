<?php
//(CONSULTA)TRAER  TODA LA INFORMACION RELACIONADA CON USUARIOS
include 'ver.php';
       $sql="select * from USUARIO, CUIDAD";
		$cs=mysql_query($sql,$conexion);
		echo"<center>
                <table border='3'>
                <tr>
                <td>CEDULA</td>
                <td>NOMBRE</td>
                <td>APELLIDO</td>
                <td>DIRECCION</td>
                <td>NOMBRE CUIDAD</td>
                <td>TELEFONO</td>
                <td>FECHA_NACIMIENTO</td>
                </tr>";
                     while($resul=mysql_fetch_array($cs))
                    {
                       $var=$resul[0];
                       $var1=$resul[1];
                       $var2=$resul[2];
                       $var3=$resul[3];
                       $var4=$resul[4];
                       $var5=$resul[5];
                       $var6=$resul[6];
                        echo "<tr>
                        <td>$var</td>
                        <td>$var1</td>
                        <td>$var2</td>
                        <td>$var3</td>
                        <td>$var4</td>
                        <td>$var5</td>
                        <td>$var6</td>
                        </tr>";
                     }

                 echo "</table>
                </center>";
?>                 
   
<html>
 <head>
 <title> listar usuarios</title>
 </head>
  <dody>
 <center>
 <a href="index.php">Regresar</a>  
 </center>
 </body>                 
</html>

