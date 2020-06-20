<?php if(isset($msgValidaciones) && is_array($msgValidaciones) && !empty($msgValidaciones)): ?>
    <fieldset>
        <legend>Mensajes del sistema</legend>
        <ul>
            <?php foreach ($msgValidaciones as $mensaje): ?>
                <li class="<?=isset($tipoMensaje) ? $tipoMensaje : 'error'?>"><?=$mensaje?></li>
            <?php endforeach; ?>
        </ul>
    </fieldset>
<?php endif; ?>