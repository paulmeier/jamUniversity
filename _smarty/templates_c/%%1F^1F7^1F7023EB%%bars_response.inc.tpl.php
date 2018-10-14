<?php /* Smarty version 2.6.18, created on 2007-12-05 13:03:26
         compiled from bars_response.inc.tpl */ ?>
<br />
<div align="center" style="font-size: 18px; font-weight: bold;  color: #808080; font-face:Calibri"><?php echo $this->_tpl_vars['page_heading']; ?>
</div>
<div align="center"><h3>Bars</h3></div>
<br />
<a href="?barsAZ">Bars A to Z</a>
<br />
<hr />
<br />
<h5>Search bars by:</h5>
<form name="barSearchForm" action="" method="POST">
<div align="center">
<table><br />
<tr><td>Bar Name:</td><td><input type="text" name="barName" size="40" maxlength="50"/></td></tr>
<tr><td>City:</td><td><input type="text" name="city" size="40" maxlength="50"/></td></tr>
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
$this->_sections['idx']['loop'] = is_array($_loop=$this->_tpl_vars['barResults']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
   <td><img src="<?php echo $this->_tpl_vars['barResults'][$this->_sections['idx']['index']]['IMAGE']; ?>
"></td>
   <td>&#160;<a href="<?php echo $this->_tpl_vars['link_bar']; ?>
&id=<?php echo $this->_tpl_vars['barResults'][$this->_sections['idx']['index']]['BarId']; ?>
"><?php echo $this->_tpl_vars['barResults'][$this->_sections['idx']['index']]['Name']; ?>
&#160;</a></td>
   <td>&#160;<?php echo $this->_tpl_vars['barResults'][$this->_sections['idx']['index']]['City']; ?>
&#160;</td>
   <td>&#160;<?php echo $this->_tpl_vars['barResults'][$this->_sections['idx']['index']]['Phone']; ?>
&#160;</td>
   </tr>
<?php endfor; endif; ?>
</table>