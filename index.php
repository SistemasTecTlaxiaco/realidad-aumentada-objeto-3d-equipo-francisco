<!DOCTYPE html>
<html>  
  <head>
    <!--  en primeras líneas de código estamos llamando a las dos librerías de Aframe y ARJS. --> 
    <script src="https://aframe.io/releases/1.0.4/aframe.min.js"></script> 
    <script src="https://jeromeetienne.github.io/AR.js/aframe/build/aframe-ar.js"></script>
  </head>   
     <!--  En la sección de <body> agregaremos la escena de AR y además iremos incluyendo el archivo de GLb. --> 
  <body>
    <!-- Scene embedded será el lanzador de la realidad aumentada--> 
    <a-scene embedded arjs>
      <a-entity scale=".7 .7 .7"> 
        <a-entity gltf-model="Spid.glb" rotation="0 9 10" crossOrigin="anonymous">
        </a-entity>
        <a-marker-camera preset='hiro'></a-marker-camera>
        </a-scene>
      </body>
    </html>