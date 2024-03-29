<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <link
      rel="shortcut icon"
      href="../img/logoasociacion.ico"
      type="image/x-icon"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.core.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.theme.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/glider-js@1.7.8/glider.min.css"
    />
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../css/index.css" />
    <title><?php echo $title;?></title>
  </head>
  <body>
<header id="header">
    <div class="header__box">
        <img class="header__img" src="../img/logoasociacion.jpg" alt="header__logo__asociacion" />
        <p class="header__text_logo">
            Asociación Gremial de Profesionales y Personal Superior de Vialidad
            Nacional
        </p>
        <div class="toggle">
            <iconify-icon class="navbar__toggle" icon="fa6-solid:bars" style="color: white;"></iconify-icon>
        </div>
    </div>
    <nav class="navbar container">
        <ul class="navbar__menu">
            <li class="navbar__item submenuopen">
                <a class="navbar__link" href="./home.php">Inicio</a>
            </li>
            <!-- <li class="navbar__item submenuopen">
            <a class="navbar__link" href="./noticias.html">Noticias</a>
          </li> -->
            <li class="navbar__item submenuopen">
                <a class="navbar__link" href="./institucional.php">Institucional</a>
            </li>
            <li class="navbar__item submenuopen">
                <a class="navbar__link" href="./beneficios.php">Beneficios</a>
            </li>
            <li class="navbar__item submenuopen">
                <a class="navbar__link" href="./actividadGremial.php">Actividad Gremial</a>
            </li>
            <li class="navbar__item submenuopen">
                <a class="navbar__link" href="./contacto">Contacto</a>
            </li>
            <li class="navbar__item submenuopen destacado">
                <a class="navbar__link" href="./afiliate">Afiliate</a>
            </li>
        </ul>
    </nav>
</header>