<?php
$title = "Actividad Gremial";
?>
<?php include('../pages/partials/header.php'); ?>
<div Class="comunicado container_Propio">
    <ul class="menuNovedades">
        <li class="underline" onclick="showOculto_byID('comunicados_oculto','novedades_oculto');">COMUNICADOS</li>
        <li class="underline" onclick="showOculto_byID('novedades_oculto','comunicados_oculto');">NOVEDADES</li>
    </ul>
</div>
<section class="comunicados container_Propio" id="comunicados_oculto">
    <div Class="comunicado">
        <div Class="tit_comunicado">
            ASOCIACIÓN GREMIAL DE PROFESIONALES Y PERSONAL SUPERIOR DE VIALIDAD NACIONAL
            <br>Inscripción Gremial N º 2264<br>www.profesionalesdnv.org.ar
        </div>
        <div class="contenido_comunicado">
            <object data="https://profesionalesdnv.org.ar/docs/comunicados/comunicado.pdf" type="application/pdf" width="100%" height="500px">
                <a href="https://profesionalesdnv.org.ar/docs/comunicados/comunicado.pdf">Presiona aquí para descargar el comunicado</a>
            </object>
        </div>
        <div Class="pie_comunicado">
            Febrero/2024.
        </div>
        <hr>
        <div Class="btn_comunicado" onclick="showOculto('oculto');">
            Ver comunicados anteriores
        </div>
        <?php include('../pages/comunicadosAnteriores.php'); ?>
    </div>
</section>
<section class="novedades container_Propio comunicados hidden_comunicados" id="novedades_oculto">
    <article class="comunicado">
        <ul class="cards-news">
            <li class="card">
                <a href="http://" target="_blank">
                    <p class="card-title">VII Congreso de la Rueda de Turismo Social y Sindical <br> En búsqueda de nuevos beneficios para nuestros afiliados</p>
                </a>
                <picture>
                    <img class="card-img" src="../img/actividad_gremial/ruedaTurismoVII.jpg"></img>
                    <!-- <figcaption>Asi</figcaption> -->
                </picture>

                <span class="card-epigrafe">Con una importante asistencia se llevó a cabo entre el 5 y el 7 de marzo, en Colón, Entre Ríos, un nuevo Congreso de la Rueda de turismo Social y Sindical. Nuestra querida Asociación Gremial estuvo presente y junto al resto de los asistentes se dejó clara la postura de bregar por la unidad y la defensa de los Derechos Adquiridos por los trabajadores en relación al descanso y goce de vacaciones pagas, por lo que es importante remarcar que el turismo también es un derecho.</span>
                <a class="link_protocolo" href="../docs/novedades/VII_congreso_Turismo_Social_ Sindical.pdf" target="_blank"><button type="button" class="btn btn-info">Leer más</button>
                </a>
            </li>
            <li class="card">
                <a href="http://" target="_blank">
                    <p class="card-title">Despidos de agentes ingresados en el año 2023</p>
                </a>
                <div>
                    <object class="pdf-container" data="https://profesionalesdnv.org.ar/docs/novedades/Nota_despidos_ 2023_050124.pdf" type="application/pdf" width="100%" height="auto">
                        <a href="https://profesionalesdnv.org.ar/docs/novedades/Nota_despidos_ 2023_050124.pdf">Presiona aquí para descargar el comunicado</a>
                    </object>
                </div>
                <!-- <div class="pdf-container" id="pdf-container"></div> -->
                <!-- <a href="../docs/novedades/Nota_despidos_ 2023_050124.pdf" target="_blank" rel="noopener noreferrer"> -->
                <span class="card-epigrafe">Se realizó una presentación en contra de la decisión de avanzar con despidos de personal ingresado en el transcurso del año 2023 en forma indiscriminada.</span>
                <!-- </a> -->
            </li>
            <!--<li class="card">
                    <a href="http://" target="_blank"><p class="card-title">NUEVOS DESTINOS TURISTICOS</p></a>
                    <img class="card-img"></img>
                    <span class="card-epigrafe">foto con epigrafedssdfsfsdf sefsfsf</span>
                </li>
                <li class="card">
                    <a href="http://" target="_blank"><p class="card-title">NUEVOS DESTINOS TURISTICOS</p></a>
                    <img class="card-img"></img>
                    <span class="card-epigrafe">foto con epigrafedssdfsfsdf sefsfsf</span>
                </li> -->
        </ul>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </article>
</section>
<?php include('../pages/partials/footer.php'); ?>