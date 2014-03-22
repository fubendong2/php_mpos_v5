<?php /* Smarty version Smarty-3.1.16, created on 2014-03-21 21:13:28
         compiled from "/home/wwwroot/fanchuancoin.com/public/templates/mobile/dashboard//default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:985115175532c3af805ba71-00224123%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94c560e93ee34d652ae473297802cce680a234d1' => 
    array (
      0 => '/home/wwwroot/fanchuancoin.com/public/templates/mobile/dashboard//default.tpl',
      1 => 1395321264,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '985115175532c3af805ba71-00224123',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_532c3af8070230_32766441',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532c3af8070230_32766441')) {function content_532c3af8070230_32766441($_smarty_tpl) {?><?php if ((($tmp = @$_SESSION['AUTHENTICATED'])===null||$tmp==='' ? '' : $tmp)) {?>
  <?php $_smarty_tpl->tpl_vars['payout_system'] = new Smarty_variable($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['payout_system'], null, 0);?>
  <?php echo $_smarty_tpl->getSubTemplate ("dashboard/overview.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <?php echo $_smarty_tpl->getSubTemplate ("dashboard/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
<?php }} ?>
