<?php /* Smarty version Smarty-3.1.16, created on 2014-03-20 21:17:27
         compiled from "/home/wwwroot/fanchuancoin.com/public/templates/mpos/dashboard/payout_estimates.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1523323338532aea67e41ef0-58651364%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa2939c4a98fdecb6265c15732eada8029638641' => 
    array (
      0 => '/home/wwwroot/fanchuancoin.com/public/templates/mpos/dashboard/payout_estimates.tpl',
      1 => 1395321264,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1523323338532aea67e41ef0-58651364',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_532aea67e7ea58_16258936',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532aea67e7ea58_16258936')) {function content_532aea67e7ea58_16258936($_smarty_tpl) {?>
         <tr>
           <td colspan="2"><b><u><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['config']['currency'];?>
 Estimates</u></b></td>
         </tr>
<?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['payout_system']!='pps') {?>
         <tr>
           <td><b>当前块</b></td>
           <td id="b-block" class="right"><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['estimates']['block'],"8");?>
</td>
         </tr>
         <tr>
           <td><b>维护费</b></td>
           <td id="b-fee" class="right"><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['estimates']['fee'],"8");?>
</td>
         </tr>
         <tr>
           <td><b>捐赠</b></td>
           <td id="b-donation" class="right"><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['estimates']['donation'],"8");?>
</td>
         </tr>
         <tr>
           <td><b>支付</b></td>
           <td id="b-payout" class="right"><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['estimates']['payout'],"8");?>
</td>
         </tr>
<?php } else { ?>
        <tr>
          <td><b>in 1 hour</b></td>
          <td id="b-est1hour" align="left"><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['estimates']['hours1'],"8");?>
</td>
        </tr>
        <tr>
          <td><b>in 24 hours</b></td>
          <td id="b-est24hours" align="left"><?php echo number_format(($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['estimates']['hours24']),"8");?>
</td>
        </tr>
        <tr>
          <td><b>in 7 days</b></td>
          <td id="b-est7days" align="left"><?php echo number_format(($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['estimates']['days7']),"8");?>
</td>
        </tr>
        <tr>
          <td><b>in 14 days</b></td>
          <td id="b-est14days" align="left"><?php echo number_format(($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['estimates']['days14']),"8");?>
</td>
        </tr>
        <tr>
          <td><b>in 30 days</b></td>
          <td id="b-est30days" align="left"><?php echo number_format(($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['estimates']['days30']),"8");?>
</td>
        </tr>
<?php }?>
<?php }} ?>
