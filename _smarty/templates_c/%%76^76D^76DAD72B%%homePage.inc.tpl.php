<?php /* Smarty version 2.6.18, created on 2007-12-06 17:59:35
         compiled from homePage.inc.tpl */ ?>
<br />
<div align="center" style="font-size: 18px; font-weight: bold;  color: #808080; font-face:Calibri"><?php echo $this->_tpl_vars['page_heading']; ?>
</div>
<h2>Welcome to Jam University</h2>
<i>A website dedicated to keeping you informed about when and where your local entertainment scene is happeneing.</i>
<br />
<br />
<br />
<br />
<h3><b>Drink specials for <?php echo $this->_tpl_vars['day']; ?>
</b></h3>
<hr>
<table border="0" align="center">
 <div class="style3" id="Bck"><?php echo $this->_tpl_vars['noSpecials']; ?>
</div>
<?php unset($this->_sections['idx']);
$this->_sections['idx']['name'] = 'idx';
$this->_sections['idx']['loop'] = is_array($_loop=$this->_tpl_vars['specialInfo']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
&id=<?php echo $this->_tpl_vars['specialInfo'][$this->_sections['idx']['index']]['BARID']; ?>
"><?php echo $this->_tpl_vars['specialInfo'][$this->_sections['idx']['index']]['NAME']; ?>
&nbsp;&nbsp;</a></td>
   <td>&nbsp;&nbsp;<?php echo $this->_tpl_vars['specialInfo'][$this->_sections['idx']['index']]['DRINK_NAME']; ?>
&nbsp;&nbsp;</a></td>
   <td>&nbsp;&nbsp;$<?php echo $this->_tpl_vars['specialInfo'][$this->_sections['idx']['index']]['SPECIALPRICE']; ?>
</td>
</tr>
<?php endfor; endif; ?>
</table>

<br />
<br />
<h3><b>Upcoming Shows</b></h3>
<hr />
<br />
<table border="0" align="center">
 <div class="style3" id="Bck"><?php echo $this->_tpl_vars['noShows']; ?>
</div>
<?php unset($this->_sections['idx']);
$this->_sections['idx']['name'] = 'idx';
$this->_sections['idx']['loop'] = is_array($_loop=$this->_tpl_vars['showInfo']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
   <td>&nbsp;<a href="<?php echo $this->_tpl_vars['link_band']; ?>
&id=<?php echo $this->_tpl_vars['showInfo'][$this->_sections['idx']['index']]['Bandid']; ?>
"><?php echo $this->_tpl_vars['showInfo'][$this->_sections['idx']['index']]['Bandname']; ?>
</a>&nbsp;</td>
   <td>@&nbsp;<a href="<?php echo $this->_tpl_vars['link_bar']; ?>
&id=<?php echo $this->_tpl_vars['showInfo'][$this->_sections['idx']['index']]['Barid']; ?>
"><?php echo $this->_tpl_vars['showInfo'][$this->_sections['idx']['index']]['Playing']; ?>
</a>&nbsp;</td>
   <td>&nbsp;<?php echo $this->_tpl_vars['showInfo'][$this->_sections['idx']['index']]['ShowDate']; ?>
</td>
</tr>
<?php endfor; endif; ?>
</table>
<br />
<br />