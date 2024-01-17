<?php
/*Datos para hacer la conexion en la base de datos*/
$servidor="localhost";
$usuario="user";
$contrasena="32138";
$db="milka";
/*Recolectamos los datos del formulario*/
$empleado=$_POST['nomina'];

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
         <a href=" "><img align="left" src="./imagenes/milka.png" alt="logo1" class="img" width="130px" height="90px"></a>
     </div>
   <div class="cajaprincipal">
   <!------------------------------------------------------------------------------>
    
    <div class="bienvenido">
     <div class="bienvenido2">
         <?php
          $consulta="SELECT * FROM empleados WHERE No_empleado='$empleado'";
$resultado=mysqli_query($conexion,$consulta);
$row=mysqli_fetch_array($resultado);

         $cocatenar="<center><font color=white size=5><h4 style=background-color:#8267AD>NOMINA...</h4></font></center><br><b><font color=#023020 size=4><p align=left>EMPRESA: </b>MILKA Im Herzen Zart<br><b><font color=#023020 size=4><p align=left>DOMICILIO: </b>Av Aguascalientes Sur 402, Nueva España, 20205 Aguascalientes, Ags.<br><b><font color=#023020 size=4><p align=left>RFC:</b>89T56332<br>";
         echo $cocatenar;
       echo "<b><font color=#54396C size=4><p align=left>No_empleado: ".$row['No_empleado'];
       echo "<b><font color=#54396C size=4><p align=left>NOMBRE: ".$row['Nombre'];
       echo "<b><font color=#54396C size=4><p align=left>CURP: ".$row['Curp'];
       echo "<b><font color=#54396C size=4><p align=left>RFC: ".$row['RFC'];
       echo "<b><font color=#54396C size=4><p align=left>NSS: ".$row['NSS'];
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
       echo "<b><font color=#54396C size=4><p align=left>SALARIO  x DIA: ".$row['Salario'];
         $sD=$row['Salario'];
       echo "<b><font color=#54396C size=4><p align=left>CUENTA BANCARIA: ".$row['CuentaBan'];
       switch($row['Clave_pago']){
    case 'Q':
        $pago="Quincenal";
    break;
    case 'S':
        $pago="Semanal";
    break;
}
         $tip=$row['Clave_pago'];
       echo "<b><font color=#54396C size=4><p align=left>PAGO: ".$pago;
$consulta2="SELECT * FROM sueldo WHERE No_empleado='$empleado'";
$resultado2=mysqli_query($conexion,$consulta2);
$row2=mysqli_fetch_array($resultado2);
 echo "<b><font color=#54396C size=4><p align=left>Dias Trabajadas: ".$row2['Dias'];
         $di=$row2['Dias'];
 echo "<b><font color=#54396C size=4><p align=left>Sueldo: $".$row2['Sueldo'];
  $su=$row2['Sueldo'];
 
         
    $cocatena="<br><center><font color=white size=5><h4 style=background-color:#8267AD>Extras...</h4></font></center>";
         echo $cocatena;
         
     $consulta3="SELECT * FROM extradesc WHERE No_empleado='$empleado'";
$resultado3=mysqli_query($conexion,$consulta3);
$row3=mysqli_fetch_array($resultado3);
       echo "<b><font color=#54396C size=4><p align=left>Horas extras: ".$row3['Extras'];
       $ex=$row3['Extras'];
         $pagex=($ex/8)*($su*2);
         echo "<b><font color=#54396C size=4><p align=left>Pago extras: ".$pagex;
switch($row3['Aguinaldo']){
    case 'SI':
        $pagag=$sD*15;
    break;
    case 'NO':
        $pagag=$sD*0;
    break;
}
         echo "<b><font color=#54396C size=4><p align=left>Aguinaldo: ".$pagag;
         switch($row3['Prima']){
    case 'SI':
        $pagprim=($sD*15)*.025;
    break;
    case 'NO':
        $pagprim=$sD*0;
    break;
}
         echo "<b><font color=#54396C size=4><p align=left>Prima Vacacional: ".$pagprim;
          switch($row3['Bono']){
    case 'SI':
        if($tip='Q'){
        $pagbom=150;
        }else{
        $pagbom=75;  
        }
    break;
    case 'NO':
        $pagbom=0;
    break;
}
        echo "<b><font color=#54396C size=4><p align=left>Bono Puntualidad: ".$pagbom;
          switch($row3['Vales']){
    case 'SI':
        $pagval=$di*35.84;
    break;
    case 'NO':
        $pagval=$di*0;
    break;
}
        echo "<b><font color=#54396C size=4><p align=left>Vales Despensa: ".$pagval;
         
         
          switch($row3['Ahorro']){
    case 'SI':
        $pagahT=$su*0.03;
        $pagahE=$su*0.064;
    break;
    case 'NO':
        $pagahT=$su*0;
        $pagahE=$su*0;
    break;
}
         echo "<b><font color=#54396C size=4><p align=left>Fondo Ahorro Trabajador: ".$pagahT;
         echo "<b><font color=#54396C size=4><p align=left>Fondo Ahorro Empresa: ".$pagahE;
         
         $Total=$pagahE+$pagahT+$pagval+$pagbom+$pagprim+$pagag+$pagex;
         
         $cocaten="<br><center><font color=white size=5><h4 style=background-color:#8267AD>Descuentos...</h4></font></center>";
         echo $cocaten;
         
         switch($row3['ISR']){
    case 'SI':
        $pagISR=$su*0.10;
    break;
    case 'NO':
        $pagISR=$su*0;
    break;
}
         echo "<b><font color=#54396C size=4><p align=left>ISR: ".$pagISR;
         
         
          switch($row3['IMSS']){
    case 'SI':
        if($tip='Q'){
        $pagimss=($sD*15)*0.04875;
        }else{
        $pagimss=($sD*7)*0.02437;  
        }
    break;
    case 'NO':
        $pagimss=0;
    break;
}
         echo "<b><font color=#54396C size=4><p align=left>IMSS: ".$pagimss;
         
          switch($row3['Infonavit']){
    case 'SI':
        if($tip='Q'){
        $paginf=($sD*15)*0.15;
        }else{
        $paginf=($sD*7)*0.15;  
        }
    break;
    case 'NO':
        $paginf=0;
    break;
}
         
         echo "<b><font color=#54396C size=4><p align=left>Infonavit: ".$paginf;
          switch($row3['Seguridad']){
    case 'SI':
        $pagseg=$su*0.067;
    break;
    case 'NO':
        $pagseg=$su*0;
    break;
}
        echo "<b><font color=#54396C size=4><p align=left> Seguridad Social: ".$pagseg;
         switch($row3['Retiro']){
    case 'SI':
        $pagret=$su*0.055;
    break;
    case 'NO':
        $pagret=$su*0;
    break;
}
        echo "<b><font color=#54396C size=4><p align=left>Fondo Retiro: ".$pagret;
         $Desc=$pagret+$pagseg+$paginf+$pagimss+$pagISR;
         $Neto=$Total-$Desc;
         echo "<b><font color=#54396C size=4><p align=left>Sueldo Neto: ".$Neto;
         ?>
         
         
          <div class="botones">
            <a href="menu.html"><button id="submit" name="login" type="submit">Regresar</button></a>
        </div>
    </div>
    </div>
    
    <!------------------------------------------------------------------------------>
    
    
    </div>
    <!--<div class="frase">
        <b><p class="parrafo">&copy;Ingenieria en Sistemas Computacionales UAA 2021 - Todos los derechos reservados</p></b>
    </div>-->
</body>
</html>
