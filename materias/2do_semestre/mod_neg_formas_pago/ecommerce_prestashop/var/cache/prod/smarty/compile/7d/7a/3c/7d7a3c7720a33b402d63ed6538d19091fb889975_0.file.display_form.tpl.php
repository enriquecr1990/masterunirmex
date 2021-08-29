<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-27 17:53:44
  from 'C:\wamp64\www\maestriaunirmex\materias\2do_semestre\mod_neg_formas_pago\ecommerce_prestashop\modules\cecabank\views\templates\admin\display_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6011fd0870eae3_99184544',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d7a3c7720a33b402d63ed6538d19091fb889975' => 
    array (
      0 => 'C:\\wamp64\\www\\maestriaunirmex\\materias\\2do_semestre\\mod_neg_formas_pago\\ecommerce_prestashop\\modules\\cecabank\\views\\templates\\admin\\display_form.tpl',
      1 => 1611790044,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6011fd0870eae3_99184544 (Smarty_Internal_Template $_smarty_tpl) {
?>

<style type="text/css">
fieldset a {
    color:#0099ff !important;
    text-decoration:underline;
}
fieldset a:hover {
    color:#000000;
    text-decoration:underline;
}
.level1 {
    font-size:1.2em
}
.level2 {
    font-size:0.9em
}
</style>


<div><img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cecabank']->value['dfl']['img_path'],'htmlall','UTF-8' ));?>
" alt="142x38.png" width="142" height="38" title="" /></div>
<form method="post" action="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cecabank']->value['dfl']['action'],'htmlall','UTF-8' ));?>
">
<br />

<fieldset class="level1">
<legend><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Acerca de Cecabank','mod'=>'cecabank'),$_smarty_tpl ) );?>
</legend>
    <b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Permite utilizar la pasarela de Cecabank en tu sitio web.','mod'=>'cecabank'),$_smarty_tpl ) );?>
</b> <a target="_blank" href="https://www.cecabank.es/"><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'cecabank.es.','mod'=>'cecabank'),$_smarty_tpl ) );?>
</b></a><br />
</fieldset>
<br />

<fieldset class="level1">
    <legend><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Configuración','mod'=>'cecabank'),$_smarty_tpl ) );?>
</legend>
    <b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Para usar el plugin es necesario definir algunos campos:','mod'=>'cecabank'),$_smarty_tpl ) );?>
</b><br /><br />
    
    <fieldset class="level2">
        <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Código de comercio','mod'=>'cecabank'),$_smarty_tpl ) );?>
</label>
        <div class="margin-form">
            <input type="text" name="merchant" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cecabank']->value['config']['merchant'],'htmlall','UTF-8' ));?>
" />
            <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Lo puede dejar en blanco para deshabilitar el plugin','mod'=>'cecabank'),$_smarty_tpl ) );?>
</p>
        </div>
        <div class="clear"></div>
        <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Adquiriente','mod'=>'cecabank'),$_smarty_tpl ) );?>
</label>
        <div class="margin-form">
            <input type="text" name="acquirer" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cecabank']->value['config']['acquirer'],'htmlall','UTF-8' ));?>
" />
            <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Lo puede dejar en blanco para deshabilitar el plugin','mod'=>'cecabank'),$_smarty_tpl ) );?>
</p>
        </div>
        <div class="clear"></div>
        <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Clave secreta','mod'=>'cecabank'),$_smarty_tpl ) );?>
</label>
        <div class="margin-form">
            <input type="text" name="secret_key" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cecabank']->value['config']['secret_key'],'htmlall','UTF-8' ));?>
" />
            <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Lo puede dejar en blanco para deshabilitar el plugin','mod'=>'cecabank'),$_smarty_tpl ) );?>
</p>
        </div>
        <div class="clear"></div>
        <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Terminal','mod'=>'cecabank'),$_smarty_tpl ) );?>
</label>
        <div class="margin-form">
            <input type="text" name="terminal" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cecabank']->value['config']['terminal'],'htmlall','UTF-8' ));?>
" />
            <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Lo puede dejar en blanco para deshabilitar el plugin','mod'=>'cecabank'),$_smarty_tpl ) );?>
</p>
        </div>
        <div class="clear"></div>
        <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Título','mod'=>'cecabank'),$_smarty_tpl ) );?>
</label>
        <div class="margin-form">
            <input type="text" name="title" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cecabank']->value['config']['title'],'htmlall','UTF-8' ));?>
" />
            <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Lo puede dejar en blanco para deshabilitar el plugin','mod'=>'cecabank'),$_smarty_tpl ) );?>
</p>
        </div>
        <div class="clear"></div>
        <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Descripción','mod'=>'cecabank'),$_smarty_tpl ) );?>
</label>
        <div class="margin-form">
            <input type="text" name="description" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cecabank']->value['config']['description'],'htmlall','UTF-8' ));?>
" />
            <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Lo puede dejar en blanco para deshabilitar el plugin','mod'=>'cecabank'),$_smarty_tpl ) );?>
</p>
        </div>
        <div class="clear"></div>
        <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Entorno','mod'=>'cecabank'),$_smarty_tpl ) );?>
</label>
        <div class="margin-form">
            <select name="environment">
                <option value="test" <?php if ($_smarty_tpl->tpl_vars['cecabank']->value['config']['environment'] == 'test') {?>selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Prueba','mod'=>'cecabank'),$_smarty_tpl ) );?>
</option>
                <option value="real" <?php if ($_smarty_tpl->tpl_vars['cecabank']->value['config']['environment'] == 'real') {?>selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Real','mod'=>'cecabank'),$_smarty_tpl ) );?>
</option>
            </select>
        </div>
        <div class="clear"></div>
        <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Moneda','mod'=>'cecabank'),$_smarty_tpl ) );?>
</label>
        <div class="margin-form">
            <select name="currency">
                <option value="978" <?php if ($_smarty_tpl->tpl_vars['cecabank']->value['config']['currency'] == '978') {?>selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'EUR','mod'=>'cecabank'),$_smarty_tpl ) );?>
</option>
                <option value="840" <?php if ($_smarty_tpl->tpl_vars['cecabank']->value['config']['currency'] == '840') {?>selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'USD','mod'=>'cecabank'),$_smarty_tpl ) );?>
</option>
                <option value="826" <?php if ($_smarty_tpl->tpl_vars['cecabank']->value['config']['currency'] == '826') {?>selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'GBP','mod'=>'cecabank'),$_smarty_tpl ) );?>
</option>
                <option value="392" <?php if ($_smarty_tpl->tpl_vars['cecabank']->value['config']['currency'] == '392') {?>selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'JPY','mod'=>'cecabank'),$_smarty_tpl ) );?>
</option>
                <option value="32" <?php if ($_smarty_tpl->tpl_vars['cecabank']->value['config']['currency'] == '32') {?>selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'ARS','mod'=>'cecabank'),$_smarty_tpl ) );?>
</option>
                <option value="124" <?php if ($_smarty_tpl->tpl_vars['cecabank']->value['config']['currency'] == '124') {?>selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'CAD','mod'=>'cecabank'),$_smarty_tpl ) );?>
</option>
                <option value="152" <?php if ($_smarty_tpl->tpl_vars['cecabank']->value['config']['currency'] == '152') {?>selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'CLP','mod'=>'cecabank'),$_smarty_tpl ) );?>
</option>
                <option value="170" <?php if ($_smarty_tpl->tpl_vars['cecabank']->value['config']['currency'] == '170') {?>selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'COP','mod'=>'cecabank'),$_smarty_tpl ) );?>
</option>
                <option value="356" <?php if ($_smarty_tpl->tpl_vars['cecabank']->value['config']['currency'] == '356') {?>selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'INR','mod'=>'cecabank'),$_smarty_tpl ) );?>
</option>
                <option value="484" <?php if ($_smarty_tpl->tpl_vars['cecabank']->value['config']['currency'] == '484') {?>selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'MXN','mod'=>'cecabank'),$_smarty_tpl ) );?>
</option>
                <option value="604" <?php if ($_smarty_tpl->tpl_vars['cecabank']->value['config']['currency'] == '604') {?>selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'PEN','mod'=>'cecabank'),$_smarty_tpl ) );?>
</option>
                <option value="756" <?php if ($_smarty_tpl->tpl_vars['cecabank']->value['config']['currency'] == '756') {?>selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'CHF','mod'=>'cecabank'),$_smarty_tpl ) );?>
</option>
                <option value="986" <?php if ($_smarty_tpl->tpl_vars['cecabank']->value['config']['currency'] == '986') {?>selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'BRL','mod'=>'cecabank'),$_smarty_tpl ) );?>
</option>
                <option value="937" <?php if ($_smarty_tpl->tpl_vars['cecabank']->value['config']['currency'] == '937') {?>selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'VEF','mod'=>'cecabank'),$_smarty_tpl ) );?>
</option>
                <option value="949" <?php if ($_smarty_tpl->tpl_vars['cecabank']->value['config']['currency'] == '949') {?>selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'TRY','mod'=>'cecabank'),$_smarty_tpl ) );?>
</option>
            </select>
        </div>
        <div class="clear"></div>
        <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Ícono','mod'=>'cecabank'),$_smarty_tpl ) );?>
</label>
        <div class="margin-form">
            <input type="text" name="icon" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cecabank']->value['config']['icon'],'htmlall','UTF-8' ));?>
" />
            <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Lo puede dejar en blanco para deshabilitar el plugin','mod'=>'cecabank'),$_smarty_tpl ) );?>
</p>
        </div>
        <div class="clear"></div>
        <div class="margin-form clear pspace"><input type="submit" name="submitUpdate" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Guardar','mod'=>'cecabank'),$_smarty_tpl ) );?>
" class="button" /></div>
    </fieldset>
</fieldset>
</form>
<br />

<fieldset class="level1 space">
    <legend><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Ayuda','mod'=>'cecabank'),$_smarty_tpl ) );?>
</legend>
    <b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Para más información contáctenos a través del correo','mod'=>'cecabank'),$_smarty_tpl ) );?>
</b> <a href="mailto:tpv@cecabank.es"><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'tpv@cecabank.es','mod'=>'cecabank'),$_smarty_tpl ) );?>
</b></a>.<br /><br />
</fieldset>
<?php }
}
