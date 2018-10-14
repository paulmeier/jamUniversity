<?php /* Smarty version 2.6.18, created on 2007-11-30 09:52:16
         compiled from page_head.inc.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_href', 'page_head.inc.tpl', 18, false),)), $this); ?>
<table align="center">
<tr><td colspan="2">
  <img src="<?php echo $this->_tpl_vars['banner_url']; ?>
" alt="Jam University" width="570" height="57" />
</td></tr>
    <td style="font-family: Calibri; font-size: 14px;" align="left">
	<br />
<table border="0" align="left">
<?php unset($this->_sections['idx_1']);
$this->_sections['idx_1']['name'] = 'idx_1';
$this->_sections['idx_1']['loop'] = is_array($_loop=$this->_tpl_vars['navlinks']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['idx_1']['show'] = true;
$this->_sections['idx_1']['max'] = $this->_sections['idx_1']['loop'];
$this->_sections['idx_1']['step'] = 1;
$this->_sections['idx_1']['start'] = $this->_sections['idx_1']['step'] > 0 ? 0 : $this->_sections['idx_1']['loop']-1;
if ($this->_sections['idx_1']['show']) {
    $this->_sections['idx_1']['total'] = $this->_sections['idx_1']['loop'];
    if ($this->_sections['idx_1']['total'] == 0)
        $this->_sections['idx_1']['show'] = false;
} else
    $this->_sections['idx_1']['total'] = 0;
if ($this->_sections['idx_1']['show']):

            for ($this->_sections['idx_1']['index'] = $this->_sections['idx_1']['start'], $this->_sections['idx_1']['iteration'] = 1;
                 $this->_sections['idx_1']['iteration'] <= $this->_sections['idx_1']['total'];
                 $this->_sections['idx_1']['index'] += $this->_sections['idx_1']['step'], $this->_sections['idx_1']['iteration']++):
$this->_sections['idx_1']['rownum'] = $this->_sections['idx_1']['iteration'];
$this->_sections['idx_1']['index_prev'] = $this->_sections['idx_1']['index'] - $this->_sections['idx_1']['step'];
$this->_sections['idx_1']['index_next'] = $this->_sections['idx_1']['index'] + $this->_sections['idx_1']['step'];
$this->_sections['idx_1']['first']      = ($this->_sections['idx_1']['iteration'] == 1);
$this->_sections['idx_1']['last']       = ($this->_sections['idx_1']['iteration'] == $this->_sections['idx_1']['total']);
?>
<fieldset>
	<?php unset($this->_sections['idx_2']);
$this->_sections['idx_2']['name'] = 'idx_2';
$this->_sections['idx_2']['loop'] = is_array($_loop=$this->_tpl_vars['navlinks'][$this->_sections['idx_1']['index']]['links']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['idx_2']['show'] = true;
$this->_sections['idx_2']['max'] = $this->_sections['idx_2']['loop'];
$this->_sections['idx_2']['step'] = 1;
$this->_sections['idx_2']['start'] = $this->_sections['idx_2']['step'] > 0 ? 0 : $this->_sections['idx_2']['loop']-1;
if ($this->_sections['idx_2']['show']) {
    $this->_sections['idx_2']['total'] = $this->_sections['idx_2']['loop'];
    if ($this->_sections['idx_2']['total'] == 0)
        $this->_sections['idx_2']['show'] = false;
} else
    $this->_sections['idx_2']['total'] = 0;
if ($this->_sections['idx_2']['show']):

            for ($this->_sections['idx_2']['index'] = $this->_sections['idx_2']['start'], $this->_sections['idx_2']['iteration'] = 1;
                 $this->_sections['idx_2']['iteration'] <= $this->_sections['idx_2']['total'];
                 $this->_sections['idx_2']['index'] += $this->_sections['idx_2']['step'], $this->_sections['idx_2']['iteration']++):
$this->_sections['idx_2']['rownum'] = $this->_sections['idx_2']['iteration'];
$this->_sections['idx_2']['index_prev'] = $this->_sections['idx_2']['index'] - $this->_sections['idx_2']['step'];
$this->_sections['idx_2']['index_next'] = $this->_sections['idx_2']['index'] + $this->_sections['idx_2']['step'];
$this->_sections['idx_2']['first']      = ($this->_sections['idx_2']['iteration'] == 1);
$this->_sections['idx_2']['last']       = ($this->_sections['idx_2']['iteration'] == $this->_sections['idx_2']['total']);
?>
	&nbsp;&nbsp;&nbsp;<a href="<?php echo $this->_tpl_vars['navlinks'][$this->_sections['idx_1']['index']]['links'][$this->_sections['idx_2']['index']]['url']; ?>
">&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['navlinks'][$this->_sections['idx_1']['index']]['links'][$this->_sections['idx_2']['index']]['text']; ?>
</a>
	<?php endfor; endif; ?>
	<?php endfor; endif; ?>
</fieldset>
</tr>
<table>
<?php if ($this->_tpl_vars['link_admin'] != ''): ?>
      - <?php echo smarty_function_html_href(array('href' => ($this->_tpl_vars['link_admin']),'text' => 'Administrator Home','status' => 'Administrator Menu','title' => 'Administrator Menu'), $this);?>
 
<?php endif; ?>
<div align='right'>
<?php if ($this->_tpl_vars['cur_user'] != ''): ?>
       <font size='1' >(Logged In As: 
       <strong><?php echo $this->_tpl_vars['cur_user']; ?>
)</strong></font>&#160;
       <?php echo smarty_function_html_href(array('href' => ($this->_tpl_vars['link_logout']),'text' => 'Logout','status' => 'Logout'), $this);?>

<?php else: ?>
       <?php echo smarty_function_html_href(array('href' => ($this->_tpl_vars['link_login']),'text' => 'Login','status' => 'Login'), $this);?>

<?php endif; ?>
</div>
</table>
</table>