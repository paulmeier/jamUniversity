<br />
<div align="center" style="font-size: 18px; font-weight: bold;  color: #808080; font-face:Calibri">{$page_heading}</div>
<div align="center"><h3>Bands</h3></div>
<br />
<a href="?bandsAZ">Bands A to Z</a>
<br />
<hr />
<br />
<h5>Search bands by:</h5>
<form name="bandSearchForm" action="" method="POST">
<div align="center">
<table><br />
<tr><td>Band Name:</td><td><input type="text" name="bandName" size="40" maxlength="50"/></td></tr>
<tr><td>Genre:</td><td><input type="text" name="genreName" size="40" maxlength="50"/></td></tr>
</table>
<INPUT type="submit" name="submit" value="Submit"/>
</div>
</form>
<br />
<br />
<table border="0" align="center">
 <div class="style3" id="Bck">{$queryResult}</div>
{section name=idx loop=$bandResults}
   <tr>
   <td>&#160;<a href="{$link_band}&id={$bandResults[idx].BandId}">{$bandResults[idx].Bandname}</a>&#160;</td>
   <td>&#160;{$bandResults[idx].Genre}&#160;</td>
   <td>&#160;<a href="{$bandResults[idx].WEBSITE}">Website&#160;</td>
   </tr>
{/section}
</table>