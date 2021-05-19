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


  <body onload="codigoGen()">
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e9454c;color:white;" >
      <div class="container-fluid" style="background-color: #e9454c;color:white;">

      <?php
        session_start();
       echo '<a class="navbar-brand" href="#" style="background-color: #e9454c;color:white;">' . '</a>';
       ?> 
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background-color:white;color:white;" >
          <span class="navbar-toggler-icon" style="background-color:white;color:white;"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="background-color: #e9454c;color:white;">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="background-color: #e9454c;color:white;">
            
          <li class="nav-item" style="background-color: #e9454c;color:white;">
            
            <a class="btn btn-primary btn-s" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample" style="margin-left:5px;width:160px;margin-top:1px;" >
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-spreadsheet" viewBox="0 0 16 16">
<path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V9H3V2a1 1 0 0 1 1-1h5.5v2zM3 12v-2h2v2H3zm0 1h2v2H4a1 1 0 0 1-1-1v-1zm3 2v-2h3v2H6zm4 0v-2h3v1a1 1 0 0 1-1 1h-2zm3-3h-3v-2h3v2zm-7 0v-2h3v2H6z"/>
</svg> expedientes
             </a>
     </li>

<!--nuevo menu-->

<li class="nav-item dropdown" style="margin-left:5px;width:400px;margin-top:1px;">
          <a class="btn btn-primary btn-s" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Análisis técnico de Muestras medica
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Clasificación</a></li>
            <li><a class="dropdown-item" href="#">Mantenimiento</a></li>
            <li> <a class="dropdown-item" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Mantenimiento de solicitudes</a></li>
          
           
          
          </ul>
        </li>

<!--fin de menu-->







 

           

            <li class="nav-item" style="background-color: #e9454c;color:white;" onclick="mosfill()" >
              <a class="btn btn-primary" data-bs-toggle="offcanvas" href="" role="button" aria-controls="offcanvasExample" style="margin-left:5px;" >
                Mantenimiento Solicitudes
               </a>

            </li>

          </ul>
          <form class="d-flex" style="background-color: #e9454c;color:white;">
           
   
            <?php
        echo '';
       echo '<a class="navbar-brand" href="#" style="background-color: #e9454c;color:white;margin-left:5%;text-align:center;font-size:8pt;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-badge" viewBox="0 0 16 16">
       <path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
       <path d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0h-7zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492V2.5z"/>
     </svg><br>' . $_SESSION["usuario"] . '</a>';
       ?> 

<a href="../index.php"  class="btn btn-outline-success" type="button" style="border:none;background:none;color:white;">
<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-x-square-fill" viewBox="0 0 16 16">
  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708z"/>
</svg>
            </a>
          </form>
        </div>
      </div>
    </nav>


    <!--cuerpo de la pagina-->
    <br>
    <div class="card border-danger mb-3" style="max-width:98%;margin-left:1%;display:none;" id="fillb">
  <div class="card-header">Filtros De Busqueda <input type='button' value='cerrar filltros' class="btn btn-danger" onclick="cerfill()"></div>
  <div class="card-body text-dark">
    <h5 class="card-title">Seleccionar filtros</h5>
    <p class="card-text">las busquedas se realizaran por la filtros seleccionados y que contengan un criterio de busquea no puede quedas vacio </p>

<!--divicion de filtros-->
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <!--filltros de busqueda-->
<div class="card" style="width: 100%">
  <div class="card-header">
  Filtros
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item" id="ff1">
    <div class="input-group">
    <div class="input-group-text" id="btnGroupAddon">Solicitud</div>
    <input type="text" class="form-control" placeholder="0000-00-00-0000000" aria-label="Input group example" aria-describedby="btnGroupAddon" id="fsol"> <a  class="btn btn-primary" onclick="AddFiltros(fsol.value,solicitud,'fsol')">+</a>
  </div>
    </li>
    <li class="list-group-item" id="ff2">
    <div class="input-group">
    <div class="input-group-text" id="btnGroupAddon">Expediente</div>
    <input type="text" class="form-control" placeholder="0000" aria-label="Input group example" aria-describedby="btnGroupAddon" id="fexp"> <a  class="btn btn-primary" onclick="AddFiltros(fexp.value,Expedientes,'fexp')">+</a>
  </div>
    </li>
    <li class="list-group-item" id="ff3">
    <div class="input-group">
    <div class="input-group-text" id="btnGroupAddon">Soporte</div>
    <input type="text" class="form-control" placeholder="0000-00-00-00-000000" aria-label="Input group example" aria-describedby="btnGroupAddon" id="fsop"> <a  class="btn btn-primary" onclick="AddFiltros(fsop.value,soportes,'fsop')">+</a>
  </div>
    </li>
    <li class="list-group-item" id="ff4">
    <div class="input-group">
    <div class="input-group-text" id="btnGroupAddon">Usuario </div>
    <input type="email" class="form-control" placeholder="correo" aria-label="Input group example" aria-describedby="btnGroupAddon" id="fcor"> <a href="#" class="btn btn-primary" onclick="AddFiltros(fcor.value,correos,'fcor')">+</a>
  </div>
    </li>
    
    </li>
    <li class="list-group-item" id="ff5">
    <div class="input-group">
    <div class="input-group-text" id="btnGroupAddon">Fecha incio </div>
    <input type="date" class="form-control" placeholder="correo" aria-label="Input group example" aria-describedby="btnGroupAddon" id="fini"> <a href="#" class="btn btn-primary" onclick="AddFiltros(fini.value,inicio,'fini')">+</a>
  </div>
    </li>
    

    </li>
    <li class="list-group-item" id="ff6">
    <div class="input-group">
    <div class="input-group-text" id="btnGroupAddon">Fecha Fin</div>
    <input type="date" class="form-control" placeholder="correo" aria-label="Input group example" aria-describedby="btnGroupAddon" id="ffin"> <a href="#" class="btn btn-primary" onclick="AddFiltros(ffin.value,fin,'ffin')">+</a>
  </div>
    </li>
    
    </li>
    <li class="list-group-item" id="ff7">
    <div class="input-group">
    <div class="input-group-text" id="btnGroupAddon">Nit</div>
    <input type="text" class="form-control" placeholder="0000000" aria-label="Input group example" aria-describedby="btnGroupAddon" id="fnit"> <a href="#" class="btn btn-primary" onclick="AddFiltros(fnit.value,nits,'fnit')">+</a>
  </div>
    </li>
    
    </li>
    <li class="list-group-item" id="ff8">
    <div class="input-group">
    <div class="input-group-text" id="btnGroupAddon">tipo solicitud</div>
    <select class="form-control"  aria-label="Input group example" aria-describedby="btnGroupAddon" id="ftsol"> 
    <option value="MM">Muestra Medica</option>
    <option value="LQ">Laboratorio</option>
    </select>
    <a  class="btn btn-primary" onclick="AddFiltros(ftsol.value,tisolid,'ftsol')">+</a>
  </div>
    </li>



    <li class="list-group-item" id="ff9">
    <div class="input-group">
    <div class="input-group-text" id="btnGroupAddon">estado solicitud</div>
    <select class="form-control"  aria-label="Input group example" aria-describedby="btnGroupAddon" id="festado"> 
    <option value="1">Creado</option>
    <option value="2">Enviado</option>
    <option value="2">Enviado</option>
    <option value="2">Asignado</option>
    <option value="2">Analisis</option>
    <option value="2">Enviado</option>
    <option value="2">Espera</option>
    <option value="2">Revision</option>
    </select>
    <a href="#" class="btn btn-primary" onclick="AddFiltros(festado.value,estodos,'festado')">+</a>
  </div>
    </li>
  </ul>
</div>
<!--fin filtros de busquda-->
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Filtros agregados para la Busqueda </h5>
        <p class="card-text">los valores se usaran como referencia para la busqueda de solicitudes</p>


 <div class="card text-dark bg-light mb-3" style="max-width: 100%;">
 <form action="../controller/C_filtros.php" method="GET">
  <div class="card-header">Filtros a aplicar</div>
  
  <div class="card-body" id="lfiltros">
 
    <h5 class="card-title">lista de filtros</h5>
   
  </div>
  <input type="submit" value="enviar" class="btn btn-primary">
</form>
</div>
      </div>
    </div>
  </div>
</div>

<!--fin divicion de filtros-->
  </div>
</div>

<!--cuerpo de la pagina-->

<br><br>
<div class="card text-dark bg-light mb-3" style="max-width: 90%;margin-left:5%; box-shadow: 5px 5px 8px #999;">
  <div class="card-header" style="background:#e9454c;color:white;">Mis Solicitudes</div>
  <div class="card-body">
    <h5 class="card-title">Lista de solicitudes</h5>
    <p class="card-text">muestra las solicitudes y su estado actual</p>
    <div class="row row-cols-1 row-cols-md-5 g-4">
<?php
require_once('../controller/C_solicitudes.php');
mostarSolicitud($_SESSION["usuario"]);
?>
</div>

  </div>
</div>

<!--ingreso de modal-->


<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel">MANTENIMIENTO DE SOLICITUDES</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <div>
    Creacion: para crear una solicitud asigne un numero de expediente seleccionando el check.
    </div>

    <div class="dropdown mt-3">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
          OPCIONES DE SOLICITUDES
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <li onclick="most2()"><a class="dropdown-item" href="#" >Crear Socitud</a></li>
          </ul>
<br><br><br>
        </div>


<br><br>
<!--card-->



<div class="card text-dark bg-light mb-3" style="max-width: 90%;display:none;margin-left:5%; box-shadow: 5px 5px 8px #999;" id="sod">
  <div class="card-header" style="background:#e9454c;color:white;"> Solicitud de Muestas</div>
  <div class="card-body">
    <h5 class="card-title">Expedientes Cargados</h5>
    <p class="card-text">lista de expedientes Medicos</p>
<br>
<form action="../controller/C_solicitudes.php" method="POST" id="soliddd">

<input type="button" value="Buscar Expedientes" onclick="busExp()"> 
<br><br>
        <div id="resexp">
       <?php
       require_once('../controller/C_busExp.php');
       ?> 

        </div>
        <div class="mb-4">
                    <label for="exampleFormControlInput3" class="form-label">No. Expedeente Asignado</label>
                    <input type="text" class="form-control"  placeholder=" " required name="nexp" onchange="validacion_CodSolicitud()"  id="codexp" >
    </div>

    <div class="mb-4">
                    <label for="exampleFormControlInput3" class="form-label">Numero Solicitud</label>
                    <input type="text" class="form-control"  placeholder=" "required name="nSolicitud" onchange="validacion_CodSolicitud()"  id="Codsolicitud" >
    </div>

    <div class="mb-5">
                    <label for="exampleFormControlInput2" class="form-label" >Seleccione Tipo Solicitante</label>
                    <select class="form-select" aria-label="Default select example"required name="tSolicitud"  id="tSolicitud"> 
                    <?php
                       require_once('../controller/C_solicitudes.php');
                       extraerTipoUsuario2('IN-Usuario Interno');
                       extraerTipoUsuario2('EX-Usuario Externos');
                       ?>  
                       </select> 
        </div>

        <div class="mb-5">
                    <label for="exampleFormControlInput2" class="form-label">Seleccione Tipo Solicitud</label>
                    <select class="form-select" aria-label="Default select example"required name="tSolicitante" id="tSolicitante"> 
                    <?php
                       require_once('../controller/C_solicitudes.php');
                       extraerTipoUsuario2('SM-Solicitud Medica');
                       extraerTipoUsuario2('ET- Examén');
                       ?>    
                    </select> 
        </div> 


        <div class="mb-6">   
                    <label for="exampleFormControlTextarea2" class="form-label">Descripcion de la Solicitud</label>
                    <textarea class="form-control"  rows="8" required name="dSolicitud" id="dSolicitud"></textarea>
        </div>
      

           
        


  </div>
</div>



      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">SIGUIENTE</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered  modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel2">SOPORTE CONTACTO</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
      
      <div class="card text-dark bg-light mb-3" style="max-width: 90%;margin-left:5%; box-shadow: 5px 5px 8px #999;">
  <div class="card-header">SOPORTE Y CONTACTO</div>
  <div class="card-body">
    <h5 class="card-title">Informacion De contacto </h5>
    <p class="card-text">Esta informacion permite contactar con el usuario cuando una muestara se encuentre analizada.</p>

<!--<form action="../controller/C_suportContac.php" method="POST">-->

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
              <input type="text" class="form-control" placeholder="Ingrese Numero soporte"required name="numsop">             
            </div>

    <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Telefonos</label>
              <input type="text" class="form-control"  placeholder="Ingrese numero de telefono"required name="numtel">
            </div>

            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Correo</label>
              <input type="text" class="form-control"  placeholder="Ingrese correo"required name="correo">
            </div>     

            <input class="btn btn-primary" type="button" value="siguiente" name="sig" onclick="alerta()">
            <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Atras</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
</form>

  </div>
</div>






      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Back to first</button>
      </div>
    </div>
  </div>
</div>


<!--final--->






<div id="pelon"></div>


<a href="https://api.whatsapp.com/send?phone=56965894&text=Solicito,%20informaicon%20bien%20de%2mi%2solicitud%2att:luis">Mensaje</a>
<!-- crear soporte y contacto Douglas Hernandez-->


<!-- crear solicitudes-->

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
       
        <div  id="ffr1" class="card text-dark bg-light mb-3" style="max-width: 98%;margin-left:1%; box-shadow: 5px 5px 8px #999;display:none;">
          <div class="card-header" style="background:#e9454c;color:white;">Datos de Expediente</div>
          <div class="card-body">
<!--integracion divicin-->
<form action="../controller/C_Expedientes.php" method="POST" enctype="multipart/form-data">
<div class="row">
  <div class="col-sm-4">
    <div class="card">
     

    <h5 class="card-title">Datos solicitante</h5>
            <p class="card-text">llene el formulario con la siguiente informacion</p>
            
            <!--Erick Guerra / Edgar Patzan 24/03/2021-->
            <!--formulario de expedientes exter  24/03/2021-->
           
              <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">No. Expediente</label>
              <input type="text" class="form-control"  placeholder="Expediente" name="ex" id="Cods" onchange="validacion_Nexpediente()" >
            </div>

            
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Nombre </label>
              <input type="text" class="form-control"  placeholder="Ingrese Nombre "required name="nombre">
            </div>

            
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Apellido</label>
              <input type="text" class="form-control"  placeholder="Ingrese Apellido" required name="ap">
            </div>

            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Direccion</label>
              <input type="text" class="form-control"  placeholder="Ingrese direccion" required name="dir" >
            </div>

            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">DPI numeracion de 13 digitos</label>
              <input type="text" class="form-control"  placeholder="DPI"required name="dpi" onchange="valdpi()" id="ndpi">
            </div>

<br>

      
      </div>
    </div>

  <div class="col-sm-4">
    <div class="card">
     
   

            
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">NIT no utilizar guiones</label>
              <input type="text" class="form-control"  placeholder="NIT" required name="nit">
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
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required name="des"></textarea  >
            </div>

            <div class="mb-3">
            
              <input type="file" class="form-control"  placeholder="Archivo" name="ar">
            </div>


        
   
    </div>
  </div>

  <div class="col-sm-4">
    <div class="card">

    
            
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
              <input type="text" class="form-control"  required placeholder="Telefono" name="tel" id="tel1" onchange="valteli()">
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
              <br><br>
              <input class="btn btn-primary" type="submit" value="Guardar"><!--esto sirve para para aplicar required-->

    
      </div>
    </div>

</div>



<!--fin integracion-->


            
           
      </form>
           <!--fin de formulario--> 
      
          <div>
        </div>
        </div>
      </div>
    </div>

 <!--inicio solicitudes--> 









  </body>
</html>