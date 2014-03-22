<?php /* Smarty version Smarty-3.1.16, created on 2014-03-21 21:13:40
         compiled from "/home/wwwroot/fanchuancoin.com/public/templates/mobile/statistics/pool/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:667348306532c3b0492bba5-04874021%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fdcfe7646d475e8612fd21df6b3bc243aa39017c' => 
    array (
      0 => '/home/wwwroot/fanchuancoin.com/public/templates/mobile/statistics/pool/default.tpl',
      1 => 1395321264,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '667348306532c3b0492bba5-04874021',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_532c3b04958658_87694324',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532c3b04958658_87694324')) {function content_532c3b04958658_87694324($_smarty_tpl) {?><div data-role="collapsible">
  <h3>User Hashrates</h3>
<?php echo $_smarty_tpl->getSubTemplate ("statistics/pool/contributors_hashrate.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>

<div data-role="collapsible">
  <h3>User Shares</h3>
<?php echo $_smarty_tpl->getSubTemplate ("statistics/pool/contributors_shares.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>

<div data-role="collapsible">
  <h3>General Stats</h3>
<?php echo $_smarty_tpl->getSubTemplate ("statistics/pool/general_stats.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>

<div data-role="collapsible">
<h3>Last Blocks</h3>
<?php echo $_smarty_tpl->getSubTemplate ("statistics/blocks/small_table.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('ALIGN'=>"right",'SHORT'=>true), 0);?>

</div>
<?php }} ?>
