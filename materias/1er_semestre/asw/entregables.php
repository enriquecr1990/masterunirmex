<div class="row">
    <div class="form-group col-xl-4 col-lg-4 col-md-6 col-sm-12">
        <div class="card">
            <?php $mensaje = 'El trabajo de esta asignatura consistirá en la realización y entrega de un sitio web formado por al menos 4 documentos HTML5 enlazados. No se permiten elementos de computación'; ?>
            <div class="card-body">
                <img src="ws2016_aws/imagenes/logo_ws2016_aws.jpg" class="card-img-top img_card"
                     alt="Administración de Servidores Web">
                <h5 class="card-title">Windows Server 2016 - AWS</h5>
                <p class="card-text text-justify"><?=substr($mensaje,0,180)?><span data-toggle="tooltip" data-placement="top" title="<?=$mensaje?>">...</span></p>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_evidencia_ws_2016">
                    <i class="fa fa-eye"></i> Ver tarea
                </button>
            </div>
        </div>
    </div>

    <div class="form-group col-xl-4 col-lg-4 col-md-6 col-sm-12">
        <div class="card">
            <?php $mensaje = 'Se trata de instalar y configurar un servidor de streaming a través de módulos, que permita escuchar música o ver vídeos desde el propio servidor. Esto pondrá en manifiesto los conocimientos adquiridos a lo largo del curso con relación a la administración de un servidor web Apache en un servidor Linux.'; ?>
            <div class="card-body">
                <img src="apache_aws/imagenes/logo.jpg" class="card-img-top img_card" alt="Administración de Servidores Web">
                <h5 class="card-title">Apache - AWS</h5>
                <p class="card-text text-justify"><?=substr($mensaje,0,180)?><span data-toggle="tooltip" data-placement="top" title="<?=$mensaje?>">...</span></p>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_evidencia_apache">
                    <i class="fa fa-eye"></i> Ver tarea
                </button>
            </div>
        </div>
    </div>
</div>




<?php
    include_once('ws2016_aws/modal_ws2016_aws.php');
    include_once('apache_aws/modal_apache_aws.php');
?>