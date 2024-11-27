<?php
/* Smarty version 3.1.47, created on 2024-11-27 15:24:36
  from '/var/www/html/admin12345/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_67472ba44de949_41396615',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd20c5e0d8dfbbd000391dfe94561f2daded8751' => 
    array (
      0 => '/var/www/html/admin12345/themes/new-theme/template/content.tpl',
      1 => 1670401941,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67472ba44de949_41396615 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
