
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
        echo "conexion exitosa";
    }
}
//extracion de datos 
function extraer(){
$tabla=mysqli_query($this->conectar,'select * from usuarios');
while($fila=mysqli_fetch_array($tabla)){
    echo "nombre :" . $fila['correo_us'] . "<br>";
    echo "Direccion: " . $fila['dire'] . "<br>";
    echo "<br><br><hr></hr>";
}
echo "<br><br><br><br>nuemro de usruario registrados ";
return mysqli_num_rows($tabla);
}
/*
rene ruano 24/03/2021  
fucnion guardar en mysql insertadno datos 
*/
function verificarUsuario($a,$b){
    $dato=mysqli_query($this->conectar,"select * from usuarios where correo_us='$a' and clave='$b'");
    return mysqli_num_rows($dato);
    }

    function guardarUsuario($user, $pass, $dir){
        mysqli_query($this->conectar,"insert into usuarios (correo_us, clave, dire, id_role) values ('$user', '$pass','$dir',2)" );
        
    }

    function cerrarConexion(){
        mysqli_close($this->conectar);
    
    }

    //rene ruano 27/03/2021 funcion guardar expediente usuario externo
 
    function guardarExpedienteUsuarioExterno($nombre, $apellido, $direccion, $dpi, $nit,$departamento, $fechaCreacion, $diagnostico, $descripcion, $archivo, $enfermedad, $doctor, $clinica, $telefono, $emails, $correlativo){
        mysqli_query($this->conectar, "INSERT INTO expedientes(nombre, apellido, direccion, dpi, nit, departamento, fec_creacion, diagnostico, descripcion, archivo, enfermedad, doctor, clinica, telefono, emails, id_us) VALUES  ('$nombre', '$apellido', '$direccion', '$dpi', '$nit', '$departamento', '$fechaCreacion', '$diagnostico', '$descripcion', '$archivo', '$enfermedad', '$doctor', '$clinica', '$telefono', '$emails','$correlativo')");
    }
}

/*
function guardarExpedienteUsuarioExterno(){
mysqli_query($this->conectar,"INSERT INTO expedientes(nombre, apellido, direccion, dpi, nit, departamento, fec_creacion, diagnostico, descripcion, archivo, enfermedad, doctor, clinica, telefono, emails, id_us) VALUES ('duglas','hernandez','villas','12214','2112','guatemala','2021/03/27','higado', 'dijfalkdf','c.jpg','epatitis','jose','zona ','2155','luis@gmail.com','2')");  
}
}
*/
?>