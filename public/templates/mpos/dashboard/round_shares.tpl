         <tr>
           <td colspan="2"><b><u>当前 Shares</u></b> <span id='tt'><img src='{$PATH}/images/questionmark.png' height='15px' width='15px' title='Submitted shares since last found block (ie. round shares)'></span></td>
         </tr>
         <tr>
           <td><b>预计的Shares</b></td>
           <td id="b-target" class="right">{$ESTIMATES.shares|number_format} (done: {$ESTIMATES.percent}%)</td>
         </tr>
         <tr>
           <td><b>矿池 Shares</b></td>
           <td id="b-pvalid" class="right">{$GLOBAL.roundshares.valid|number_format}</td>
         </tr>
         <tr>
           <td><b>我的 Shares<b></td>
           <td id="b-yvalid" class="right">{$GLOBAL.userdata.shares.valid|number_format}</td>
         </tr>
         <tr>
           <td><b>矿池无效Shares </b></td>
           <td id="b-pivalid" class="right">{$GLOBAL.roundshares.invalid|number_format} {if $GLOBAL.roundshares.valid > 0}({($GLOBAL.roundshares.invalid / ($GLOBAL.roundshares.valid + $GLOBAL.roundshares.invalid) * 100)|number_format:"2"}%){else}(0.00%){/if}</td></td>
         </tr>
         <tr>
           <td><b>我的 Shares</b></td>
           <td id="b-yivalid" class="right">{$GLOBAL.userdata.shares.invalid|number_format} {if $GLOBAL.userdata.shares.valid > 0}({($GLOBAL.userdata.shares.invalid / ($GLOBAL.userdata.shares.valid + $GLOBAL.userdata.shares.invalid) * 100)|number_format:"2"}%){else}(0.00%){/if}</td>
         </tr>
