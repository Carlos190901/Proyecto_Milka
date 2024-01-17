<?php
/*Datos para hacer la conexion en la base de datos*/
$servidor="localhost";
$usuario="user";
$contrasena="32138";
$db="milka";
/*Recolectamos los datos del formulario*/
$id_consulta=$_POST['consulta'];

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
    <title>CONSULTA</title>
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
          $consulta="SELECT * FROM empleados WHERE No_empleado='$id_consulta'";
$resultado=mysqli_query($conexion,$consulta);
$row=mysqli_fetch_array($resultado);

         $cocatenar="<center><font color=white size=5><h4 style=background-color:#8267AD>Se CONSULTA el Empleado...</h4></font></center><br><b><font color=#023020 size=4><p align=left>NO_empleado: </b>$id_consulta<br>";
         echo $cocatenar;
       echo "<b><font color=#54396C size=4><p align=left>NOMBRE: ".$row['Nombre'];
       echo "<b><font color=#54396C size=4><p align=left>CURP: ".$row['Curp'];
       echo "<b><font color=#54396C size=4><p align=left>RFC: ".$row['RFC'];
       echo "<b><font color=#54396C size=4><p align=left>NSS: ".$row['NSS'];
       echo "<b><font color=#54396C size=4><p align=left>SALARIO: ".$row['Salario'];
       echo "<b><font color=#54396C size=4><p align=left>CUENTA BANCARIA: ".$row['CuentaBan'];
       switch($row['Clave_pago']){
    case 'Q':
        $pago="Quincenal";
    break;
    case 'S':
        $pago="Semanal";
    break;
}
       echo "<b><font color=#54396C size=4><p align=left>PAGO: ".$pago;
         
         switch($row['Clave_Entidad']){
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
       echo "<b><font color=#54396C size=4><p align=left>ENTIDAD: ".$entidad;
        switch($row['Clave_departamento']){
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
       echo "<b><font color=#54396C size=4><p align=left>DEPARTAMENTO: ".$departamento;
       
        
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
