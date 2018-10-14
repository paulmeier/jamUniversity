<br />
<div align="center" style="font-size: 18px; font-weight: bold;  color: #808080; font-face:Calibri">{$page_heading}</div>
<br>
<hr />
<br />
<form name="bandModifyForm" action="" method="POST">
<table><br />
{section name=idx loop=$bandData}
<tr><td>Band Name:</td><td><input type="text" name="bandName" size="40" maxlength="50" value="{$bandData[idx].BANDNAME}"/></td></tr>
<tr><td>Genre:</td><td><input type="text" name="genreName" size="40" maxlength="50" value="{$bandData[idx].GENRE}"/></td></tr>
<tr><td>Website:</td><td><input type="text" name="website" size="40" maxlength="50" value="{$bandData[idx].WEBSITE}"/></td></tr>
<tr><td>ImageURL:</td><td><input type="text" name="imageURL" size="40" maxlength="50" value="{$bandData[idx].IMAGEURL}"/></td></tr>
{/section}
</table>
<table><br />
<tr><td>Band Members:</td></tr>
{section name=idx loop=$membersData}
<tr><td></td></tr>
<tr><td>First Name:</td><td><input type="text" name="firstName" size="40" maxlength="50" value="{$membersData[idx].FNAME}"/></td></tr>
<tr><td>Last Name:</td><td><input type="text" name="lastName" size="40" maxlength="50" value="{$membersData[idx].LNAME}"/></td></tr>
<tr><td>Instrument:</td><td><input type="text" name="instrument" size="40" maxlength="50" value="{$membersData[idx].INSTRUMENT}"/></td></tr>
{/section}
</table>
<INPUT type="submit" name="submit" value="Submit"/>
</form>
<br />
<br />