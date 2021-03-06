<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Hardlus 15704. Somos un equipo de FIRST Tech Challenge apasionados por la robótica y la difusión de las áreas de STEM">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hardlus | Actividades STEM</title>
    <link rel="stylesheet" type="text/css" href="css/Reset.css">
    <link rel="stylesheet" type="text/css" href="css/general.css">
    <link rel="stylesheet" type="text/css" href="css/estilo-menu-stem.css">
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

    <header>
      <div class="centre">
        <h1>Actividades STEM</h1>
        <p class="parrafo">STEM es una representaci&oacute;n de las cuatro &aacute;reas principales del conocimiento en las que suelen involucrarse los grupos de hombres y mujeres pertenecientes a las ciencias e ingenier&iacute;as: Science (Ciencia), Technology (Tecnolog&iacute;a), Engineering (Ingenier&iacute;a), y Mathematics (Matem&aacute;ticas). Se trata de un t&eacute;rmino que gana cada vez m&aacute;s relevancia en el mundo de los recursos humanos en el sentido referente al sector de profesionales previsto como el m&aacute;s demandado en el futuro debido a su aporte pr&aacute;ctico. La educaci&oacute;n STEM integra conceptos racionales y enfatiza la aplicaci&oacute;n del conocimiento en situaciones cotidianas que requieren ser modificadas o resueltas de un modo especializado.</p>
        <p class="parrafo">Toma la iniciativa de involucrarte en estas enriquecedoras &aacute;reas. ¡No te arrepentir&aacute;s!</p>
      </div>
    </header>

    <section class="botones-areas">
      <div class="centre">
        <a href="actividades-ciencia.php" class="btn-area btn ciencia back-img-verde">
          <span class="sigla">S</span>cience - Ciencia<span class="haz-click">Haz click aqu&iacute;</span>
        </a>
        <a href="actividades-tecnologia.php" class="btn-area btn technology back-img-amarillo">
          <span class="sigla">T</span>echnology - Tecnolog&iacute;a<span class="haz-click">Haz click aqu&iacute;</span>
        </a>
        <a href="actividades-ingenieria.php" class="btn-area btn engineering back-img-azul">
          <span class="sigla">E</span>ngineering - Ingenier&iacute;a<span class="haz-click">Haz click aqu&iacute;</span>
        </a>
        <a href="actividades-matematicas.php" class="btn-area btn maths back-img-naranja">
          <span class="sigla">M</span>athematics - Matem&aacute;ticas<span class="haz-click">Haz click aqu&iacute;</span>
        </a>
      </div>
    </section>

    <section class="jardineria">
      <div class="centre">
        <!-- Jardinería -->
        <h2>¡No te pierdas estas nuevas secciones!</h2>
        <a href="actividades-ecologia.php" class="btn-area btn back-img-ecologia">
          <span class="sigla">E</span>cology - Ecolog&iacute;a<span class="haz-click">Haz click aqu&iacute;</span>
        </a>
        <a href="actividades-arte.php" class="btn-area btn back-img-arte">
          <span class="sigla">A</span>rts - Artes<span class="haz-click">Haz click aqu&iacute;</span>
        </a>

      </div>
    </section>

    <footer>
      <?php
      include "php/footer.php";
      ?>
    </footer>
    <script src="js/interactividad.js" charset="utf-8"></script>
  </body>
</html>
