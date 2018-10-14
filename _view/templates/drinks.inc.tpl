<br />
<p align="center">
<b>Drink Specials</b>
</p>
<center><font size=1>Click heading to order list.</font></center>
   <table border="1" align="center">
   <tr>
   <td><center><b><a href="{$link_drink}&orderBy=BAR_NAME">Bar</a></b></center></td>
   <td><center><b><a href="{$link_drink}&orderBy=SPECIALPRICE">Price</a></b></center></td>
   <td><center><b><a href="{$link_drink}&orderBy=DRINK_NAME">Drink</a></b></center></td>
   <td><center><b><a href="{$link_drink}&orderBy=DAY_OF_WEEK">Day</a></b></center></td>
   </tr>
   
{section name=idx loop=$drinkData}
   <tr>
   <td><a href="{$link_bar}&id={$drinkData[idx].BARID}");>&nbsp;{$drinkData[idx].BAR_NAME}</A></td>
   <td>&nbsp;{$drinkData[idx].SPECIALPRICE}</td>
   <td>&nbsp;{$drinkData[idx].DRINK_NAME}</td>
   <td>&nbsp;{$drinkData[idx].DAY_OF_WEEK}</td>
   </tr>
{/section}

</table>
