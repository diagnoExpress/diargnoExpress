
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
        $this->servidor ="b6dpmzgps2e460gdzocd-mysql.services.clever-cloud.com" ;
        $this->usuario ="urd254y6xslbel1s" ;
        $this->clave="G6Gti9v1vkVffjbOBhhn";
        $this->db="b6dpmzgps2e460gdzocd";
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

 


//extracion de datos de usuarios

//extracion de datos 

function extraerUsuaro($a,$b){
$dato=mysqli_query($this->conectar,"select * from usuarios where correo_us='$a' and clave='$b'");
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
        mysqli_query($this->conectar,"insert into usuarios (correo_us, id_role) values ('$user',1)" );
        
    }

    function cerrarConexion(){
        mysqli_close($this->conectar);
    
    }

    function extraerTipoUsuario($tabla){
        $datos=mysqli_query($this->conectar, "select * from ". $tabla);
        return $datos;
    }

    function ExSolicitud(){
     $dato=mysqli_query($this->conectar,"select * from tipo_solicitud");
        return $dato;
        }



    //rene ruano 27/03/2021 funcion guardar expediente usuario externo
 
    function guardarExpedienteUsuarioExterno($nombre, $apellido, $direccion, $dpi, $nit,$departamento, $fechaCreacion, $diagnostico, $descripcion, $archivo, $enfermedad, $doctor, $clinica, $telefono, $emails, $correlativo){
        mysqli_query($this->conectar, "INSERT INTO expedientes(nombre, apellido, direccion, dpi, nit, departamento, fec_creacion, diagnostico, descripcion, archivo, enfermedad, doctor, clinica, telefono, emails, id_us) VALUES  ('$nombre', '$apellido', '$direccion', '$dpi', '$nit', '$departamento', '$fechaCreacion', '$diagnostico', '$descripcion', '$archivo', '$enfermedad', '$doctor', '$clinica', '$telefono', '$emails','$correlativo')");
    }
    
    //rene ruano 1/04/2021 funcion guardar solicitud
    function guardarSolicitud($numSol, $tipoSol, $tipoSolicit, $descripSol){
        mysqli_query($this->conectar,"insert into solicitudes(num_solicitud, tipo_solicitud, tipo_solicitante, descripcion, num_expediente, id_estados) values ('$numSol', '$tipoSol', '$tipoSolicit', '$descripSol',1,1)" );  
    }

    //rene ruano 1/04/2021 funcion para extraer expdientes
    function extraerExpediente($idUsuario){
        $dato=mysqli_query($this->conectar,"select E.nombre, E.apellido, E.direccion, E.dpi, E.nit, E.departamento, E.fec_creacion, E.diagnostico, E.descripcion, E.archivo, E.enfermedad, E.doctor, E.clinica, E.telefono, E.emails from usuarios U INNER JOIN expedientes E on U.id_us = E.id_us where U.id_us = '$idUsuario'");
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

}

?>