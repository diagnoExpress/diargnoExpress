
<!DOCTYPE html>
<html>
  <head>
  
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="../acciones.js"></script>
<link rel="stylesheet" type="text/css" href="../tema.css">  
<script src="https://code.jquery.com/jquery-3.3.0.min.js"></script>

</head>


  <body>

  <div class="card text-white bg-primary mb-3" style="max-width: 60%;margin-left:20%;margin-top:10%">
  <div class="card-header">etiqueta </div>
  <div class="card-body">
    <h5 class="card-title">Informacion Muestra Medica</h5>
    <p class="card-text">

    <?php

require_once('../model/conexion.php');
$con = new conexion();
$con->conectar();
if(isset($_GET['nmuestra'])){
    echo "Codiog Muestra: " . $_GET['nmuestra'] . "<br>";
$tabla=$con->rest($_GET['nmuestra']);
while ($fila=mysqli_fetch_array($tabla))
{
echo "Codigo Solicitud: " .  $fila['cod_solicitud'] . "<br>";
echo "Descripcon Muestra: " .  $fila['descripcion'] . "<br>";
}
$con->cerrarConexion();
}


if(isset($_GET['nsolicitud'])){
    echo "Codiog Solicitud: " . $_GET['nsolicitud'] . "<br>";
    $tabla=$con->Extraersoliciutd("select *  from solicitudes where num_solicitud='$_GET[nsolicitud]'");
    while ($fila=mysqli_fetch_array($tabla))
    {
    echo "Expediente : " .  $fila['num_expediente'] . "<br>";
    echo "Descripcon : " .  $fila['descripcion'] . "<br>";
    }
    $con->cerrarConexion();
    }


?>
</p>
  </div>
</div>




 </body>
</html>
