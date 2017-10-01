<?php /* Smarty version 3.1.27, created on 2017-09-30 14:57:33
         compiled from "E:\OSPanel\domains\timelog\manager\templates\default\workspaces\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2164159cf86adc13556_29756953%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3f899e381da2bb1c7cc9044114b7a332ae074cd' => 
    array (
      0 => 'E:\\OSPanel\\domains\\timelog\\manager\\templates\\default\\workspaces\\index.tpl',
      1 => 1505291566,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2164159cf86adc13556_29756953',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59cf86adc24093_74161216',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59cf86adc24093_74161216')) {
function content_59cf86adc24093_74161216 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2164159cf86adc13556_29756953';
echo (($tmp = @$_smarty_tpl->tpl_vars['error']->value)===null||$tmp==='' ? '' : $tmp);?>

<div id="modx-panel-workspace-div"></div>
<?php }
}
?>