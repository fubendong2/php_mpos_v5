<?php /* Smarty version Smarty-3.1.16, created on 2014-03-22 09:39:32
         compiled from "/home/wwwroot/fanchuancoin.com/public/templates/mpos/admin/wallet/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:589345512532ce9d4573682-04848800%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69795296ef438076a61aa404c509a785bd229c8b' => 
    array (
      0 => '/home/wwwroot/fanchuancoin.com/public/templates/mpos/admin/wallet/default.tpl',
      1 => 1395321264,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '589345512532ce9d4573682-04848800',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BALANCE' => 0,
    'LOCKED' => 0,
    'UNCONFIRMED' => 0,
    'NEWMINT' => 0,
    'COININFO' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_532ce9d45c9bd2_26932459',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532ce9d45c9bd2_26932459')) {function content_532ce9d45c9bd2_26932459($_smarty_tpl) {?><article class="module width_quarter">
  <header><h3>Balance Summary</h3></header>
  <table width="25%" class="tablesorter" cellspacing="0">
  <tr>
    <td align="left">Wallet Balance</td>
    <td align="left"><?php echo number_format($_smarty_tpl->tpl_vars['BALANCE']->value,"8");?>
</td>
  </tr>
  <tr>
    <td align="left">Locked for users</td>
    <td align="left"><?php echo number_format($_smarty_tpl->tpl_vars['LOCKED']->value,"8");?>
</td>
  </tr>
  <tr>
    <td align="left">Unconfirmed</td>
    <td align="left"><?php echo number_format($_smarty_tpl->tpl_vars['UNCONFIRMED']->value,"8");?>
</td>
  </tr>
  <tr>
    <td align="left">Liquid Assets</td>
    <td align="left"><?php echo number_format(($_smarty_tpl->tpl_vars['BALANCE']->value-$_smarty_tpl->tpl_vars['LOCKED']->value),"8");?>
</td>
  </tr>
<?php if ($_smarty_tpl->tpl_vars['NEWMINT']->value>=0) {?>
  <tr>
    <td align="left">PoS New Mint</td>
    <td align="left"><?php echo number_format($_smarty_tpl->tpl_vars['NEWMINT']->value,"8");?>
</td>
  </tr>
<?php }?>
</table>
</article>

<article class="module width_3_quarter">
  <header><h3>Wallet Information</h3></header>
  <table class="tablesorter" cellspacing="0">
    <thead>
      <th align="center">Version</th>
      <th align="center">Protocol Version</th>
      <th align="center">Wallet Version</th>
      <th align="center">Connections</th>
      <th align="center">Errors</th>
    </thead>
    <tbody>
      <tr>
        <td align="center"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['COININFO']->value['version'])===null||$tmp==='' ? '' : $tmp);?>
</td>
        <td align="center"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['COININFO']->value['protocolversion'])===null||$tmp==='' ? '' : $tmp);?>
</td>
        <td align="center"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['COININFO']->value['walletversion'])===null||$tmp==='' ? '' : $tmp);?>
</td>
        <td align="center"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['COININFO']->value['connections'])===null||$tmp==='' ? '' : $tmp);?>
</td>
        <td align="center"><font color="<?php if ($_smarty_tpl->tpl_vars['COININFO']->value['errors']) {?>red<?php } else { ?>green<?php }?>"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['COININFO']->value['errors'])===null||$tmp==='' ? "OK" : $tmp);?>
</font></td>
      </tr>
    </tbody>
  </table>
</article>
<?php }} ?>
