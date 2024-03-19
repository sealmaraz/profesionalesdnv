<?php
$title = "Beneficios";
?>
<?php include("../pages/partials/header.php"); ?>
<!-- <div class="loading loading--show"><iconify-icon icon="eos-icons:three-dots-loading" width="50" height="50"></iconify-icon></div> -->
<section class="banner_principal movie">
  <div class="banner_sorteos swiper mySwiper2">
    <ul class="swiper-wrapper">
      <li class="swiper-slide banner__1">
        <a href="#subsidio"><img class="banner__img" src="../img/banner_beneficios/subsidioMatrimonio.png" alt="" /></a>
      </li>

      <li class="swiper-slide banner__1">
        <a href="#subsidio"><img class="banner__img" src="../img/banner_beneficios/subsidioNacimiento.png" alt="" /></a>
      </li>

      <li class="swiper-slide banner__1">
        <a href="#bonoFidelidad"><img class="banner__img" src="../img/banner_beneficios/bonoFidelidad.png" alt="" /></a>
      </li>

      <li class="swiper-slide banner__1">
        <img class="banner__img" src="../img/banner_beneficios/regaloBienvenida.png" alt="" />
      </li>

      <li class="swiper-slide banner__1">
        <img class="banner__img" src="../img/banner_beneficios/bonoMensual.png" alt="" />
      </li>

      <li class="swiper-slide banner__1">
        <a href="#alojamiento"><img class="banner__img" src="../img/banner_beneficios/alojamientoPropio.png" alt="" /></a>
      </li>
      <li class="swiper-slide banner__1">
        <a href="#descuentosHoteles"><img class="banner__img" src="../img/banner_beneficios/descuentoHoteles.png" alt="" /></a>
      </li>

      <li class="swiper-slide banner__1">
        <a href="https://www.ameport.org.ar/page/default" target="_blank"><img class="banner__img" src="../img/banner_beneficios/convenioAmeport.png" alt="" /></a>
      </li>

      <li class="swiper-slide banner__1">
        <a href="https://www.ameport.org.ar/turismo/DefaultTurismo.aspx" target="_blank"><img class="banner__img" src="../img/banner_beneficios/beneficiosTuristicos.png" alt="" /></a>
      </li>

      <li class="swiper-slide banner__1">
        <img class="banner__img" src="../img/banner_beneficios/regaloExclusivo.png" alt="" />
      </li>

      <li class="swiper-slide banner__1">
        <img class="banner__img" src="../img/banner_beneficios/asesoriaGremial.png" alt="" />
      </li>
    </ul>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
</section>
<section class="container_Propio">
  <h2 class="linea title_alojamiento" id="alojamiento">
    <span class="t_alojamiento">Nuestros Departamentos</span>
  </h2>
  <!-- <div class="container_Propio-loader"><iconify-icon icon="eos-icons:bubble-loading" width="50" height="50"></iconify-icon></div> -->
  <article class="detalle_departamento">

    <!-- <div class="carousel">
      <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
      <div class="elfsight-app-323936e0-85f2-4a80-aad5-0cf605451ad9" data-elfsight-app-lazy></div>
    </div> -->
    <div thumbsSlider="" class="swiper mySwiper3">
      <div class="swiper-wrapper">
        <?php
        $images = scandir('../img/banner_departamentos/');
        $images = array_diff($images, array('..', '.'));
        foreach ($images as $image) {
          echo '<div class="swiper-slide"><img style="height:400px" src="../img/banner_departamentos/' . $image . '" alt="' . $image . '" onclick="abrirVistaPrevia(this.src)"></div>';
        }
        ?>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>

    <div class="glider_text">
      <span class="title_subsidio" style="text-align: center;">Para tu comodidad se encuentran ubicados estratégicamente frente a
        Casa Central en AVDA. PTE. JULIO A. ROCA 771 - CABA
      </span>
      <a class="link_protocolo" href="../docs/Protocolo_uso_departamentos_CABA-010324.pdf" target="_blank"><iconify-icon icon="typcn:arrow-right-thick"></iconify-icon>
        Condiciones de Uso y Reserva</a>
      <br />
      <span class="text_subsidio">Podrás hacer uso de todos los amenities: pileta, lavadero, parrilla
        y gimnasio, respetando las indicaciones del edificio.</span>
      <br />
      <span class="text_subsidio">Para reservas o consultas comunicate al whatsapp
        <a class="wsp_reserva" style="font-size: large;" href="https://api.whatsapp.com/send/?phone=5491127723511" target="_blank"><iconify-icon class="icon_reserva" icon="logos:whatsapp-icon"></iconify-icon></a>
        (011-1527723511) en el horario de 9 a 17 hs.
      </span>
      <br />
      <span class="text_subsidio">Datos de cuenta para pago de estadía:</span>
      <span class="text_subsidio" style="color: var(--primary-color-solid);">CBU: 0110010540001013410080</span>
      <span class="text_subsidio" style="color: var(--primary-color-solid);">Alias: RESERVAS.DPTOS.AP</span>
      <span class="text_subsidio">Se recomienda copiar y pegar los datos previos.</span>
    </div>
  </article>
  <h2 class="linea title_alojamiento" id="subsidio">
    <span class="t_alojamiento">Subsidio por Casamiento, Nacimiento o Adopción</span>
  </h2>
  <article class="detalle_subsidio">
    <span class="title_subsidio">
      Siempre a tu lado en los momentos importantes. Recibirás $60.000,00
      para lo que desees</span>
    <a class="link_protocolo" href="../docs/SUBSIDIOS_POR_CASAMIENTO_Y_NACIMIENTO_O_ADOPCIÓN.pdf" target="_blank"><iconify-icon icon="typcn:arrow-right-thick"></iconify-icon>
      Reglamento de ortorgamiento</a>
    <span class="text_subsidio">Es un trámite sencillo y puedes canalizarlo a través del Delegado de
      Distrito o del Representante de tu Seccional</span>
    <br />
    <span class="text_subsidio">Debes contar con:</span>
    <br />
    <ul>
      <li class="lista_beneficio">
        <iconify-icon style="font-size: var(--font-small);" icon="healthicons:i-documents-accepted-outline"></iconify-icon><span class="text_subsidio">Certificado de Matrimonio legalizada</span>
      </li>
      <li class="lista_beneficio">
        <iconify-icon style="font-size: var(--font-small);" icon="healthicons:i-documents-accepted-outline"></iconify-icon><span class="text_subsidio">Sentencia firme de adopción plena o copia autenticada del
          oficio</span>
      </li>
      <li class="lista_beneficio">
        <iconify-icon style="font-size: var(--font-small);" icon="healthicons:i-documents-accepted-outline"></iconify-icon><span class="text_subsidio">Nota solicitando el beneficio firmada por el afiliado</span>
      </li>
      <li class="lista_beneficio">
        <iconify-icon style="font-size: var(--font-small);" icon="healthicons:i-documents-accepted-outline"></iconify-icon><span class="text_subsidio">Fotocopia de Recibo de Sueldo</span>
      </li>
      <li class="lista_beneficio">
        <iconify-icon style="font-size: var(--font-small);" icon="healthicons:i-documents-accepted-outline"></iconify-icon><span class="text_subsidio">Constancia de CBU</span>
      </li>
      <li class="lista_beneficio">
        <iconify-icon style="font-size: var(--font-small);" icon="healthicons:i-documents-accepted-outline"></iconify-icon><span class="text_subsidio">Fotocopia de DNI</span>
      </li>
    </ul>
  </article>
  <h2 class="linea title_alojamiento" id="bonoFidelidad">
    <span class="t_alojamiento">Bono Fidelidad</span>
  </h2>
  <article class="detalle_subsidio">
    <span class="title_subsidio">
      Te acompañamos en tu nuevo camino luego de alcanzar la jubilación en
      Vialidad Nacional
    </span>
    <a class="link_protocolo" href="../docs/Protocolo_Bono_fidelidad_270421.pdf" target="_blank"><iconify-icon icon="typcn:arrow-right-thick"></iconify-icon>
      Protocolo Bono Fidelidad</a>
    <span class="text_subsidio">Es un reconocimiento al afiliado que mantuvo de forma consecutiva y
      correlativa en el tiempo, su afiliación a esta "Asociación Gremial"
      hasta su Renuncia por Jubilación y que cumplan con las pautas
      estipuladas en el Protocolo.</span>
    <br />
    <span class="text_subsidio">El monto del beneficio al afiliado se determinará de acuerdo a la
      cantidad de años de antigüedad como afiliada/o de esta Asociación:
    </span>
    <br />
    <ul>
      <li class="lista_beneficio">
        <iconify-icon style="font-size: var(--font-small);" icon="healthicons:i-documents-accepted-outline"></iconify-icon><span class="text_subsidio">Más de 10 años y hasta 14 años 11 meses y 30 días de antigüedad
          en la Asociación: <span class="cash">1000 u$s</span>.</span>
      </li>
      <li class="lista_beneficio">
        <iconify-icon style="font-size: var(--font-small);" icon="healthicons:i-documents-accepted-outline"></iconify-icon><span class="text_subsidio">Más de 15 años y hasta 19 años 11 meses y 30 días de antigüedad
          en la Asociación: <span class="cash">1500 u$s</span>.</span>
      </li>
      <li class="lista_beneficio">
        <iconify-icon style="font-size: var(--font-small);" icon="healthicons:i-documents-accepted-outline"></iconify-icon><span class="text_subsidio">Más de 20 años y hasta 24 años 11 meses y 30 días de antigüedad
          en la Asociación: <span class="cash">2000 u$s</span>.</span>
      </li>
      <li class="lista_beneficio">
        <iconify-icon style="font-size: var(--font-small);" icon="healthicons:i-documents-accepted-outline"></iconify-icon><span class="text_subsidio">Más de 25 años de antigüedad en la Asociación:
          <span class="cash">2500 u$s</span>.</span>
      </li>
    </ul>
    <br />
    <span class="text_subsidio" style="font-weight: 600;">
      * Con este importante beneficio nuestros afiliados recuperan
      aproximadamente el 80% de los aportes efectuados durante su actividad
      en Vialidad Nacional a nuestra "Asociación Gremial"</span>
  </article>
  <h2 class="linea title_alojamiento" id="sorteoMensual">
    <span class="t_alojamiento">Sorteo Bono Mensual</span>
  </h2>
  <article class="detalle_subsidio">
    <span class="title_subsidio">
      Todos los meses realizamos un sorteo entre todos los afiliados activos de un BONO MENSUAL DE <b>$160.000,00</b>
    </span>
    <a class="link_protocolo" href="../docs/Reglamento_Bono_Mensual_250823.pdf" target="_blank"><iconify-icon icon="typcn:arrow-right-thick"></iconify-icon>
      Reglamento Sorteo Bono Mensual</a>
    <span class="text_subsidio"> El sorteo se realiza por la Lotería Nacional Nocturna el primer lunes de cada mes.</span>
    <section class="movie">
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <?php
          $images = scandir('../img/carousel1/');
          $images = array_diff($images, array('..', '.'));
          foreach ($images as $image) {
            echo '<div class="swiper-slide"><img src="../img/carousel1/' . $image . '" alt="' . $image . '"></div>';
          }
          ?>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </section>
  </article>
  <h2 class="linea title_alojamiento" id="beneficiosTuristicos">
    <span class="t_alojamiento">Beneficios Turísticos</span>
  </h2>
  <article class="detalle_subsidio">
    <span class="title_subsidio">
      Para poder acceder a todos los beneficios que brinda la MUTUAL AMEPORT mediante nuestro convenio, debes estar previamente afiliado a la misma.
    </span>
    <br>
    <span class="text_subsidio">Si quieres conocer más al respecto comunicate al whatsapp <a class="wsp_reserva" style="font-size: large;" href="https://api.whatsapp.com/send/?phone=5493624607304" target="_blank"><iconify-icon class="icon_reserva" icon="logos:whatsapp-icon"></iconify-icon></a>
      (0362-154607304) en el horario de 9 a 15 hs.</span>
  </article>
  <h2 class="linea title_alojamiento" id="beneficiosTuristicos">
    <span class="t_alojamiento">Rueda de Turismo Sindical</span>
  </h2>
  <article class="detalle_subsidio">
    <span class="title_subsidio">
      Éstos son los nuevos destinos que tenemos para ofrecerte...
    </span>
    <br>
    <span class="text_subsidio">Éstos son los nuevos destinos que tenemos para ofrecerte...</span>
    <br>
    <!-- <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
    <div class="elfsight-app-f41e1a08-61f0-485a-8b72-99595b3a2120" data-elfsight-app-lazy></div> -->
    <div class="grid_destinos">
      <div class="container-grid_destinos">
        <?php
        $images = scandir('../img/banner_destinos/');
        $images = array_diff($images, array('..', '.'));
        foreach ($images as $image) {
          echo '<div class="img-grid_destinos"><img src="../img/banner_destinos/' . $image . '" alt="' . $image . '" onclick="abrirVistaPrevia(this.src)"></div>';
        }
        ?>
      </div>
      <div class="swiper-pagination"></div>
    </div>

    <div id="vistaPreviaModal" class="modal">
      <span class="cerrar" onclick="cerrarVistaPrevia()">&times;</span>
      <img class="modal-contenido" id="imagenModal">
    </div>
  </article>
  <!-- <ul>
      <li class="lista_beneficio">
        <iconify-icon style="font-size: var(--font-small);" icon="healthicons:i-documents-accepted-outline"></iconify-icon><span class="text_subsidio">Más de 10 años y hasta 14 años 11 meses y 30 días de antigüedad
          en la Asociación: <span class="cash">1000 u$s</span>.</span>
      </li>
      <li class="lista_beneficio">
        <iconify-icon style="font-size: var(--font-small);" icon="healthicons:i-documents-accepted-outline"></iconify-icon><span class="text_subsidio">Más de 15 años y hasta 19 años 11 meses y 30 días de antigüedad
          en la Asociación: <span class="cash">1500 u$s</span>.</span>
      </li>
      <li class="lista_beneficio">
        <iconify-icon style="font-size: var(--font-small);" icon="healthicons:i-documents-accepted-outline"></iconify-icon><span class="text_subsidio">Más de 20 años y hasta 24 años 11 meses y 30 días de antigüedad
          en la Asociación: <span class="cash">2000 u$s</span>.</span>
      </li>
      <li class="lista_beneficio">
        <iconify-icon style="font-size: var(--font-small);" icon="healthicons:i-documents-accepted-outline"></iconify-icon><span class="text_subsidio">Más de 25 años de antigüedad en la Asociación:
          <span class="cash">2500 u$s</span>.</span>
      </li>
    </ul>
    <br />
    <span class="text_subsidio" style="font-weight: 600;">
      * Con este importante beneficio nuestros afiliados recuperan
      aproximadamente el 80% de los aportes efectuados durante su actividad
      en Vialidad Nacional a nuestra "Asociación Gremial"</span> -->

  <h2 class="linea title_alojamiento" id="descuentosHoteles">
    <span class="t_alojamiento">Descuentos en Hoteles</span>
  </h2>
  <div class="info_convenios">
    <span class="title_convenioHoteles title_subsidio">
      Los afiliados a nuestra "Asociación Gremial" acceden a convenios con
      prestigiosos Hoteles
    </span><br>
    <span class="text_subsidio" style="text-align: justify;"><iconify-icon style="font-size: var(--font-xsmall);" icon="healthicons:i-documents-accepted-outline"></iconify-icon>Es importante que realices la reserva con tiempo e informes siempre
      que eres afiliado en la "Asociación Gremial de Profesionales y
      Personal Superior de Vialidad Nacional"</span><br>
    <span class="text_subsidio" style="text-align: justify;"><iconify-icon style="font-size: var(--font-xsmall);" icon="healthicons:i-documents-accepted-outline"></iconify-icon>Ingresa a los sitios y determina cuál se adapta más a tus
      necesidades</span>
  </div>
  <article class="detalle_convenioHoteles">
    <!-- HOTEL AVENIDA BUENOS AIRES -->
    <div class="hotel">
      <span class="title_hotel">HOTEL AVENIDA BUENOS AIRES</span>
      <?php
      $contenidoAvenida = "<p style='text-align: center;'>Ubicado a 700 metros del Obelisco, en el centro de Buenos Aires, a
      100 metros de la plaza de Mayo y a 8 km del aeropuerto Jorge
      Newbery. La estación de subte más cercana se encuentra a 40
      metros.
      Una ubicación privilegiada en el corazón de Buenos Aires.
      <br>
      <br>
      Como afiliado, <strong>contarás con 20% de descuento </strong> sobre las tarifas dadas;
      aplica para cualquier día, con cualquier medio de pago y
      pudiendo cancelar hasta 24 hs. antes del horario del check in (12
      hs.).</p>"
      ?>
      <a class="link_protocolo" href="https://hotelav.com.ar/es/reservas" target="_blank"><iconify-icon icon="typcn:arrow-right-thick"></iconify-icon><span>Realiza aquí tu reserva</span></a>
      <img class="popover_config" target="_blank" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="left" data-bs-html="true" data-bs-content="<?php echo $contenidoAvenida; ?>" src="../img/convenio_hoteles/hotelAvenida.png" alt="">
    </div>
    <!-- HOTEL CENTURIA BUENOS AIRES -->
    <div class="hotel">
      <span class="title_hotel">CENTURIA HOTEL BUENOS AIRES</span>
      <?php $contenidoCenturia = "<p style='text-align: center;'>
          Ubicado a tan solo 600 metros del Obelisco, 700m de la Plaza de
          Mayo y 30 km del Aeropuerto Internacional Ministro Pistarini.
        </p>
        <br />
        <p style='font-weight: 600;'>
          CANCELACIONES Y CAMBIOS DE FECHAS
          <br /><u>Dos (2) días antes de la fecha de llegada</u>: Sin
          penalidad. <br /><u>Un día antes de la fecha de llegada</u>: Se
          cobrará la primera noche de penalidad. <br /><u>*Salidas Imprevistas</u>: El huésped debe notificar la salida anticipada 48 horas antes
          de su fecha de salida. Caso contrario se cobrará (1) noche de
          penalidad. <br /><u>*NO SHOW</u>: Se cobrará Una (1) noche de
          penalidad.
        </p>" ?>
      <a class="link_protocolo" href="https://www.centuriabuenosaireshotel.com/" target="_blank"><iconify-icon icon="typcn:arrow-right-thick"></iconify-icon><span>Realiza aquí tu reserva</span></a>
      <img class="popover_config" target="_blank" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="left" data-bs-html="true" data-bs-content="<?php echo $contenidoCenturia; ?>" src="../img/convenio_hoteles/hotelCenturia.png" alt="">
    </div>
    <!-- HOTEL UTHGRA DE LAS LUCES BUENOS AIRES -->
    <div class="hotel">
      <span class="title_hotel">HOTEL UTHGRA DE LAS LUCES BUENOS AIRES</span>
      <?php $contenidoCenturia = "<p style='text-align: center;'>
          Se encuentra ubicado en las cercanías del distrito financiero y rodeado de los más
          importantes edificios públicos y atractivos de la ciudad: Plaza de
          Mayo, Casa Rosada, el Cabildo, Catedral Metropolitana, Puerto
          Madero y la Calle Florida.
        </p>" ?>
      <a class="link_protocolo" href="http://www.uthgradelasluces.com.ar/index.php?n1=home" target="_blank"><iconify-icon icon="typcn:arrow-right-thick"></iconify-icon><span>Realiza aquí tu reserva</span></a>
      <img class="popover_config" target="_blank" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="right" data-bs-html="true" data-bs-content="<?php echo $contenidoCenturia; ?>" src="../img/convenio_hoteles/hotelUthgra.jpg" alt="">
    </div>
    </div>
    </div>
  </article>
</section>
<?php include("../pages/partials/footer.php"); ?>
</body>

</html>