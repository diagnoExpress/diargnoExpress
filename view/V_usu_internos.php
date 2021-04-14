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

      <?php
        session_start();
       echo '<a class="navbar-brand" href="#" style="background-color: #e9454c;color:white;">' . $_SESSION["usuario"] . '</a>';
       ?> 
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background-color:white;color:white;" >
          <span class="navbar-toggler-icon" style="background-color:white;color:white;"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="background-color: #e9454c;color:white;">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="background-color: #e9454c;color:white;">
            
            <li class="nav-item" style="background-color: #e9454c;color:white;">
              <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample" style="margin-left:5px;" >
                expedientes
               </a>
       
               <li class="nav-item" style="background-color: #e9454c;color:white;">
              <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample1" role="button" aria-controls="offcanvasExample" style="margin-left:5px;">
                Solicitudes
               </a>
            </li>
            <li class="nav-item" style="background-color: #e9454c;color:white;">
              <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample2" role="button" aria-controls="offcanvasExample" style="margin-left:5px;" >
                Soporte Contacto
               </a>

            </li>

            <li class="nav-item" style="background-color: #e9454c;color:white;" onclick="mosfill()" >
              <a class="btn btn-primary" data-bs-toggle="offcanvas" href="" role="button" aria-controls="offcanvasExample" style="margin-left:5px;" >
                Mantenimiento Solicitudes
               </a>

            </li>

          </ul>
          <form class="d-flex" style="background-color: #e9454c;color:white;">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" >
            <button class="btn btn-outline-success" type="submit" style="background-color: #009fe3;color:white;">Search</button>
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
  <div class="card-header">Filtros a aplicar</div>
  <div class="card-body" id="lfiltros">
  <form action="../controller/C_filtros.php" method="POST">
    <h5 class="card-title">lista de filtros</h5>
   
  </div>
  <input type="submit" value="enviar" class="btn btn-primary">
</form>
</div>
        
        
        
        <a href="#" class="btn btn-primary">buscar</a>
      </div>
    </div>
  </div>
</div>

<!--fin divicion de filtros-->
  </div>
</div>

<!--cuerpo de la pagina-->


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
                    <input type="text" class="form-control" id="exampleFormControlInput3" placeholder=" "required name="nSolicitud">
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
        <div class="card text-white bg-danger mb-3" style="max-width: 100%;display:none;background-color: #e9454c;" id="ff1">
          <div class="card-header">Datos de Expediente</div>
          <div class="card-body">
            <h5 class="card-title">Datos solicitante</h5>
            <p class="card-text">llene el formulario con la siguiente informacion</p>
            
            <!--Erick Guerra / Edgar Patzan 24/03/2021-->
            <!--formulario de expedientes exter  24/03/2021-->
            <form action="../controller/C_Expedientes.php" method="POST" enctype="multipart/form-data">
              <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">No. Expediente</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Expediente" name="ex">
            </div>

            
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Nombre </label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese Nombre "required name="nombre">
            </div>

            
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Apellido</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese Apellido" name="ap">
            </div>

            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Direccion</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese direccion" required name="dir" >
            </div>


            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">DPI numeracion de 13 digitos</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="DPI"required name="dpi">
            </div>

            
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">NIT no utilizar guiones</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="NIT" name="nit">
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
              <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="Fecha"required name="fec">
            </div>
            
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Diagnostico</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder=" "required name="diag">
            </div>
            
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Descripcion de diagnostico</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required name="des"></textarea  >
            </div>

            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Archivo</label>
              <input type="file" class="form-control" id="exampleFormControlInput1" placeholder="Archivo" name="ar">
            </div>
            
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Enfermedad</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enfermedad"required name="enf">
            </div>
            
            <div class="mb-4">
              <label for="exampleFormControlInput1" class="form-label">Nombre Doctor</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Doctor"required name="doctor">
            </div>
            
            <div class="mb-4">
              <label for="exampleFormControlInput1" class="form-label">Clinica Referida</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Clinica"required name="clinic">
            </div>
            
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Numero de Telefonos</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Telefono" name="tel">
            </div>
            
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Email</label>
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Correo"required name="cor">
            </div>
            
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Codigo usuario</label>
              <?php             
              echo '<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Codigo"required name="cod" value="'. $_SESSION["id_usuario"]  . '">';
            ?>
              </div>
              <input type="submit" value="registra"><!--esto sirve para para aplicar required-->

      </form>
           <!--fin de formulario--> 
      
          <div>
        </div>
        </div>
      </div>
    </div>



  </body>
</html>