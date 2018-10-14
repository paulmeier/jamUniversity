<?php /* Smarty version 2.6.18, created on 2007-11-23 12:08:48
         compiled from Employee_list.inc.tpl */ ?>
<br />
<p align="center">
<input type="button" name="toExcel" value="Download As Excel" onclick="<?php echo $this->_tpl_vars['xlslink']; ?>
" accesskey="D" />
</p>
<table border="1" align="center">
 <tr><td>#</td>
     <td><b>username</b></td>
     <td><b>FIRST NAME</b></td>
     <td><b>LAST NAME</b></td>
     <td><b>GENDER</b></td>
     <td><b>ACCESS RIGHT</b></td>
     </tr>
<?php unset($this->_sections['idx']);
$this->_sections['idx']['name'] = 'idx';
$this->_sections['idx']['loop'] = is_array($_loop=$this->_tpl_vars['users']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
   <td><?php echo $this->_tpl_vars['users'][$this->_sections['idx']['index']]['k']; ?>
</td> 
   <td><?php echo $this->_tpl_vars['users'][$this->_sections['idx']['index']]['username']; ?>
</td> 
   <td><?php echo $this->_tpl_vars['users'][$this->_sections['idx']['index']]['first']; ?>
</td>
   <td><?php echo $this->_tpl_vars['users'][$this->_sections['idx']['index']]['last']; ?>
</td>
   <td><?php echo $this->_tpl_vars['users'][$this->_sections['idx']['index']]['gender']; ?>
</td>
   <td><?php echo $this->_tpl_vars['users'][$this->_sections['idx']['index']]['acc']; ?>
</td>
   </tr>
<?php endfor; endif; ?>
</table>
