<?php /* Smarty version Smarty-3.1.16, created on 2014-03-21 21:12:46
         compiled from "/home/wwwroot/fanchuancoin.com/public/templates/mobile/global/navigation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1651095119532c3ace755731-51642065%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '000161c4d77bf503bf3548b6ed463d8ad1c6760d' => 
    array (
      0 => '/home/wwwroot/fanchuancoin.com/public/templates/mobile/global/navigation.tpl',
      1 => 1395321264,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1651095119532c3ace755731-51642065',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_532c3ace777d32_58543721',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532c3ace777d32_58543721')) {function content_532c3ace777d32_58543721($_smarty_tpl) {?>
        <?php if ((($tmp = @$_SESSION['AUTHENTICATED'])===null||$tmp==='' ? "0" : $tmp)==1) {?>
        <a href="#left-sidebar" data-icon="arrow-l" data-iconpos="notext" data-shadow="false" data-iconshadow="false" class="ui-icon-nodisc">Left Sidebar</a>
        <?php }?>
        <div data-role="navbar">
          <ul>
            <?php if ((($tmp = @$_SESSION['AUTHENTICATED'])===null||$tmp==='' ? "0" : $tmp)==1) {?>
            <li><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=dashboard" data-icon="grid" data-ajax="false">Dashboard</a></li>
            <li><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=account&action=workers" data-icon="grid" data-ajax="false">Worker</a></li>
            <li><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=statistics&action=pool" data-icon="grid" data-ajax="false">Statistics</a></li>
            <li><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=logout" data-icon="gear" data-ajax="false">Logout</a></li>
            <?php } else { ?>
            <li><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
" data-icon="info" data-ajax="false">News</a></li>
            <li><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=login" data-icon="gear" data-ajax="false">Login</a></li>
            <?php }?>
          </ul>
        </div>
<?php }} ?>
