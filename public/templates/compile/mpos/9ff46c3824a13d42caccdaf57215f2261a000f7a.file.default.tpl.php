<?php /* Smarty version Smarty-3.1.16, created on 2014-03-22 00:41:48
         compiled from "/home/wwwroot/fanchuancoin.com/public/templates/mpos/contactform//default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:507463132532c6bcc233dd2-93184552%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ff46c3824a13d42caccdaf57215f2261a000f7a' => 
    array (
      0 => '/home/wwwroot/fanchuancoin.com/public/templates/mpos/contactform//default.tpl',
      1 => 1395321264,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '507463132532c6bcc233dd2-93184552',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'RECAPTCHA' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_532c6bcc2af820_88985611',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532c6bcc2af820_88985611')) {function content_532c6bcc2af820_88985611($_smarty_tpl) {?><form action="<?php echo $_SERVER['SCRIPT_NAME'];?>
" method="post">
  <input type="hidden" name="page" value="<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
">
  <input type="hidden" name="action" value="contactform">
    <article class="module width_3_quarter">
    <header><h3>Contact Us</h3></header>
    <div class="module_content">
      <fieldset>
        <label for="senderName">Your Name</label>
        <input type="text" class="text tiny" name="senderName" value="<?php echo (($tmp = @htmlspecialchars($_REQUEST['senderName'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Please type your name" size="15" maxlength="100" required />
      </fieldset>
      <fieldset>
        <label for="senderEmail">Your Email Address</label>
        <input type="text" class="text tiny" name="senderEmail" value="<?php echo (($tmp = @htmlspecialchars($_REQUEST['senderEmail'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Please type your email" size="50"  maxlength="100" required />
      </fieldset>
      <fieldset>
        <label for="senderEmail">Your Subject</label>
        <input type="text" class="text tiny" name="senderSubject" value="<?php echo (($tmp = @htmlspecialchars($_REQUEST['senderSubject'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Please type your subject" size="15" maxlength="100" required />
      </fieldset>
      <fieldset>
        <label for="message">Your Message</label>
        <textarea type="text" name="senderMessage" cols="80" rows="10" maxlength="10000" required><?php echo (($tmp = @htmlspecialchars($_REQUEST['senderMessage'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</textarea>
      </fieldset>
      <center><?php echo (($tmp = @$_smarty_tpl->tpl_vars['RECAPTCHA']->value)===null||$tmp==='' ? '' : $tmp);?>
</center>
    </div>
    <footer>
      <div class="submit_link"><input type="submit" class="alt_btn" name="sendMessage" value="Send Email" /></div>
    </footer>
  </article>
</form>
<?php }} ?>
