<?php /* Smarty version Smarty-3.1.16, created on 2014-03-21 21:13:27
         compiled from "/home/wwwroot/fanchuancoin.com/public/templates/mobile/global/sidebar_prop.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1979255330532c3af7e9e6c8-38668534%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc0abd8b9a9eaeb80770709538743fdaf953d378' => 
    array (
      0 => '/home/wwwroot/fanchuancoin.com/public/templates/mobile/global/sidebar_prop.tpl',
      1 => 1395321264,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1979255330532c3af7e9e6c8-38668534',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_532c3af8020bf7_91109117',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532c3af8020bf7_91109117')) {function content_532c3af8020bf7_91109117($_smarty_tpl) {?>                <table width="100%">
                    <tr><td colspan="2">&nbsp;</td></tr>
                    <tr>
                      <td colspan="2"><b><u>Your Stats</u></b></td>
                    </tr>
                    <tr>
                      <td><b>Hashrate</b></td>
                      <td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['hashrate']);?>
 <?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['hashunits']['personal'];?>
</td>
                    </tr>
                    <tr>
                      <td><b>Share Rate</b></td>
                      <td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['sharerate'],"2");?>
 S/s</td>
                    </tr>
                    <tr><td colspan="2">&nbsp;</td></tr>
                    <tr>
                      <td colspan="2"><b><u>Round Shares</u></b></td>
                    </tr>
                    <tr>
                      <td><b>Pool Valid</b></td>
                      <td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['valid']);?>
</td>
                    </tr>
                    <tr>
                      <td><b>Your Valid<b></td>
                      <td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['shares']['valid']);?>
<font size='1px'></font></b></td>
                    </tr>
                    <tr>
                      <td><b>Pool Invalid</b></td>
                      <td align="right"><i><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['invalid']);?>
</i><?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['valid']>0) {?><font size='1px'> (<?php echo number_format(($_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['invalid']/($_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['valid']+$_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['invalid'])*100),"2");?>
%)</font><?php }?></td>
                    </tr>
                    <tr>
                      <td><b>Your Invalid</b></td>
                      <td align="right"><i><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['shares']['invalid']);?>
</i><?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['valid']>0) {?><font size='1px'> (<?php echo number_format(($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['shares']['invalid']/$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['shares']['valid']*100),"2");?>
%)</font><?php }?></td>
                    </tr>

                    <tr><td colspan="2">&nbsp;</td></tr>
                    <tr>
                      <td colspan="2"><b><u><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['config']['currency'];?>
 Round Estimate</u></b></td>
                    </tr>
                    <tr>
                      <td><b>Block</b></td>
                      <td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['estimates']['block'],"8");?>
</td>
                    </tr>
                    <tr>
                      <td><b>Fees</b></td>
                      <td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['estimates']['fee'],"8");?>
</td>
                    </tr>
                    <tr>
                      <td><b>Donation</b></td>
                      <td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['estimates']['donation'],"8");?>
</td>
                    </tr>
                    <tr>
                      <td><b>Payout</b></td>
                      <td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['estimates']['payout'],"8");?>
</td>
                    </tr>
                    <tr><td colspan="2">&nbsp;</td></tr>
                    <tr><td colspan="2"><b><u><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['config']['currency'];?>
 Account Balance</u></b></td></tr>
                    <tr><td>Confirmed</td><td align="right"><b><?php echo number_format((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['balance']['confirmed'])===null||$tmp==='' ? "0" : $tmp),"8");?>
</td></tr>
                    <tr><td>Unconfirmed</td><td align="right"><b><?php echo number_format((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['balance']['unconfirmed'])===null||$tmp==='' ? "0" : $tmp),"8");?>
</td></tr>
                  </table>
<?php }} ?>
