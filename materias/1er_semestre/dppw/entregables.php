<div class="row">
    <div class="form-group col-xl-4 col-lg-4 col-md-6 col-sm-12">
        <?php $mensaje = 'El estudiante debe plantear un esquema básico universal, que pueda ser aplicado en pequeños proyectos. A partir de la interiorización de los procesos para la dirección de proyectos, según el PMBoK, el estudiante debe construir un esquema conceptual, y aplicado, es decir con la descripción de todos los grupos y procesos, que pueda ser utilizado para gestionar pequeños proyectos.'; ?>
        <div class="card">
            <div class="card-body">
                <img src="planteamiento_proyecto/imagenes/portada.png" class="card-img-top img_card"
                     alt="Planteamiento Básico de cualquier Proyecto">
                <h5 class="card-title">Panteamiento del esquema básico para cualquier proyecto</h5>
                <p class="card-text text-justify"><?=substr($mensaje,0,180)?><span data-toggle="tooltip" data-placement="top" title="<?=$mensaje?>">...</span></p>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_evidencia_plateamiento_proyectos">
                    <i class="fa fa-eye"></i> Ver tarea
                </button>
            </div>
        </div>
    </div>

    <div class="form-group col-xl-4 col-lg-4 col-md-6 col-sm-12">
        <div class="card">
            <?php $mensaje = 'El estudiante debe plantear un esquema básico universal, que pueda ser aplicado en pequeños proyectos. A partir de la interiorización de los procesos para la dirección de proyectos, según el PMBoK, el estudiante debe construir un esquema conceptual, y aplicado, es decir con la descripción de todos los grupos y procesos, que pueda ser utilizado para gestionar pequeños proyectos.'; ?>
            <div class="card-body">
                <img src="desarrollo_metodologia/imagenes/logo.png" class="card-img-top img_card"
                     alt="Desarrollo de metodologia para gestión de proyectos Web">
                <h5 class="card-title">Desarrollo de metodología para gestion de proyectos web</h5>
                <p class="card-text text-justify"><?=substr($mensaje,0,180)?><span data-toggle="tooltip" data-placement="top" title="<?=$mensaje?>">...</span></p>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_evidencia_metodologia_gestion_proyecto">
                    <i class="fa fa-eye"></i> Ver tarea
                </button>
            </div>
        </div>
    </div>
</div>

<?php
    include_once('planteamiento_proyecto/modal_evidencia_plateamiento.php');
    include_once('desarrollo_metodologia/modal_evidencia_metodologia_gestion.php');
?>