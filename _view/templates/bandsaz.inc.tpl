<br />
<p align="center">
<b>Bands A-Z</b>
</p>
   <table border="1" align="center">

{section name=idx loop=$bandData}
   <tr>
   <td><a href="{$link_band}&id={$bandData[idx].BANDID}");>&nbsp;{$bandData[idx].BANDNAME}</A></td>
   </tr>
{/section}

</table>
