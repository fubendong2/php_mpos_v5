<?php /* Smarty version Smarty-3.1.16, created on 2014-03-22 00:41:22
         compiled from "/home/wwwroot/fanchuancoin.com/public/templates/mpos/statistics/round/block_stats.tpl" */ ?>
<?php /*%%SmartyHeaderCode:835528417532c6bb2bc7e34-68183899%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f861e4ba3df1a884ad0cf9bb8fe7e40c34deff6a' => 
    array (
      0 => '/home/wwwroot/fanchuancoin.com/public/templates/mpos/statistics/round/block_stats.tpl',
      1 => 1395321264,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '835528417532c6bb2bc7e34-68183899',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BLOCKDETAILS' => 0,
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_532c6bb2c54161_54060393',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532c6bb2c54161_54060393')) {function content_532c6bb2c54161_54060393($_smarty_tpl) {?><article class="module width_full">
  <header><h3>Block Statistics</h3></header>
  <table class="tablesorter">
    <tbody>
      <tr>
        <td align="left">
          <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=<?php echo $_REQUEST['page'];?>
&action=<?php echo $_REQUEST['action'];?>
&height=<?php echo $_smarty_tpl->tpl_vars['BLOCKDETAILS']->value['height'];?>
&prev=1"><i class="icon-left-open"></i></a>
        </td>
        <td colspan="7" align="right">
          <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=<?php echo $_REQUEST['page'];?>
&action=<?php echo $_REQUEST['action'];?>
&height=<?php echo $_smarty_tpl->tpl_vars['BLOCKDETAILS']->value['height'];?>
&next=1"><i class="icon-right-open"></i></a>
        </td>
      </tr>
      <tr class="odd">
        <td>ID</td>
        <td><?php echo (($tmp = @number_format($_smarty_tpl->tpl_vars['BLOCKDETAILS']->value['id'],"0"))===null||$tmp==='' ? "0" : $tmp);?>
</td>
        <td>Height</td>
	<?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['website']['blockexplorer']['disabled']) {?>
      	<td><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['website']['blockexplorer']['url'];?>
<?php echo $_smarty_tpl->tpl_vars['BLOCKDETAILS']->value['blockhash'];?>
" target="_new"><?php echo (($tmp = @number_format($_smarty_tpl->tpl_vars['BLOCKDETAILS']->value['height'],"0"))===null||$tmp==='' ? "0" : $tmp);?>
</a></td>
	<?php } else { ?>
      	<td><?php echo (($tmp = @number_format($_smarty_tpl->tpl_vars['BLOCKDETAILS']->value['height'],"0"))===null||$tmp==='' ? "0" : $tmp);?>
</td>
	<?php }?>
        <td>Amount</td>
        <td><?php echo (($tmp = @number_format($_smarty_tpl->tpl_vars['BLOCKDETAILS']->value['amount']))===null||$tmp==='' ? "0" : $tmp);?>
</td>
        <td>Confirmations</td>
        <td><?php if ($_smarty_tpl->tpl_vars['BLOCKDETAILS']->value['confirmations']>=$_smarty_tpl->tpl_vars['GLOBAL']->value['confirmations']) {?>
          <font color="green">Confirmed</font>
        <?php } elseif ($_smarty_tpl->tpl_vars['BLOCKDETAILS']->value['confirmations']==-1) {?>
          <font color="red">Orphan</font>
        <?php } elseif ($_smarty_tpl->tpl_vars['BLOCKDETAILS']->value['confirmations']==0) {?>0
        <?php } else { ?><?php echo (($tmp = @($_smarty_tpl->tpl_vars['GLOBAL']->value['confirmations']-$_smarty_tpl->tpl_vars['BLOCKDETAILS']->value['confirmations']))===null||$tmp==='' ? "0" : $tmp);?>
 left<?php }?></td>
      </tr>
      <tr class="even">
        <td>难度</td>
        <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['BLOCKDETAILS']->value['difficulty'])===null||$tmp==='' ? "0" : $tmp);?>
</td>
        <td>时间</td>
        <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['BLOCKDETAILS']->value['time'])===null||$tmp==='' ? "0" : $tmp);?>
</td>
        <td>Shares数</td>
        <td><?php echo (($tmp = @number_format($_smarty_tpl->tpl_vars['BLOCKDETAILS']->value['shares'],"0"))===null||$tmp==='' ? "0" : $tmp);?>
</td>
        <td>发现者</td>
        <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['BLOCKDETAILS']->value['finder'])===null||$tmp==='' ? "unknown" : $tmp);?>
</td>
      </tr>
    </tbody>
  </table>
  <footer>
    <div class="submit_link">
      <form action="<?php echo $_SERVER['SCRIPT_NAME'];?>
" method="POST" id='search'>
        <input type="hidden" name="page" value="<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
">
        <input type="hidden" name="action" value="<?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
">
        <input type="text" class="pin" name="search" value="<?php echo htmlspecialchars((($tmp = @$_REQUEST['height'])===null||$tmp==='' ? "%" : $tmp), ENT_QUOTES, 'UTF-8', true);?>
">
        <input type="submit" value="搜索" class="alt_btn">
      </form>
    </div>
  </footer>
</article>
<?php }} ?>
