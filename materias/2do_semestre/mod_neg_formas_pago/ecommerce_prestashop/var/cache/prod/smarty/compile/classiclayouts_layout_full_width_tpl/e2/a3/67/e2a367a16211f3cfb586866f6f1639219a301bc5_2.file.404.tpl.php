<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-27 17:49:38
  from 'C:\wamp64\www\maestriaunirmex\materias\2do_semestre\mod_neg_formas_pago\ecommerce_prestashop\themes\classic\templates\errors\404.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6011fc12591b20_13207403',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2a367a16211f3cfb586866f6f1639219a301bc5' => 
    array (
      0 => 'C:\\wamp64\\www\\maestriaunirmex\\materias\\2do_semestre\\mod_neg_formas_pago\\ecommerce_prestashop\\themes\\classic\\templates\\errors\\404.tpl',
      1 => 1611789070,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:errors/not-found.tpl' => 1,
  ),
),false)) {
function content_6011fc12591b20_13207403 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10857374076011fc12587dc2_20047736', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18798025516011fc1258dc44_74514383', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_title'} */
class Block_10857374076011fc12587dc2_20047736 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_10857374076011fc12587dc2_20047736',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['title'], ENT_QUOTES, 'UTF-8');?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'page_content_container'} */
class Block_18798025516011fc1258dc44_74514383 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_18798025516011fc1258dc44_74514383',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender('file:errors/not-found.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'page_content_container'} */
}
