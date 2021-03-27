<?php
require_once('../model/conexion.php');
$con = new conexion();
$con->conectar();

//creacion de datos
//direccion

//rene ruano 24/03/2021  
//creacion de isset if 
if(isset($_POST['f1'])){
echo $_POST['us'];
echo $_POST['cla'];
if ($con->verificarUsuario($_POST['us'],$_POST['cla'])==1){
    $con->cerrarConexion();
    header('location:../view/V_usu_externos.html');
}else{
    header('location:../index.php');
    $con->cerrarConexion();
}
}

//rene ruano 24/03/2021  
//recepcion de datos para guardar nube clever claoud
if(isset($_POST['f2'])){
echo $_POST['user'];
echo $_POST['pass'];
echo $_POST['conpass'];
echo $_POST['dir'];
$con->guardarUsuario($_POST['user'],$_POST['pass'],$_POST['dir']);
$con->cerrarConexion();
header('location:../index.php');
}
?>