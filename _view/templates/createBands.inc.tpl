<br /><br />
<FIELDSET><LEGEND>Band Submit Form</LEGEND>
<br />
<br />
<table align="center">
<tr><td></td>
<td>
<FORM name="BandForm" method="post" action="" AUTOCOMPLETE="off" ENCTYPE="multipart/form-data">
  <div class="style3" id="Bck">{$BandFound}
  </div>
<FIELDSET><LEGEND>General Band Information</LEGEND>
<TABLE>
  <TBODY>
  <TR>
    <TD width="150">Band Name</TD><TD><INPUT name="BandName" /></TD></TR>
  <TR>
    <TD width="150">Genre</TD><TD><INPUT name="Genre" /></TD></TR>
  <TR>
    <TD width="150">Hometown</TD><TD><INPUT name="Hometown" /></TD></TR>
  <TR>
    <TD width="150">Website</TD><TD><INPUT name="Website" /></TD></TR>
  <TR>
    <TD width="150">Username</TD><TD><INPUT name="Username" /></TD></TR>
  <TR>
    <TD width="150">Password</TD><TD><INPUT name="Password" /></TD></TR>
	</TBODY>
</TABLE>
<br />
<table >
	<TBODY>
	<tr>
  	<td width="500">
	  Provide a description about the band:<br />
	 <textarea name="bandDesc" cols="60" rows="6"></textarea>
	 </td>
	 </tr>
    </TBODY>
</TABLE>
<br />
</FIELDSET>
<br />
<br />
<FIELDSET><LEGEND>Logo</LEGEND>
<TABLE>
<TR>
<input type="hidden" name="MAX_FILE_SIZE" value="150000">
<input type="hidden" name="completed" value="1">
Choose file to send: <input type="file" name="filename">
<br>
</TR>
</TABLE>
</FIELDSET>
<br />
<INPUT type="submit" name="submit" onclick="return checkOK();" />
<br />
<br />
</FIELDSET>