<?php include_once('autocarga.php'); ?>

<?php include_once('vistas/default/header.php'); ?>

    <div class="row">
        <div class="form-group col-lg-12 col-md-12 col-sm-12 text-center font-weight-bold ">
            <div class="alert alert-primary">
                Lic. en Informática - Estudiante de Maestria en Dirección e Ingeniería de Sitios Web
            </div>
        </div>
    </div>

    <?php include_once('vistas/datos_personales.php') ?>

    <div class="row">
        <div class="form-group col-lg-12 col-md-12 col-sm-12">
            <div class="accordion" id="acordion_semestres">

                <?php include_once('vistas/1_semestre/acordion.php'); ?>

                <?php include_once('vistas/2_semestre/acordion.php'); ?>

                <?php include_once('vistas/3_semestre/acordion.php'); ?>


            </div>
        </div>
    </div>

<?php include_once('vistas/default/footer.php'); ?>