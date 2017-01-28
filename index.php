<!DOCTYPE html>
<html>
<head>
<title>Visor de mapas</title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<style type="text/css">
#contenedor {
  width: 100%;
  height: 100%;
}

#contenido1 {
  float: left;
  width: 50%;
  height: 100%;
}
#contenido1.1 {
  float: left;
  width: 50%;
  height: 15%;
}
#contenido1.2 {
  float: left;
  width: 50%;
  height: 85%;
}
#contenido2 {
  float: left;
   width: 50%;
  height: 100%;
}
#contenido2.1 {
  float: left;
  width: 50%;
  height: 15%;
}
#contenido2.2 {
  float: left;
  width: 50%;
  height: 85%;
}
label {
  font : .9em "typewriter", sans-serif;
}
 .textbox
  {
  border: 1px solid #DBE1EB;
  font-size: 18px;
  font-family: Arial, Verdana;
  padding-left: 7px;
  padding-right: 7px;
  padding-top: 10px;
  padding-bottom: 10px;
  border-radius: 4px;
  -moz-border-radius: 4px;
  -webkit-border-radius: 4px;
  -o-border-radius: 4px;
  background: #FFFFFF;
  background: linear-gradient(left, #FFFFFF, #F7F9FA);
  background: -moz-linear-gradient(left, #FFFFFF, #F7F9FA);
  background: -webkit-linear-gradient(left, #FFFFFF, #F7F9FA);
  background: -o-linear-gradient(left, #FFFFFF, #F7F9FA);
  color: #2E3133;
  }
  
  .textbox:focus
  {
  color: #2E3133;
  border-color: #FBFFAD;
  }
 .button {
 border: none;
 background: #3a7999;
 color: #f2f2f2;
 padding: 10px;
 font-size: 15px;
 border-radius: 5px;
 position: relative;
 box-sizing: border-box;
 transition: all 500ms ease;
}

.button:hover {
 background: rgba(0,0,0,0);
 color: #3a7999;
 box-shadow: inset 0 0 0 3px #3a7999;
}

</style>

   <script>
function enviar() {
var map=$('#mapa').val();

if(map== ""){
  alert("Ingresa una URL");
}else{
document.getElementById('contenido1.2').innerHTML = "<iframe src='"+map+"'width='660' height='580'></iframe>";
}
}

function enviar2() {
var map2=$('#mapa2').val();

if(map2== ""){
  alert("Ingresa una URL");
}else{
document.getElementById('contenido2.2').innerHTML = "<iframe src='"+map2+"'width='660' height='580'></iframe>";
}
}
</script>
</head>
<body>
<div id="contenedor">
  
  <div id="contenido1">
  <div id="contenido1.1">
<center><label>Ingresar URL: </label>
<input type="text" name="mapa" id="mapa" class="textbox" />
<input type="button" id="guardar" name ="guardar" onclick="enviar()" value="Ver mapa" class="button" /></center>
<br/>

  </div>
  <div id="contenido1.2">
    </div>
  </div>


  <div id="contenido2">
  <div id="contenido2.1">
<center><label>Ingresar URL: </label>
<input type="text" name="mapa2" id="mapa2" class="textbox" />
<input type="button" id="guardar" name ="guardar" onclick="enviar2()" value="Ver mapa" class="button" /></center>
<br/>

  </div>
  <div id="contenido2.2">
    
  </div>
  </div>
  </div>

</body>
</html>