<br />
<h2>{section name=idx loop=$queryBarData}
<img src="{$queryBandData[idx].IMAGE}">
<br><br>
{$queryBarData[idx].NAME}
{/section}
</h2>
<br />
<hr />
<br />
<table border="0" align="center">
{section name=idx loop=$queryBarData}
<tr>
   <tr><td><a href="?modifyBars&id={$queryBarData[idx].ID}">Modify</a></td></tr>
   <tr><td><b>Address:</b></td><td>&#160;{$queryBarData[idx].ADDRESS}&#160;</td></tr>
   <tr><td><b>Phone:</b></td><td>&#160;{$queryBarData[idx].PHONE}&#160;</td></tr>
   <tr><td><b>City:</b></td><td>&#160;{$queryBarData[idx].CITY}&#160;</td></tr>
   <tr><td><b>State:</b></td><td>&#160;{$queryBarData[idx].STATE}&#160;</td></tr>
   <tr><td><b>Zip:</b></td><td>&#160;{$queryBarData[idx].ZIP}&#160;</td></tr>
   <tr><td><a href="http://{$queryBarData[idx].WEBSITE}">Website</a></td></tr>
   
</tr>
{/section}
</table>
<br>
<br>
<h3><b>Drink specials</b></h3>
<hr>
<table border="0" align="center">
 <div class="style3" id="Bck">{$noSpecials}</div>
{section name=idx loop=$specialInfo}
<tr>
   <td>&#160;{$specialInfo[idx].DRINK_NAME}&#160;</a></td>
   <td>&#160;${$specialInfo[idx].SPECIALPRICE}&#160;</td>
   <td>&#160;{$specialInfo[idx].DAY_OF_WEEK}&#160;</a></td>
</tr>
{/section}
</table>
<br />
<br />
<h3><b>Bands Playing at {section name=idx loop=$queryBarData}{$queryBarData[idx].NAME}
{/section}</b></h3>
<hr>
<table border="0" align="center">
 <tr><td><b>Band</b></td><td><b>Date</b></td><td><b>Time</b></td></tr>
 <tr><td></td></tr>
 <div class="style3" id="Bck">{$noShows}</div>
{section name=idx loop=$showInfo}
<tr>
   <td><a href="?indivBand&id={$showInfo[idx].BANDID}">{$showInfo[idx].BANDNAME}&nbsp;&nbsp;</a></td>
   <td>&nbsp;&nbsp;{$showInfo[idx].DATE}&nbsp;&nbsp;</td>
   <td>&nbsp;&nbsp;{$showInfo[idx].TIME}</a></td>
</tr>
{/section}
</table>
<br />
<br />