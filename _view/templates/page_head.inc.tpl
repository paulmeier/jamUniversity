<table align="center">
<tr><td colspan="2">
  <img src="{$banner_url}" alt="Jam University" width="570" height="57" />
</td></tr>
    <td style="font-family: Calibri; font-size: 14px;" align="left">
	<br />
<table border="0" align="left">
{section name=idx_1 loop=$navlinks}
<fieldset>
	{section name=idx_2 loop=$navlinks[idx_1].links}
	&nbsp;&nbsp;&nbsp;<a href="{$navlinks[idx_1].links[idx_2].url}">&nbsp;&nbsp;&nbsp;{$navlinks[idx_1].links[idx_2].text}</a>
	{/section}
	{/section}
</fieldset>
</tr>
<table>
{if $link_admin != ''}
      - {html_href href="$link_admin"  text='Administrator Home' status='Administrator Menu' title='Administrator Menu'} 
{/if}
<div align='right'>
{if $cur_user != ''}
       <font size='1' >(Logged In As: 
       <strong>{$cur_user})</strong></font>&#160;
       {html_href href="$link_logout"  text='Logout' status='Logout'}
{else}
       {html_href href="$link_login" text='Login' status='Login'}
{/if}
</div>
</table>
</table>
