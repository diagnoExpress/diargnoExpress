<!DOCTYPE html>
<html>
    <head>
        <title>
            DiagnoExpress
        </title>
<link rel="stylesheet" type="text/css" href="tema.css">
<link rel="apple-touch-icon" href="logo.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="logo.png">
<link rel="apple-touch-startup-image" href="logo.png">
<meta name="apple-mobile-web-app-status-bar-style" content="black">

<link rel="icon" type="image/png" href="logo.png" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="mobile-web-app-capable" content="yes">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<script src="acciones.js"></script>
    </head>
    <body>
       
<div id="contenedor">
    <div id="gota1"></div>
    <div id="gota2"></div>
    <div id="gota3"></div>
    <div id="nav">
        <input type="button" value="Login" class="bt2"  onclick="logg()"> <input type="button" value="Registro" class="bt2" onclick="registro()" >
    </div>
        <div id="logotipo">
        </div>
        <h1 id="tit">DiagnoExpress</h1>
        <form id="log" action="./controller/C_login.php" method="POST">
        <br><br><br>
            <input type="email" placeholder="Usuario" class="cajatxt" name="us"><br><br>
            <input type="password" placeholder="Clave" class="cajatxt" name="cla" required><br><br>
            <input type="submit" value="Ingresar" class="bt" name="f1"><br>
        </form>

<form id="solicitud" action="./controller/C_login.php" method="POST">

<input type="text" placeholder="usuario" class="cajatxt" name="user"><br><br>
<input type="password" placeholder="clave" class="cajatxt" name="cla" id="cave1" required><br><br>
<input type="password" placeholder="confirmar clave" class="cajatxt" name="cla2" onchange="mensaje()" id="clave2" required><br><br>
<input type="text" placeholder="Direccion" class="cajatxt" name="dir"><br><br>
<input type="submit" value="Enviar Soliciud" class="bt" name="f2"><br><br>
</form>




    </div>
    </body>
</html>