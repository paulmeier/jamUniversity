<br />
<div align="center" style="font-size: 18px; font-weight: bold;  color: #808080; font-face:Calibri">{$page_heading}</div>
<h2>Welcome to Jam University</h2>
<i>A website dedicated to keeping you informed about when and where your local entertainment scene is happeneing.</i>
<br />
<br />
<br />
<br />
<h3><b>Drink specials for {$day}</b></h3>
<hr>
<table border="0" align="center">
 <div class="style3" id="Bck">{$noSpecials}</div>
{section name=idx loop=$specialInfo}
<tr>
   <td><a href="{$link_bar}&id={$specialInfo[idx].BARID}">{$specialInfo[idx].NAME}&nbsp;&nbsp;</a></td>
   <td>&nbsp;&nbsp;{$specialInfo[idx].DRINK_NAME}&nbsp;&nbsp;</a></td>
   <td>&nbsp;&nbsp;${$specialInfo[idx].SPECIALPRICE}</td>
</tr>
{/section}
</table>

<br />
<br />
<h3><b>Upcoming Shows</b></h3>
<hr />
<br />
<table border="0" align="center">
 <div class="style3" id="Bck">{$noShows}</div>
{section name=idx loop=$showInfo}
<tr>
   <td>&nbsp;<a href="{$link_band}&id={$showInfo[idx].Bandid}">{$showInfo[idx].Bandname}</a>&nbsp;</td>
   <td>@&nbsp;<a href="{$link_bar}&id={$showInfo[idx].Barid}">{$showInfo[idx].Playing}</a>&nbsp;</td>
   <td>&nbsp;{$showInfo[idx].ShowDate}</td>
</tr>
{/section}
</table>
<br />
<br />