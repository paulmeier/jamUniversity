<?php
//   view - Administrator`s menu

//   This view uses an associative array in a Smarty object passed from the model
 
// set view values
include 'std_view_attributes.php';
$objView->assign('page_title','Administrator Menu') ;
$objView->assign('page_heading','Administrator Control Panel');
$objView->assign('view_content','menu_panel.inc.tpl');

$objView->display(MASTER_PAGE);           // display page using template

?>
