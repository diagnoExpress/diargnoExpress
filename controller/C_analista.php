<?php

//rene ruano guardar expedientes creados por analista 09/05/2021
require_once('../model/conexion.php');
$con = new conexion();
$con->conectar();
echo $_POST['cod_solicitud']. "solicitud <br>";
echo $_POST['cod_muestra'] . " muetra<br>";
echo $_POST['tipo_muestra']. " tipomuesra<br>";
echo $_POST['no_expediente']. " no. expediente<br>";
echo $_POST['nits']. " numero nit<br>";
echo $_POST['presentacion']. " presentacion<br>";
echo $_POST['us_asignacion']. "usuario asignado<br>";
echo $_POST['us_creacion']. " us creacion <br>";
echo $_POST['fech_creacion']. " fecha creacion <br>";
echo $_POST['fech_recepcion']. "fecha recepcion <br>";
echo $_POST['est_solicitud']. " estado solicitud<br>";
echo $_POST['cant_unidades']. "cant utilidades<br>";
echo $_POST['Uni_medida']. " unidad medicion <br>";
echo $_POST['cant_items']. " items  <br>";
echo $_POST['cant_documentos']. " couemnteso<br>";
//echo $_FILES['adjunto']['name'] . "<br>";
//$archivo=$_FILES['adjunto']['name'];
//move_uploaded_file($_FILES['ar']['tmp_name'] ,'../archivos/' . $archivo  );
echo $con->guardarMuestraAnalista(
$_POST['cod_muestra'], 
$_POST['tipo_muestra'], 
$_POST['cod_solicitud'], 
$_POST['no_expediente'], 
$_POST['nits'], 
$_POST['presentacion'], 
$_POST['us_asignacion'], 
$_POST['us_creacion'], 
$_POST['fech_creacion'], 
$_POST['fech_recepcion'], 
$_POST['est_solicitud'], 
$_POST['cant_unidades'], 
$_POST['Uni_medida'], 
$_POST['cant_items'], 
$_POST['cant_documentos'] );
$con->cerrarConexion();
header('location:../view/V_usu_analista.php');
?>