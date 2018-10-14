<?php /* Smarty version 2.6.18, created on 2007-12-05 09:00:04
         compiled from bands_response.inc.tpl */ ?>
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
<form name="bandSearchForm" action="" method="POST">
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
<table border="0" align="center">
 <div class="style3" id="Bck"><?php echo $this->_tpl_vars['queryResult']; ?>
</div>
<?php unset($this->_sections['idx']);
$this->_sections['idx']['name'] = 'idx';
$this->_sections['idx']['loop'] = is_array($_loop=$this->_tpl_vars['bandResults']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['idx']['show'] = true;
$this->_sections['idx']['max'] = $this->_sections['idx']['loop'];
$this->_sections['idx']['step'] = 1;
$this->_sections['idx']['start'] = $this->_sections['idx']['step'] > 0 ? 0 : $this->_sections['idx']['loop']-1;
if ($this->_sections['idx']['show']) {
    $this->_sections['idx']['total'] = $this->_sections['idx']['loop'];
    if ($this->_sections['idx']['total'] == 0)
        $this->_sections['idx']['show'] = false;
} else
    $this->_sections['idx']['total'] = 0;
if ($this->_sections['idx']['show']):

            for ($this->_sections['idx']['index'] = $this->_sections['idx']['start'], $this->_sections['idx']['iteration'] = 1;
                 $this->_sections['idx']['iteration'] <= $this->_sections['idx']['total'];
                 $this->_sections['idx']['index'] += $this->_sections['idx']['step'], $this->_sections['idx']['iteration']++):
$this->_sections['idx']['rownum'] = $this->_sections['idx']['iteration'];
$this->_sections['idx']['index_prev'] = $this->_sections['idx']['index'] - $this->_sections['idx']['step'];
$this->_sections['idx']['index_next'] = $this->_sections['idx']['index'] + $this->_sections['idx']['step'];
$this->_sections['idx']['first']      = ($this->_sections['idx']['iteration'] == 1);
$this->_sections['idx']['last']       = ($this->_sections['idx']['iteration'] == $this->_sections['idx']['total']);
?>
   <tr>
   <td>&#160;<a href="<?php echo $this->_tpl_vars['link_band']; ?>
&id=<?php echo $this->_tpl_vars['bandResults'][$this->_sections['idx']['index']]['BandId']; ?>
"><?php echo $this->_tpl_vars['bandResults'][$this->_sections['idx']['index']]['Bandname']; ?>
</a>&#160;</td>
   <td>&#160;<?php echo $this->_tpl_vars['bandResults'][$this->_sections['idx']['index']]['Genre']; ?>
&#160;</td>
   <td>&#160;<a href="<?php echo $this->_tpl_vars['bandResults'][$this->_sections['idx']['index']]['WEBSITE']; ?>
">Website&#160;</td>
   </tr>
<?php endfor; endif; ?>
</table>