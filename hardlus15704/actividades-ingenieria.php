<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hardlus | Actividades Ingenier&iacute;a</title>
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

    <header id="header-azul" class="back-img-azul">
      <div class="centre">
        <h1>Ingenier&iacute;a - Engineering</h1>
        <p class="parrafo">Engineering es una de las &aacute;reas del acr&oacute;nimo STEM que comprende a la destreza cient&iacute;fica y tecnol&oacute;gica como pilar para la innovaci&oacute;n, invenci&oacute;n desarrollo y mejora de t&eacute;cnicas con la finalidad de satisfacer la necesidad humana del cambio. La curiosidad como motor de la iniciativa de proyectos, en conjunto con la ambiciosa creatividad en b&uacute;squeda de la optimizaci&oacute;n y ahorro, parten del realismo determinante en la organizaci&oacute;n y uso de la l&oacute;gica para trabajar simult&aacute;neamente a favor de nuestra sociedad con escenciales ramas como la ingenier&iacute;a civil, mineral, qu&iacute;mica, mec&aacute;nica, electr&oacute;nica, industrial, sist&eacute;mica, entre otras.</p>
        <p class="parrafo">Los ejercicios de esta secci&oacute;n est&aacute;n dirigidos a un p&uacute;blico de 13 a 18 a&ntilde;os.</p>
      </div>
    </header>

    <nav class="select-area">
      <?php
      require("php/nav-stem.php");
      printNavStem(2);
      ?>
    </nav>

    <section>
      <div class="centre">
        <p id="cuenta-act"></p>
      </div>
      <div class="centre flexbox">
        <div class="actividad">
          <iframe src="https://drive.google.com/file/d/1zYYwLn6xgnMxeld0CUTEzxL8qlczLvHL/preview"></iframe>
          <h6>Crecimiento de plantas en diversas gravedades</h6>
        </div>
        <div class="actividad">
          <iframe src="https://drive.google.com/file/d/1Zt4vdQOw4aSS5mhsU-3oABXGTb9olPPY/preview"></iframe>
          <h6>La teoría de la relatividad</h6>
        </div>
        <div class="actividad">
          <iframe src="https://drive.google.com/file/d/1Nxe1d5sT7vvL8l8WsTJgyO1-_02fmYwX/preview"></iframe>
          <h6>Las propiedades de la luz</h6>
        </div>
        <div class="actividad">
          <iframe src="https://drive.google.com/file/d/15pVrt_XIR_88LZNSNCCvS48aV_8jz1Xq/preview"></iframe>
          <h6>La f&iacute;sica del p&eacute;ndulo</h6>
        </div>
        <div class="actividad">
          <iframe src="https://drive.google.com/file/d/1cSwSzf9mgqC3rSpcfunOvPu0s-aGAnUk/preview"></iframe>
          <h6>Haciendo volar pelotas</h6>
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
