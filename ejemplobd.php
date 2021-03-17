<?php
include "conexion.inc.php";
$resultado = mysqli_query($con, "select * from alumno");
//print_r($resultado);
echo "<br>";
?>
<table>
<tr>
	<td>CI</td>
	<td>Nombre</td>
	<td>Paterno</td>
	<td colspan="2">Operaciones</td>
</tr>
<?php
while ($fila = mysqli_fetch_array($resultado))
{
echo "<tr>";
echo "<td>$fila[ci]</td>";
echo "<td>".$fila["nombre"]."</td>";
echo "<td>$fila[paterno]</td>";
echo "<td><a href='editar.php?ci=$fila[ci]'>Editar</a></td>";
echo "<td><a href='eliminar.php?ci=$fila[ci]'>Eliminar</a></td>";
echo "</tr>";
}
?>
</table>
<?php
echo "<a href='editar.php'>Nuevo</a>";
?>