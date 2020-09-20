<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hardlus | Actividades Arte</title>
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

    <header id="header-arte" class="back-img-arte">
      <div class="centre">
        <h1>Arte</h1>
        <!--<p class="parrafo"></p>
        <p class="parrafo">Los ejercicios de esta secci&oacute;n est&aacute;n dirigidos a un p&uacute;blico de 13 a 18 a&ntilde;os.</p>-->
      </div>
    </header>

    <nav class="select-area">}
      <?php
      require("php/nav-stem.php");
      printNavStem(5);
      ?>
    </nav>

    <section id="ganador-concurso">
      <div class="centre">
        <img src="img/ganador-arte.jpeg" alt="Imagen ganadora del concurso" id="imagen-ganadora">

        <a href="foto-ganadora.html" target="_blank" class="btn"><img src="img/acercarse.svg" alt="Lupa"></a>
      </div>
    </section>

    <section id="video">
      <div class="centre flexbox">
        <iframe src="https://www.youtube.com/embed/V6IFfJF5YpE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen id="video-origami"></iframe>
        <script type="text/javascript">
          const VIDEO_ORIGAMI_ID = 'video-origami';
          function setVideoSize(videoId) {
            const iframeVideo = document.getElementById(videoId);
            const videoWidth  = iframeVideo.offsetWidth;
            //console.log("El width de " + videoId + " es: " + videoWidth);
            let alturaIframeVideo = videoWidth*9/16;
            //console.log("La altura debe ser de: " + alturaIframeVideo);
            iframeVideo.style.height = alturaIframeVideo + "px";
          }
          setVideoSize(VIDEO_ORIGAMI_ID);
          window.addEventListener('resize', function(){
            setVideoSize(VIDEO_ORIGAMI_ID);
          });
        </script>
      </div>
    </section>

    <!--<section>
      <div class="centre">
        <p id="cuenta-act"></p>
      </div>
      <div class="centre flexbox">
        <div class="actividad">
          <iframe src="https://drive.google.com/file/d/1vNtRQpwR1qhTglXsB8Etd-oHioQKaXOz/preview"></iframe>
          <h6>El abono y m&aacute;s</h6>
        </div>
        <div class="actividad">
          <iframe src="https://drive.google.com/file/d/1FeGHWIflX2Dxpt1I9dQ9KkjDTkgIORB1/preview"></iframe>
          <h6>La reproducci&oacute;n de las plantas</h6>
        </div>

      </div>
      <script src="js/interactividad-actividades.js" charset="utf-8"></script>
    </section>-->

    <footer>
      <?php
      include "php/footer.php";
      ?>
    </footer>
    <script src="js/interactividad.js" charset="utf-8"></script>
  </body>
</html>
