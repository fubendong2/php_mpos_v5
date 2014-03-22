<?php /* Smarty version Smarty-3.1.16, created on 2014-03-20 21:17:02
         compiled from "/home/wwwroot/fanchuancoin.com/public/templates/mpos/login//default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1176462078532aea4ea90df1-83487397%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89cb24f05027dbf24932e7fea8b832780b2285c4' => 
    array (
      0 => '/home/wwwroot/fanchuancoin.com/public/templates/mpos/login//default.tpl',
      1 => 1395321264,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1176462078532aea4ea90df1-83487397',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CTOKEN' => 0,
    'RECAPTCHA' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_532aea4eaccf96_14824586',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532aea4eaccf96_14824586')) {function content_532aea4eaccf96_14824586($_smarty_tpl) {?><article class="module width_half">
  <form action="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=login" method="post" id="loginForm">
    <input type="hidden" name="ctoken" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['CTOKEN']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" />
    <header><h3>登录注册账号</h3></header>
    <div class="module_content">
        <fieldset>
          <label>邮箱（注意：填写注册邮箱）</label>
          <input type="email" name="username" size="22" maxlength="100" value="<?php echo htmlspecialchars((($tmp = @$_REQUEST['username'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" placeholder="Your email" tabindex="1" required />
        </fieldset>
        <fieldset>
          <label>密码</label>
          <input type="password" name="password" size="22" maxlength="100" placeholder="Your password" tabindex="2" required />
        </fieldset>
      <div class="clear"></div>
    </div>
    <center><?php echo (($tmp = @$_smarty_tpl->tpl_vars['RECAPTCHA']->value)===null||$tmp==='' ? '' : $tmp);?>
</center>
    <footer>
      <div class="submit_link">
        <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=password"><font size="1">Forgot your password?</font></a>
        <input type="submit" value="登录" class="alt_btn" />
      </div>
    </footer>
  </form>
</article>
<?php }} ?>
