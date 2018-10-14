<?php
//  default model - 404 error

//   This model uses an associative array in a Smarty object to pass data to the view

$dm = NL."Model - Splash Page".NL ;  // set up debug message
debug($dm) ;                         // write debug message if debug = 1


$objView->assign('renter','?homePage');
if(isset($_SESSION['panel'])) $objView->assign('loginlink','?'.$_SESSION['panel']);
else                          $objView->assign('loginlink','/?'.LOGIN);

include 'std_links.inc.php';

?>
