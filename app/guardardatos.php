<?php

extract($_POST);

include("../dll/config.php");
include("../dll/class_mysqli_7.php");

$miconexion = new clase_mysqli7;
$miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
$ressql=$miconexion->consulta("insert into inscritos values('','$nombres','$correo','$cedula','$pais','$ciudad','$profesion')");
if (!$ressql) {
	echo '<script>alert("Error de registro");</script>';
	echo "<script>location.href='registro.php'</script>";
}else{
	echo '<script>alert("Datos guardados correctamente");</script>';
	echo "<script>location.href='../'</script>";
}
$ressql = $miconexion->consulta("insert into inscritos values(NULL,'$nombre','$correo','$cedula','$pais','$ciudad','$profesion','$tipo','$taller')");
?>