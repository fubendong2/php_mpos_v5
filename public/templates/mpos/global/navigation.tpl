    <hr/>
    <li class="icon-home"><a href="{$smarty.server.SCRIPT_NAME}">Home</a></li>
    {if $smarty.session.AUTHENTICATED|default:"0" == 1}
    <h3>My Account</h3>
    <ul class="toggle">
      <li class="icon-gauge"><a href="{$smarty.server.SCRIPT_NAME}?page=dashboard">我的主页</a></li>
      <li class="icon-user"><a href="{$smarty.server.SCRIPT_NAME}?page=account&action=edit">账号设置</a></li>
      <li class="icon-photo"><a href="{$smarty.server.SCRIPT_NAME}?page=account&action=workers">矿工设置</a></li>
      <li class="icon-indent-left"><a href="{$smarty.server.SCRIPT_NAME}?page=account&action=transactions">交易查询</a></li>
    {if !$GLOBAL.config.disable_notifications}<li class="icon-megaphone"><a href="{$smarty.server.SCRIPT_NAME}?page=account&action=notifications">Notifications</a></li>{/if}

	
    </ul>
    </li>
    {/if}
    {if $smarty.session.AUTHENTICATED|default:"0" == 1 && $GLOBAL.userdata.is_admin == 1}
     <h3>管理员操作面板</h3>
    <ul class="toggle">
      <li class="icon-gauge"><a href="{$smarty.server.SCRIPT_NAME}?page=admin&action=dashboard">系统面板</a></li>
      <li class="icon-bell"><a href="{$smarty.server.SCRIPT_NAME}?page=admin&action=monitoring">系统监控</a></li>
      <li class="icon-torso"><a href="{$smarty.server.SCRIPT_NAME}?page=admin&action=user">用户信息查询</a></li>
      <li class="icon-money"><a href="{$smarty.server.SCRIPT_NAME}?page=admin&action=wallet">钱包信息</a></li>
      <li class="icon-exchange"><a href="{$smarty.server.SCRIPT_NAME}?page=admin&action=transactions">交易信息</a></li>
      <li class="icon-cog"><a href="{$smarty.server.SCRIPT_NAME}?page=admin&action=settings">设置</a></li>
      <li class="icon-doc"><a href="{$smarty.server.SCRIPT_NAME}?page=admin&action=news">新闻</a></li>
      <li class="icon-chart"><a href="{$smarty.server.SCRIPT_NAME}?page=admin&action=reports">Reports</a></li>
      <li class="icon-photo"><a href="{$smarty.server.SCRIPT_NAME}?page=admin&action=poolworkers">矿池矿工</a></li>
    </ul>
    {/if}
    {if $smarty.session.AUTHENTICATED|default}
    <h3>数据统计</h3>
    <ul class="toggle">
      <li class="icon-align-left"><a href="{$smarty.server.SCRIPT_NAME}?page=statistics&action=pool">矿池</a></li>
      <li class="icon-th-large"><a href="{$smarty.server.SCRIPT_NAME}?page=statistics&action=blocks">区块统计</a></li>
      <li class="icon-chart"><a href="{$smarty.server.SCRIPT_NAME}?page=statistics&action=graphs">图表 </a></li>
      <li class="icon-record"><a href="{$smarty.server.SCRIPT_NAME}?page=statistics&action=round">每块分配</a></li>
      <li class="icon-search"><a href="{$smarty.server.SCRIPT_NAME}?page=statistics&action=blockfinder">发现块统计 </a></li>
      </ul>
    {else}
    <h3>数据统计</h3>
    <ul class="toggle">
     {if $GLOBAL.acl.pool.statistics}
     <li class="icon-align-left"><a href="{$smarty.server.SCRIPT_NAME}?page=statistics&action=pool">矿池</a></li>
     {else}
     <li class="icon-align-left"><a href="{$smarty.server.SCRIPT_NAME}?page=statistics">数据统计</a>
     {/if}
     {if $GLOBAL.acl.block.statistics}
     <li class="icon-th-large"><a href="{$smarty.server.SCRIPT_NAME}?page=statistics&action=blocks">区块信息</a></li>
     {/if}
     {if $GLOBAL.acl.round.statistics}
     <li class="icon-chart"><a href="{$smarty.server.SCRIPT_NAME}?page=statistics&action=round">每块分配</a></li>
     {/if}
     {if $GLOBAL.acl.blockfinder.statistics}
     <li class="icon-search"><a href="{$smarty.server.SCRIPT_NAME}?page=statistics&action=blockfinder">发现块统计</a></li>
     {/if}
     {if $GLOBAL.acl.uptime.statistics}
     {if $GLOBAL.config.monitoring_uptimerobot_api_keys|default:"0"}<li class="icon-bell"><a href="{$smarty.server.SCRIPT_NAME}?page=statistics&action=uptime">Uptime</a></li>{/if}
     {/if}
    </ul>
    {/if}
    <h3>帮助</h3>
    <ul class="toggle">
      <li class="icon-desktop"><a href="{$smarty.server.SCRIPT_NAME}?page=gettingstarted">开始配置</a></li>
      {if !$GLOBAL.website.about.disabled}
      <li class="icon-doc"><a href="{$smarty.server.SCRIPT_NAME}?page=about&action=pool">关于</a></li>
      {/if}
      {if !$GLOBAL.website.donors.disabled}
      <li class="icon-money"><a href="{$smarty.server.SCRIPT_NAME}?page=about&action=donors">捐赠</a></li>
      {/if}
    </ul>
    <h3>其他</h3>
    <ul class="toggle">
      {if $smarty.session.AUTHENTICATED|default:"0" == 1}
      {if $GLOBAL.config.disable_contactform|default:"0" != 1}
      <li class="icon-mail"><a href="{$smarty.server.SCRIPT_NAME}?page=contactform">联系我们</a></li>
      {/if}
      <li class="icon-off"><a href="{$smarty.server.SCRIPT_NAME}?page=logout">退出</a></li>
      {else}
      <li class="icon-login"><a href="{$smarty.server.SCRIPT_NAME}?page=login">登录</a></li>
      <li class="icon-pencil"><a href="{$smarty.server.SCRIPT_NAME}?page=register">注册</a></li>
      {if $GLOBAL.config.disable_contactform|default:"0" != 1}
      <li class="icon-mail"><a href="{$smarty.server.SCRIPT_NAME}?page=contactform">联系</a></li>
      {/if}
      <li class="icon-doc"><a href="{$smarty.server.SCRIPT_NAME}?page=tac">Terms and Conditions</a></li>
      {/if}
    </ul>
    <ul>
      <hr/>
    </ul>
    {if $smarty.session.AUTHENTICATED|default:"0" == 1}
     <br />
    {else}
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
    {if !$GLOBAL.website.api.disabled && !$GLOBAL.config.disable_navbar && !$GLOBAL.config.disable_navbar_api}
      {include file="global/navjs_api.tpl"}
    {else}
      {include file="global/navjs_static.tpl"}
    {/if}
    {/if}
