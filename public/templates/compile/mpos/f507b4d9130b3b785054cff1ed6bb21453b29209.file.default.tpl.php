<?php /* Smarty version Smarty-3.1.16, created on 2014-03-20 21:17:00
         compiled from "/home/wwwroot/fanchuancoin.com/public/templates/mpos/home//default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1850744711532aea4c503bd1-96704681%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f507b4d9130b3b785054cff1ed6bb21453b29209' => 
    array (
      0 => '/home/wwwroot/fanchuancoin.com/public/templates/mpos/home//default.tpl',
      1 => 1395321264,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1850744711532aea4c503bd1-96704681',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'NEWS' => 0,
    'HIDEAUTHOR' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_532aea4c51f1b4_19782561',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532aea4c51f1b4_19782561')) {function content_532aea4c51f1b4_19782561($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/wwwroot/fanchuancoin.com/public/include/smarty/libs/plugins/modifier.date_format.php';
?><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['news'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['news']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['name'] = 'news';
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['NEWS']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['news']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['news']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['news']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['news']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['news']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['news']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['total']);
?>
    <article class="module width_full">
      <header><h3><?php echo $_smarty_tpl->tpl_vars['NEWS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['news']['index']]['header'];?>
, <font size=\"1px\">posted <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['NEWS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['news']['index']]['time'],"%b %e, %Y at %H:%M");?>
<?php if ((($tmp = @$_smarty_tpl->tpl_vars['HIDEAUTHOR']->value)===null||$tmp==='' ? "0" : $tmp)==0) {?> by <b><?php echo $_smarty_tpl->tpl_vars['NEWS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['news']['index']]['author'];?>
</b><?php }?></font></h3></header>
      <div class="module_content">
        <?php echo $_smarty_tpl->tpl_vars['NEWS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['news']['index']]['content'];?>

        <div class="clear"></div>
      </div>
    </article>
<?php endfor; endif; ?>
<?php }} ?>
