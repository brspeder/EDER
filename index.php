<?php
include 'ver.php';
?>
<!DOCTYPE HTML>
<html lang="es">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<head>

	<title>FORMULARIO PERSONA</title>
	<link rel="stylesheet" type="text/css" href="estilos.css" media="screen"/>
	
<body>
 
<form action="" method="post" name="formulario">

    <li>
        <h1>FORMULARIO PERSONA</h1>
    </li>
      <li>
	<label for="BUSCAR">BUSCAR:</label>
	<input type="text" name="BUSCAR" />
        <input type="submit" name="btn1" value="BUSCAR"/>
      </li><br><br><br>
    
    <li>
	<label for="CEDULA">INGRESAR CEDULA:</label>
	<input type="text" name="CEDULA" value="<?php echo $var?>"placeholder="Ingrese su cedula" require />
    </li>
    <li>	
        <label for="NOMBRE">INGRESAR NOMBRE:</label>
        <input type="text" name="NOMBRE" value="<?php echo $var1?>"placeholder="Ingrese su nombre" /> 
     </li>
    <li>	
    <label for="APELLIDO">INGRESAR APELLIDO:</label>
	<input type="text" name="APELLIDO" value="<?php echo $var2?>"placeholder="Ingrese su apellido" /> 
    </li>	

    <li>	
        <label for="DIRECCION">INGRESAR DIRECCION:</label>
            <input type="text" name="DIRECCION" value="<?php echo $var3?>" placeholder="Ingrese su direccion" />
    </li>
     <!--  <label for="CUIDAD">CUIDAD:</label>
        <select name="CUIDAD">
         /*//<?php
         //while($fila=mysql_fetch_array($resultado_consulta_mysql))
         // {
          //  echo "<option value='".$fila['DNI_CIUDAD']."'></option>";  
          //}
         //?>  
         </select>
    --> 
    
    <li>	
        <label for="CUIDAD">INGRESAR CUIDAD:</label>
        <select name="CUIDAD">
            <option>1</option>
            <option><?php echo $var4?>2</option>
            <option><?php echo $var4?>3</option>
            <option><?php echo $var4?>4</option>
            <option><?php echo $var4?>5</option>
            <option <?php echo $var4?>>6</option>
            </select>
    </li><br><br><br><br><br>
   <li>
	<label for="TELEFONO">INGRESAR TELEFONO:</label>
	<input type="text" name="TELEFONO" value="<?php echo $var5?>"placeholder="Ingrese su numero telefonico" />
    </li>
    
    
    <li>	
        <label for="FECHA">INGRESAR FECHA NACIMIENTO:</label>
        <input type="date" name="FECHA" step="1" min="1950-01-01" max="2016-12-31" value="<?php echo $var6?>" /> 
    </li><br><br>
   
    <tr align="center" >
       <td colspan="2"><input type="submit" name="btn1" value="CREAR"/>
                        <input type="submit" name="btn1" value="ACTUALIZAR"/>
                       <input type="submit" name="btn1" value="ELIMINAR" onclick="return(alert('Seguro que desea eliminar el registro?'))"/>
                        <a href="consulta.php">VER</a>      
                         
       </td>
    </tr>
</form>
</body>
</head>
</html>