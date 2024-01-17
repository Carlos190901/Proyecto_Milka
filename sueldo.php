<?php
/*Datos para hacer la conexion en la base de datos*/
$servidor="localhost";
$usuario="user";
$contrasena="32138";
$db="milka";
/*Recolectamos los datos del formulario*/
$id=$_POST['id'];
$dias=$_POST['dias'];

/*Realizar conexion a la base de datos con parametros anteriormente solicitados*/
$conexion=mysqli_connect($servidor,$usuario,$contrasena,$db);
if(!$conexion){
    echo "Error: no se puede conectar a la base de datos de MySQL".PHP_EOL;
    echo "Errno de depuracion: ".mysqli_connect_errno().PHP_EOL;
    echo "Errno de depuracion: ".mysqli_connect_errno().PHP_EOL;
    exit;
    
}



/*$consulta="SELECT * FROM empleados WHERE No_empleado='$id_baja'";
$resultado=mysqli_query($conexion,$consulta);
$row=mysqli_fetch_array($resultado);

echo " ".$row['Nombre'];*/

                          


?>
<!DOCTYPE html>
<html lang="en">
<!--<header id="main-header">-->
     
    

   <!-- </header>-->
<head>
    <meta charset="UTF-8">
    <title>Sueldo</title>
    <link rel="stylesheet" href="./estilos/estiloPanel.css">
</head>
<body>
    
     <div class="banda">
     </div>
   <div class="cajaprincipal">
   <!------------------------------------------------------------------------------>
    
    <div class="bienvenido">
     <div class="bienvenido2">
         <?php
          $consulta="SELECT * FROM empleados WHERE No_empleado='$id'";
$resultado=mysqli_query($conexion,$consulta);
$row=mysqli_fetch_array($resultado);

         $cocatenar="<center><font color=white size=5><h4 style=background-color:#8267AD>El SUELDO del Empleado...</h4></font></center><br><b><font color=#54396C size=4><p align=left>NO_empleado: </b>$id<br>";
         echo $cocatenar;
         
    switch($row['Clave_pago']){
    case 'Q':
        if($dias<=15){
        $pago=($row['Salario']*$dias);
        }else{
          $doble=$dias-15;
          $pago1=($row['Salario']*15);
          $pago2=($row['Salario']*$doble)*2;
           $pago=$pago1+$pago2; 
        }
        $tipo="Quincenal";
    break;
    case 'S':
        if($dias<=7){
        $pago=($row['Salario']*$dias);
        }else{
          $doble=$dias-7;
          $pago1=($row['Salario']*7);
          $pago2=($row['Salario']*$doble)*2;
           $pago=$pago1+$pago2; 
        }
        $tipo="Semanal";
    break;
}
         $query="INSERT INTO sueldo(No_empleado,Dias,Sueldo) VALUES ('$id','$dias','$pago')";
mysqli_query($conexion,$query);

       echo "<b><font color=#54396C size=4><p align=left>Empleado: ".$row['Nombre'];
       echo "<br><b><font color=#54396C size=4><p align=left>Cuenta Bancaria: ".$row['CuentaBan'];
      echo "<br><b><font color=#54396C size=4><p align=left>Tipo de Pago: ".$tipo;
      echo "<br><b><font color=#54396C size=4><p align=left>Sueldo: $".$pago;
       
        
         ?>
          <div class="botones">
            <a href="menu.html"><button id="submit" name="login" type="submit">Regresar</button></a>
        </div>
    </div>
    </div>
    
    <!------------------------------------------------------------------------------>
    
    <div class="imagen1">
        <div class="gif">
        <!--<img src="./imagenes/milka.PNG" alt="">-->
        </div>
    </div>
    
    </div>
    <!--<div class="frase">
        <b><p class="parrafo">&copy;Ingenieria en Sistemas Computacionales UAA 2021 - Todos los derechos reservados</p></b>
    </div>-->
</body>
</html>
