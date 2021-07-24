<?php
/* Smarty version 3.1.39, created on 2021-06-20 15:55:13
  from 'C:\wamp64\www\prestashop\admin952bdmf9a\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60cf48c181e0b2_08654121',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7ba88e900e3c928c7813b85882a955f2ff2eac7' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\admin952bdmf9a\\themes\\default\\template\\content.tpl',
      1 => 1622533359,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60cf48c181e0b2_08654121 (Smarty_Internal_Template $_smarty_tpl) {
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
