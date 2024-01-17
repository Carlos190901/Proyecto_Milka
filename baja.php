<?php
/*Datos para hacer la conexion en la base de datos*/
$servidor="localhost";
$usuario="user";
$contrasena="32138";
$db="milka";
/*Recolectamos los datos del formulario*/
$id_baja=$_POST['baja'];

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
    <title>Baja</title>
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
          $consulta="SELECT * FROM empleados WHERE No_empleado='$id_baja'";
$resultado=mysqli_query($conexion,$consulta);
$row=mysqli_fetch_array($resultado);

         $cocatenar="<center><font color=white size=5><h4 style=background-color:#8267AD>Se dio de BAJA el Empleado...</h4></font></center><br><b><font color=#023020 size=4><p align=left>NO_empleado: </b>$id_baja<br><b><font color=#023020 size=4><p align=left>NOMBRE: </b>".$row['Nombre'];
         echo $cocatenar;
         if($_POST['baja']){
    $query="DELETE FROM empleados WHERE No_empleado='$id_baja'";
    mysqli_query($conexion,$query);
             
}
        
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


