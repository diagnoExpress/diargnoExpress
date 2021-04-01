<?php
require_once('../model/conexion.php');
$con = new conexion();
$con->conectar();

$con->cerrarConexion();
function listarTipoSolicitud(){ 
$tabla=$con->ExSolicitud();
echo $tabla;
//
 // while ($fila=mysqli_fetch_array($tabla)){
 //echo  '<option value = '. $fila['id_solicitud']  . '>' . $fila['tipo'] . '</option>';
 // }
}

?>
