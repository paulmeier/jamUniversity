<?php /* Smarty version 2.6.18, created on 2007-11-23 12:08:21
         compiled from show_roster_response.inc.tpl */ ?>
<br />
<p align="center">
<input type="button" name="toExcel" value="Download As Excel" onclick="<?php echo $this->_tpl_vars['xlslink']; ?>
" accesskey="D" />
</p>
   <table border="1" align="center">
     <tr rowspan="2">
	 <td>#</td>
	 <td width="150"><b>Apt Name</b></td>
	 <td><b>Apt Id</b></td>
	 <td><b>First Name</b></td>
	 <td><b>Last Name</b></td>
	 <td><b>Phone</b></td>
 	 <td><b>Gender</b></td>
	 <td><b>Address</b></td>
	 <td><b>Marital Status</b></td>
	 <td><b>Living With Spouse</b></td>
	 <td><b>Academic Status</b></td>
	 <td><b>Field Of Study</b></td>
	 <td><b>Nationality</b></td>
	 <td><b>Residency Status</b></td>
	 <td><b># Dependents</b></td>
	 </tr>
	 <tr>
	 <td></td><td></td><td></td><td></td><td></td><td></td><td></td>
	 <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
	 </tr>
<?php unset($this->_sections['idx']);
$this->_sections['idx']['name'] = 'idx';
$this->_sections['idx']['loop'] = is_array($_loop=$this->_tpl_vars['renters']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
   <td>&nbsp;<?php echo $this->_tpl_vars['renters'][$this->_sections['idx']['index']]['k']; ?>
</td>
   <td>&nbsp;<?php echo $this->_tpl_vars['renters'][$this->_sections['idx']['index']]['AptType']; ?>
</td>
   <td>&nbsp;<?php echo $this->_tpl_vars['renters'][$this->_sections['idx']['index']]['AptNum']; ?>
</td>
   <td>&nbsp;<?php echo $this->_tpl_vars['renters'][$this->_sections['idx']['index']]['FirstName']; ?>
</td>
   <td>&nbsp;<?php echo $this->_tpl_vars['renters'][$this->_sections['idx']['index']]['LastName']; ?>
</td>
   <td>&nbsp;<?php echo $this->_tpl_vars['renters'][$this->_sections['idx']['index']]['Phone']; ?>
</td>
   <td>&nbsp;<?php echo $this->_tpl_vars['renters'][$this->_sections['idx']['index']]['Gender']; ?>
</td>
   <td>&nbsp;<?php echo $this->_tpl_vars['renters'][$this->_sections['idx']['index']]['Address']; ?>
</td>
   <td>&nbsp;<?php echo $this->_tpl_vars['renters'][$this->_sections['idx']['index']]['MStatus']; ?>
</td>
   <td>&nbsp;<?php echo $this->_tpl_vars['renters'][$this->_sections['idx']['index']]['Living']; ?>
</td>
   <td>&nbsp;<?php echo $this->_tpl_vars['renters'][$this->_sections['idx']['index']]['AcadStatus']; ?>
</td>
   <td>&nbsp;<?php echo $this->_tpl_vars['renters'][$this->_sections['idx']['index']]['Field']; ?>
</td>
   <td>&nbsp;<?php echo $this->_tpl_vars['renters'][$this->_sections['idx']['index']]['Nationality']; ?>
</td>
   <td>&nbsp;<?php echo $this->_tpl_vars['renters'][$this->_sections['idx']['index']]['Status']; ?>
</td>
   <td>&nbsp;<?php echo $this->_tpl_vars['renters'][$this->_sections['idx']['index']]['NumDependents']; ?>
</td>
   </tr>
<?php endfor; endif; ?>
</table>