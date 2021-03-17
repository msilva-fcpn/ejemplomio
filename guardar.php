<?php
include "conexion.inc.php";
$ci=$_GET["ci"];
$nombre=$_GET["nombre"];
$paterno=$_GET["paterno"];
$edicion=$_GET["edicion"];
session_start();
echo "sesion ".$_SESSION["edicion"];
if (isset($_GET["Cancelar"])) 
{
	//header("Location: ejemplobd.php");
}
if ($edicion=="SI")
{
$sql="update alumno set nombre='".$nombre."',";
$sql.="paterno='$paterno' where ci='$ci'";
}
else
{
$sql="insert into alumno(ci,nombre,paterno)";
$sql.="values('90','$nombre','$paterno')";	
}	
mysqli_query($con, $sql);
?>
<a href="ejemplobd.php">Retornar</a>