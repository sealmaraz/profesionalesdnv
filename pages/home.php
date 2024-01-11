<?php
 $title = "Home";
?>
<?php include("../pages/partials/header.php");?>
    <section class="img_principal">
      <div class="main_texts">
        <p class="main_text">Desde el año 2000</p>
        <p class="main_text">Caminando Junto a nuestros afiliados</p>
      </div>
    </section>
    <section class="main_principal glide">
      <div class="banner_sorteos glide__track" data-glide-el="track">
        <ul class="glide__slides">
          <li class="glide__slide banner_container">
            <img
              class="banner__img1"
              src="../img/premios/sorteoSeptiembre.jpeg"
              alt=""
            />
          </li>

          <li class="glide__slide banner_container">
            <img
              class="banner__img1"
              src="../img/premios/sorteoOctubre.jpeg"
              alt=""
            />
          </li>

          <li class="glide__slide banner_container">
            <img
              class="banner__img1"
              src="../img/premios/sorteoSeptiembre.jpeg"
              alt=""
            />
          </li>

          <li class="glide__slide banner_container">
            <img
              class="banner__img1"
              src="../img/premios/sorteoOctubre.jpeg"
              alt=""
            />
          </li>
        </ul>
      </div>
      <div class="glide__arrows" data-glide-el="controls">
        <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
          <iconify-icon
            class="iconify_chevron"
            icon="ic:round-chevron-left"
          ></iconify-icon>
        </button>
        <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
          <iconify-icon
            class="iconify_chevron"
            icon="ic:round-chevron-right"
          ></iconify-icon>
        </button>
      </div>

      <div class="glide__bullets" data-glide-el="controls[nav]">
        <button class="glide__bullet" data-glide-dir="=0"></button>
        <button class="glide__bullet" data-glide-dir="=1"></button>
        <button class="glide__bullet" data-glide-dir="=2"></button>
      </div>
    </section>
    <section class="home"></section>
<?php include("../pages/partials/footer.php");?>
  </body>
</html>
