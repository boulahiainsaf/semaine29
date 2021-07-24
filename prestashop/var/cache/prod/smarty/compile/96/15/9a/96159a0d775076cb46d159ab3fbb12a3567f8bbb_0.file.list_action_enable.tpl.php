<?php
/* Smarty version 3.1.39, created on 2021-06-20 16:14:42
  from 'C:\wamp64\www\prestashop\admin952bdmf9a\themes\default\template\helpers\list\list_action_enable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60cf4d522a5332_75600785',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96159a0d775076cb46d159ab3fbb12a3567f8bbb' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\admin952bdmf9a\\themes\\default\\template\\helpers\\list\\list_action_enable.tpl',
      1 => 1622533359,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60cf4d522a5332_75600785 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['migrated_url_enable']->value))) {?>
  <?php $_smarty_tpl->_assignInScope('url_enable', $_smarty_tpl->tpl_vars['migrated_url_enable']->value);
}?>

<a class="list-action-enable<?php if ((isset($_smarty_tpl->tpl_vars['ajax']->value)) && $_smarty_tpl->tpl_vars['ajax']->value) {?> ajax_table_link<?php }
if ($_smarty_tpl->tpl_vars['enabled']->value) {?> action-enabled<?php } else { ?> action-disabled<?php }?>" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['url_enable']->value,'html','UTF-8' ));?>
"<?php if ((isset($_smarty_tpl->tpl_vars['confirm']->value))) {?> onclick="return confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
');"<?php }?> title="<?php if ($_smarty_tpl->tpl_vars['enabled']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enabled','d'=>'Admin.Global'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Disabled','d'=>'Admin.Global'),$_smarty_tpl ) );
}?>">
	<i class="icon-check<?php if (!$_smarty_tpl->tpl_vars['enabled']->value) {?> hidden<?php }?>"></i>
	<i class="icon-remove<?php if ($_smarty_tpl->tpl_vars['enabled']->value) {?> hidden<?php }?>"></i>
</a>
<?php }
}
