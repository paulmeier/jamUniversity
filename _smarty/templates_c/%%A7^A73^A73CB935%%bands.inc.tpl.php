<?php /* Smarty version 2.6.18, created on 2007-12-05 09:46:52
         compiled from bands.inc.tpl */ ?>
<br />
<div align="center" style="font-size: 18px; font-weight: bold;  color: #808080; font-face:Calibri"><?php echo $this->_tpl_vars['page_heading']; ?>
</div>
<div align="center"><h3>Bands</h3></div>
<br />
<a href="?bandsAZ">Bands A to Z</a>
<br />
<hr />
<br />
<h5>Search bands by:</h5>
<form name="barSearchForm" action="" method="POST">
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