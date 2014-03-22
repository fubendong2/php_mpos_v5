<?php /* Smarty version Smarty-3.1.16, created on 2014-03-20 21:17:00
         compiled from "/home/wwwroot/fanchuancoin.com/public/templates/mpos/global/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1946528520532aea4c397b97-88434090%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '059aad2c239666e5a1f29818ea096b381840e9f8' => 
    array (
      0 => '/home/wwwroot/fanchuancoin.com/public/templates/mpos/global/header.tpl',
      1 => 1395321264,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1946528520532aea4c397b97-88434090',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_532aea4c3b2826_66241060',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532aea4c3b2826_66241060')) {function content_532aea4c3b2826_66241060($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include '/home/wwwroot/fanchuancoin.com/public/include/smarty/libs/plugins/modifier.capitalize.php';
?>    <hgroup>
      <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
"><h1 class="site_title"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['website']['name'])===null||$tmp==='' ? "Unknown Pool" : $tmp);?>
</h1></a>
      <h2 class="section_title"><?php if ((($tmp = @htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp)) {?><?php echo smarty_modifier_capitalize(htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true));?>
<?php } else { ?><?php echo smarty_modifier_capitalize((($tmp = @htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? "home" : $tmp));?>
<?php }?></h2>
    </hgroup><?php }} ?>
