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
    luis fuetnes 25/08/2021
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

function busExp(){
    alert('etracions');
 
}