<?php
// rene ruano 1/04/2021 funsion para extraer expedientes
require_once('../model/conexion.php');
$con= new conexion();
$con->conectar();
//session_start();
$tabla=$con->extraerExpediente($_SESSION["id_usuario"]);
echo "<table border='1'> <thead>
<tr><th>Nombre</th>
<th>apellido</th>
<th>Direccion</th>
<th>DPI</th>
<th>Nit</th>
<th>Fecha</th>
<th>diagnostioc</th>
<th>descrip</th>
<th>archivo</th>
<th>enfermedad</th>
<th>Doctor</th>
<th>clinica</th>
<th>telefono</th>
<th>correo</th>
</tr></thead>";
echo "<tbody><tr>";
while ($fila=mysqli_fetch_array($tabla))
{
    echo "<td>" . $fila["nombre"] . "</td>";
    echo "<td>" . $fila["apellido"] . "</td>";
    echo "<td>" . $fila["direccion"] . "</td>";
    echo "<td>" . $fila["dpi"] . "</td>";
    echo "<td> " . $fila["nit"] . "</td>";
    echo "<td> " . $fila["fec_creacion"] . "</td>";
    echo "<td> " . $fila["diagnostico"] . "</td>";
    echo "<td>" . $fila["descripcion"] . "</td>";
    echo "<td>" . $fila["archivo"] . "</td>";
    echo "<td>" . $fila["enfermedad"] . "</td>";
    echo "<td>" . $fila["doctor"] . "</td>";
    echo "<td>" . $fila["clinica"] . "</td>";
    echo "<td>" . $fila["telefono"] . "</td>";
    echo "<td>" . $fila["emails"] . "</td>";

}
echo "</tr></tbody></table>";
$con->conectar();
?>