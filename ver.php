<?php
include ("conectar.php");


$var="";
$var1="";
$var2="";
$var3="";
$var4="";
$var5="";
$var6="";


// CUANDO LE DAS CLICK EN EL BOTON BUSCAR QUE ME EJECUTE LAS SIGUIENTES SENTENCIAS
    if(isset($_POST["btn1"]))
    {
     $btn=$_POST["btn1"];
     $bus=$_POST["BUSCAR"];
     
     if ($btn=="BUSCAR")
     {
         $sql="select * from USUARIO where CEDULA='$bus'";
         $cs=  mysql_query($sql,$conexion);
         while ($result=  mysql_fetch_array($cs))
         {
           $var=$result[0];
           $var1=$result[1];
           $var2=$result[2];
           $var3=$result[3];
           $var4=$result[4];
           $var5=$result[5];
           $var6=$result[6];
           
         }
         if($var4=="1")
         {
             $var4=="selected";
         }
         
     }
     //CREACION DE REGISTROS
     if ($btn=="CREAR")
     {
         $CEDULA=$_POST["CEDULA"];
         $NOMBRE=$_POST["NOMBRE"];
         $APELLIDO=$_POST["APELLIDO"];
         $DIRECCION=$_POST["DIRECCION"];
         $CUIDAD=$_POST["CUIDAD"];
         $TELEFONO=$_POST["TELEFONO"];
         $FECHA=$_POST["FECHA"];
         
         $sql= "insert into USUARIO values ('$CEDULA','$NOMBRE','$APELLIDO','$DIRECCION','$CUIDAD','$TELEFONO','$FECHA')";
         $cs= mysql_query($sql,$conexion);
         if (!$sql)
		{	
		echo "Error al guardar";
		}
		else{
		echo "Guardado con exito";
		}
     }
     //ACTUALIZACION DE REGISTROS MEDIANTE LA CEDULA
     if($btn=="ACTUALIZAR")
      {
		$CEDULA=$_POST["CEDULA"];
                $NOMBRE=$_POST["NOMBRE"];
                $APELLIDO=$_POST["APELLIDO"];
                $DIRECCION=$_POST["DIRECCION"];
                $CUIDAD=$_POST["CUIDAD"];
                $TELEFONO=$_POST["TELEFONO"];
                $FECHA=$_POST["FECHA"];
		
		$sql="update USUARIO set NOMBRE='$NOMBRE',APELLIDO='$APELLIDO',DIRECCION='$DIRECCION',CUIDAD='$CUIDAD', TELEFONO='$TELEFONO',FECHA='$FECHA' where CEDULA='$CEDULA'";
		$cs=mysql_query($sql,$conexion);
		
       }
       //ELIMINACION DE REGISTROS
       if($btn=="ELIMINAR")
      {
       $CEDULA=$_POST["CEDULA"];
        $sql="delete from USUARIO where CEDULA='$CEDULA'";
        $cs= mysql_query($sql,$conexion);
       } 

    }  
  
    
?>   

