<?php
require_once('../model/conexion.php');
session_start();
$con = new conexion();
$con->conectar();
if(isset($_POST['olid'])){
$sos=$_POST['olid'];
echo $sos;
$tabla=$con->extraerSolicitudes($sos);
while ($fila=mysqli_fetch_array($tabla)){
    echo "numero solicitud: " . $fila['num_solicitud'] . "<br>";
    echo "tipo solicitud  : " . $fila['tipo_solicitud'] . "<br>";
    echo "descripcion : " . $fila['descripcion'] . "<br>";
    $tiposolis;
    if($fila['tipo_solicitante']==1){
      $tiposolis="'Muestra medica'";
    }else{
      $tiposolis="'laboratroio'";
    }

    $nsol= "'" . $fila['num_solicitud'] . "'";
    $nexpd= "'" . $fila['num_expediente'] . "'";
    $nnit= "'" . $fila['nit'] . "'";
   $usasi="'" . $_SESSION["usuario"] . "'";
    $uscre="'" . $fila['emails']. "'";
    $fecre="'" . $fila['fec_creacion']. "'";
    $est="'Activo'";
     echo '<input type="button" value="asignar muestra" onclick="assolid(' . $nsol . ', ' .  $tiposolis . ',' . $nexpd  . ','. $nnit . ',' . $usasi . ',' . $uscre . ',' . $fecre . ',' . $est .')"><br><hr>';
}
$con->cerrarConexion();
}else{
    echo "no se puede asignar una muestra si no se a vinculado una soliciud con filtros";
}
?>