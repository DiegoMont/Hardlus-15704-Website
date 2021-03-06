<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hardlus | Actividades Ciencia</title>
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

    <header id="header-verde" class="back-img-verde">
      <div class="centre">
        <h1>Ciencia - Science</h1>
        <p class="parrafo">Science es una de las &aacute;reas del acr&oacute;nimo STEM que retrata los grandes hallazgos que han sido producto de la innata curiosidad del ser humano; en constante b&uacute;squeda del descubrimiento emp&iacute;rico. Sus ramas, formales, aplicadas, naturales y sociales trabajan en conjunto para estructurar los complejos significados que surgen de la duda y el escepticismo ante lo conocido. Por esta raz&oacute;n, es indispensable dedicarle toda una secci&oacute;n a su exploraci&oacute;n y entendimiento; viendo por la integraci&oacute;n de mentes potenciales en la elaboraci&oacute;n de creativas respuestas para los misterios m&aacute;s profundos.</p>
        <p class="parrafo">Acomp&aacute;&ntilde;anos.</p>
        <p class="parrafo">Los ejercicios de esta secci&oacute;n est&aacute;n dirigidos a un p&uacute;blico de 7 a 12 a&ntilde;os.</p>
      </div>
    </header>

    <nav class="select-area">
      <?php
      require("php/nav-stem.php");
      printNavStem(0);
      ?>
    </nav>

    <section>
      <div class="centre">
        <p id="cuenta-act"></p>
      </div>
      <div class="centre flexbox">
        <div class="actividad">
          <iframe src="https://drive.google.com/file/d/1i5THP2ziVW5LGLx6i8PEw_jjxZoowOwk/preview"></iframe>
          <h6>Experimento: ¿Inmune al fuego?</h6>
        </div>
        <div class="actividad">
          <iframe src="https://drive.google.com/file/d/1PUmlih6sLzPYPfNKfi1vckpGZ8AJS9pV/preview"></iframe>
          <h6>Teor&iacute;a y pr&aacute;ctica: Gen&eacute;tica, Mendel y sus efectos</h6>
        </div>
        <div class="actividad">
          <iframe src="https://drive.google.com/file/d/1jFBBxxIFR9et9yJSc2jq-D9SWAXtNzYz/preview"></iframe>
          <h6>Cubitos de hielo fuera</h6>
        </div>
        <div class="actividad">
          <iframe src="https://drive.google.com/file/d/1AKNbBEwjKKSggzhiyNiul-ocMdNIb6CY/preview"></iframe>
          <h6>Experimento: Hierro en el cereal</h6>
        </div>
        <div class="actividad">
          <iframe src="https://drive.google.com/file/d/19AdjFO5UNd81PRSemIUZTWuJaj07dsK7/preview"></iframe>
          <h6>Botella de agua comestible</h6>
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
