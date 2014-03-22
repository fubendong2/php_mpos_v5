<?php /* Smarty version Smarty-3.1.16, created on 2014-03-20 21:17:00
         compiled from "/home/wwwroot/fanchuancoin.com/public/templates/mpos/global/userinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1958009843532aea4c3b5029-13780297%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d1ec92fb14605ccd64c2fb5195896c49472d198' => 
    array (
      0 => '/home/wwwroot/fanchuancoin.com/public/templates/mpos/global/userinfo.tpl',
      1 => 1395321264,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1958009843532aea4c3b5029-13780297',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_532aea4c3c0e01_15325443',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532aea4c3c0e01_15325443')) {function content_532aea4c3c0e01_15325443($_smarty_tpl) {?>    <div class="user">
<?php if ((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['username'])===null||$tmp==='' ? '' : $tmp)) {?>
            <p>欢迎 <?php echo htmlspecialchars($_SESSION['USERDATA']['username'], ENT_QUOTES, 'UTF-8', true);?>
</p>
<?php } else { ?>
            <p>欢迎 </p>
<?php }?>
    </div>
<?php }} ?>
