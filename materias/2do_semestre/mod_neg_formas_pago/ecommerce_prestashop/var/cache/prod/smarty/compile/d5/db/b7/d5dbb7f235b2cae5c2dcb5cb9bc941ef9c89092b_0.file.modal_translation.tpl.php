<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-27 17:53:44
  from 'C:\wamp64\www\maestriaunirmex\materias\2do_semestre\mod_neg_formas_pago\ecommerce_prestashop\admin284gtjxzw\themes\default\template\controllers\modules\modal_translation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6011fd0853c7f0_72470038',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5dbb7f235b2cae5c2dcb5cb9bc941ef9c89092b' => 
    array (
      0 => 'C:\\wamp64\\www\\maestriaunirmex\\materias\\2do_semestre\\mod_neg_formas_pago\\ecommerce_prestashop\\admin284gtjxzw\\themes\\default\\template\\controllers\\modules\\modal_translation.tpl',
      1 => 1611789064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6011fd0853c7f0_72470038 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-body">
	<div class="input-group">
		<button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
			<i class="icon-flag"></i>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Manage translations'),$_smarty_tpl ) );?>

			<span class="caret"></span>
		</button>
		<ul class="dropdown-menu">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['module_languages']->value, 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
?>
				<li>
					<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['translateLinks']->value[$_smarty_tpl->tpl_vars['language']->value['iso_code']],'html','UTF-8' ));?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['name'],'html','UTF-8' ));?>
</a>
				</li>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
	</div>
</div>
<?php }
}
