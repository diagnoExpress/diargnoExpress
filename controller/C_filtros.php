    <?php
   require_once('../model/conexion.php');
   if (isset($_POST["solicitud"])){
    echo "datos Emcontrados <br> <br>";
    $con = new conexion();
    $con->conectar();
    $sentencias="SELECT sol.num_solicitud,sol.tipo_solicitud, sol.tipo_solicitante, 
    sol.descripcion, sol.num_expediente, sol.id_estados from solicitudes sol inner join expedientes
     ex on sol.num_solicitud = ex.num_expediente where sol.num_solicitud = '$_POST[solicitud]'";

    $tabla=$con->Extraersoliciutd($sentencias);
    while ($fila=mysqli_fetch_array($tabla)){
    echo 'solicitud '. $fila['num_solicitud']  . 'datos' . $fila['descripcion'] . '<br>';
     }
     $con->cerrarConexion(); 
   }
    ?>
