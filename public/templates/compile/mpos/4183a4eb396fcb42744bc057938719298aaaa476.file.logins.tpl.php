<?php /* Smarty version Smarty-3.1.16, created on 2014-03-20 21:18:00
         compiled from "/home/wwwroot/fanchuancoin.com/public/templates/mpos/admin/dashboard/logins.tpl" */ ?>
<?php /*%%SmartyHeaderCode:986365798532aea885c2885-57227472%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4183a4eb396fcb42744bc057938719298aaaa476' => 
    array (
      0 => '/home/wwwroot/fanchuancoin.com/public/templates/mpos/admin/dashboard/logins.tpl',
      1 => 1395321264,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '986365798532aea885c2885-57227472',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'USER_LOGINS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_532aea885d2049_89403252',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532aea885d2049_89403252')) {function content_532aea885d2049_89403252($_smarty_tpl) {?>
<article class="module width_quarter">
  <header><h3>Logins</h3></header>
  <table class="tablesorter" cellspacing="0">
    <thead>
      <tr>
        <th align="center">24 hours</th>
        <th align="center">7 days</th>
        <th align="center">1 month</th>
        <th align="center">6 months</th>
        <th align="center">1 year</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['USER_LOGINS']->value['24hours'];?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['USER_LOGINS']->value['7days'];?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['USER_LOGINS']->value['1month'];?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['USER_LOGINS']->value['6month'];?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['USER_LOGINS']->value['1year'];?>
</td>
      </tr>
    </tbody>
  </table>
</article>

<?php }} ?>
