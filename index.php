<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>CiTIM Grupo XB</title>
    <link rel="stylesheet" href="css/problemaStem.css"/>

    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <script src="js/calcularStem.js"></script>
</head>
<body>
  <section class="wrapper">
    <header>
      <h1 class="logo"><a href="stem.html">CiTIM</a></h1>
      
    </header>
    <section id="contenedor">
      <section  class="problema">
        <h2>Problema: Cálcular la  velocidad lineal de un satelite </h2>
        <p>Descripción:</p>
        <p>El radio de la Tierra es 6 378 km y su masa es 5.97E24 kg.    
          
          
          <br>
        </p>
      </section>
      <section  class="esquemaProblema">
        <h2>Esquema</h2>
        <center>
        <img class="imgProblema" src="images/images.png">
        </center>
      </section>
      <section class="formulas">
        <h2>Fórmulas</h2>
         v=w(rtierra+hsatelite)
      </section>
      <section class="datos">
        <h2>Datos:</h2>
          rTierra=200km <br>
    rTierra=6378km<br>
    w= 1.18999 10<sup>-3</sup> rad/s
      </section>
      <section class="calculos">
        <h2>Solución</h2>
        <p>a)La densidad de la Tierra es:<br>
          v=1.18999 ×10<sup>-3</sup>(6378+200)=7.827754220000001 
        <button onclick="calcula_densidad();">Presiona para calcular</button>
      </section> 
      <?php 
      function calcula_densidad(){
        $tierra= 200;
        $radioTierra= 6378;

        $numero=10;

        $v = pow($numero, -3)*1.18999 ; 
    
        
        
       
      $resultadoA=$v*($tierra+$radioTierra);
      return $resultadoA;
       
        
        }
        


      ?>
      <section class="resultado">
        <h2>Resultado:</h2>
        <div id="resultadoA"></div>
        <?php
        print"<h1>reasultado esigual ".calcula_densidad(). "km </h1>"
        ?>
      </section>
    </section>
    <footer class="pie">
     Creative Commons versión 3.0 SciSoft 2023
    </footer>
  </section>
</body>
</html>
