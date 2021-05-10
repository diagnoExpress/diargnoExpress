<figure class="figure" id="radiod">
<figcaption class="figure-caption text-start" style="font-size:14pt;font-weight:bold">Click sobre imagen para cerrar</figcaption>
  <img src="" class="figure-img img-fluid rounded" alt="clic cerrar imagen" id="pit" style="heigth:80%; width:100%" onclick="cer()">
  
</figure>

<?php
// rene ruano 1/04/2021 funsion para extraer expedientes
require_once('../model/conexion.php');
$con= new conexion();
$con->conectar();
//session_start();
$tabla=$con->extraerExpediente($_SESSION["id_usuario"]);
echo "<table class='table table-dark table-striped'> <thead>
<th>Codigo</th>
<th>Direccion</th>
<th>Fecha</th>
<th>diagnostioc</th>
<th>archivo</th>
<th>enfermedad</th>
<th>Signar Solicutd</th>
</tr></thead>";
echo "<tbody>";
while ($fila=mysqli_fetch_array($tabla))
{
    echo "<tr>";
    echo "<td>" . $fila["num_expediente"] . "</td>";
    echo "<td>" . $fila["direccion"] . "</td>";
    echo "<td> " . $fila["fec_creacion"] . "</td>";
    echo "<td> " . $fila["diagnostico"] . "</td>";
    $mos="'" . $fila["archivo"] . "'";
    echo "<td>" . '<img src="../archivos/' . $fila["archivo"] . '" width="50px" height="60" onclick="verimg( ' . $mos .')" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></td>';
    echo "<td>" . $fila["enfermedad"] . "</td>";
    echo "<td><input type='checkbox' value='true' onclick='asignarex( " . $fila["num_expediente"]  . ")'></td>";
    echo "</tr>";
}
echo "</tbody></table>";
$con->conectar();
?>

