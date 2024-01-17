<?php
$servidor="localhost";
$usuario="user";
$contrasena="32138";
$db="milka";

$user=$_POST['usuario'];
$pass=$_POST['clave'];

/*Realizar conexion a la base de datos con parametros anteriormente solicitados*/
$conexion=mysqli_connect($servidor,$usuario,$contrasena,$db);
if(!$conexion){
    echo "Error: no se puede conectar a la base de datos de MySQL".PHP_EOL;
    echo "Errno de depuracion: ".mysqli_connect_errno().PHP_EOL;
    echo "Errno de depuracion: ".mysqli_connect_errno().PHP_EOL;
    exit;
    
}
/*echo "La conexion se realizo correctamente a la base de datos";*/ 
$consulta="SELECT * FROM usuario WHERE usuario='$user' AND contrasena='$pass'";
$resultado=mysqli_query($conexion,$consulta);
$n_filas=mysqli_num_rows($resultado);
if($n_filas>0){
    header("location:menu.html");
}else{
    header("location:refuse.html");
}

?>