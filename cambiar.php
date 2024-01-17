<?php
/*Datos para hacer la conexion en la base de datos*/
$servidor="localhost";
$usuario="user";
$contrasena="32138";
$db="milka";

/*Recolectamos los datos del formulario*/
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$curp=$_POST['curp'];
$rfc=$_POST['rfc'];
$nss=$_POST['nss'];
$salario=$_POST['salario'];
$cuentaBan=$_POST['cuentaBan'];
$pago=$_POST['pago'];
$entidad=$_POST['entidad'];
$departamento=$_POST['departamento'];
/*Realizar conexion a la base de datos con parametros anteriormente solicitados*/
$conexion=mysqli_connect($servidor,$usuario,$contrasena,$db);
if(!$conexion){
    echo "Error: no se puede conectar a la base de datos de MySQL".PHP_EOL;
    echo "Errno de depuracion: ".mysqli_connect_errno().PHP_EOL;
    echo "Errno de depuracion: ".mysqli_connect_errno().PHP_EOL;
    exit;
    
}
?>
<!DOCTYPE html>
<html lang="en">
<!--<header id="main-header">-->
     
    

   <!-- </header>-->
<head>
    <meta charset="UTF-8">
    <title>Cambios</title>
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
$consulta="UPDATE empleados SET Nombre='$nombre' WHERE No_empleado='$id'";
mysqli_query($conexion,$consulta);
$consulta="UPDATE empleados SET Curp='$curp' WHERE No_empleado='$id'";
mysqli_query($conexion,$consulta);
$consulta="UPDATE empleados SET RFC='$rfc' WHERE No_empleado='$id'";
mysqli_query($conexion,$consulta);
$consulta="UPDATE empleados SET NSS='$nss' WHERE No_empleado='$id'";
mysqli_query($conexion,$consulta);
$consulta="UPDATE empleados SET Salario='$salario' WHERE No_empleado='$id'";
mysqli_query($conexion,$consulta);
$consulta="UPDATE empleados SET CuentaBan='$cuentaBan' WHERE No_empleado='$id'";
mysqli_query($conexion,$consulta);
$consulta="UPDATE empleados SET Clave_pago='$pago' WHERE No_empleado='$id'";
mysqli_query($conexion,$consulta);
$consulta="UPDATE empleados SET Clave_Entidad='$entidad' WHERE No_empleado='$id'";
mysqli_query($conexion,$consulta);
$consulta="UPDATE empleados SET Clave_departamento='$departamento' WHERE No_empleado='$id'";
mysqli_query($conexion,$consulta);
mysqli_close($conexion);

         $cocatenar="<center><font color=white size=5><h4 style=background-color:#8267AD>Se hizo CAMBIOS AL Empleado...</h4></font></center><br><b><font color=#023020 size=4><p align=left>NO_empleado: </b>$id<br><b><font color=#023020 size=4><p align=left>Nombre: </b>$nombre<br><b><font color=#023020 size=4><p align=left>CURP</b>$curp<br><b><font color=#023020 size=4><p align=left>RFC: </b>$rfc<br><b><font color=#023020 size=4><p align=left>Salario: </b>$salario<br><b><font color=#023020 size=4><p align=left>Cuenta Bancaria: </b>$cuentaBan<br><b><font color=#023020 size=4><p align=left>Pago: </b>$pago<br><b><font color=#023020 size=4><p align=left>Entidad: </b>$entidad<br><b><font color=#023020 size=4><p align=left>Departamento: </b>$departamento<br>";
         echo $cocatenar;
        
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

/*echo "La conexion se realizo correctamente a la base de datos";*/    
$consulta="UPDATE empleados SET Nombre='$nombre' WHERE No_empleado='$id'";
mysqli_query($conexion,$consulta);
$consulta="UPDATE empleados SET Curp='$curp' WHERE No_empleado='$id'";
mysqli_query($conexion,$consulta);
$consulta="UPDATE empleados SET RFC='$rfc' WHERE No_empleado='$id'";
mysqli_query($conexion,$consulta);
$consulta="UPDATE empleados SET NSS='$nss' WHERE No_empleado='$id'";
mysqli_query($conexion,$consulta);
$consulta="UPDATE empleados SET Salario='$salario' WHERE No_empleado='$id'";
mysqli_query($conexion,$consulta);
$consulta="UPDATE empleados SET CuentaBan='$cuentaBan' WHERE No_empleado='$id'";
mysqli_query($conexion,$consulta);
$consulta="UPDATE empleados SET Clave_pago='$pago' WHERE No_empleado='$id'";
mysqli_query($conexion,$consulta);
$consulta="UPDATE empleados SET Clave_Entidad='$entidad' WHERE No_empleado='$id'";
mysqli_query($conexion,$consulta);
$consulta="UPDATE empleados SET Clave_departamento='$departamento' WHERE No_empleado='$id'";
mysqli_query($conexion,$consulta);
mysqli_close($conexion);
?>*/