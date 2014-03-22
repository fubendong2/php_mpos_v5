<?php /* Smarty version Smarty-3.1.16, created on 2014-03-21 11:08:34
         compiled from "/home/wwwroot/fanchuancoin.com/public/templates/mpos/statistics/blocks/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1629757917532bad32a5c9e5-69914064%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ff24a550138fde33ba1e9b5ab453daf509a1a40' => 
    array (
      0 => '/home/wwwroot/fanchuancoin.com/public/templates/mpos/statistics/blocks/default.tpl',
      1 => 1395321264,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1629757917532bad32a5c9e5-69914064',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_532bad32af2b42_29651611',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532bad32af2b42_29651611')) {function content_532bad32af2b42_29651611($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("statistics/blocks/block_shares_graph.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("statistics/blocks/block_overview_time.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("statistics/blocks/blocks_found_details.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
