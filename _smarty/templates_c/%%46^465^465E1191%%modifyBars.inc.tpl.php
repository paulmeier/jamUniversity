<?php /* Smarty version 2.6.18, created on 2007-12-04 22:03:51
         compiled from modifyBars.inc.tpl */ ?>
<br />
<div align="center" style="font-size: 18px; font-weight: bold;  color: #808080; font-face:Calibri"><?php echo $this->_tpl_vars['page_heading']; ?>
</div>
<br>
<hr />
<br />
<form name="bandModifyForm" action="" method="POST">
<table><br />
<?php unset($this->_sections['idx']);
$this->_sections['idx']['name'] = 'idx';
$this->_sections['idx']['loop'] = is_array($_loop=$this->_tpl_vars['barData']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<tr><td>Bar Name:</td><td><input type="text" name="Name" size="40" maxlength="50" value="<?php echo $this->_tpl_vars['barData'][$this->_sections['idx']['index']]['NAME']; ?>
"/></td></tr>
<tr><td>Phone:</td><td><input type="text" name="Phone" size="40" maxlength="50" value="<?php echo $this->_tpl_vars['barData'][$this->_sections['idx']['index']]['PHONE']; ?>
"/></td></tr>
<tr><td>Address:</td><td><input type="text" name="Address" size="40" maxlength="50" value="<?php echo $this->_tpl_vars['barData'][$this->_sections['idx']['index']]['ADDRESS']; ?>
"/></td></tr>
<tr><td>Website:</td><td><input type="text" name="Website" size="40" maxlength="50" value="<?php echo $this->_tpl_vars['barData'][$this->_sections['idx']['index']]['WEBSITE']; ?>
"/></td></tr>
<tr><td>City:</td><td><input type="text" name="City" size="40" maxlength="50" value="<?php echo $this->_tpl_vars['barData'][$this->_sections['idx']['index']]['CITY']; ?>
"/></td></tr>
<tr><td>State:</td><td><input type="text" name="State" size="2" maxlength="2" value="<?php echo $this->_tpl_vars['barData'][$this->_sections['idx']['index']]['STATE']; ?>
"/></td></tr>
<tr><td>Zip:</td><td><input type="text" name="Zip" size="40" maxlength="50" value="<?php echo $this->_tpl_vars['barData'][$this->_sections['idx']['index']]['ZIP']; ?>
"/></td></tr>
<tr><td>ImageURL:</td><td><input type="text" name="ImageURL" size="80" maxlength="100" value="<?php echo $this->_tpl_vars['barData'][$this->_sections['idx']['index']]['IMAGEURL']; ?>
"/></td></tr>
<?php endfor; endif; ?>
</table>
<table><br />
<tr><td>Specials:</td></tr>
<?php unset($this->_sections['idx']);
$this->_sections['idx']['name'] = 'idx';
$this->_sections['idx']['loop'] = is_array($_loop=$this->_tpl_vars['specailsData']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<tr><td></td></tr>
<tr><td>Price:</td><td><input type="text" name="Price" size="40" maxlength="50" value="<?php echo $this->_tpl_vars['specailsData'][$this->_sections['idx']['index']]['SPECIALPRICE']; ?>
"/></td></tr>
<tr><td>Drink Name:</td><td><input type="text" name="DrinkName" size="40" maxlength="50" value="<?php echo $this->_tpl_vars['specailsData'][$this->_sections['idx']['index']]['DRINK_NAME']; ?>
"/></td></tr>
<tr><td>Day:</td><td><input type="text" name="Day" size="40" maxlength="50" value="<?php echo $this->_tpl_vars['specailsData'][$this->_sections['idx']['index']]['DAY_OF_WEEK']; ?>
"/></td></tr>
<?php endfor; endif; ?>
</table>
<INPUT type="submit" name="submit" value="Add Special"/>
<INPUT type="submit" name="submit" value="Submit"/>
</form>
<br />
<br />