<?php /* Smarty version 3.1.27, created on 2017-09-30 14:32:06
         compiled from "E:\OSPanel\domains\timelog\setup\templates\footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1617459cf80b6cd24f3_11100495%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b9d5bff6e49ea4ad78f9dc7adfc55049308d506' => 
    array (
      0 => 'E:\\OSPanel\\domains\\timelog\\setup\\templates\\footer.tpl',
      1 => 1505291568,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1617459cf80b6cd24f3_11100495',
  'variables' => 
  array (
    '_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59cf80b6cdc041_07765119',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59cf80b6cdc041_07765119')) {
function content_59cf80b6cdc041_07765119 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once 'E:/OSPanel/domains/timelog/core/model/smarty/plugins\\modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '1617459cf80b6cd24f3_11100495';
?>
        </div>
        <!-- end content -->
        <div class="clear">&nbsp;</div>
    </div>
</div>

<!-- start footer -->
<div id="footer">
    <div id="footer-inner">
    <div class="container_12">
        <p><?php ob_start();
echo date('Y');
$_tmp1=ob_get_clean();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['_lang']->value['modx_footer1'],'[[+current_year]]',$_tmp1);?>
</p>
        <p><?php echo $_smarty_tpl->tpl_vars['_lang']->value['modx_footer2'];?>
</p>
    </div>
    </div>
</div>

<div class="post_body">

</div>
<!-- end footer -->
</body>
</html><?php }
}
?>