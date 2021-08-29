<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-27 17:49:17
  from 'module:cecabankviewstemplateshoo' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6011fbfdbf3f62_06803612',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01c02bb9b621da9da5d68f037e6e768d4d82860a' => 
    array (
      0 => 'module:cecabankviewstemplateshoo',
      1 => 1611790044,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6011fbfdbf3f62_06803612 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section id="cecabank-payment-options" style="text-align: center;">
    <img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['icon']->value,'htmlall' )), ENT_QUOTES, 'UTF-8');?>
"/>
    <br>
    <p><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['description']->value,'htmlall' )), ENT_QUOTES, 'UTF-8');?>
</p>
</section><?php }
}
