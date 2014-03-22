<?php /* Smarty version Smarty-3.1.16, created on 2014-03-20 21:17:34
         compiled from "/home/wwwroot/fanchuancoin.com/public/templates/mpos/statistics/pool/general_stats.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1248298590532aea6e4e38c4-94272701%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51620baf0e9e852c3f198febd39a22228b5e84f5' => 
    array (
      0 => '/home/wwwroot/fanchuancoin.com/public/templates/mpos/statistics/pool/general_stats.tpl',
      1 => 1395321264,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1248298590532aea6e4e38c4-94272701',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
    'NETWORK' => 0,
    'ESTTIME' => 0,
    'ESTIMATES' => 0,
    'CURRENTBLOCK' => 0,
    'CURRENTBLOCKHASH' => 0,
    'LASTBLOCK' => 0,
    'TIMESINCELAST' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_532aea6e565944_64300676',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532aea6e565944_64300676')) {function content_532aea6e565944_64300676($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_seconds_to_words')) include '/home/wwwroot/fanchuancoin.com/public/include/smarty/libs/plugins/modifier.seconds_to_words.php';
?> <article class="module width_half">
  <header><h3>数据统计</h3></header>
  <div class="module_content">
    <table width="100%">
      <tbody>
        <tr>
          <th align="left" width="50%">矿池算力</th>
          <td width="70%"><span id="b-hashrate"><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['hashrate'],"3");?>
</span> <?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['hashunits']['pool'];?>
</td>
        </tr>
        <tr>
          <th align="left">矿池效率</td>
          <td><?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['valid']>0) {?><?php echo number_format(($_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['valid']/($_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['valid']+$_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['invalid'])*100),"2");?>
%<?php } else { ?>0%<?php }?></td>
        </tr>
        <tr>
          <th align="left">当前在线矿工</td>
          <td id="b-workers"><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['workers'];?>
</td>
        </tr>
        <tr>
          <th align="left">当前难度</td>
      <?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['website']['chaininfo']['disabled']) {?>
          <td><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['website']['chaininfo']['url'];?>
" target="_new"><font size="2"><span id="b-diff"><?php echo $_smarty_tpl->tpl_vars['NETWORK']->value['difficulty'];?>
</span></font></a></td>
      <?php } else { ?>
          <td><font size="2"><span id="b-diff"><?php echo $_smarty_tpl->tpl_vars['NETWORK']->value['difficulty'];?>
</span></font></td>
      <?php }?>
        </tr>
        <tr>
          <th align="left">预计下次难度</td>
      <?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['website']['chaininfo']['disabled']) {?>
          <td><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['website']['chaininfo']['url'];?>
" target="_new"><font size="2"><?php echo $_smarty_tpl->tpl_vars['NETWORK']->value['EstNextDifficulty'];?>
  (改变在 <?php echo $_smarty_tpl->tpl_vars['NETWORK']->value['BlocksUntilDiffChange'];?>
 区块后)</font></a></td>
      <?php } else { ?>
          <td><font size="2"><?php echo $_smarty_tpl->tpl_vars['NETWORK']->value['EstNextDifficulty'];?>
 (Change in <?php echo $_smarty_tpl->tpl_vars['NETWORK']->value['BlocksUntilDiffChange'];?>
 Blocks)</font></td>
      <?php }?>
        </tr>
        <tr>
          <th align="left">全网预计平均时间（每块）</td>
          <td><font size="2"><?php echo smarty_modifier_seconds_to_words($_smarty_tpl->tpl_vars['NETWORK']->value['EstTimePerBlock']);?>
</font></td>
        </tr>
        <tr>
          <th align="left">矿池预计平均时间（每块）</td>
          <td><?php echo smarty_modifier_seconds_to_words($_smarty_tpl->tpl_vars['ESTTIME']->value);?>
</td>
        </tr>
        <tr>
          <th align="left">预计当前区块shares数</td>
          <td id="b-target"><?php echo $_smarty_tpl->tpl_vars['ESTIMATES']->value['shares'];?>
 (完成情况: <?php echo $_smarty_tpl->tpl_vars['ESTIMATES']->value['percent'];?>
%)</td>
        </tr>
    <?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['website']['blockexplorer']['disabled']) {?>
        <tr>
          <th align="left" width="50%">下一个网络区块</td>
          <td colspan="3"><?php echo $_smarty_tpl->tpl_vars['CURRENTBLOCK']->value+1;?>
 &nbsp;&nbsp;<font size="1"> (当前: <a href="<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['website']['blockexplorer']['url'];?>
<?php echo $_smarty_tpl->tpl_vars['CURRENTBLOCKHASH']->value;?>
" target="_new"><?php echo $_smarty_tpl->tpl_vars['CURRENTBLOCK']->value;?>
)</a></font></td>
        </tr>
    <?php } else { ?>
        <tr>
          <th align="left">下一个网络区块</td>
          <td colspan="3"><?php echo $_smarty_tpl->tpl_vars['CURRENTBLOCK']->value+1;?>
 &nbsp;&nbsp; (Current: <?php echo $_smarty_tpl->tpl_vars['CURRENTBLOCK']->value;?>
)</td>
        </tr>
    <?php }?>
        <tr>
          <th align="left">最后发现区块</td>
          <td colspan="3"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=statistics&action=round&height=<?php echo $_smarty_tpl->tpl_vars['LASTBLOCK']->value;?>
" target="_new"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['LASTBLOCK']->value)===null||$tmp==='' ? "0" : $tmp);?>
</a></td>
        </tr>
        <tr>
          <th align="left">从上一个区块到现在时间</td>
          <td colspan="3"><?php echo smarty_modifier_seconds_to_words($_smarty_tpl->tpl_vars['TIMESINCELAST']->value);?>
</td>
        </tr>
      </tbody>
    </table>
  </div>
  </div>
  <footer>
<?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['website']['api']['disabled']) {?><ul><li>These stats are also available in JSON format <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=api&action=getpoolstatus&api_key=<?php echo (($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['api_key'])===null||$tmp==='' ? '' : $tmp);?>
">HERE</a></li></ul><?php }?>
  </footer>
</article>
<?php }} ?>
