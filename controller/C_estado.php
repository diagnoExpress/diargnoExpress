<?php
require_once('../model/conexion.php');
$con = new conexion();

$con->conectar();
$con->cambiarEstado($_POST['nsoliciutd']);
echo "<br><br>";
echo "<h6>solicitud " . $_POST['nsoliciutd'] . " eliminada</h6>" ;
?>