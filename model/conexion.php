
<?php

//luis fuentes 21/03/2021
class conexion{
    private $servidor;
    private $usuario;
    private $clave;
    private $db;
    private $conexion;
    //atributos

    //constructor
    public function __construct()
    {
        $this->servidor ="bzfbbfrcs3qo3w6nhjpb-mysql.services.clever-cloud.com" ;
        $this->usuario ="uccpbmxtbvvnfqtc" ;
        $this->clave="9pgDnYdW7PYOGGDpmASY";
        $this->db="bzfbbfrcs3qo3w6nhjpb";
    }

    //funcion de conxino mysqli
function conectar(){
    $this->conectar= mysqli_connect(
        $this->servidor,
        $this->usuario,
        $this->clave,
        $this->db
    );
    if(mysqli_connect_errno()){
        echo "no se pudo conecar ";
    }else
    {
        
    }
}

 
function listarext($knkk){
    // $dato=mysqli_query($this->conectar,"select * from usuarios where correo_us='$nume'"); 
    $dato=mysqli_query($this->conectar,"select * from usuarios where correo_us='$knkk'");
    $ids;
  while($ff=mysqli_fetch_array($dato)){
    $ads=$ff['id_us'];
  }
    return $ads ;

 }

//extracion de datos de usuarios

//extracion de datos 

function extraerUsuaro($a,$b){
$dato=mysqli_query($this->conectar,"select * from usuarios where correo_us='$a' and clave='$b'");
return $dato;
}

function extraerUsuaro2($a){
    $dato=mysqli_query($this->conectar,"select correo_us, telefono from usuarios where id_us='$a'");
    return $dato;
}
/*
rene ruano 24/03/2021  
fucnion guardar en mysql insertadno datos 
*/
function verificarUsuario($a,$b){
    $dato=mysqli_query($this->conectar,"select * from usuarios where correo_us='$a' and clave='$b'");
    return mysqli_num_rows($dato);
    }

    function guardarUsuario($user){
        mysqli_query($this->conectar,"insert into usuarios (correo_us,telefono, id_role) values ('$user','$user',2)" );
        
    }

    function cerrarConexion(){
        mysqli_close($this->conectar);
    
    }

    function extraerTipoUsuario($tabla){
        $datos=mysqli_query($this->conectar, "select * from ". $tabla);
        return $datos;
    }

    function Extraersoliciutd($sentencia){
        $datos=mysqli_query($this->conectar, $sentencia);
        return $datos;
    }



    function ExSolicitud(){
     $dato=mysqli_query($this->conectar,"select * from tipo_solicitud");
        return $dato;
        }



    //rene ruano 27/03/2021 funcion guardar expediente usuario externo
 
    function guardarExpedienteUsuarioExterno($expd,$nombre, $apellido, $direccion, $dpi, $nit,$departamento, $fechaCreacion, $diagnostico, $descripcion, $archivo, $enfermedad, $doctor, $clinica, $telefono, $emails, $correlativo){
        echo " INSERT INTO expedientes(num_expediente, nombre, apellido, direccion, dpi, nit, departamento, fec_creacion, diagnostico, descripcion, archivo, enfermedad, doctor, clinica, telefono, emails, id_us) VALUES  ('$expd',   '$nombre',  '$apellido', '$direccion', '$dpi',     '$nit',   '$departamento', '$fechaCreacion', '$diagnostico', '$descripcion',  '$archivo',   '$enfermedad',  '$doctor', '$clinica', '$telefono',   '$emails',    '$correlativo')";
        mysqli_query($this->conectar, " INSERT INTO expedientes(num_expediente, nombre, apellido, direccion, dpi, nit, departamento, fec_creacion, diagnostico, descripcion, archivo, enfermedad, doctor, clinica, telefono, emails, id_us) VALUES  ('$expd',   '$nombre',  '$apellido', '$direccion', '$dpi',     '$nit',   '$departamento', '$fechaCreacion', '$diagnostico', '$descripcion',  '$archivo',   '$enfermedad',  '$doctor', '$clinica', '$telefono',   '$emails',    '$correlativo')");
      
    
    }

    //rene ruano 09/05/2021 funcion guardar muestra de analista
    function guardarMuestraAnalista(                                                                                                                                                                                                                                                                                     $codigoMuestra, $tipoMuestra, $codigoSolicitud, $noExpediente, $nits, $presentacion, $usuarioAsignacion, $usuarioCreacion, $fechaCreacion, $fechaRecepcion, $estadoSolicitud, $cantidadUnidades, $unidadMedida, $cantidadItems,$cantidadDocumentos){
        $datoss="INSERT INTO muestras (cod_muestra,tipo_muestra,cod_solicitud,     num_expediente,nit,   presetacion,     us_asignacion,    us_creacion,    fec_creacion,     fec_recepcion,   estado_sol,        cant_uni,        uni_medida,      cant_intems,    cant_documentos, adjunto,   num_solicitud) VALUES ('$codigoMuestra','$tipoMuestra','$codigoSolicitud','$noExpediente','$nits','$presentacion','$usuarioAsignacion','$usuarioCreacion','$fechaCreacion','$fechaRecepcion','$estadoSolicitud','$cantidadUnidades','$unidadMedida','$cantidadItems','$cantidadDocumentos','archivo','$codigoSolicitud')";
        
        mysqli_query($this->conectar, $datoss);        
        return $datoss;
    }

    
    //rene ruano 1/04/2021 funcion guardar solicitud
    function guardarSolicitud($numSol, $tipoSol, $tipoSolicit, $descripSol,$espd){
        $pila = array();
        $datos = mysqli_query($this->conectar,"select * from usuarios where id_role=4");
        while($fila2= mysqli_fetch_array($datos)){
            $variable= $fila2['id_us'];
            echo $variable;
            array_push($pila,$variable);
        }
      
        $numero = count($pila); 
        $d=rand(0,$numero);
     
    
        mysqli_query($this->conectar,"insert into solicitudes(num_solicitud, tipo_solicitud,      tipo_solicitante,    descripcion,   num_expediente,   id_estados,   id_analista) values ('$numSol', '$tipoSol', '$tipoSolicit', '$descripSol','$espd',1,' $pila[$d]')" );  
    //echo "INSERT INTO solicitudes(num_solicitud, tipo_solicitud, tipo_solicitante, descripcion, num_expediente, id_estados, id_analista) VALUES ('$numSol', '$tipoSol', '$tipoSolicit', '$descripSol',   $espd, 1,4)";
    }

////generacion de cambio 

    //rene ruano 1/04/2021 funcion para extraer expdientes
    function extraerExpediente($idUsuario){
        $dato=mysqli_query($this->conectar,"select E.num_expediente,E.nombre, E.apellido, E.direccion, E.dpi, E.nit, E.departamento, E.fec_creacion, E.diagnostico, E.descripcion, E.archivo, E.enfermedad, E.doctor, E.clinica, E.telefono, E.emails from usuarios U INNER JOIN expedientes E on U.id_us = E.id_us where U.id_us = '$idUsuario'");
        return $dato;
        }

        function guardarSuportContac($usuario,$tipo,$num_su,$num_tel,$correo,$idus){
            mysqli_query($this->conectar, "INSERT INTO soporteExterno(usuario,tipo,num_soporte,num_tel,correo,id_us)VALUES ('$usuario','$tipo','$num_su','$num_tel','$correo','$idus')");
            
        }


    //funcion extraer estados
    function extraerEstados(){
    $dato=mysqli_query($this->conectar,"select * from estados");
    return $dato;
    }


     //extraer solicitudes2
     function extraerSolicitudes($idUsuario){
        $dato=mysqli_query($this->conectar,"select * from solicitudes so inner join expedientes es on so.num_expediente = es.num_expediente  where id_analista = '$idUsuario'");
        return $dato;
        }


        function exSolicitudes($idUsuario){
            $dato=mysqli_query($this->conectar,"select so.num_solicitud,so.id_estados, so.descripcion,so.id_analista  from solicitudes so  INNER join expedientes ex on so.num_expediente=ex.num_expediente  where ex.emails ='$idUsuario'");
            return $dato;
            }


      

          

}

?>