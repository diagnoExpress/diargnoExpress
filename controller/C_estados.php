<?php
require_once('../model/conexion.php');


//funcion para extraer estados rene ruano 7/04/2021
function extraerEstados(){ 
    $con = new conexion();
   $con->conectar();
   $tabla=$con->extraerEstados();
   while ($fila=mysqli_fetch_array($tabla)){
   echo '<option value = '. $fila['id_estados']  . '>' . $fila['tipo_estados'] . '</option>';
    }
    $con->cerrarConexion();
   }