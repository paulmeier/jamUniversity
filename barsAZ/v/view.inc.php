<?php
//   view - public menu

//   This view uses an associative array in a Smarty object passed from the model

// set view values
include 'std_view_attributes.php';
$objView->assign('page_title','Jam University') ;
$objView->assign('page_heading','Bars A-Z');
$objView->assign('view_content','barsaz.inc.tpl');

$objView->display(MASTER_PAGE);           // display page using template

?>
