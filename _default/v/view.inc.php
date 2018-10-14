<?php
//  default view

//   This view uses an associative array in a Smarty object passed from the model


$dm = NL."View - Function not implemented";     // set up debug message
debug($dm) ;                                     // write debug message if debug = 1

 
// set view values
include 'std_view_attributes.php';

$objView->assign('page_title','Jam University Splash Page') ;
$objView->assign('page_heading','The Function you requested has not been implemented.');
$objView->assign('view_content','default.inc.tpl');

$objView->display(MASTER_PAGE);           // display page using template

?>
