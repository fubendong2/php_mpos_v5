<?php /* Smarty version Smarty-3.1.16, created on 2014-03-20 21:18:00
         compiled from "/home/wwwroot/fanchuancoin.com/public/templates/mpos/admin/dashboard/users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1580303075532aea88583b99-06808346%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0706ee1e58b8b76baee36a318323d59f11d9e2c4' => 
    array (
      0 => '/home/wwwroot/fanchuancoin.com/public/templates/mpos/admin/dashboard/users.tpl',
      1 => 1395321264,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1580303075532aea88583b99-06808346',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'USER_INFO' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_532aea88593308_36489022',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532aea88593308_36489022')) {function content_532aea88593308_36489022($_smarty_tpl) {?>
<article class="module width_quarter">
  <header><h3>Users</h3></header>
  <table class="tablesorter" cellspacing="0">
    <thead>
      <tr>
        <th align="center">Total</th>
        <th align="center">Active</th>
        <th align="center">Locked</th>
        <th align="center">Admins</th>
        <th align="center">No Fees</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['USER_INFO']->value['total'];?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['USER_INFO']->value['active'];?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['USER_INFO']->value['locked'];?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['USER_INFO']->value['admins'];?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['USER_INFO']->value['nofees'];?>
</td>
      </tr>
    </tbody>
  </table>
</article>

<?php }} ?>
