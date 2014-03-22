<?php /* Smarty version Smarty-3.1.16, created on 2014-03-21 23:43:10
         compiled from "/home/wwwroot/fanchuancoin.com/public/templates/mpos/statistics/graphs/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:83238868532c5e0e5ea1f4-94026298%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10361efa54b53f9f96234e22fbe7e4b5c5445a93' => 
    array (
      0 => '/home/wwwroot/fanchuancoin.com/public/templates/mpos/statistics/graphs/default.tpl',
      1 => 1395321264,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '83238868532c5e0e5ea1f4-94026298',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_532c5e0e646ed3_42777918',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532c5e0e646ed3_42777918')) {function content_532c5e0e646ed3_42777918($_smarty_tpl) {?><article class="module width_full">
  <header>
    <h3 class="tabs_involved">矿池速度统计</h3>
    <ul class="tabs">
        <li><a href="#mine">矿工</a></li>
        <li><a href="#pool">矿池</a></li>
        <li><a href="#both">矿池+矿工</a></li>
    </ul>
  </header>
  <div class="tab_container">
<?php ob_start();?><?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ($_tmp1."/".$_tmp2."/mine.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php ob_start();?><?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp3=ob_get_clean();?><?php ob_start();?><?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp4=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ($_tmp3."/".$_tmp4."/pool.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php ob_start();?><?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp5=ob_get_clean();?><?php ob_start();?><?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp6=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ($_tmp5."/".$_tmp6."/both.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  </div>
</article>
<?php }} ?>
