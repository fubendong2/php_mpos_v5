<?php /* Smarty version Smarty-3.1.16, created on 2014-03-20 21:17:27
         compiled from "/home/wwwroot/fanchuancoin.com/public/templates/mpos/dashboard/network_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:971291480532aea67e81fe9-66162007%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e45e157c2733ae8267f288cda164aded2aacb7b0' => 
    array (
      0 => '/home/wwwroot/fanchuancoin.com/public/templates/mpos/dashboard/network_info.tpl',
      1 => 1395321264,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '971291480532aea67e81fe9-66162007',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'NETWORK' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_532aea67e98174_14214525',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532aea67e98174_14214525')) {function content_532aea67e98174_14214525($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_seconds_to_words')) include '/home/wwwroot/fanchuancoin.com/public/include/smarty/libs/plugins/modifier.seconds_to_words.php';
?>         <tr>
           <td colspan="2"><b><u>全网信息</u></b></td>
         </tr>
         <tr>
           <td><b>难度</b></td>
           <td id="b-diff" class="right"><?php echo number_format($_smarty_tpl->tpl_vars['NETWORK']->value['difficulty'],"8");?>
</td>
         </tr>
         <tr>
           <td><b>预计下次难度</b></td>
           <td id="b-nextdiff" class="right"><?php echo number_format($_smarty_tpl->tpl_vars['NETWORK']->value['EstNextDifficulty'],"8");?>
 (Change in <?php echo $_smarty_tpl->tpl_vars['NETWORK']->value['BlocksUntilDiffChange'];?>
 Blocks)</td>
         </tr>
         <tr>
           <td><b>平均区块产生时间</b></td>
           <td id="b-esttimeperblock" class="right"><?php echo smarty_modifier_seconds_to_words($_smarty_tpl->tpl_vars['NETWORK']->value['EstTimePerBlock']);?>
</td>
         </tr>
         <tr>
           <td><b>当前区块</b></td>
           <td id="b-nblock" class="right"><?php echo $_smarty_tpl->tpl_vars['NETWORK']->value['block'];?>
</td>
         </tr>
<?php }} ?>
