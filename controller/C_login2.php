<?php

require_once('../model/conexion.php');
$con = new conexion();
$con->conectar();

//creacion de datos
//direccion

//rene ruano 24/03/2021  
//creacion de isset if 
if(isset($_POST['f1'])){
  $id_rol;
if ($con->verificarUsuario($_POST['us'],$_POST['cla'])==1){
    
  $tabla=$con->extraerUsuaro($_POST['us'],$_POST['cla']);
  $con->cerrarConexion();

  while($fila=mysqli_fetch_array($tabla)){
    $_SESSION["id_usuario"] = $fila['id_us'];
$_SESSION["usuario"] = $fila['correo_us'];
$id_rol=$fila['id_role'];
}
$con->cerrarConexion();

if($id_rol==1){
header('location:../view/V_usu_internos.php');
}

if($id_rol==4){
  header('location:../view/V_usu_analista.php');
  }


  
if($id_rol==3){
  header('location:../view/V_usu_admin.php');
  }

}else{
    header('location:../index.php');
    $con->cerrarConexion();
}
}

//rene ruano 24/03/2021  
//recepcion de datos para guardar nube clever claoud
if(isset($_POST['f2'])){
echo $_POST['user'];
$con->guardarUsuario($_POST['user']);
$con->cerrarConexion();
$eso=$con->listarext($_POST['user'])

$_SESSION["id_usuario"] = $eso;
$_SESSION["usuario"] = $_POST['user'];
$con->guardarUsuario($_POST['user']);
$con->cerrarConexion();
header('location:../view/V_usu_externos.php');
}

function exter($nume){ 
  $connn=mysqli_connect("bzfbbfrcs3qo3w6nhjpb-mysql.services.clever-cloud.com","uccpbmxtbvvnfqtc","9pgDnYdW7PYOGGDpmASY","bzfbbfrcs3qo3w6nhjpb");
  $dato=mysqli_query($connn,"select * from usuarios where correo_us='$nume'");
  $ids;
  while($ff=mysqli_fetch_array($dato)){

    $ads=$ff['id_us'];
  }
  $_SESSION["id_usuario"] =$ads;
  echo $ads;
}
?>