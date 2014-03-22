<?php /* Smarty version Smarty-3.1.16, created on 2014-03-20 21:17:00
         compiled from "/home/wwwroot/fanchuancoin.com/public/templates/mpos/global/navigation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1027028635532aea4c40f2a8-91683397%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0aec2a07e43a4e49b29d62af8238ee3fc712bd6' => 
    array (
      0 => '/home/wwwroot/fanchuancoin.com/public/templates/mpos/global/navigation.tpl',
      1 => 1395321264,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1027028635532aea4c40f2a8-91683397',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_532aea4c4e0e94_13526977',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532aea4c4e0e94_13526977')) {function content_532aea4c4e0e94_13526977($_smarty_tpl) {?>    <hr/>
    <li class="icon-home"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
">Home</a></li>
    <?php if ((($tmp = @$_SESSION['AUTHENTICATED'])===null||$tmp==='' ? "0" : $tmp)==1) {?>
    <h3>My Account</h3>
    <ul class="toggle">
      <li class="icon-gauge"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=dashboard">我的主页</a></li>
      <li class="icon-user"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=account&action=edit">账号设置</a></li>
      <li class="icon-photo"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=account&action=workers">矿工设置</a></li>
      <li class="icon-indent-left"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=account&action=transactions">交易查询</a></li>
    <?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['disable_notifications']) {?><li class="icon-megaphone"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=account&action=notifications">Notifications</a></li><?php }?>

	
    </ul>
    </li>
    <?php }?>
    <?php if ((($tmp = @$_SESSION['AUTHENTICATED'])===null||$tmp==='' ? "0" : $tmp)==1&&$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['is_admin']==1) {?>
     <h3>管理员操作面板</h3>
    <ul class="toggle">
      <li class="icon-gauge"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=dashboard">系统面板</a></li>
      <li class="icon-bell"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=monitoring">系统监控</a></li>
      <li class="icon-torso"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=user">用户信息查询</a></li>
      <li class="icon-money"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=wallet">钱包信息</a></li>
      <li class="icon-exchange"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=transactions">交易信息</a></li>
      <li class="icon-cog"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=settings">设置</a></li>
      <li class="icon-doc"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=news">新闻</a></li>
      <li class="icon-chart"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=reports">Reports</a></li>
      <li class="icon-photo"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=poolworkers">矿池矿工</a></li>
    </ul>
    <?php }?>
    <?php if ((($tmp = @$_SESSION['AUTHENTICATED'])===null||$tmp==='' ? '' : $tmp)) {?>
    <h3>数据统计</h3>
    <ul class="toggle">
      <li class="icon-align-left"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=statistics&action=pool">矿池</a></li>
      <li class="icon-th-large"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=statistics&action=blocks">区块统计</a></li>
      <li class="icon-chart"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=statistics&action=graphs">图表 </a></li>
      <li class="icon-record"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=statistics&action=round">每块分配</a></li>
      <li class="icon-search"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=statistics&action=blockfinder">发现块统计 </a></li>
      </ul>
    <?php } else { ?>
    <h3>数据统计</h3>
    <ul class="toggle">
     <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['acl']['pool']['statistics']) {?>
     <li class="icon-align-left"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=statistics&action=pool">矿池</a></li>
     <?php } else { ?>
     <li class="icon-align-left"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=statistics">数据统计</a>
     <?php }?>
     <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['acl']['block']['statistics']) {?>
     <li class="icon-th-large"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=statistics&action=blocks">区块信息</a></li>
     <?php }?>
     <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['acl']['round']['statistics']) {?>
     <li class="icon-chart"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=statistics&action=round">每块分配</a></li>
     <?php }?>
     <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['acl']['blockfinder']['statistics']) {?>
     <li class="icon-search"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=statistics&action=blockfinder">发现块统计</a></li>
     <?php }?>
     <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['acl']['uptime']['statistics']) {?>
     <?php if ((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['monitoring_uptimerobot_api_keys'])===null||$tmp==='' ? "0" : $tmp)) {?><li class="icon-bell"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=statistics&action=uptime">Uptime</a></li><?php }?>
     <?php }?>
    </ul>
    <?php }?>
    <h3>帮助</h3>
    <ul class="toggle">
      <li class="icon-desktop"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=gettingstarted">开始配置</a></li>
      <?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['website']['about']['disabled']) {?>
      <li class="icon-doc"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=about&action=pool">关于</a></li>
      <?php }?>
      <?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['website']['donors']['disabled']) {?>
      <li class="icon-money"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=about&action=donors">捐赠</a></li>
      <?php }?>
    </ul>
    <h3>其他</h3>
    <ul class="toggle">
      <?php if ((($tmp = @$_SESSION['AUTHENTICATED'])===null||$tmp==='' ? "0" : $tmp)==1) {?>
      <?php if ((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['disable_contactform'])===null||$tmp==='' ? "0" : $tmp)!=1) {?>
      <li class="icon-mail"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=contactform">联系我们</a></li>
      <?php }?>
      <li class="icon-off"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=logout">退出</a></li>
      <?php } else { ?>
      <li class="icon-login"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=login">登录</a></li>
      <li class="icon-pencil"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=register">注册</a></li>
      <?php if ((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['disable_contactform'])===null||$tmp==='' ? "0" : $tmp)!=1) {?>
      <li class="icon-mail"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=contactform">联系</a></li>
      <?php }?>
      <li class="icon-doc"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=tac">Terms and Conditions</a></li>
      <?php }?>
    </ul>
    <ul>
      <hr/>
    </ul>
    <?php if ((($tmp = @$_SESSION['AUTHENTICATED'])===null||$tmp==='' ? "0" : $tmp)==1) {?>
     <br />
    <?php } else { ?>
    <ul>
     <center>
      <div style="display: inline-block;">
      <i><u><b><font size="2">LIVE STATS</font></b></u></i>
      <div id="mr" style="width:180px; height:120px;"></div>
      <div id="hr" style="width:180px; height:120px;"></div>
      </div>
     </center>
    </ul>
    <hr/>
    <?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['website']['api']['disabled']&&!$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['disable_navbar']&&!$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['disable_navbar_api']) {?>
      <?php echo $_smarty_tpl->getSubTemplate ("global/navjs_api.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php } else { ?>
      <?php echo $_smarty_tpl->getSubTemplate ("global/navjs_static.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php }?>
    <?php }?>
<?php }} ?>
