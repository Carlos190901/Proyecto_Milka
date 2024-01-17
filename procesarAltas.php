<?php
/*Datos enviados por medio del post*/

if($_POST['nombre']!=""){
  $var_Nombre=$_POST['nombre'];
}
if($_POST['curp']!=""){
  $var_CURP=$_POST['curp'];
}
if($_POST['RFC']!=""){
  $var_RFC=$_POST['RFC'];
}

if($_POST['entidad']){
  $var_Entidad=$_POST['entidad'];
}
if($_POST['numEmp']){
  $var_numEmp=$_POST['numEmp'];
}
if($_POST['departamento']){
  $var_Departamento=$_POST['departamento'];
}
if($_POST['numSeg']){
  $var_numSeg=$_POST['numSeg'];
}
if($_POST['salario']){
  $var_Salario=$_POST['salario'];
}
if($_POST['periodo']!=""){
  $var_PerPago=$_POST['periodo'];
}
if($_POST['cuenta']!=""){
  $var_CuentaBan=$_POST['cuenta'];
}
switch($var_PerPago){
    case 'Q':
        $pago="Quincenal";
    break;
    case 'S':
        $pago="Semanal";
    break;
}
switch($var_Departamento){
    case 'DM':
        $departamento="Mantenimeinto";
    break;
    case 'DP':
        $departamento="Produccion";
    break;
    case 'CC':
        $departamento="Control De Calidad";
    break;
    case 'AE':
        $departamento="Area de exoportacion";
    break;
    case 'RH':
        $departamento="Recursos Humanos";
    break;
}
switch($var_Entidad){
    case 'AS':
        $entidad="AGUASCALIENTES";
    break;
    case 'BC':
        $entidad="BAJA CALIFORNIA";
    break;
    case 'BS':
        $entidad="BAJA CALIFORNIA SUR";
    break;
    case 'CC':
        $entidad="CAMPECHE";
    break;
    case 'CL':
        $entidad="COAHUILA";
    break;
    case 'CM':
        $entidad="COLIMA";
    break;
    case 'CS':
        $entidad="CHIAPAS";
    break;
    case 'CH':
        $entidad="CHIHUAHUA";
    break;
    case 'DF':
        $entidad="DISTRITO FEDERAL";
    break;
    case 'DG':
        $entidad="DURANGO";
    break;
    case 'GT':
        $entidad="GUANAJUATO";
    break;
    case 'GR':
        $entidad="GUERRERO";
    break;
    case 'HG':
        $entidad="HIDALGO";
    break;
    case 'JC':
        $entidad="JALISCO";
    break;
    case 'MC':
        $entidad="ESTADO DE MEXICO";
    break;
    case 'MN':
        $entidad="MICHOACAN";
    break;
    case 'MS':
        $entidad="MORELOS";
    break;
    case 'NT':
        $entidad="NAYARIT";
    break;
    case 'NL':
        $entidad="NUEVO LEON";
    break;
    case 'OC':
        $entidad="OAXACA";
    break;
    case 'PL':
        $entidad="PUEBLA";
    break;
    case 'QT':
        $entidad="QUERETARO";
    break;
    case 'QR':
        $entidad="QUITANA ROO";
    break;
    case 'SP':
        $entidad="SAN LUIS POTOSI";
    break;
    case 'SL':
        $entidad="SINALOA";
    break;
    case 'SR':
        $entidad="SONORA";
    break;
    case 'TC':
        $entidad="TABASCO";
    break;
    case 'TS':
        $entidad="TAMAULIPAS";
    break;
    case 'TL':
        $entidad="TLAXCALA";
    break;
    case 'VZ':
        $entidad="VERACRUZ";
    break;
    case 'YN':
        $entidad="YUCATAN";
    break;
    case 'ZS':
        $entidad="ZACATECAS";
    break;
        
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
$query="INSERT INTO empleados (No_empleado,Nombre,Curp,RFC,NSS,Salario,CuentaBan,Clave_pago,Clave_Entidad,Clave_departamento) VALUES ('$var_numEmp','$var_Nombre','$var_CURP','$var_RFC','$var_numSeg','$var_Salario','$var_CuentaBan','$var_PerPago','$var_Entidad','$var_Departamento')";
mysqli_query($conexion,$query);


?>
<!DOCTYPE html>
<html lang="en">
<!--<header id="main-header">-->
     
    

   <!-- </header>-->
<head>
    <meta charset="UTF-8">
    <title>Altas</title>
    <link rel="stylesheet" href="./estilos/estiloPanel.css">
</head>
<body>
    
     <div class="banda">
     </div>
   <div class="cajaprincipal">
   <!------------------------------------------------------------------------------>
    
    <div class="bienvenido">
     <div class="bienvenido2">
         <?php $cocatenar="<center><font color=white size=5><h4 style=background-color:#8267AD>Se dio de ALTA el Empleado...</h4></font></center><br><b><font color=#023020 size=4><p align=left>NOMBRE: </b>$var_Nombre</p><b><p align=left>CURP: </b>$var_CURP</p><b><p align=left>RFC: </b>$var_RFC</p><b><p align=left>ENTIDAD: </b>$entidad</p><b><p align=left>NUMERO EMPLEADO: </b>$var_numEmp</p><b><p align=left>DEPARTAMENTO: </b>$departamento</p><b><p align=left>SALARIO: </b>$var_Salario</p><b><p align=left>CUENTA BANCARIA: </b>$var_CuentaBan</p><b><p align=left>PAGO: </b>$pago</p</font>";
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
