<?php /* Smarty version 3.1.27, created on 2017-09-30 14:33:06
         compiled from "E:\OSPanel\domains\timelog\manager\templates\default\welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1462859cf80f28eae18_47204663%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2a66be3f0dcb73376fffa4893f89f46e8a62799' => 
    array (
      0 => 'E:\\OSPanel\\domains\\timelog\\manager\\templates\\default\\welcome.tpl',
      1 => 1505291566,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1462859cf80f28eae18_47204663',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59cf80f28efb88_10436252',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59cf80f28efb88_10436252')) {
function content_59cf80f28efb88_10436252 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1462859cf80f28eae18_47204663';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>