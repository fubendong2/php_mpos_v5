<?php /* Smarty version Smarty-3.1.16, created on 2014-03-21 21:12:50
         compiled from "/home/wwwroot/fanchuancoin.com/public/templates/mobile/login//default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:769272241532c3ad248cc64-67975579%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a259e59b160804e0da5611485a8af09595b2c61' => 
    array (
      0 => '/home/wwwroot/fanchuancoin.com/public/templates/mobile/login//default.tpl',
      1 => 1395321264,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '769272241532c3ad248cc64-67975579',
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
  'unifunc' => 'content_532c3ad25b7887_67893771',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532c3ad25b7887_67893771')) {function content_532c3ad25b7887_67893771($_smarty_tpl) {?>      <form action="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=login" method="post" id="loginForm" data-ajax="false">
        <input type="hidden" name="ctoken" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['CTOKEN']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" />
        <p><label for="userForm">Email</label><input type="text" name="username" value="" id="userForm"></p>
        <p><label for="passForm">Password</label><input type="password" name="password" value="" id="passForm"></p>
        <center><?php echo (($tmp = @$_smarty_tpl->tpl_vars['RECAPTCHA']->value)===null||$tmp==='' ? '' : $tmp);?>
</center>
        <center><p><input type="submit" value="Login"></p></center>
      </form>
      <center><p><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=password"><font size="1">Forgot your password?</font></a></p></center>
<?php }} ?>
