<?php /* Smarty version Smarty-3.1.16, created on 2014-03-21 23:43:10
         compiled from "/home/wwwroot/fanchuancoin.com/public/templates/mpos/statistics/graphs/mine.tpl" */ ?>
<?php /*%%SmartyHeaderCode:323820264532c5e0e64a6b5-07161239%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2895c7bb7922bdcfadccd4d001a76896db11614' => 
    array (
      0 => '/home/wwwroot/fanchuancoin.com/public/templates/mpos/statistics/graphs/mine.tpl',
      1 => 1395321264,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '323820264532c5e0e64a6b5-07161239',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'YOURHASHRATES' => 0,
    'hour' => 0,
    'hashrate' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_532c5e0e669b08_42218744',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532c5e0e669b08_42218744')) {function content_532c5e0e669b08_42218744($_smarty_tpl) {?><?php if (is_array($_smarty_tpl->tpl_vars['YOURHASHRATES']->value)) {?>
  <div class="tab_content" id="mine">
    <table class="visualize" rel="area">
      <caption>我的速度</caption>
      <thead>
        <tr>
          <td></td>
<?php  $_smarty_tpl->tpl_vars['hashrate'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hashrate']->_loop = false;
 $_smarty_tpl->tpl_vars['hour'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['YOURHASHRATES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hashrate']->key => $_smarty_tpl->tpl_vars['hashrate']->value) {
$_smarty_tpl->tpl_vars['hashrate']->_loop = true;
 $_smarty_tpl->tpl_vars['hour']->value = $_smarty_tpl->tpl_vars['hashrate']->key;
?>
          <th scope="col"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['hour']->value)===null||$tmp==='' ? "0" : $tmp);?>
:00</th>
<?php } ?>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row"><?php echo $_SESSION['USERDATA']['username'];?>
</th>
<?php  $_smarty_tpl->tpl_vars['hashrate'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hashrate']->_loop = false;
 $_smarty_tpl->tpl_vars['hour'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['YOURHASHRATES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hashrate']->key => $_smarty_tpl->tpl_vars['hashrate']->value) {
$_smarty_tpl->tpl_vars['hashrate']->_loop = true;
 $_smarty_tpl->tpl_vars['hour']->value = $_smarty_tpl->tpl_vars['hashrate']->key;
?>
          <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['hashrate']->value)===null||$tmp==='' ? "0" : $tmp);?>
</td>
<?php } ?>
        </tr>
      </tbody>
    </table>
  </div>
<?php }?>
<?php }} ?>
