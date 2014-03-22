<?php /* Smarty version Smarty-3.1.16, created on 2014-03-20 21:18:00
         compiled from "/home/wwwroot/fanchuancoin.com/public/templates/mpos/admin/dashboard/invitations.tpl" */ ?>
<?php /*%%SmartyHeaderCode:102756557532aea885b5a51-46325128%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71af7b813d9cede5fc162a16f6a7ca5f82b0c014' => 
    array (
      0 => '/home/wwwroot/fanchuancoin.com/public/templates/mpos/admin/dashboard/invitations.tpl',
      1 => 1395321264,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '102756557532aea885b5a51-46325128',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'INVITATION_INFO' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_532aea885c02b5_06823428',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532aea885c02b5_06823428')) {function content_532aea885c02b5_06823428($_smarty_tpl) {?>
<article class="module width_quarter">
  <header><h3>Invitations</h3></header>
  <table class="tablesorter" cellspacing="0">
    <thead>
      <tr>
        <th align="center">Total</th>
        <th align="center">Activated</th>
        <th align="center">Outstanding</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['INVITATION_INFO']->value['total'];?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['INVITATION_INFO']->value['activated'];?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['INVITATION_INFO']->value['outstanding'];?>
</td>
      </tr>
    </tbody>
  </table>
</article>

<?php }} ?>
