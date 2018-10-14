<br /><br />
<FIELDSET><LEGEND>Bar Submit Form</LEGEND>
<br />
<br />
<table align="center">
<tr><td></td>
<td>
<FORM name="BarForm" method="post" action="" enctype="multipart/form-data">
  <div class="style3" id="Bck">{$BarFound}
  </div>
<FIELDSET><LEGEND>General Bar Information</LEGEND>
<TABLE>
  <TBODY>
  <TR>
    <TD width="150">Bar Name</TD><TD><INPUT name="BarName" /></TD></TR>
  <TR>
    <TD width="150">Address</TD><TD><INPUT name="Address" /></TD></TR>
  <TR>
    <TD width="150">Phone</TD><TD><INPUT name="Phone" /></TD></TR>
  <TR>
    <TD width="150">Website</TD><TD><INPUT name="Website" /></TD></TR>
  <TR>
    <TD width="150">City</TD><TD><INPUT name="City" /></TD></TR>
	<TR>
    <TD width="150">Zip</TD><TD><INPUT name="Zip" /></TD></TR>
  <TR>
    <TD width="150">State</TD><TD><select id="State" name="State">
        <option value="al">AL</option>
        <option value="ak">AK</option>
        <option value="az">AZ</option>
        <option value="ar">AR</option>
        <option value="ca">CA</option>
        <option value="co">CO</option>
        <option value="ct">CT</option>
        <option value="de">DE</option>
        <option value="dc">DC</option>
        <option value="fl">FL</option>
        <option value="ga">GA</option>
        <option value="hi">HI</option>
        <option value="id">ID</option>
        <option selected value="il">IL</option>
        <option value="in">IN</option>
        <option value="ia">IA</option>
        <option value="ks">KS</option>
        <option value="ky">KY</option>
        <option value="la">LA</option>
        <option value="me">ME</option>
        <option value="md">MD</option>
        <option value="ma">MA</option>
        <option value="mi">MI</option>
        <option value="mn">MN</option>
        <option value="ms">MS</option>
        <option value="mo">MO</option>
        <option value="mt">MT</option>
        <option value="ne">NE</option>
        <option value="nv">NV</option>
        <option value="nh">NH</option>
        <option value="nj">NJ</option>
        <option value="nm">NM</option>
        <option value="ny">NY</option>
        <option value="nc">NC</option>
        <option value="nd">ND</option>
        <option value="oh">OH</option>
        <option value="ok">OK</option>
        <option value="or">OR</option>
        <option value="pa">PA</option>
        <option value="ri">RI</option>
        <option value="sc">SC</option>
        <option value="sd">SD</option>
        <option value="tn">TN</option>
        <option value="tx">TX</option>
        <option value="ut">UT</option>
        <option value="vt">VT</option>
        <option value="va">VA</option>
        <option value="wa">WA</option>
        <option value="wv">WV</option>
        <option value="wi">WI</option>
        <option value="wy">WY</option>
      </select></TD></TR>
	<TR>
    	<TD width="150">User name</TD><TD><INPUT name="UserName" /></TD></TR>
	<TR>
    	<TD width="150">Password</TD><TD><INPUT name="password" /></TD></TR>
	</TBODY>
</TABLE>
<br />
<table >
	<TBODY>
	<tr>
  	<td width="500">
	  Provide a description about the bar:<br />
	 <textarea name="barDesc" cols="60" rows="6" maxlength="500"></textarea>
	 </td>
	 </tr>
    </TBODY>
</TABLE>
<br />
</FIELDSET>
<br />
<br />
<FIELDSET><LEGEND>Bar Logo or Picture</LEGEND>
<table >
	<TBODY>
            <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
            <input name="userfile[]" type="file" />
	</TBODY>
</TABLE>
</FIELDSET>
<br />
<INPUT type="submit" name="submit" onclick="return checkOK();" />
<br />
<br />
</FIELDSET>