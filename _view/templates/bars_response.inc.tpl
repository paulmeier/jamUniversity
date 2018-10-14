<br />
<div align="center" style="font-size: 18px; font-weight: bold;  color: #808080; font-face:Calibri">{$page_heading}</div>
<div align="center"><h3>Bars</h3></div>
<br />
<a href="?barsAZ">Bars A to Z</a>
<br />
<hr />
<br />
<h5>Search bars by:</h5>
<form name="barSearchForm" action="" method="POST">
<div align="center">
<table><br />
<tr><td>Bar Name:</td><td><input type="text" name="barName" size="40" maxlength="50"/></td></tr>
<tr><td>City:</td><td><input type="text" name="city" size="40" maxlength="50"/></td></tr>
</table>
<INPUT type="submit" name="submit" value="Submit"/>
</div>
</form>
<br />
<br />
<table border="0" align="center">
 <div class="style3" id="Bck">{$queryResult}</div>
{section name=idx loop=$barResults}
   <tr>
   <td><img src="{$barResults[idx].IMAGE}"></td>
   <td>&#160;<a href="{$link_bar}&id={$barResults[idx].BarId}">{$barResults[idx].Name}&#160;</a></td>
   <td>&#160;{$barResults[idx].City}&#160;</td>
   <td>&#160;{$barResults[idx].Phone}&#160;</td>
   </tr>
{/section}
</table>