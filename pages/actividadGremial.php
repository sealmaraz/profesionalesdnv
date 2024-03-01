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
            <object data="../docs/comunicados/comunicado.pdf" type="application/pdf" width="100%" height="500px">
                <p>Unable to display PDF file. <a href="/uploads/media/default/0001/01/540cb75550adf33f281f29132dddd14fded85bfc.pdf">Download</a> instead.</p>
            </object>
            <!-- <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
            <div class="elfsight-app-323936e0-85f2-4a80-aad5-0cf605451ad9" data-elfsight-app-lazy></div> -->
            <!-- <iframe src="../docs/comunicados/comunicado.pdf"> -->
            <!-- <div class="imgPieComunicado">
                <img src="../img/comunicados/Logo-Sindicato_La_Pampa.jpg">
                <img src="../img/comunicados/Logo-Asociacion.jpg">
            </div> -->
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
                    <p class="card-title">Despidos de agentes ingresados en el año 2023</p>
                </a>
                <img class="card-img"></img>
                <a href="../docs/novedades/Nota_despidos_ 2023_050124.pdf" target="_blank" rel="noopener noreferrer"><span class="card-epigrafe">Se realizó una presentación en contra de la decisión de avanzar con despidos de personal ingresado en el transcurso del año 2023 en forma indiscriminada.</span></a>
            </li>

            <!-- <li class="card">
                    <a href="http://" target="_blank"><p class="card-title">NUEVOS DESTINOS TURISTICOS</p></a>
                    <img class="card-img"></img>
                    <span class="card-epigrafe">foto con epigrafedssdfsfsdf sefsfsf</span>
                </li>
                <li class="card">
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