
<!-- Modal -->
<div class="modal fade" id="modal_evidencia_ws_2016" data-backdrop="static" data-keyboard="false" tabindex="-1"
     role="dialog" aria-labelledby="modal_evidencia_ws_2016_title" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_evidencia_ws_2016_title">Evidencia Windows Server 2016 - AWS</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="form-group col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Evidencia Fotográfica</h5>
                            </div>
                            <div class="card-body">
                                <div id="carousel_windows_server_2016" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <?php for ($index = 1; $index <= 129; $index++): ?>
                                            <div class="carousel-item <?=$index == 1? 'active':''?>">
                                                <img src="ws2016_aws/imagenes/ws_2016_aws/<?=$index < 10 ? '0':''?><?=$index < 100 ? '0':''?><?=$index?>.png" class="d-block w-100" alt="Evidencia Windows Server 2016">
                                            </div>
                                        <?php endfor; ?>
                                        <a class="carousel-control-prev" href="#carousel_windows_server_2016" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Anterior</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carousel_windows_server_2016" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Siguiente</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--
                <div class="row">
                    <div class="form-group col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <label>Entregable Word</label>
                            </div>
                            <div class="card-body">
                                <iframe class="docs_maestria" src="ws2016_aws/docs/entregable_ecorona.pdf"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>