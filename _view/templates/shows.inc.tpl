<br />
<div align="center" style="font-size: 18px; font-weight: bold;  color: #808080; font-face:Calibri">{$page_heading}</div>
<h2>Shows</h2>
Upcoming shows
<br />
<hr />
<br />
<table border="0" align="center">
 <div class="style3" id="Bck">{$noShows}</div>
{section name=idx loop=$allShowInfo}
   <tr>
   <td>&#160;<a href="{$link_band}&id={$allShowInfo[idx].BANDID}">{$allShowInfo[idx].Bandname}&#160;</td>
   <td>&#160;<a href="{$allShowInfo[idx].WEBSITE}">Website</a>&#160;</td>
   <td>@ &#160;<a href="{$link_bar}&id={$allShowInfo[idx].BARID}">{$allShowInfo[idx].Playing}&#160;</td>
   <td>&#160;{$allShowInfo[idx].ShowDate}&#160;</td>
   </tr>
{/section}
</table>
<br />
<br />