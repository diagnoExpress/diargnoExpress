<div class="card border-dark mb-3" style="max-width: 90%;margin-left:5%;margin-top:2%;">
  <div class="card-header">Resultadod De la busqueda </div>
  <div class="card-body text-dark" id="resu">
  
    <?php

   require_once('../model/conexion.php');
   if (isset($_POST["solicitud"])){
    echo " <br> <br>";
    $con = new conexion();
    $con->conectar();
    $sentencias="select * from solicitudes sol inner join soporteExterno sop on sol.num_solicitud=sop.id_solicitud  inner join estados es on sol.id_estados=es.id_estados inner join expedientes ex on ex.num_expediente=sol.num_expediente where num_solicitud = '$_POST[solicitud]'";
$_SESSION["sessolicitud"]=$_POST['solicitud'];
    $tabla=$con->Extraersoliciutd($sentencias);
    $fi=mysqli_num_rows($tabla);
  if ($fi>0){
    

    while ($fila=mysqli_fetch_array($tabla)){
      echo ' <div class="row">';
      echo '<div class="col">';
      echo 'Solicitud<input type="text" class="form-control" placeholder="First name" aria-label="First name" value="' . $fila['num_solicitud'] . '" id="ex1">';
      echo '</div>';
      
      echo '<div class="col">';
      echo 'Expediente<input type="text" class="form-control" placeholder="First name" aria-label="First name" value="' . $fila['num_expediente'] . '" id="ex2">';
      echo '</div>';
      echo '</div>';

      echo ' <div class="row">';
      echo '<div class="col">';
      echo 'Numero Soporte <input type="text" class="form-control" placeholder="First name" aria-label="First name" value="' . $fila['num_soporte'] . '" id="ex3">';
      echo '</div>';
      
      echo '<div class="col">';
      echo 'tipo Solicitante<input type="text" class="form-control" placeholder="First name" aria-label="First name" value="' . $fila['tipo_solicitud'] . '" id="ex4">';
      echo '</div>';
      echo '</div>';

      echo ' <div class="row">';
      echo '<div class="col">';
      echo 'Estado<input type="text" class="form-control" placeholder="First name" aria-label="First name" value="' . $fila['tipo_estados'] . '" id="ex5">';
      echo '</div>';
      
      echo '<div class="col">';
      echo 'Nit<input type="text" class="form-control" placeholder="First name" aria-label="First name" value="' . $fila['nit'] . '" id="ex6">';
      echo '</div>';
      echo '</div>';


      echo ' <div class="row">';
      echo '<div class="col">';
      echo 'Usuario asignado<input type="text" class="form-control" placeholder="First name" aria-label="First name" value="' . $fila['emails'] . '" id="ex7">';
      echo '</div>';
      
      echo '<div class="col">';
      echo 'fecha asicracion <input type="text" class="form-control" placeholder="First name" aria-label="First name" value="' . $fila['fec_creacion'] . '" id="ex8">';
      echo '</div>';
      echo '</div>';

      echo '<br><br><input type="button" value="exportar" onclick="Exportar()"><input type="button" value="elimnar" onclick="eliminar()">';
      echo '<div id="ports"></div>';
     }
     
    }else{
      echo "<h5>No Se encontraron resultados para la solicitud " . $_POST["solicitud"] . "</h5>";
    }
    
   }
//expedientes
if (isset($_POST["expediente"])){
  echo " <br> <br>";
  $con = new conexion();
  $con->conectar();
  $sentencias="select * from solicitudes sol inner join soporteExterno sop on sol.num_solicitud=sop.id_solicitud  inner join estados es on sol.id_estados=es.id_estados inner join expedientes ex on ex.num_expediente=sol.num_expediente where sol.num_expediente= '$_POST[expediente]'";

  $tabla=$con->Extraersoliciutd($sentencias);
  $fi=mysqli_num_rows($tabla);
if ($fi>0){


  while ($fila=mysqli_fetch_array($tabla)){
    echo ' <div class="row">';
      echo '<div class="col">';
      echo 'Solicitud<input type="text" class="form-control" placeholder="First name" aria-label="First name" value="' . $fila['num_solicitud'] . '" id="ex1">';
      echo '</div>';
      
      echo '<div class="col">';
      echo 'Expediente<input type="text" class="form-control" placeholder="First name" aria-label="First name" value="' . $fila['num_expediente'] . '" id="ex2">';
      echo '</div>';
      echo '</div>';

      echo ' <div class="row">';
      echo '<div class="col">';
      echo 'Numero Soporte <input type="text" class="form-control" placeholder="First name" aria-label="First name" value="' . $fila['num_soporte'] . '" id="ex3">';
      echo '</div>';
      
      echo '<div class="col">';
      echo 'tipo Solicitante<input type="text" class="form-control" placeholder="First name" aria-label="First name" value="' . $fila['tipo_solicitud'] . '" id="ex4">';
      echo '</div>';
      echo '</div>';

      echo ' <div class="row">';
      echo '<div class="col">';
      echo 'Estado<input type="text" class="form-control" placeholder="First name" aria-label="First name" value="' . $fila['tipo_estados'] . '" id="ex5">';
      echo '</div>';
      
      echo '<div class="col">';
      echo 'Nit<input type="text" class="form-control" placeholder="First name" aria-label="First name" value="' . $fila['nit'] . '" id="ex6">';
      echo '</div>';
      echo '</div>';


      echo ' <div class="row">';
      echo '<div class="col">';
      echo 'Usuario asignado<input type="text" class="form-control" placeholder="First name" aria-label="First name" value="' . $fila['emails'] . '" id="ex7">';
      echo '</div>';
      
      echo '<div class="col">';
      echo 'fecha asicracion <input type="text" class="form-control" placeholder="First name" aria-label="First name" value="' . $fila['fec_creacion'] . '" id="ex8">';
      echo '</div>';
      echo '</div>';

      echo '<br><br><input type="button" value="exportar" onclick="Exportar()"><input type="button" value="elimnar" onclick="eliminar()">';
      echo '<div id="ports"></div>';
    
   }
  }else{
    echo "<h5>No Se encontraron resultados para el expediente " . $_POST["expediente"] . "</h5>";
  }
  
 }



 //filatracion por soprte
 if (isset($_POST["soporte"])){
  echo " <br> <br>";
  $con = new conexion();
  $con->conectar();
  $sentencias="select * from solicitudes sol inner join soporteExterno sop on sol.num_solicitud=sop.id_solicitud  inner join estados es on sol.id_estados=es.id_estados inner join expedientes ex on ex.num_expediente=sol.num_expediente where sop.num_soporte= '$_POST[soporte]'";

  $tabla=$con->Extraersoliciutd($sentencias);
  $fi=mysqli_num_rows($tabla);
if ($fi>0){


  while ($fila=mysqli_fetch_array($tabla)){
    echo ' <div class="row">';
      echo '<div class="col">';
      echo 'Solicitud<input type="text" class="form-control" placeholder="First name" aria-label="First name" value="' . $fila['num_solicitud'] . '" id="ex1">';
      echo '</div>';
      
      echo '<div class="col">';
      echo 'Expediente<input type="text" class="form-control" placeholder="First name" aria-label="First name" value="' . $fila['num_expediente'] . '" id="ex2">';
      echo '</div>';
      echo '</div>';

      echo ' <div class="row">';
      echo '<div class="col">';
      echo 'Numero Soporte <input type="text" class="form-control" placeholder="First name" aria-label="First name" value="' . $fila['num_soporte'] . '" id="ex3">';
      echo '</div>';
      
      echo '<div class="col">';
      echo 'tipo Solicitante<input type="text" class="form-control" placeholder="First name" aria-label="First name" value="' . $fila['tipo_solicitud'] . '" id="ex4">';
      echo '</div>';
      echo '</div>';

      echo ' <div class="row">';
      echo '<div class="col">';
      echo 'Estado<input type="text" class="form-control" placeholder="First name" aria-label="First name" value="' . $fila['tipo_estados'] . '" id="ex5">';
      echo '</div>';
      
      echo '<div class="col">';
      echo 'Nit<input type="text" class="form-control" placeholder="First name" aria-label="First name" value="' . $fila['nit'] . '" id="ex6">';
      echo '</div>';
      echo '</div>';


      echo ' <div class="row">';
      echo '<div class="col">';
      echo 'Usuario asignado<input type="text" class="form-control" placeholder="First name" aria-label="First name" value="' . $fila['emails'] . '" id="ex7">';
      echo '</div>';
      
      echo '<div class="col">';
      echo 'fecha asicracion <input type="text" class="form-control" placeholder="First name" aria-label="First name" value="' . $fila['fec_creacion'] . '" id="ex8">';
      echo '</div>';
      echo '</div>';

      echo '<br><br><input type="button" value="exportar" onclick="Exportar()"><input type="button" value="elimnar" onclick="eliminar()">';
      echo '<div id="ports"></div>';
    
   }
  }else{
    echo "<h5>No Se encontraron resultados para el nuero de  " . $_POST["soporte"] . "</h5>";
  }
  
 }




 //correo usuario
 if (isset($_POST["correo"])){
  echo " <br> <br>";
  $con = new conexion();
  $con->conectar();
  $sentencias="select * from solicitudes sol inner join soporteExterno sop on sol.num_solicitud=sop.id_solicitud  inner join estados es on sol.id_estados=es.id_estados inner join expedientes ex on ex.num_expediente=sol.num_expediente where ex.emails= '$_POST[correo]'";

  $tabla=$con->Extraersoliciutd($sentencias);
  $fi=mysqli_num_rows($tabla);
if ($fi>0){


  while ($fila=mysqli_fetch_array($tabla)){
    echo ' <div class="row">';
      echo '<div class="col">';
      echo 'Solicitud<input type="text" class="form-control" placeholder="First name" aria-label="First name" value="' . $fila['num_solicitud'] . '" id="ex1">';
      echo '</div>';
      
      echo '<div class="col">';
      echo 'Expediente<input type="text" class="form-control" placeholder="First name" aria-label="First name" value="' . $fila['num_expediente'] . '" id="ex2">';
      echo '</div>';
      echo '</div>';

      echo ' <div class="row">';
      echo '<div class="col">';
      echo 'Numero Soporte <input type="text" class="form-control" placeholder="First name" aria-label="First name" value="' . $fila['num_soporte'] . '" id="ex3">';
      echo '</div>';
      
      echo '<div class="col">';
      echo 'tipo Solicitante<input type="text" class="form-control" placeholder="First name" aria-label="First name" value="' . $fila['tipo_solicitud'] . '" id="ex4">';
      echo '</div>';
      echo '</div>';

      echo ' <div class="row">';
      echo '<div class="col">';
      echo 'Estado<input type="text" class="form-control" placeholder="First name" aria-label="First name" value="' . $fila['tipo_estados'] . '" id="ex5">';
      echo '</div>';
      
      echo '<div class="col">';
      echo 'Nit<input type="text" class="form-control" placeholder="First name" aria-label="First name" value="' . $fila['nit'] . '" id="ex6">';
      echo '</div>';
      echo '</div>';


      echo ' <div class="row">';
      echo '<div class="col">';
      echo 'Usuario asignado<input type="text" class="form-control" placeholder="First name" aria-label="First name" value="' . $fila['emails'] . '" id="ex7">';
      echo '</div>';
      
      echo '<div class="col">';
      echo 'fecha asicracion <input type="text" class="form-control" placeholder="First name" aria-label="First name" value="' . $fila['fec_creacion'] . '" id="ex8">';
      echo '</div>';
      echo '</div>';

      echo '<br><br><input type="button" value="exportar" onclick="Exportar()">';
      echo '<div id="ports"></div>';
    
   }
  }else{
    echo "<h5>No Se encontraron resultados para el nuero de  " . $_POST["correo"] . "</h5>";
  }
  
 }

   $con->cerrarConexion(); 
    ?>
  </div>
</div>