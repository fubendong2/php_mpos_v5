
         <tr>
           <td colspan="2"><b><u>{$GLOBAL.config.currency} Estimates</u></b></td>
         </tr>
{if $GLOBAL.config.payout_system != 'pps'}
         <tr>
           <td><b>当前块</b></td>
           <td id="b-block" class="right">{$GLOBAL.userdata.estimates.block|number_format:"8"}</td>
         </tr>
         <tr>
           <td><b>维护费</b></td>
           <td id="b-fee" class="right">{$GLOBAL.userdata.estimates.fee|number_format:"8"}</td>
         </tr>
         <tr>
           <td><b>捐赠</b></td>
           <td id="b-donation" class="right">{$GLOBAL.userdata.estimates.donation|number_format:"8"}</td>
         </tr>
         <tr>
           <td><b>支付</b></td>
           <td id="b-payout" class="right">{$GLOBAL.userdata.estimates.payout|number_format:"8"}</td>
         </tr>
{else}
        <tr>
          <td><b>in 1 hour</b></td>
          <td id="b-est1hour" align="left">{$GLOBAL.userdata.estimates.hours1|number_format:"8"}</td>
        </tr>
        <tr>
          <td><b>in 24 hours</b></td>
          <td id="b-est24hours" align="left">{($GLOBAL.userdata.estimates.hours24)|number_format:"8"}</td>
        </tr>
        <tr>
          <td><b>in 7 days</b></td>
          <td id="b-est7days" align="left">{($GLOBAL.userdata.estimates.days7)|number_format:"8"}</td>
        </tr>
        <tr>
          <td><b>in 14 days</b></td>
          <td id="b-est14days" align="left">{($GLOBAL.userdata.estimates.days14)|number_format:"8"}</td>
        </tr>
        <tr>
          <td><b>in 30 days</b></td>
          <td id="b-est30days" align="left">{($GLOBAL.userdata.estimates.days30)|number_format:"8"}</td>
        </tr>
{/if}
