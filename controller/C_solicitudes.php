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


function mostarSolicitud($id_usuario){
    $con = new conexion();
    $con->conectar();
    $con2 = new conexion();
    $con2->conectar();
    $tabla=$con->exSolicitudes($id_usuario);
    while ($fila=mysqli_fetch_array($tabla)){
        echo '<div class="col">
        <div class="card h-100">';
        $estado;
        if($fila['id_estados']==1){
            echo '<img src="creado.jpg" class="card-img-top" alt="estado" style="wid"><div class="card-body">';
            $estado="creado";
        
        }
        else{
            echo '<img src="creado.jpg" class="card-img-top" alt="estado"><div class="card-body">';
        }
     echo '<h6 class="card-title">Solicitud: ' . $fila['num_solicitud'] . '</h6>';
    echo  ' <p class="card-text"> Descripcion: <br>'. $fila['descripcion'] . ' 
    
    </p>
    </div>
    <div class="card-footer">
      <small class="text-muted"><b>Estado '. $estado . '</b><br>';
if($fila['id_analista']==NULL){
    echo 'Analista No asignado';
}else{
    $tabla2=$con2->extraerUsuaro2($fila['id_analista']);
    while ($fila2=mysqli_fetch_array($tabla2)){
        echo 'Analista:<a href="https://api.whatsapp.com/send?phone=50256965894&text=Solicito,%20informaicon%20bien%20de%2mi%20solicitud%20att:luis" target="_blank">  ' . $fila2['correo_us'] . '</a>';
    }
    $con2->cerrarConexion();
}
      echo '</small>
    </div>
  </div>
</div>
';
     }
     $con->cerrarConexion();
}


//rene ruano 1/04/2021 funcion guardar solicitud 
if (isset($_POST['sig'])){    
$con = new conexion();
$con->conectar();
echo $_POST['nexp']. "<br>";
echo $_POST['nSolicitud']. "<br>";
echo $_POST['tSolicitud']. "<br>";
echo $_POST['tSolicitante']. "<br>";
echo $_POST['dSolicitud']. "<br>";
$con->guardarSolicitud($_POST['nSolicitud'], $_POST['tSolicitud'], $_POST['tSolicitante'], $_POST['dSolicitud'],$_POST['nexp']);
    }
?>
