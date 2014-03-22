<?php /* Smarty version Smarty-3.1.16, created on 2014-03-20 21:17:34
         compiled from "/home/wwwroot/fanchuancoin.com/public/templates/mpos/statistics/js.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1085858905532aea6e5ae889-15558876%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8bfc82e2e279049f53e13585a7d3b61ec5a14e94' => 
    array (
      0 => '/home/wwwroot/fanchuancoin.com/public/templates/mpos/statistics/js.tpl',
      1 => 1395321264,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1085858905532aea6e5ae889-15558876',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_532aea6e5bc0f2_74652770',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532aea6e5bc0f2_74652770')) {function content_532aea6e5bc0f2_74652770($_smarty_tpl) {?><script>

$(document).ready(function(){

  // Ajax API URL
  var url = "<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=api&action=getnavbardata";

  function refreshStaticData(data) {
     $('#b-workers').html((parseFloat(data.getnavbardata.data.pool.workers).toFixed(0)));
     $('#b-hashrate').html((parseFloat(data.getnavbardata.data.pool.hashrate).toFixed(3)));
     $('#b-target').html(data.getnavbardata.data.pool.estimated + " (done: " + data.getnavbardata.data.pool.progress + "%)");
     $('#b-diff').html(data.getnavbardata.data.network.difficulty);
  }

  // Our worker process to keep gauges and graph updated
  (function worker() {
    $.ajax({
      url: url,
      dataType: 'json',
      success: function(data) {
        refreshStaticData(data);
      },
      complete: function() {
        setTimeout(worker, <?php echo (($tmp = @($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['statistics_ajax_refresh_interval']*1000))===null||$tmp==='' ? "10000" : $tmp);?>
)
     }
   });
 })();
});

</script>
<?php }} ?>
