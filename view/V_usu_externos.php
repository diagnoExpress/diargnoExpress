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


  <body onload="codigoGen()>
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
</svg> expedientes
               </a>
       
               <li class="nav-item" style="background-color: #e9454c;color:white;">
              <a class="btn btn-primary btn-s" data-bs-toggle="offcanvas" href="#offcanvasExample1" role="button" aria-controls="offcanvasExample" style="margin-left:5px;width:160px;margin-top:1px;">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-easel" viewBox="0 0 16 16">
  <path d="M8.5 6a.5.5 0 1 0-1 0h-2A1.5 1.5 0 0 0 4 7.5v2A1.5 1.5 0 0 0 5.5 11h.473l-.447 1.342a.5.5 0 1 0 .948.316L7.027 11H7.5v1a.5.5 0 0 0 1 0v-1h.473l.553 1.658a.5.5 0 1 0 .948-.316L10.027 11h.473A1.5 1.5 0 0 0 12 9.5v-2A1.5 1.5 0 0 0 10.5 6h-2zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-5a.5.5 0 0 1-.5-.5v-2z"/>
  <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
</svg> Solicitudes
               </a>
            </li>
            <li class="nav-item" style="background-color: #e9454c;color:white;">
              <a class="btn btn-primary btn-s" data-bs-toggle="offcanvas" href="#offcanvasExample2" role="button" aria-controls="offcanvasExample" style="margin-left:5px;width:160px;margin-top:1px;" >
              
                Soporte Contacto
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

<!-- crear soporte y contacto Douglas Hernandez-->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample2" aria-labelledby="offcanvasExampleLabel" style="width:100%;">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel">SOPORTE Y CONTACTO</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <!-- INICIO DE CARD-->
  <div class="card text-white bg-primary mb-3" style="max-width: 95%;">
  <div class="card-header">SOPORTE Y CONTACTO</div>
  <div class="card-body">
    <h5 class="card-title">Primary card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

<form action="../controller/C_suportContac.php" method="POST">

    <div class="mb-3">
                    <label for="exampleFormControlInput3" class="form-label">FP-Factura</label>
                    <label for="exampleFormControlInput3" class="form-label">HO-Hoja de Oficio</label>
                    <select class="form-select" aria-label="Default select example"required name="solMed">
                    
                    <option value = "FP-Factura">Factura</option> 
                    <option value = "HO-Hoja de Oficio">Hoja de Oficio</option>
                    </select>
                    
    </div>

    <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Ingrese Numero de Soporte</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese Numero soporte"required name="numsop">             
            </div>

    <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Telefonos</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese numero de telefono"required name="numtel">
            </div>

            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Correo</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese correo"required name="correo">
            </div>     

            <input type="submit" value="siguiente" name="sig">
            <input type="button" value="cancelar">
            <input type="button" value="Atras"><br>

</form>

  </div>
</div>



  <!-- FIN DE CARD-->
  </div>
  
<!--fin soporte --->











<!-- crear solicitudes-->

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample1" aria-labelledby="offcanvasExampleLabel" style="width:100%;">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel">SOLICITUDES</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div>
    Creacion, Consulta de solicitudes
    </div>
    <div class="dropdown mt-3">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
       Menu Solicitudes
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <li><a class="dropdown-item" href="#">Crear Solicitud</a></li>
              <li><a class="dropdown-item" href="#">Consulta Solicitud</a></li>
              <li><a class="dropdown-item" href="#">Ingreso ??</a></li>
      </ul>
    </div>
<br><br>
<!--card-->



<div class="card text-white bg-primary mb-3" style="max-width: 95%;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h5 class="card-title">Primary card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

<form action="../controller/C_solicitudes.php" method="POST">

<input type="button" value="buscar expediene" onclick="busExp()"> 
        <div id="resexp">
       <?php
       require_once('../controller/C_busExp.php');
       ?> 

        </div>


    <div class="mb-4">
                    <label for="exampleFormControlInput3" class="form-label">Numero Solicitud</label>
                    <input type="text" class="form-control" id="exampleFormControlInput3" placeholder=" " required name="nSolicitud" onchange="validacion_CodSolicitud()">
    </div>

    <div class="mb-5">
                    <label for="exampleFormControlInput2" class="form-label">Seleccione Tipo Solicitante</label>
                    <select class="form-select" aria-label="Default select example"required name="tSolicitud"> 
                    <?php
                       require_once('../controller/C_solicitudes.php');
                       extraerTipoUsuario('tipo_solicitante');
                       ?>  
                       </select> 
        </div>

        <div class="mb-5">
                    <label for="exampleFormControlInput2" class="form-label">Seleccione Tipo Solicitud</label>
                    <select class="form-select" aria-label="Default select example"required name="tSolicitante"> 
                    <?php
                       require_once('../controller/C_solicitudes.php');
                       extraerTipoUsuario('tipo_solicitud');
                       ?>    
                    </select> 
        </div> 


        <div class="mb-6">   
                    <label for="exampleFormControlTextarea2" class="form-label">Descripcion de la Solicitud</label>
                    <textarea class="form-control" id="exampleFormControlTextarea2" rows="8" required name="dSolicitud"></textarea>
        </div>
      

            <input type="submit" value="siguiente" name="sig">
            <input type="button" value="cancelar"><br>

</form>

  </div>
</div>
<!--fin card-->


  </div>
</div>

<!-- crear solicitudes-->
    
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel" style="width:100%;">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Expediente Medico del usuario</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <div>
         Manejo de Solicitudes: Espedientes sobre su caso medico y su informaicon general<br>
         acciones:
        </div>
        <div class="dropdown mt-3">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
            Operaciones con Expedientes
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <li onclick="most()"><a class="dropdown-item" href="#" >Crear Expedientes</a></li>
          </ul>
<br><br><br>
        </div>
        <div class="card text-white bg-danger mb-3" style="max-width: 100%;display:none;background-color: #e9454c;" id="ffr1">
          <div class="card-header">Datos de Expediente</div>
          <div class="card-body">
            <h5 class="card-title">Datos solicitante</h5>
            <p class="card-text">llene el formulario con la siguiente informacion</p>
            
            <!--Erick Guerra / Edgar Patzan 24/03/2021-->
            <!--formulario de expedientes exter  24/03/2021-->
            <form action="../controller/C_Expedientes.php" method="POST" enctype="multipart/form-data">
              <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">No. Expediente</label>
              <input type="text" class="form-control"  placeholder="Expediente" name="ex"  onchange="validacion_Nexpediente() disabled">
            </div>

            
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Nombre </label>
              <input type="text" class="form-control"  placeholder="Ingrese Nombre "required name="nombre">
            </div>

            
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Apellido</label>
              <input type="text" class="form-control"  placeholder="Ingrese Apellido" name="ap">
            </div>

            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Direccion</label>
              <input type="text" class="form-control"  placeholder="Ingrese direccion" required name="dir" >
            </div>


            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">DPI numeracion de 13 digitos</label>
              <input type="text" class="form-control"  placeholder="DPI"required name="dpi">
            </div>

            
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">NIT no utilizar guiones</label>
              <input type="text" class="form-control"  placeholder="NIT" name="nit">
            </div>

            
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Seleccione el Departamento</label>
              <!-- esto sireve para agregar el tipo de estilo -->
              <select class="form-select" aria-label="Default select example"required name="dep"> 
                <option value = "Guatemala">Guatemala</option>
                <option value = "Guatemala">Alta Verapaz </option>
                <option value = "Guatemala">Baja Verapaz</option>
                <option value = "Guatemala">Chimaltenango</option>
                <option value = "Guatemala">Chiquimula</option>
                <option value = "Guatemala">El Progreso</option>
                <option value = "Guatemala">Escuintla</option>
                <option value = "Guatemala">Huehuetenango</option>
                <option value = "Guatemala">Izabal</option>
                <option value = "Guatemala">Jalapa</option>
                <option value = "Guatemala">Jutiapa</option>
                <option value = "Guatemala">Peten</option>
                <option value = "Guatemala">Quetzaltengo</option>
                <option value = "Guatemala">Quiche</option>
                <option value = "Guatemala">Retalhuleu</option>
                <option value = "Guatemala">Sacatepequez</option>
                <option value = "Guatemala">San Marcos</option>
                <option value = "Guatemala">Santa Rosa</option>
                <option value = "Guatemala">Solola</option>
                <option value = "Guatemala">Suchitepequez</option>
                <option value = "Guatemala">Totonicapan</option>
                <option value = "Guatemala">Zacapa</option>

               </select> 
              </div>

            
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Fecha de creacion  </label>
              <input type="date" class="form-control"  placeholder="Fecha"required name="fec">
            </div>
            
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Diagnostico</label>
              <input type="text" class="form-control"  placeholder=" "required name="diag">
            </div>
            
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Descripcion de diagnostico</label>
              <textarea class="form-control"  rows="3" required name="des"></textarea  >
            </div>

            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Archivo</label>
              <input type="file" class="form-control"  placeholder="Archivo" name="ar">
            </div>
            
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Enfermedad</label>
              <input type="text" class="form-control"  placeholder="Enfermedad"required name="enf">
            </div>
            
            <div class="mb-4">
              <label for="exampleFormControlInput1" class="form-label">Nombre Doctor</label>
              <input type="text" class="form-control"  placeholder="Doctor"required name="doctor">
            </div>
            
            <div class="mb-4">
              <label for="exampleFormControlInput1" class="form-label">Clinica Referida</label>
              <input type="text" class="form-control"  placeholder="Clinica"required name="clinic">
            </div>
            
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Numero de Telefonos</label>
              <input type="text" class="form-control" placeholder="Telefono" name="tel">
            </div>
            
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Email</label>
              <input type="email" class="form-control"  placeholder="Correo"required name="cor">
            </div>
            
            <div class="mb-3" style="display:none;">
              <label for="exampleFormControlInput1" class="form-label">Codigo usuario</label>
              <?php             
              echo '<input type="text" class="form-control"  placeholder="Codigo"required name="cod" value="'. $_SESSION["id_usuario"]  . '">';
            ?>
              </div>
              <input type="submit" value="Crear Solicitud"><!--esto sirve para para aplicar required-->

      </form>
           <!--fin de formulario--> 
      
          <div>
        </div>
        </div>
      </div>
    </div>
  </body>
</html>