<?php /* Smarty version 2.6.18, created on 2007-12-05 09:47:38
         compiled from shows.inc.tpl */ ?>
<br />
<div align="center" style="font-size: 18px; font-weight: bold;  color: #808080; font-face:Calibri"><?php echo $this->_tpl_vars['page_heading']; ?>
</div>
<h2>Shows</h2>
Upcoming shows
<br />
<hr />
<br />
<table border="0" align="center">
 <div class="style3" id="Bck"><?php echo $this->_tpl_vars['noShows']; ?>
</div>
<?php unset($this->_sections['idx']);
$this->_sections['idx']['name'] = 'idx';
$this->_sections['idx']['loop'] = is_array($_loop=$this->_tpl_vars['allShowInfo']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
&id=<?php echo $this->_tpl_vars['allShowInfo'][$this->_sections['idx']['index']]['BANDID']; ?>
"><?php echo $this->_tpl_vars['allShowInfo'][$this->_sections['idx']['index']]['Bandname']; ?>
&#160;</td>
   <td>&#160;<a href="<?php echo $this->_tpl_vars['allShowInfo'][$this->_sections['idx']['index']]['WEBSITE']; ?>
">Website</a>&#160;</td>
   <td>@ &#160;<a href="<?php echo $this->_tpl_vars['link_bar']; ?>
&id=<?php echo $this->_tpl_vars['allShowInfo'][$this->_sections['idx']['index']]['BARID']; ?>
"><?php echo $this->_tpl_vars['allShowInfo'][$this->_sections['idx']['index']]['Playing']; ?>
&#160;</td>
   <td>&#160;<?php echo $this->_tpl_vars['allShowInfo'][$this->_sections['idx']['index']]['ShowDate']; ?>
&#160;</td>
   </tr>
<?php endfor; endif; ?>
</table>
<br />
<br />