<?php
/* Smarty version 3.1.47, created on 2024-11-27 15:24:29
  from '/var/www/html/admin12345/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_67472b9d49e386_63175595',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b38e8ea06d950b0122a555c08514709b9db6580d' => 
    array (
      0 => '/var/www/html/admin12345/themes/default/template/content.tpl',
      1 => 1670401941,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67472b9d49e386_63175595 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
