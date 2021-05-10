<!DOCTYPE html>
<html>
  <head>
  
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="../acciones.js"></script>
<link rel="stylesheet" type="text/css" href="../tema.css">  
</head>


  <body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e9454c;color:white;" >
      <div class="container-fluid" style="background-color: #e9454c;color:white;">

    
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background-color:white;color:white;" >
          <span class="navbar-toggler-icon" style="background-color:white;color:white;"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="background-color: #e9454c;color:white;">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="background-color: #e9454c;color:white;">
          <br>
            <li class="nav-item" style="background-color: #e9454c;color:white;">
            
              <a class="btn btn-primary btn-s" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample" style="margin-left:5px;width:160px;margin-top:1px;" >
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-spreadsheet" viewBox="0 0 16 16">
  <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V9H3V2a1 1 0 0 1 1-1h5.5v2zM3 12v-2h2v2H3zm0 1h2v2H4a1 1 0 0 1-1-1v-1zm3 2v-2h3v2H6zm4 0v-2h3v1a1 1 0 0 1-1 1h-2zm3-3h-3v-2h3v2zm-7 0v-2h3v2H6z"/>
</svg> Crear Muestra
               </a>
       
               <li class="nav-item" style="background-color: #e9454c;color:white;">
              <a class="btn btn-primary btn-s" data-bs-toggle="offcanvas" href="#offcanvasExample1" role="button" aria-controls="offcanvasExample" style="margin-left:5px;width:160px;margin-top:1px;">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-easel" viewBox="0 0 16 16">
  <path d="M8.5 6a.5.5 0 1 0-1 0h-2A1.5 1.5 0 0 0 4 7.5v2A1.5 1.5 0 0 0 5.5 11h.473l-.447 1.342a.5.5 0 1 0 .948.316L7.027 11H7.5v1a.5.5 0 0 0 1 0v-1h.473l.553 1.658a.5.5 0 1 0 .948-.316L10.027 11h.473A1.5 1.5 0 0 0 12 9.5v-2A1.5 1.5 0 0 0 10.5 6h-2zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-5a.5.5 0 0 1-.5-.5v-2z"/>
  <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>

</svg> Trabajar Solicitudes
               </a>

            </li>

          </ul>
          <form class="d-flex" style="background-color: #e9454c;color:white;">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" >
            <button class="btn btn-outline-success" type="submit" style="background-color: #009fe3;color:white;">Search</button>
            <?php
        session_start();
        echo '';
       echo '<a class="navbar-brand" href="#" style="background-color: #e9454c;color:white;margin-left:5%;text-align:center;font-size:8pt;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-badge" viewBox="0 0 16 16">
       <path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
       <path d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0h-7zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492V2.5z"/>
     </svg><br>' . $_SESSION["usuario"] . '</a>';
       ?> 
          </form>
        </div>
      </div>
    </nav>

    <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Solicitudes asignadas</h5>
        <p class="card-text">Trabajar con las muestras y las solicitudes</p>

<?php
require_once('../model/conexion.php');
$con = new conexion();
$con->conectar();
$tabla=$con->extraerSolicitudes(3);
while ($fila=mysqli_fetch_array($tabla)){
    echo "numero solicitud: " . $fila['num_solicitud'] . "<br>";
    echo "tipo solicitud  : " . $fila['tipo_solicitud'] . "<br>";
    echo "tipo solicitante : " . $fila['tipo_solicitante'] . "<br>";
    echo "descripcion : " . $fila['descripcion'] . "<br>";
}
$con->cerrarConexion();
?>


        <a href="#" class="btn btn-primary">Ver solicitudes asignada</a>

        
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">DATOS DE NUESTRA</h5>
        <p class="card-text">INGRESA LOS DATOS PARA CREAr UNA MUESTRA </p>
<!--INGRESO DE DATOS --->

<div class="form-floating mb-3">
  <input type="num" class="form-control " id="cod_muesra" placeholder="name@example.com" name="cod_muestra">
  <label for="floatingInput">Codigo de la muestra</label>
</div>

<div class="form-floating mb-3">
  <input type="text" class="form-control " id="tipo_muesra" placeholder="name@example.com" name="tipo_muestra">
  <label for="floatingInput">Tipo de la muestra</label>
</div>

<div class="form-floating mb-3">
  <input type="num" class="form-control " id="cod_solicitud" placeholder="name@example.com" name="cod_solicitud">
  <label for="floatingInput">Codigo de la solicitud</label>
</div>

<div class="form-floating mb-3">
  <input type="num" class="form-control " id="no_expediente" placeholder="name@example.com" name="no_expediente">
  <label for="floatingInput">Numero Expediente</label>
</div>

<div class="form-floating mb-3">
  <input type="num" class="form-control " id="nit" placeholder="name@example.com" name="nit">
  <label for="floatingInput">Nit</label>
</div>

<div class="form-floating mb-3">
  <input type="text" class="form-control " id="presentacion" placeholder="name@example.com" name="presentacion">
  <label for="floatingInput">Presentacion</label>
</div>

<div class="form-floating mb-3">
  <input type="text" class="form-control " id="us_asignacion" placeholder="name@example.com" name="us_asignacion">
  <label for="floatingInput">Usuario Asignacion</label>
</div>

<div class="form-floating mb-3">
  <input type="text" class="form-control " id="us_creacion" placeholder="name@example.com" name="us_creacion">
  <label for="floatingInput">Usuario Creacion</label>
</div>

<div class="form-floating mb-3">
  <input type="date" class="form-control " id="fech_creacion" placeholder="name@example.com" name="fech_creacion">
  <label for="floatingInput">Fecha Creacion</label>
</div>


<div class="form-floating mb-3">
  <input type="date" class="form-control " id="fech_recepcion" placeholder="name@example.com" name="fech_recepcion">
  <label for="floatingInput">Fecha Recepcion</label>
</div>

<div class="form-floating mb-3">
  <input type="text" class="form-control " id="est_solicitud" placeholder="name@example.com" name="est_solicitud">
  <label for="floatingInput">Estado solicitud</label>
</div>

<div class="form-floating mb-3">
  <input type="num" class="form-control " id="cant_unidades" placeholder="name@example.com" name="cant_unidades">
  <label for="floatingInput">Cantidad de Unidades</label>
</div>

<div class="form-floating mb-3">
  <input type="num" class="form-control " id="Uni_medida" placeholder="name@example.com" name="Uni_medida">
  <label for="floatingInput">Unidad de Medida</label>
</div>

<div class="form-floating mb-3">
  <input type="num" class="form-control " id="cant_items" placeholder="name@example.com" name="cant_items">
  <label for="floatingInput">Cantidad Items</label>
</div>

<div class="form-floating mb-3">
  <input type="num" class="form-control " id="cant_documentos" placeholder="name@example.com" name="cant_documentos">
  <label for="floatingInput">Cantidad de Documentos</label>
</div>

<!--FIND E DATOS --->


        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
</div>


  </body>
</html>