<br />
<p align="center">
<b>Bars A-Z</b>
</p>
   <table border="1" align="center">

{section name=idx loop=$barData}
   <tr>
   <td><a href="{$link_bar}&id={$barData[idx].BARID}");>&nbsp;{$barData[idx].NAME}</A></td>
   </tr>
{/section}

</table>
