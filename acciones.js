const solicitud="fsolicitud";
const Expedientes="fexpediente";
let soportes="fsoporte";
let correos="fcorreo";
let inicio="finicio";
let fin="finfecha";
let nits="fnit";
let tisolid="ftiposolicitud";
let estodos="fstados";
function mensaje(){

    /*
    Edgar Patzan  24/03/2021
    creacion de regla de confirmacion de claves iguales 
    */
    let a = document.getElementById("cave1").value;
    let b = document.getElementById("clave2").value;
   
     if(a==b){
      
   } else{
       document.getElementById("cave1").value="";
       document.getElementById("clave2").value="";
       alert("las claves no coinciden");
   }
    
      
    }
       
    /*
    ""luis fuetnes 25/08/2021
    funcionabilidad de animacion solo en modo Destop
    
    */
function registro(){
    document.getElementById("solicitud").style.display="block";
    document.getElementById("log").style.display="none";
    if (screen.height>700){
    document.getElementById("contenedor").style.backgroundImage='url("./imagenes/fondo2.png")';
    document.getElementById("logotipo").style.top="46%";
    document.getElementById("logotipo").style.left="61%";
    document.getElementById("logotipo").style.transitionDuration="2s";

}
}
  /*
    luis fuetnes 25/08/2021
    funcionabilidad de animacion solo en modo Destop  para resto
    
    */
function logg(){
    document.getElementById("solicitud").style.display="none";
    document.getElementById("log").style.display="block";
    if (screen.height>700){
    document.getElementById("contenedor").style.backgroundImage='url("./imagenes/fondo.png")';
    document.getElementById("logotipo").style.top="38%";
    document.getElementById("logotipo").style.left="10%";
    document.getElementById("logotipo").style.width="25%";
    document.getElementById("logotipo").style.height="40%";
    }
}

function most(){
document.getElementById("ff1").style.display="block";
}

function verimg(archivo){
document.getElementById("radiod").style.display="block";
document.getElementById("pit").src="../archivos/" + archivo;
}

function cer(){
    document.getElementById("radiod").style.display="none";
    document.getElementById("pit").src="..";
}


function AddFiltros(atriburo,datos,ff){
    if(ff=="fsol"){
        document.getElementById('ff1').style.display="none";
    }
    if(ff=="fexp"){
        document.getElementById('ff2').style.display="none";
    }
    if(ff=="fsop"){
        document.getElementById('ff3').style.display="none";
    }

    if(ff=="fcor"){
        document.getElementById('ff4').style.display="none";
    }

    if(ff=="fini"){
        document.getElementById('ff5').style.display="none";
    }
    if(ff=="ffin"){
        document.getElementById('ff6').style.display="none";
    }

    if(ff=="fnit"){
        document.getElementById('ff7').style.display="none";
    }
    if(ff=="ftsol"){
        document.getElementById('ff8').style.display="none";
    }

    if(ff=="festado"){
        document.getElementById('ff9').style.display="none";
    }

    lfiltros.innerHTML= lfiltros.innerHTML + datos+  "<input type='text' value='" + atriburo +"' id='"+ datos +"' required disabled><input type='button' onlclik='cerrar(solicitud)' value='x' class='btn btn-danger'><br>";
}

function mosfill(){
    document.getElementById('fillb').style.display="block";;
}

function cerfill(){
    document.getElementById('fillb').style.display="none";
}