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

//rene ruano 1/04/2021 funcion guardar solicitud 
if (isset($_POST['sig'])){    
$con = new conexion();
$con->conectar();
echo $_POST['nSolicitud']. "<br>";
echo $_POST['tSolicitud']. "<br>";
echo $_POST['tSolicitante']. "<br>";
echo $_POST['dSolicitud']. "<br>";
$con->guardarSolicitud($_POST['nSolicitud'], $_POST['tSolicitud'], $_POST['tSolicitante'], $_POST['dSolicitud']);
    }
?>
