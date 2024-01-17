<?php
/*Datos enviados por medio del post*/
   
if($_POST['id']!=""){
  $var_id=$_POST['id'];
}
if($_POST['horas']!=""){
  $var_horas=$_POST['horas'];
}
if($_POST['vacaciones']!=""){
  $var_vacaciones=$_POST['vacaciones'];
}

if($_POST['aguinaldo']){
  $var_aguinaldo=$_POST['aguinaldo'];
}
if($_POST['prima']){
  $var_prima=$_POST['prima'];
}
if($_POST['bono']){
  $var_bono=$_POST['bono'];
}
if($_POST['vales']){
  $var_vales=$_POST['vales'];
}
if($_POST['fondo']){
  $var_fondo=$_POST['fondo'];
}
if($_POST['isr']!=""){
  $var_isr=$_POST['isr'];
}
if($_POST['imss']!=""){
  $var_imss=$_POST['imss'];
}
if($_POST['infonavit']!=""){
  $var_infonavit=$_POST['infonavit'];
}
if($_POST['seguridad']!=""){
  $var_seguridad=$_POST['seguridad'];
}
if($_POST['retiro']!=""){
  $var_retiro=$_POST['retiro'];
}

$servidor="localhost";
$usuario="user";
$contrasena="32138";
$db="milka";
$conexion=mysqli_connect($servidor,$usuario,$contrasena,$db);
if(!$conexion){
    echo "Error: No se puede conectar a la base de MySQL".PHP_EOL;
    echo "Errno de depuracion: ".mysqli_connect_errno().PHP_EOL;
    echo "Error de depuracion: ".mysqli_connect_error().PHP_EOL;
    exit;
}
/*echo "La conexion se realizo correctamente a la base de datos <br><br>";*/
$query="INSERT INTO extradesc(No_empleado,Extras,Vacaciones,Aguinaldo,Prima,Bono,Vales,Ahorro,ISR,IMSS,Infonavit,Seguridad,Retiro) VALUES ('$var_id','$var_horas','$var_vacaciones','$var_aguinaldo','$var_prima','$var_bono','$var_vales','$var_fondo','$var_isr','$var_imss','$var_infonavit','$var_seguridad','$var_retiro')";
mysqli_query($conexion,$query);


?>
<!DOCTYPE html>
<html lang="en">
<!--<header id="main-header">-->
     
    

   <!-- </header>-->
<head>
    <meta charset="UTF-8">
    <title>EXTRAS Y DESCUENTOS</title>
    <link rel="stylesheet" href="./estilos/estiloPanel.css">
</head>
<body>
    
     <div class="banda">
     </div>
   <div class="cajaprincipal">
   <!------------------------------------------------------------------------------>
    
    <div class="bienvenido">
     <div class="bienvenido2">

         <?php $cocatenar="<center><font color=white size=5><h4 style=background-color:#8267AD>EXTRAS...</h4></font></center><br><b><font color=#023020 size=4><p align=left>NO_empleado: </b>$var_id</p><b><p align=left>Horas Extras: </b>$var_horas</p><b><p align=left>Vacaciones: </b> $var_vacaciones</p><b><p align=left>Aguinaldo: </b> $var_aguinaldo</p><b><p align=left>Prima Vacacional: </b>$var_prima</p><b><p align=left>Bono Putualidad: </b>$var_bono</p><b><p align=left>Vales Despensa: </b>$var_vales</p><b><p align=left>Fondo Ahorro: </b>$var_fondo</p></font><center><font color=white size=5><h4 style=background-color:#8267AD>Descuentos...</h4></font></center><br><b><p align=left>ISR: </b>$var_isr</p><b><p align=left>IMSS: </b>$var_imss</p><b><p align=left>INFONAVIT: </b>$var_infonavit</p><b><p align=left>Pago Seguridad Social: </b>$var_seguridad</p><b><p align=left>Fondo Retiro: </b>$var_retiro</p></font>";
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