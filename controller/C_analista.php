<?php

//rene ruano guardar expedientes creados por analista 09/05/2021
require_once('../model/conexion.php');
$con = new conexion();
$con->conectar();
echo $_POST['cod_muestra']. "<br>";
echo $_POST['tipo_muestra']. "<br>";
echo $_POST['cod_solicitud']. "<br>";
echo $_POST['no_expediente']. "<br>";
echo $_POST['nit']. "<br>";
echo $_POST['presentacion']. "<br>";
echo $_POST['us_asignacion']. "<br>";
echo $_POST['us_creacion']. "<br>";
echo $_POST['fech_creacion']. "<br>";
echo $_POST['fech_recepcion']. "<br>";
echo $_POST['est_solicitud']. "<br>";
echo $_POST['cant_unidades']. "<br>";
echo $_POST['Uni_medida']. "<br>";
echo $_POST['cant_items']. "<br>";
echo $_POST['cant_documentos']. "<br>";
echo $_FILES['adjunto']['name'] . "<br>";
$archivo=$_FILES['adjunto']['name'];
move_uploaded_file($_FILES['ar']['tmp_name'] ,'../archivos/' . $archivo  );
$con->guardarExpedienteAnalista($_POST['cod_muestra'], $_POST['tipo_muestra'], $_POST['cod_solicitud'], $_POST['no_expediente'], $_POST['nit'], $_POST['presentacion'], $_POST['us_asignacion'], $_POST['us_creacion'], $_POST['fech_creacion'], $archivo, $_POST['fech_recepcion'], $_POST['est_solicitud'], $_POST['cant_unidades'], $_POST['Uni_medida'], $_POST['cant_items'], $_POST['cod'], $_POST['cant_documentos'], $_POST['adjunto'] );
?>