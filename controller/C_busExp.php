<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>


<?php
// rene ruano 1/04/2021 funsion para extraer expedientes
require_once('../model/conexion.php');
$con= new conexion();
$con->conectar();
//session_start();
$tabla=$con->extraerExpediente($_SESSION["id_usuario"]);
echo "<table border='1'> <thead>
<th>Direccion</th>
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
echo "<tbody>";
while ($fila=mysqli_fetch_array($tabla))
{
    echo "<tr>";
  
    echo "<td>" . $fila["direccion"] . "</td>";
    echo "<td> " . $fila["fec_creacion"] . "</td>";
    echo "<td> " . $fila["diagnostico"] . "</td>";
    echo "<td>" . $fila["descripcion"] . "</td>";
    $mos="'" . $fila["archivo"] . "'";
    echo "<td>" . '<img src="../archivos/' . $fila["archivo"] . '" width="50px" height="60" onchange="verimg( ' . $mos .')" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></td>';
    echo "<td>" . $fila["enfermedad"] . "</td>";
    echo "<td>" . $fila["doctor"] . "</td>";
    echo "<td>" . $fila["clinica"] . "</td>";
    echo "<td>" . $fila["telefono"] . "</td>";
    echo "<td>" . $fila["emails"] . "</td>";
    echo "</tr>";
}
echo "</tbody></table>";
$con->conectar();
?>

