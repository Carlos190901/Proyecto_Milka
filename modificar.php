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
$consulta="SELECT * FROM empleados WHERE No_empleado='$id_baja'";
$resultado=mysqli_query($conexion,$consulta);
$row=mysqli_fetch_array($resultado);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Realiza cambios</title>
    <link rel="stylesheet" href="./estilos/estiloMod.css">
</head>
<body>
     <div class="banda">
     </div>
   <div class="cajaprincipal">
   <!------------------------------------------------------------------------------>
    
    <div class="bienvenido">
     <div class="bienvenido2">
    <h2>REALIZAR CAMBIOS Al EMPLEADO</h2>
    <br><br>
        <form action="cambiar.php" method="post">
       <?php
       echo "<h1>".$id_baja."</h1><br>";
       echo "<input type='hidden' name='id' value='$id_baja'> <br>";
       echo "<input type='text' name='nombre' placeholder='".$row['Nombre']."'><br>";
       echo "<input type='text' name='curp' placeholder='".$row['Curp']."'><br>";
       echo "<input type='text' name='rfc' placeholder='".$row['RFC']."'><br>";
       echo "<input type='text' name='nss' placeholder='".$row['NSS']."'><br>";
       echo "<input type='text' name='salario' placeholder='".$row['Salario']."'><br>";
       echo "<input type='text' name='cuentaBan' placeholder='".$row['CuentaBan']."'><br>";
       echo "<input type='text' name='pago' placeholder='".$row['Clave_pago']."'>";
       echo "<br><input type='text' name='entidad' placeholder='".$row['Clave_Entidad']."'>";
       echo "<br><input type='text' name='departamento' placeholder='".$row['Clave_departamento']."'>";
        ?>
       <br><br><br>
       <button type="submit" class="submit" value="comprobar">Cambiar</button>
       <button type="submit" class="submit" value="borrar">Limpiar</button>
   </form>
         
         <a href="claveEntidad.html"><button class="btn" id="submit" name="login" type="submit">Claves Entidad</button></a><br>
         <a href="claveDepartamento.html"><button class="btn" id="submit" name="login" type="submit">Claves departamento</button></a><br>
         <a href="clavePago.html"><button class="btn" id="submit" name="login" type="submit">Claves Pago</button></a>
    </div>
    </div>
    
    <!------------------------------------------------------------------------------>
    
    <div class="imagen1">
        <div class="gif">
        <!--<img src="./imagenes/milka.PNG" alt="">-->
        </div>
    </div>
    
    </div>
    
</body>
</html>