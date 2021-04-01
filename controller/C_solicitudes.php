<?php
require_once('../model/conexion.php');


//$con->cerrarConexion();
function extraerTipoUsuario($tab){ 
 $con = new conexion();
$con->conectar();
$tabla=$con->extraerTipoUsuario($tab);
while ($fila=mysqli_fetch_array($tabla)){
echo '<option value = '. $fila['id_solicitud']  . '>' . $fila['tipo'] . '</option>';
 }
 $con->cerrarConexion();
}



?>
