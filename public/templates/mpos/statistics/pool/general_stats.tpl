 <article class="module width_half">
  <header><h3>数据统计</h3></header>
  <div class="module_content">
    <table width="100%">
      <tbody>
        <tr>
          <th align="left" width="50%">矿池算力</th>
          <td width="70%"><span id="b-hashrate">{$GLOBAL.hashrate|number_format:"3"}</span> {$GLOBAL.hashunits.pool}</td>
        </tr>
        <tr>
          <th align="left">矿池效率</td>
          <td>{if $GLOBAL.roundshares.valid > 0}{($GLOBAL.roundshares.valid / ($GLOBAL.roundshares.valid + $GLOBAL.roundshares.invalid) * 100)|number_format:"2"}%{else}0%{/if}</td>
        </tr>
        <tr>
          <th align="left">当前在线矿工</td>
          <td id="b-workers">{$GLOBAL.workers}</td>
        </tr>
        <tr>
          <th align="left">当前难度</td>
      {if ! $GLOBAL.website.chaininfo.disabled}
          <td><a href="{$GLOBAL.website.chaininfo.url}" target="_new"><font size="2"><span id="b-diff">{$NETWORK.difficulty}</span></font></a></td>
      {else}
          <td><font size="2"><span id="b-diff">{$NETWORK.difficulty}</span></font></td>
      {/if}
        </tr>
        <tr>
          <th align="left">预计下次难度</td>
      {if ! $GLOBAL.website.chaininfo.disabled}
          <td><a href="{$GLOBAL.website.chaininfo.url}" target="_new"><font size="2">{$NETWORK.EstNextDifficulty}  (改变在 {$NETWORK.BlocksUntilDiffChange} 区块后)</font></a></td>
      {else}
          <td><font size="2">{$NETWORK.EstNextDifficulty} (Change in {$NETWORK.BlocksUntilDiffChange} Blocks)</font></td>
      {/if}
        </tr>
        <tr>
          <th align="left">全网预计平均时间（每块）</td>
          <td><font size="2">{$NETWORK.EstTimePerBlock|seconds_to_words}</font></td>
        </tr>
        <tr>
          <th align="left">矿池预计平均时间（每块）</td>
          <td>{$ESTTIME|seconds_to_words}</td>
        </tr>
        <tr>
          <th align="left">预计当前区块shares数</td>
          <td id="b-target">{$ESTIMATES.shares} (完成情况: {$ESTIMATES.percent}%)</td>
        </tr>
    {if ! $GLOBAL.website.blockexplorer.disabled}
        <tr>
          <th align="left" width="50%">下一个网络区块</td>
          <td colspan="3">{$CURRENTBLOCK + 1} &nbsp;&nbsp;<font size="1"> (当前: <a href="{$GLOBAL.website.blockexplorer.url}{$CURRENTBLOCKHASH}" target="_new">{$CURRENTBLOCK})</a></font></td>
        </tr>
    {else}
        <tr>
          <th align="left">下一个网络区块</td>
          <td colspan="3">{$CURRENTBLOCK + 1} &nbsp;&nbsp; (Current: {$CURRENTBLOCK})</td>
        </tr>
    {/if}
        <tr>
          <th align="left">最后发现区块</td>
          <td colspan="3"><a href="{$smarty.server.SCRIPT_NAME}?page=statistics&action=round&height={$LASTBLOCK}" target="_new">{$LASTBLOCK|default:"0"}</a></td>
        </tr>
        <tr>
          <th align="left">从上一个区块到现在时间</td>
          <td colspan="3">{$TIMESINCELAST|seconds_to_words}</td>
        </tr>
      </tbody>
    </table>
  </div>
  </div>
  <footer>
{if !$GLOBAL.website.api.disabled}<ul><li>These stats are also available in JSON format <a href="{$smarty.server.SCRIPT_NAME}?page=api&action=getpoolstatus&api_key={$GLOBAL.userdata.api_key|default:""}">HERE</a></li></ul>{/if}
  </footer>
</article>
