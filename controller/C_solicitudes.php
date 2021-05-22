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

function extraerTipoUsuario2($tab){ 
    $con = new conexion();
   $con->conectar();
   
   echo '<option value = '.$tab  . '>' . $tab . '</option>';
    
    $con->cerrarConexion();
   }
   




function mostarSolicitud($id_usuario){
    $con = new conexion();
    $con->conectar();
    $con2 = new conexion();
  $solit;
    $tabla=$con->exSolicitudes($id_usuario);
    while ($fila=mysqli_fetch_array($tabla)){
      $solit=$fila['num_solicitud'];
        echo '<div class="col">
        <div class="card h-100">';
        $estado;
        if($fila['id_estados']==1){
            echo '<img src="creado.jpg" class="card-img-top" alt="estado" style="wid"><div class="card-body">';
            $estado="creado";
        }

        if($fila['id_estados']==2){
          echo '<img src="creado.jpg" class="card-img-top" alt="estado" style="wid"><div class="card-body">';
          $estado="enviado";
      }
      if($fila['id_estados']==3){
        echo '<img src="creado.jpg" class="card-img-top" alt="estado" style="wid"><div class="card-body">';
        $estado="asignado";
    }
    if($fila['id_estados']==4){
      echo '<img src="creado.jpg" class="card-img-top" alt="estado" style="wid"><div class="card-body">';
      $estado="analisis";
  }
  if($fila['id_estados']==5){
    echo '<img src="creado.jpg" class="card-img-top" alt="estado" style="wid"><div class="card-body">';
    $estado="espera";
}

if($fila['id_estados']==6){
  echo '<img src="creado.jpg" class="card-img-top" alt="estado" style="wid"><div class="card-body">';
  $estado="revicion";
}

if($fila['id_estados']==7){
  echo '<img src="creado.jpg" class="card-img-top" alt="estado" style="wid"><div class="card-body">';
  $estado="finalizado";
}
if($fila['id_estados']==8){
  echo '<img src="creado.jpg" class="card-img-top" alt="estado" style="wid"><div class="card-body">';
  $estado="rechazado";
}
        if($fila['id_estados']==9){
          echo '<img src="creado.jpg" class="card-img-top" alt="estado" style="wid"><div class="card-body">';
          $estado="eliminado";
      }
      /*
        else{
            echo '<img src="creado.jpg" class="card-img-top" alt="estado"><div class="card-body">';
        }
        */
     echo '<h6 class="card-title">Solicitud: ' . $fila['num_solicitud'] . '</h6>';
    echo  ' <p class="card-text"> Descripcion: <br>'. $fila['descripcion'] . ' 
    
    </p>
    </div>
    <div class="card-footer">
      <small class="text-muted"><b>Estado '. $estado . '</b><br>';
      $con2->conectar();
    $tabla2=$con2->extraerUsuaro2($fila['id_analista']);
    while ($fila2=mysqli_fetch_array($tabla2)){
        echo 'Analista:<a href="https://api.whatsapp.com/send?phone=502' . $fila2['telefono'] . '&text=mi numero de solicitud es '. $solit .' a sido creada verificar en http://practica-portafolio.great-site.net/controller/C_qr.php?nsolicitud=' .  $solit .  '" target="_blank">Contacar analista</a>';
    }
    $con2->cerrarConexion();

      echo '</small>
    </div>
  </div>
</div>
';
     }
     $con->cerrarConexion();
}


//rene ruano 1/04/2021 funcion guardar solicitud 
if (isset($_POST['nexp'])){    
  session_start();
$con = new conexion();
$con->conectar();
echo "numero expediente: " . $_POST['nexp']. "<br>";
echo  "numero Solicitud: " .$_POST['nSolicitud']. "<br>";
echo "tipo solicitud: " . $_POST['tSolicitud']. "<br>";
echo "tipo solicitante: " . $_POST['tSolicitante']. "<br>";
echo "descripcon : " .$_POST['dSolicitud']. "<br>";
$con->guardarSolicitud($_POST['nSolicitud'], $_POST['tSolicitud'], $_POST['tSolicitante'], $_POST['dSolicitud'],$_POST['nexp']);
  

echo $_POST['solMed']. "<br>";
echo $_POST['numsop']. "<br>";
echo $_POST['numtel']. "<br>";
echo $_POST['correo']. "<br>";
echo $_SESSION["id_usuario"]. "<br>";
$tipous = 'interno';
echo $tipous;

//llamando al metodo del objeto conexion 
$con-> guardarSuportContac($tipous,$_POST["solMed"],$_POST["numsop"],$_POST["numtel"],$_POST["correo"],$_SESSION["id_usuario"],$_POST['nSolicitud']);
$con->cerrarConexion();


header('location:../view/V_usu_internos.php');
}
?>
