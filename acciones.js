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
document.getElementById("ffr1").style.display="block";
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

    lfiltros.innerHTML= lfiltros.innerHTML + datos +  "<input type='text' value='" + atriburo +"' id='"+ datos +"' name='" + datos + "' required disabled><input type='button' onlclik='cerrar(solicitud)' value='x' class='btn btn-danger'><br>";

    var code= $("#fsolicitud").val();
    var variable_post=document;
    
    $.post("../controller/C_filtros.php",{solicitud:code},function(data){
    $("#pelon").html(data);
    });

    alert ("Resustados de la busqueda");


}

function mosfill(){
    document.getElementById('fillb').style.display="block";;
}

function cerfill(){
    document.getElementById('fillb').style.display="none";
}



function valdpi() { 
    var m = document.getElementById("ndpi").value;
    var expreg = /^[0-9]{13}$/;
    
    if(expreg.test(m))
      alert("el numero de DPI  es CORRECTO"); 
    else 
      alert("el el numero de DPI NO es correcto CONSTA DE 13 DIGITOS "); 
  }
   
  
  
  
  function validacion_Nexpediente() { 
    var m = document.getElementById("Cods").value;
    var expreg = /[\d]{4}[-]([\d]){2}[-][\d]{2}[-][\d]{2}[-][\d]{7}$/;
    
    if(expreg.test(m))
      alert("el codigo de expediente  es correcto"); 
    else 
      alert("el codigo de expediente NO es correcto debe ser en formato estructura 9999-88-77-66-5555555 "); 
  }
   
  
  function validacion_CodSolicitud() { 
    var m = document.getElementById("Codsolicitud").value;
    var expreg = /^[A-Z][A-Z]-\d{4}(0[1-9]|1[012])(0[1-9]|[12][0-9]|3[01]-\d{5})$/;
    
    if(expreg.test(m))
      alert("el codigo de solicitud  es correcto"); 
    else 
    alert("el codigo de solicitud NO es correcto debe ser en formato AA-20171130-99999 "); 
  }
      
  
  
  function ValidacionesNoDM() { 
    var m = document.getElementById("DM").value;
    var expreg = /^[A-Z][A-Z][A-Z][A-Z][A-Z]([A-Z][A-f0-9]{1})[-][\d]{2}[-]([\d]){6}$/;
    
    if(expreg.test(m))
      alert("el codigo de solicitud  es correcto"); 
    else 
    alert("el codigo de solicitud NO es correcto debe ser en formato AAAAABB-99-999999  "); 
  }
      
  
  
  let num=0;
  
  
  function fech(e){
  
  if(num==10 || num==8 || num ==6 || num==2){
  fec.value=fec.value + "-";
  }
  num++;
  if(num>19){
    fec.value="";
    num=0;
  }
    }
  
  
    
  function espe(){
    var m = document.getElementById("fec").value;
    var expreg = /^[A-Z][A-Z]-\d{4}-(0[1-9]|1[012])-(0[1-9]|[12][0-9]|3[01]-\d{5})$/;
    
    if(expreg.test(m))
      alert("el codigo de Etiqueta Muestra  es correcto"); 
    else 
    alert("el codigo de Etiqueta Muestra NO es correcto debe ser en formato AA-2017-11-30-99999 "); 
    }

    function codigoGen(){

      let p1= Math.floor(Math.random() * (9999 - 0000)) + 0000;
      let pa2=Math.floor(Math.random() * (99 - 00)) + 00;
      let pa3=Math.floor(Math.random() * (99 - 00)) + 00;
      let pa4=Math.floor(Math.random() * (99 - 00)) + 00;
      let pa5=Math.floor(Math.random() * (9999999 - 0000000)) + 0000000;
      Cods.value= p1 + "-" + pa2 + "-" + pa3 + "-" + pa4 + "-" + pa5;
    }
  

    function busExp(){
      resexp.style.display="block";
    }  


   function asignarex(x){
      codexp.value= x;
    }