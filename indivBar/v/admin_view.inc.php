<?php
//   view - public menu

//   This view uses an associative array in a Smarty object passed from the model

include 'std_view_attributes.php';
$objView->assign('page_title','Jam University') ;
$objView->assign('page_heading','');
$objView->assign('view_content','indivBar_admin.inc.tpl');

$objView->display(MASTER_PAGE);           // display page using template

?>
