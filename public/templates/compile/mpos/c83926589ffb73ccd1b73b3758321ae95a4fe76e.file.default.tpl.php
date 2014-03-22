<?php /* Smarty version Smarty-3.1.16, created on 2014-03-22 00:41:22
         compiled from "/home/wwwroot/fanchuancoin.com/public/templates/mpos/statistics/round/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1405972949532c6bb2b790d6-43721960%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c83926589ffb73ccd1b73b3758321ae95a4fe76e' => 
    array (
      0 => '/home/wwwroot/fanchuancoin.com/public/templates/mpos/statistics/round/default.tpl',
      1 => 1395321264,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1405972949532c6bb2b790d6-43721960',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_532c6bb2bc2bb5_72853039',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532c6bb2bc2bb5_72853039')) {function content_532c6bb2bc2bb5_72853039($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['payout_system']=='pplns') {?>
   <?php echo $_smarty_tpl->getSubTemplate ("statistics/round/pplns_block_stats.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

   <?php echo $_smarty_tpl->getSubTemplate ("statistics/round/pplns_transactions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

   <?php echo $_smarty_tpl->getSubTemplate ("statistics/round/round_shares.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

   <?php echo $_smarty_tpl->getSubTemplate ("statistics/round/pplns_round_shares.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['payout_system']=='prop') {?>
   <?php echo $_smarty_tpl->getSubTemplate ("statistics/round/block_stats.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

   <?php echo $_smarty_tpl->getSubTemplate ("statistics/round/round_shares.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

   <?php echo $_smarty_tpl->getSubTemplate ("statistics/round/round_transactions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
   <?php echo $_smarty_tpl->getSubTemplate ("statistics/round/block_stats.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

   <?php echo $_smarty_tpl->getSubTemplate ("statistics/round/round_shares.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
<?php }} ?>
