
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ko" lang="ko">
<head>
<title>Cross-Browser QRCode generator for Javascript</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no" />
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="qrcode.js"></script>
</head>
<body>

<?php

//rene ruano guardar expedientes creados por analista 09/05/2021
require_once('../model/conexion.php');
$con = new conexion();
$con->conectar();

echo $_POST['cod_solicitud']. "solicitud <br>";
echo $_POST['est_solicitud'] . " muetra<br>";
/*
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
*/
//echo $_FILES['adjunto']['name'] . "<br>";
//$archivo=$_FILES['adjunto']['name'];
//move_uploaded_file($_FILES['ar']['tmp_name'] ,'../archivos/' . $archivo  );
$con->campiarEstadoMuestra($_POST['cod_solicitud'], $_POST['est_solicitud']);
$con->cerrarConexion();

header('location:../view/V_usu_analista.php');




?>

</body>