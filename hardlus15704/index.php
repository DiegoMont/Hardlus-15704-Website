<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hardlus 15704</title>
    <link rel="stylesheet" type="text/css" href="css/Reset.css">
    <link rel="stylesheet" type="text/css" href="css/general.css">
    <link rel="stylesheet" type="text/css" href="css/estilo-index.css">
    <link rel="icon" type="image/png" href="img/Hardlus-sin-fondo.png">
    <script src="js/interactividad-index.js" charset="utf-8" defer></script>
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
      printNav($indice_home);
      ?>
    </nav>
    <div id="espacio-nav"></div>

    <section id="fotos-equipo">
      <div class="foto-pantalla" id="foto-nacional"></div>
      <div class="foto-pantalla" id="foto-ocuilan"></div>
      <div class="foto-pantalla" id="container-logo">
        <div class="centre">
          <img src="img/Hardlus-blanco.png" alt="Hardlus 15704" id="logo-grande">
        </div>
      </div>
    </section>

    <header>
      <div class="centre">
        <h1>Actividades STEM y manuales de cubrebocas</h1>
      </div>
    </header>

    <section class="cubrebocas">
      <div class="centre">
        <h2>Crea tu propio cubrebocas</h2>
        <p class="parrafo">Con el fin de promover la seguridad de las personas que necesitan salir de casa por las complicaciones del día a día, el contenido de los siguientes documentos incluye una guía detallada para fabricar cubrebocas caseros con materiales accesibles.</p>
        <div class="flexbox">
          <div class="switch">
            <button type="button" id="espanol" class="idioma-activo">Espa&ntilde;ol</button>
            <button type="button" id="ingles">English</button>
          </div>
        </div>

        <iframe src="https://drive.google.com/file/d/1Bo5eLQd8sa3FD99QrzP_QbcvqsUEIW9T/preview" id="manual-cubrebocas-spanish"></iframe>

        <iframe src="https://drive.google.com/file/d/1IHeAqhYbB29Qqx0hYyGraWZuvgvTjnBu/preview" id="manual-cubrebocas-english"></iframe>
      </div>
    </section>

    <section id="concurso-arte">
      <div class="centre">
        <h2>Conoce la foto ganadora de nuestro Concurso de Arte</h2>
        <a class="btn" href="actividades-arte.html#ganador-concurso">Conoce m&aacute;s!</a>
      </div>
    </section>

    <section class="que-ofrece">
      <div class="centre">
        <h5 class="parrafo">HARDLUS 15704 te ofrece m&uacute;ltiples recursos educativos de entretenimiento y manuales de apoyo para afrontar estos tiempos dif&iacute;ciles con la frente en alto.</h5>
        <a href="menu-STEM.html" class="">¡Presiona aqu&iacute; para ver nuestras actividades!</a>
      </div>
    </section>

    <section class="frase-motivadora" id="frase">
      <div class="centre flexbox">
        <div class="frase-izq">
          <div class="container-frase">
            <h3>"Invierte en conocimiento. Si tienes un momento muerto, aprende algo nuevo y habr&aacute; cobrado vida"</h3>
            <h3>-Anxo P&eacute;rez</h3>
          </div>
        </div>
        <div class="frase-der flexbox">
          <img id="foto-ingenieria" src="img/Hardlus_regional_norte.jpeg" alt="Equipo de ingenieria arreglando nuestro robot durante el Regional Norte 2019">
        </div>
      </div>
    </section>

    <section class="patrocinadores">
      <div class="centre">
        <h1>Nuestros patrocinadores</h1>
        <div class="patrocinadores-tabla">
          <div class="img-patrocinadores">
            <img src="img/logo_nautilus.png" alt="Nautilus">
          </div>
          <div class="img-patrocinadores" id="gobilda">
            <img src="img/logo_gobilda.png" alt="gobilda">
          </div>
          <div class="img-patrocinadores" id="publica">
            <img src="img/logo_publica.png" alt="Publica">
          </div>
        </div>
      </div>
    </section>

    <section class="redes-sociales">
      <div class="centre">
        <h3 class="redes-sociales">¡S&iacute;guenos en redes sociales!</h3>
        <div class="flexbox">
          <div class="redes-sociales">
            <a href="https://www.instagram.com/hardlus_15704/" target="_blank">
              <div class="flexbox">
                <img src="img/instagram.svg" alt="Siguenos en Instagram">
                <h6 class="link">hardlus_15704</h6>
              </div>
            </a>
          </div>
          <div class="redes-sociales">
            <a href="https://twitter.com/Hardlus15704" target="_blank">
              <div class="flexbox">
                <img src="img/twitter.svg" alt="Siguenos en Twitter">
                <h6 class="link">@Hardlus15704</h6>
              </div>
            </a>
          </div>
          <div class="redes-sociales">
            <a href="https://www.facebook.com/Hardlus15704/" target="_blank">
              <div class="flexbox">
                <img src="img/facebook.svg" alt="Siguenos en Facebook">
                <h6 class="link">Hardlus 15704</h6>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <footer>
      <div>Icons made by <a href="https://www.flaticon.com/authors/roundicons" title="Roundicons">Roundicons</a> from <a href="https://www.flaticon.com/"     title="Flaticon">www.flaticon.com</a></div><div>Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/"     title="Flaticon">www.flaticon.com</a></div>
      <div class="centre firma flexbox">
        <a href="https://github.com/DiegoMont" class="firma">&lt;/&gt; with <span id="corazon" class="firma">&#9829;</span> by <span class="firma">DiegoMont</span></a>
      </div>
    </footer>
    <script src="js/interactividad.js" charset="utf-8"></script>
  </body>
</html>
