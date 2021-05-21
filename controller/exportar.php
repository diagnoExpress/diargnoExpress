<?php
echo "<br><br>";

$archivo = fopen('archivo.csv','w+');
fclose($archivo);
$archivo = fopen('archivo.csv','a');
$datos=$_POST['solicitud'] . ',' . $_POST['expediente'] . ','. $_POST['nsoporte'] . ',' . $_POST['tiposolicitud'] . ',' . $_POST['correo'] . ',' . $_POST['finicio'] ;
fwrite($archivo,$datos);
fclose($archivo);
echo '<a href="../controller/archivo.csv" >Descargar Exportacion</a>';
?>
