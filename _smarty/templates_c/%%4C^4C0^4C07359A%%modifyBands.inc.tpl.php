<?php /* Smarty version 2.6.18, created on 2007-12-04 20:23:39
         compiled from modifyBands.inc.tpl */ ?>
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
$this->_sections['idx']['loop'] = is_array($_loop=$this->_tpl_vars['bandData']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<tr><td>Band Name:</td><td><input type="text" name="bandName" size="40" maxlength="50" value="<?php echo $this->_tpl_vars['bandData'][$this->_sections['idx']['index']]['BANDNAME']; ?>
"/></td></tr>
<tr><td>Genre:</td><td><input type="text" name="genreName" size="40" maxlength="50" value="<?php echo $this->_tpl_vars['bandData'][$this->_sections['idx']['index']]['GENRE']; ?>
"/></td></tr>
<tr><td>Website:</td><td><input type="text" name="website" size="40" maxlength="50" value="<?php echo $this->_tpl_vars['bandData'][$this->_sections['idx']['index']]['WEBSITE']; ?>
"/></td></tr>
<tr><td>ImageURL:</td><td><input type="text" name="imageURL" size="40" maxlength="50" value="<?php echo $this->_tpl_vars['bandData'][$this->_sections['idx']['index']]['IMAGEURL']; ?>
"/></td></tr>
<?php endfor; endif; ?>
</table>
<table><br />
<tr><td>Band Members:</td></tr>
<?php unset($this->_sections['idx']);
$this->_sections['idx']['name'] = 'idx';
$this->_sections['idx']['loop'] = is_array($_loop=$this->_tpl_vars['membersData']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<tr><td>First Name:</td><td><input type="text" name="firstName" size="40" maxlength="50" value="<?php echo $this->_tpl_vars['membersData'][$this->_sections['idx']['index']]['FNAME']; ?>
"/></td></tr>
<tr><td>Last Name:</td><td><input type="text" name="lastName" size="40" maxlength="50" value="<?php echo $this->_tpl_vars['membersData'][$this->_sections['idx']['index']]['LNAME']; ?>
"/></td></tr>
<tr><td>Instrument:</td><td><input type="text" name="instrument" size="40" maxlength="50" value="<?php echo $this->_tpl_vars['membersData'][$this->_sections['idx']['index']]['INSTRUMENT']; ?>
"/></td></tr>
<?php endfor; endif; ?>
</table>
<INPUT type="submit" name="submit" value="Submit"/>
</form>
<br />
<br />