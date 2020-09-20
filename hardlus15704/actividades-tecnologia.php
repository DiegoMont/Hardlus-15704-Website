<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hardlus | Actividades Tecnolog&iacute;a</title>
    <link rel="stylesheet" type="text/css" href="css/Reset.css">
    <link rel="stylesheet" type="text/css" href="css/general.css">
    <link rel="stylesheet" type="text/css" href="css/estilo-actividades.css">
    <link rel="icon" type="image/png" href="img/Hardlus-sin-fondo.png">
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-172831007-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-172831007-1');
</script>

  </head>
  <body>

    <nav>
      <?php
      require("php/main-nav.php");
      printNav($indice_actividades);
      ?>
    </nav>
    <div id="espacio-nav"></div>

    <header id="header-amarillo" class="back-img-amarillo">
      <div class="centre">
        <h1>Tecnolog&iacute;a - Technology</h1>
        <p class="parrafo">Technology es una de las &aacute;reas del acr&oacute;nimo STEM que re&uacute;ne las distintas aplicaciones del conocimiento con los tejidos sociales en el mundo en relaci&oacute;n con el ambiente que los envuelve; lidiando con la creaci&oacute;n y uso de medios t&eacute;cnicos para mejorar la calidad de vida general relacionando con un fin compartido las artes industriales, ingenier&iacute;as, ciencias aplicadas y ciencias puras. El objetivo de emplear los recursos tecnol&oacute;gicos como medios formativos consiste en incentivar el inter&eacute;s por la aplicaci&oacute;n de la l&oacute;gica y la innovaci&oacute;n empleando las herramientas con las que contamos actualmente y podr&iacute;amos contar para construir un futuro fortalecido y decidido en sus prop&oacute;sitos.</p>
        <p class="parrafo">Los ejercicios de esta secci&oacute;n est&aacute;n dirigidos a un p&uacute;blico de 13 a 18 a&ntilde;os.</p>
      </div>
    </header>

    <nav class="select-area">
      <?php
      require("php/nav-stem.php");
      printNavStem(1);
      ?>
    </nav>

    <section>
      <div class="centre">
        <p id="cuenta-act"></p>
      </div>
      <div class="centre flexbox">
        <div class="actividad">
          <iframe src="https://drive.google.com/file/d/1ePDLSNsRvKRL-l-9GL8jdevJ-DeI5DTM/preview"></iframe>
          <h6>Pensamiento l&oacute;gico computacional</h6>
        </div>
        <div class="actividad">
          <iframe src="https://drive.google.com/file/d/13Sx9SzG3tyDWxDlcE0QdpwWngBoVeSk2/preview"></iframe>
          <h6>La oveja, el lobo y el repollo</h6>
        </div>
        <div class="actividad">
          <iframe src="https://drive.google.com/file/d/123hTEQKKwHfoYCIm1fCQ4i0KCzfpvglQ/preview"></iframe>
          <h6>Mario Maker</h6>
        </div>
        <div class="actividad">
          <iframe src="https://drive.google.com/file/d/1-ryFJO70gNI8s2rp0PcgowiLpzBKjxND/preview"></iframe>
          <h6>Pseudoc&oacute;digo</h6>
        </div>
      </div>
      <script src="js/interactividad-actividades.js" charset="utf-8"></script>
    </section>

    <footer>
      <?php
      include "php/footer.php";
      ?>
    </footer>
    <script src="js/interactividad.js" charset="utf-8"></script>
  </body>
</html>
