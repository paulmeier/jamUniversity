<br />
<table border="0" align="center">

{section name=idx_1 loop=$adminlinks}
{if $adminlinks[idx_1].tr != ''}<tr valign="top">{/if}
<td>
 <fieldset>
	<table border="0"><br />
<div align="center" style="font-size: 18px; font-weight: bold;  color: #000000; font: Verdana">{$page_heading}</div><br />
<table border="0" align="center">

{section name=idx_1 loop=$adminlinks}
{if $adminlinks[idx_1].tr != ''}<tr valign="top">{/if}
<td>
 <fieldset>
    <legend style="font-size: 13px;font-weight: bold; font: Verdana; color: #000000">
	   {$adminlinks[idx_1].legend} </legend>
	<table border="0">

	{section name=idx_2 loop=$adminlinks[idx_1].links}
  	 <tr><td style="font-size: 13px">
	<a href="{$adminlinks[idx_1].links[idx_2].url}">{$adminlinks[idx_1].links[idx_2].text}</a>
	</td></tr>
	{/section}

	</table>
</fieldset>
</td>
{if $adminlinks[idx_1].tr == ''}</tr>{/if}


{/section}
</table>

	{section name=idx_2 loop=$adminlinks[idx_1].links}
  	 <tr><td style="font-size: 13px">
	<a href="{$adminlinks[idx_1].links[idx_2].url}">{$adminlinks[idx_1].links[idx_2].text}</a>
	</td></tr>
	{/section}

	</table>
</fieldset>
</td>
{if $adminlinks[idx_1].tr == ''}</tr>{/if}


{/section}
</table>