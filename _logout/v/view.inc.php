<?php

//   view - Logout

//   This view uses an associative array in a Smarty object passed from the model

//   This view just redirects to home


$dm = NL."View - Logout";    // set up debug message
debug($dm) ;                 // write debug message if debug = 1 


// set view values
include 'std_view_attributes.php';
$objView->assign('page_title','UHS Logout Page') ;
$objView->assign('page_heading','');
$objView->assign('view_content','');
$objView->assign('page_head','');          // change from standard value
$objView->assign('page_foot','');          // change from standard value

$objView->display(MASTER_PAGE);            // display page using template

?>

