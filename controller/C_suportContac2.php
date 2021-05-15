<!--Douglas Hernandez-->
<?php
session_start();
require_once('../Model/conexion.php');
$con = new conexion();
$con->conectar();
echo $_POST['solMed']. "<br>";
echo $_POST['numsop']. "<br>";
echo $_POST['numtel']. "<br>";
echo $_POST['correo']. "<br>";
echo $_SESSION["id_usuario"]. "<br>";
$tipous = 'externo';
echo $tipous;

//llamando al metodo del objeto conexion 
$con-> guardarSuportContac($tipous,$_POST["solMed"],$_POST["numsop"],$_POST["numtel"],$_POST["correo"],$_SESSION["id_usuario"]);
header('location:../view/V_usu_externos.php');
?>