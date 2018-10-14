<?php
//  Login model -  This is a virgin request

//   This model uses an associative array in a Smarty object to pass data to the view


$dm = NL."Model - Login Initial screen"; // set up debug message
debug($dm);                              // write debug message if debug = 1 
$data = array(
        array('legend'=>'Navigation Menu', 'td'=>'col',
              'links'=>array(array('text'=>'Home',    'url'=>'?homePage'),
			  				 array('text'=>'   Bands',    'url'=>'?bands'),
		                     array('text'=>'   Bars', 	   'url'=>'?bars'),
		                     array('text'=>'   Shows',    'url'=>'?shows'),
		                     array('text'=>'   Transportation', 'url'=>'?transportation'),
		                     array('text'=>'   Contact','url'=>'?contact')
		                    )
		));

$objView->assign('navlinks',$data);
// 'timeout' will be set if this invocation follows a timeout
if ($_GET['tout']!='') 
$objView->assign('timeout_msg',$timeout_msg);
include 'std_links.inc.php';   

?>
