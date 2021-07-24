<?php
/* Smarty version 3.1.39, created on 2021-06-20 15:55:12
  from 'C:\wamp64\www\prestashop\modules\ps_metrics\views\templates\hook\HookDashboardZoneTwo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60cf48c0886452_65578090',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c16e0ae57633e24a8d93c3ce99fc47f000b19dd' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\ps_metrics\\views\\templates\\hook\\HookDashboardZoneTwo.tpl',
      1 => 1624197051,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60cf48c0886452_65578090 (Smarty_Internal_Template $_smarty_tpl) {
?>
<link href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pathDashboardVendor']->value,'htmlall','UTF-8' ));?>
" rel=preload as=script>
<link href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pathDashboardApp']->value,'htmlall','UTF-8' ));?>
" rel=preload as=script>

<div id="dashboardApp"></div>

<?php echo '<script'; ?>
 src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pathDashboardVendor']->value,'htmlall','UTF-8' ));?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pathDashboardApp']->value,'htmlall','UTF-8' ));?>
"><?php echo '</script'; ?>
>
<?php }
}
