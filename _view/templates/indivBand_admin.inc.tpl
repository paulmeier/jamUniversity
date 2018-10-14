<br />
<div align="center" style="font-size: 18px; font-weight: bold;  color: #808080; font-face:Calibri">{$page_heading}</div>
<h2>{section name=idx loop=$queryBandData}
<img src="{$queryBandData[idx].IMAGE}">
<br><br>
{$queryBandData[idx].BANDNAME}
{/section}
</h2>
<br />
<hr />
<br />
<table border="0" align="center">
{section name=idx loop=$queryBandData}
   <tr><td>&#160;<a href="http://{$queryBandData[idx].WEBSITE}">Website</a>&#160;</td></tr>
   <tr><td><b>Genre:</b></td><td>{$queryBandData[idx].GENRE}&#160;</td></tr>
   <tr><td><b>Hometown:</b></td><td>{$queryBandData[idx].HOME_TOWN}&#160;</td></tr>
   <tr><td><b><a href="{$queryBandData[idx].WEBSITE}">Website</a>&#160;</td></tr>
{/section}
</table>
<br>
<FIELDSET><LEGEND><b>Description:</b></LEGEND>{section name=idx loop=$queryBandData}{$queryBandData[idx].BANDDESC}{/section}</FIELDSET>
<br><br>
<table width="300">
  <h3><i></i>Members<td width="180"></i></h3><br />
<tr><td><b>Name<b></td><td width="100"><b>Instrument</b></td>
</tr>
{section name=idx loop=$membersData}
<tr>
<td>{$membersData[idx].FNAME}&nbsp;{$membersData[idx].LNAME}</td>
<td>{$membersData[idx].INSTRUMENT}</td>
</tr>
{/section}
</table>
<br /><br />
<h3><i></i>Upcoming shows</i></h3><br />
<table border="0" align="center" width="500">
<tr><td width="180"><b>Location<b></td><td width="180"><b>Date</b></td><td width="180"><b>Time</b></td>
 <div class="style3" id="Bck">{$noShows}</div>
{section name=idx loop=$allShowInfo}
<tr>
   <td>@<a href="{$link_bar}&id={$allShowInfo[idx].Barid}">&#160;{$allShowInfo[idx].Playing}&#160;</a></td>
   <td>&#160;{$allShowInfo[idx].ShowDate}&#160;</td>
   <td>&#160;{$allShowInfo[idx].TIME}&#160;</td>
</tr>
{/section}
</table>
<br />
<br />