<?php

//rene ruano guardar expedientes usuario externo 27/03/2021
require_once('../model/conexion.php');
$con = new conexion();
$con->conectar();
echo $_POST['ex']. "<br>";
echo $_POST['nombre']. "<br>";
echo $_POST['ap']. "<br>";
echo $_POST['dir']. "<br>";
echo $_POST['dpi']. "<br>";
echo $_POST['nit']. "<br>";
echo $_POST['dep']. "<br>";
echo $_POST['fec']. "<br>";
echo $_POST['diag']. "<br>";
echo $_POST['des']. "<br>";
echo $_FILES['ar']['name'] . "<br>";
$archivo=$_FILES['ar']['name'];
move_uploaded_file($_FILES['ar']['tmp_name'] ,'../archivos/' . $archivo  );
echo $_POST['enf']. "<br>";
echo $_POST['doctor']. "<br>";
echo $_POST['clinic']. "<br>";
echo $_POST['tel']. "<br>";
echo $_POST['cor']. "<br>";
echo $_POST['cod']. "<br>";
$con->guardarExpedienteUsuarioExterno($_POST['nombre'], $_POST['ap'], $_POST['dir'], $_POST['dpi'], $_POST['nit'], $_POST['dep'], $_POST['fec'], $_POST['diag'], $_POST['des'], $archivo, $_POST['enf'], $_POST['doctor'], $_POST['clinic'], $_POST['tel'], $_POST['cor'], $_POST['cod'] );
//$con->guardarExpedienteUsuarioExterno();
?>