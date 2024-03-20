<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
  <link rel="shortcut icon" href="../img/logoasociacion.ico" type="image/x-icon" />

  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.core.min.css" /> -->
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.theme.min.css" /> -->
  <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.min.css" />

  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.8/glider.min.css" /> -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <!-- <script src="https://www.google.com/recaptcha/api.js?render=6Le45n8pAAAAAAQAt-yKYQHFAwjD0guCPuJQUUEY"></script> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <link rel="stylesheet" href="../css/index.css?v=1" />
  <title><?php echo $title; ?></title>
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
    <nav class="navbar_Propio container_Propio">
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
        <!-- <li class="navbar__item submenuopen">
          <a class="navbar__link" href="./contacto.php">Contacto</a>
        </li> -->
        <li class="navbar__item submenuopen destacado">
          <a class="navbar__link btn-warning" href="../docs/Ficha_Asociación.pdf" target="_blank" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="bottom" data-bs-content="Para poder afiliarte deberás imprimir el formulario haciendo click aquí. Una vez que la hayas completado y firmado, podrás acercarle al Delegado de tu distrito quien dará continuidad al trámite.">Afiliate</a>
          <!-- <a class="navbar__link" href="../../docs/Ficha_Asociación.pdf" target="_blank" data-bs-toggle="popover" data-bs-content="Hola Mundo">Afiliate</a> -->
        </li>
      </ul>
    </nav>
  </header>