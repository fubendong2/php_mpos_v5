<?php /* Smarty version Smarty-3.1.16, created on 2014-03-20 21:17:03
         compiled from "/home/wwwroot/fanchuancoin.com/public/templates/mpos/register//default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:736114688532aea4f787892-88298172%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db36a66e74d17a09d679c1bc49075b50b60ef487' => 
    array (
      0 => '/home/wwwroot/fanchuancoin.com/public/templates/mpos/register//default.tpl',
      1 => 1395321264,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '736114688532aea4f787892-88298172',
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
  'unifunc' => 'content_532aea4f7da244_93332222',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532aea4f7da244_93332222')) {function content_532aea4f7da244_93332222($_smarty_tpl) {?>
<form action="<?php echo $_SERVER['SCRIPT_NAME'];?>
" method="post">
<article class="module width_half">
  <header><h3>注册新账号</h3></header>
  <div class="module_content">
    <input type="hidden" name="page" value="<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
">
<?php if ((($tmp = @$_REQUEST['token'])===null||$tmp==='' ? '' : $tmp)) {?>
    <input type="hidden" name="token" value="<?php echo htmlspecialchars($_REQUEST['token'], ENT_QUOTES, 'UTF-8', true);?>
" />
<?php }?>
	<input type="hidden" name="ctoken" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['CTOKEN']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" />
    <input type="hidden" name="action" value="register">
    <fieldset>
      <label>用户名</label>
      <input type="text" class="text tiny" name="username" value="<?php echo (($tmp = @htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" size="15" maxlength="20" required>
    </fieldset>
    <fieldset>
      <label>密码</label> 
      <p style="padding-right:10px;display:block;margin-top:0px;float:right;color:#999;" id="pw_strength">Strength</p>
      <input type="password" class="text tiny" name="password1" value="" size="15" maxlength="100" id="pw_field" required>
      <label>Repeat Password</label>
      <p style="padding-right:10px;display:block;margin-top:0px;float:right;" id="pw_match"></p>
      <input type="password" class="text tiny" name="password2" value="" size="15" maxlength="100" id="pw_field2" required>
    </fieldset>
    <fieldset>
      <label>邮箱</label>
      <input type="text" name="email1" class="text small" value="<?php echo (($tmp = @htmlspecialchars($_POST['email1'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" size="15" required>
      <label>Email Repeat</label>
      <input type="text" class="text small" name="email2" value="<?php echo (($tmp = @htmlspecialchars($_POST['email2'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" size="15" required>
    </fieldset>
    <fieldset>
      <label>PIN</label>
      <input type="password" class="text pin" name="pin" value="" size="4" maxlength="4"><font size="1"> (4 digit number. <b>Remember this pin!</b>)</font>
    </fieldset>
    <fieldset>
      <label>Terms and Conditions</label><a style="width:152px;" onclick="TINY.box.show({url:'?page=tacpop',height:500})"><font size="1">接受条款</font></a>
      <input type="checkbox" value="1" name="tac" id="tac">
      <label for="tac" style="margin:1px 0px 0px -20px"></label>
    </fieldset>
    <center><?php echo (($tmp = @$_smarty_tpl->tpl_vars['RECAPTCHA']->value)===null||$tmp==='' ? '' : $tmp);?>
</center>
  </div>
  <footer>
    <div class="submit_link">
      <input type="submit" value="注册" class="alt_btn">
    </div>
  </footer>
</article>
</form>
<?php }} ?>
