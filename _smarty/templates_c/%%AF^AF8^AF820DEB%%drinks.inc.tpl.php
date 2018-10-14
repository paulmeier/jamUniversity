<?php /* Smarty version 2.6.18, created on 2007-12-05 14:02:09
         compiled from drinks.inc.tpl */ ?>
<br />
<p align="center">
<b>Drink Specials</b>
</p>
<center><font size=1>Click heading to order list.</font></center>
   <table border="1" align="center">
   <tr>
   <td><center><b><a href="<?php echo $this->_tpl_vars['link_drink']; ?>
&orderBy=BAR_NAME">Bar</a></b></center></td>
   <td><center><b><a href="<?php echo $this->_tpl_vars['link_drink']; ?>
&orderBy=SPECIALPRICE">Price</a></b></center></td>
   <td><center><b><a href="<?php echo $this->_tpl_vars['link_drink']; ?>
&orderBy=DRINK_NAME">Drink</a></b></center></td>
   <td><center><b><a href="<?php echo $this->_tpl_vars['link_drink']; ?>
&orderBy=DAY_OF_WEEK">Day</a></b></center></td>
   </tr>
   
<?php unset($this->_sections['idx']);
$this->_sections['idx']['name'] = 'idx';
$this->_sections['idx']['loop'] = is_array($_loop=$this->_tpl_vars['drinkData']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
   <td><a href="<?php echo $this->_tpl_vars['link_bar']; ?>
&id=<?php echo $this->_tpl_vars['drinkData'][$this->_sections['idx']['index']]['BARID']; ?>
");>&nbsp;<?php echo $this->_tpl_vars['drinkData'][$this->_sections['idx']['index']]['BAR_NAME']; ?>
</A></td>
   <td>&nbsp;<?php echo $this->_tpl_vars['drinkData'][$this->_sections['idx']['index']]['SPECIALPRICE']; ?>
</td>
   <td>&nbsp;<?php echo $this->_tpl_vars['drinkData'][$this->_sections['idx']['index']]['DRINK_NAME']; ?>
</td>
   <td>&nbsp;<?php echo $this->_tpl_vars['drinkData'][$this->_sections['idx']['index']]['DAY_OF_WEEK']; ?>
</td>
   </tr>
<?php endfor; endif; ?>

</table>