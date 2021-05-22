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
    document.getElementById("logotipo").style.top="10%";
    document.getElementById("logotipo").style.left="15%";
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
    document.getElementById("logotipo").style.top="10%";
    document.getElementById("logotipo").style.left="15%";
    document.getElementById("logotipo").style.width="25%";
    document.getElementById("logotipo").style.height="40%";
    }
}

function most(){
document.getElementById("ffr1").style.display="block";
}

function most2(){
  document.getElementById("sod").style.display="block";
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


if(datos=="fsolicitud"){
    var code= $("#fsolicitud").val();
    var variable_post=document;
    
    $.post("../controller/C_filtros.php",{solicitud:code},function(data){
    $("#pelon").html(data);
    });
}

if(datos=="fexpediente"){
var code= $("#fexpediente").val();
var variable_post=document;

$.post("../controller/C_filtros.php",{expediente:code},function(data){
$("#pelon").html(data);
});

}


if(datos=="fsoporte"){
  var code= $("#fsoporte").val();
  var variable_post=document;
  
  $.post("../controller/C_filtros.php",{soporte:code},function(data){
  $("#pelon").html(data);
  });
  
  }


  if(datos=="fcorreo"){
    var code= $("#fcorreo").val();
    var variable_post=document;
    
    $.post("../controller/C_filtros.php",{correo:code},function(data){
    $("#pelon").html(data);
    });
    
    }




}






//busqueda por expedientes


function mosfill(){
    document.getElementById('fillb').style.display="block";;
}

function cerfill(){
    document.getElementById('fillb').style.display="none";
}



function valdpi(){ 
    var m = document.getElementById("ndpi").value;
    var expreg = /^[0-9]{13}$/;
    
    if(expreg.test(m)){
     
    }
    else{ 
      alert("el el numero de DPI NO es correcto CONSTA DE 13 DIGITOS "); 
      document.getElementById("ndpi").value="";
  }
} 
  
  function valteli(){ 
    var m = document.getElementById("tel1").value;
    var expreg = /^[0-9]{8}$/;
    
    if(expreg.test(m)){
  
    }
    else {
      tel1.value="";
   
    }
    
  }
  
  
  function validacion_Nexpediente() { 
    var m = document.getElementById("Cods").value;
    var expreg = /[\d]{4}[-]([\d]){2}[-][\d]{2}[-][\d]{2}[-][\d]{7}$/;
    
    if(expreg.test(m)){

    }
     
    else {
      codigoGen();
    }
    }
   
  
  function validacion_CodSolicitud() { 
    var m = document.getElementById("Codsolicitud").value;
    var expreg = /^[A-Z][A-Z]-\d{4}(0[1-9]|1[012])(0[1-9]|[12][0-9]|3[01]-\d{5})$/;
    
    if(expreg.test(m)){

    }
    else {
    alert("el codigo de solicitud NO es correcto debe ser en formato AA-20171130-99999 "); 
    document.getElementById("Codsolicitud").value="";
  }
  }
      
  
  
  function ValidacionesNoDM() { 
    var m = document.getElementById("cod_muesra").value;
    var expreg = /^[A-Z][A-Z][A-Z][A-Z][A-Z]([A-Z][A-f0-9]{1})[-][\d]{2}[-]([\d]){6}$/;
    
    if(expreg.test(m)){

    }
     
    else {
    alert("el codigo de solicitud NO es correcto debe ser en formato AAAAABB-99-999999");
    document.getElementById("DM").value=""; 
  }
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

        //segundo codigo solicitud
      
      let so1=Math.floor(Math.random() * (99999999 - 00000000)) + 00000000;
      let so2=Math.floor(Math.random() * (99999 - 00000)) + 00000;
      let cod3=Math.floor(Math.random() * (90 - 65)) + 65;
      let cod4=Math.floor(Math.random() * (90 - 65)) + 65;
    let letra1= String.fromCharCode(cod3);
    let letra2= String.fromCharCode(cod4);
    Codsolicitud.value=letra1 + letra2 + "-" + so1 + "-" + so2;
//codigo de dm
let dm1= String.fromCharCode(Math.floor(Math.random() * (90 - 65)) + 65);
let dm2= String.fromCharCode(Math.floor(Math.random() * (90 - 65)) + 65);
let dm3= String.fromCharCode(Math.floor(Math.random() * (90 - 65)) + 65);
let dm4= String.fromCharCode(Math.floor(Math.random() * (90 - 65)) + 65);
let dm5= String.fromCharCode(Math.floor(Math.random() * (90 - 65)) + 65);

let dml1= String.fromCharCode(Math.floor(Math.random() * (90 - 65)) + 65);
let dml2= String.fromCharCode(Math.floor(Math.random() * (90 - 65)) + 65);
let dmn1=Math.floor(Math.random() * (9 - 0)) + 0;
let dmn2=Math.floor(Math.random() * (9 - 0)) + 0;

let dmn3=Math.floor(Math.random() * (9 - 0)) + 0;
let dmn4=Math.floor(Math.random() * (9 - 0)) + 0;
let dmn5=Math.floor(Math.random() * (9 - 0)) + 0;
let dmn6=Math.floor(Math.random() * (9 - 0)) + 0;
let dmn7=Math.floor(Math.random() * (9 - 0)) + 0;
let dmn8=Math.floor(Math.random() * (9 - 0)) + 0;

let numds= dm1+ dm2+dm3+dm4+dm5+ dml1 + dml2+ "-" + dmn1 + dmn2 + "-" + dmn3+ dmn4+dmn5+dmn6+dmn7+dmn8;
document.getElementById('cod_muesra').value=numds;

    }

    

    function asociar(){
      var code= $("#ex1").val();
      $.post("../controller/c_asigmuestra.php",{olid:code},function(data){
      $("#sodt").html(data);
      });

    
    }

    function busExp(){
      resexp.style.display="block";
    }  


   function asignarex(x){
      codexp.value="" + x + "";
    }

    function assolid(solid,x2,x3,x4,x5,x6,x7,x8)
    {
      alert('Datas trasladados para muestra');
      document.getElementById('cod_muesra2').value=solid;
      document.getElementById('tipo_sol').value=x2;
      document.getElementById('no_expediente').value=x3;
      document.getElementById('numnitt').value=x4;
      document.getElementById('us_asignacion').value=x5;
      document.getElementById('us_creacion').value=x6;
      document.getElementById('fech_creacion').value=x7;
      document.getElementById('est_solicitud').value=x8;
    }


    function assolid2(solid)
    {
      alert('Datas trasladados para muestra');
      document.getElementById('cod_muesra2').value=solid;
    }

    function muet(){
      let p1= Math.floor(Math.random() * (9999999 - 0000000)) + 0000000;
      document.getElementById('cod_muesra2').value=p1;
      
    }

    function chat(){
  //    Analista:<a href="https://api.whatsapp.com/send?phone=502' . $fila2['telefono'] . '&text=Solicito,%20informaicon%20bien%20de%20mi%20solicitud%20att:luis" target="_blank">Contacar analista</a>'


  document.location.href='https://api.whatsapp.com/send?phone=502' + document.getElementById('us_creacion').value  + 'text=' + 'diagnoExpese%20tu%20solictud%20fue%20creado%20consulta%20en%20en%20la%20url%20el%20codigo%20' + document.getElementById('cod_muesra').value + ' target="_blank">Contacar analista</a>';
    
    }

    function alerta()
    {
    var mensaje;
    var opcion = confirm("Desea Crea la solicitud ");
    if (opcion == true) {
        mensaje =  codexp.value;
        alert("No. solicitud " + mensaje);
        document.getElementById('soliddd').submit();
	} else {
	    mensaje = "Cancelado";
      alert(mensaje);
	}

}



function limpiar(){
resu.innerHTML="";
lfiltros.innerHTML="";
document.getElementById('ff1').style.display="block";
document.getElementById('ff2').style.display="block";
document.getElementById('ff3').style.display="block";
document.getElementById('ff4').style.display="block";
document.getElementById('ff5').style.display="block";
document.getElementById('ff6').style.display="block";
document.getElementById('ff7').style.display="block";
document.getElementById('ff8').style.display="block";
document.getElementById('ff9').style.display="block";
alert('Filtos Eliminados');
}


function Exportar(){
  var code= $("#ex1").val();
  var expd= $("#ex2").val();
  var nuSopor=$("#ex3").val();
  var tipsoli=$("#ex4").val();
  var estad=$("#ex5").val();
  var nits=$("#ex6").val();
  var cor=$("#ex7").val();
  var finic=$("#ex8").val();
  var variable_post=document;
  
  $.post("../controller/exportar.php",{solicitud:code,expediente:expd,nsoporte:nuSopor,tiposolicitud:tipsoli,sestado:estad,nit:nits,correo:cor,finicio:finic},function(data){
  $("#ports").html(data);
  });
}

function eliminar(){

  var mensaje;
  var opcion = confirm("Desea Eliminar la solicitud ");
  if (opcion == true) {
  
    var code = $("#ex1").val();
    $.post("../controller/C_estado.php",{nsoliciutd:code},function(data){
      $("#ports").html(data);
      });
      alert("soliciud " + code + "eliminado");
      document.location.href="../view/V_usu_internos.php"
} else {
    mensaje = "Se a cancelado la eliminacion";
    alert(mensaje);
}


}