<br />
<div align="center" style="font-size: 18px; font-weight: bold;  color: #808080; font-face:Calibri">{$page_heading}</div>
<br>
<hr />
<br />
<form name="bandModifyForm" action="" method="POST">
<table><br />
{section name=idx loop=$barData}
<tr><td>Bar Name:</td><td><input type="text" name="Name" size="40" maxlength="50" value="{$barData[idx].NAME}"/></td></tr>
<tr><td>Phone:</td><td><input type="text" name="Phone" size="40" maxlength="50" value="{$barData[idx].PHONE}"/></td></tr>
<tr><td>Address:</td><td><input type="text" name="Address" size="40" maxlength="50" value="{$barData[idx].ADDRESS}"/></td></tr>
<tr><td>Website:</td><td><input type="text" name="Website" size="40" maxlength="50" value="{$barData[idx].WEBSITE}"/></td></tr>
<tr><td>City:</td><td><input type="text" name="City" size="40" maxlength="50" value="{$barData[idx].CITY}"/></td></tr>
<tr><td>State:</td><td><input type="text" name="State" size="2" maxlength="2" value="{$barData[idx].STATE}"/></td></tr>
<tr><td>Zip:</td><td><input type="text" name="Zip" size="40" maxlength="50" value="{$barData[idx].ZIP}"/></td></tr>
<tr><td>ImageURL:</td><td><input type="text" name="ImageURL" size="80" maxlength="100" value="{$barData[idx].IMAGEURL}"/></td></tr>
{/section}
</table>
<table><br />
<tr><td>Specials:</td></tr>
{section name=idx loop=$specailsData}
<tr><td></td></tr>
<tr><td>Price:</td><td><input type="text" name="Price" size="40" maxlength="50" value="{$specailsData[idx].SPECIALPRICE}"/></td></tr>
<tr><td>Drink Name:</td><td><input type="text" name="DrinkName" size="40" maxlength="50" value="{$specailsData[idx].DRINK_NAME}"/></td></tr>
<tr><td>Day:</td><td><input type="text" name="Day" size="40" maxlength="50" value="{$specailsData[idx].DAY_OF_WEEK}"/></td></tr>
{/section}
</table>
<INPUT type="submit" name="submit" value="Add Special"/>
<INPUT type="submit" name="submit" value="Submit"/>
</form>
<br />
<br />