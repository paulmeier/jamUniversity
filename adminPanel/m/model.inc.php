<?php
//   model - Administrator menu

//   This model uses an associative array in a Smarty object to pass data to the view

$dm = NL."Model - Administrator Panel".NL."username '".$_username."'".NL ; // set up debug message
debug($dm);                                                        // write debug message if debug = 1


$data = array( 	  
		array('legend'=>'Band Management', 'tr'=>'row',
		   'links'=>array(
		            array('text'=>'Create a new band', 'url'=>'?createBands'),
					array('text'=>'Modify a band', 'url'=>'?bandsAZ'))
     ),
		array('legend'=>'Bar Management', 'tr'=>'',
		   'links'=>array(
		           array('text'=>'Create a new bar', 'url'=>'?createBars'),
				   array('text'=>'Modify a bar', 'url'=>'?barsAZ'))
    ),	
		array('legend'=>'Manage Transportation', 'tr'=>'row',
		   'links'=>array(
				   array('text'=>'Create transportation', 'url'=>'?createTransportation'),
		           array('text'=>'Modify transportation', 'url'=>'?modifyTransportation'))
    ),
		array('legend'=>'Manage Shows', 'tr'=>'',
		   'links'=>array(
				   array('text'=>'Create show', 'url'=>'?createShow'),
		           array('text'=>'Modify shows', 'url'=>'?modifyShow'))
    )
		);
$objView->assign('adminlinks',$data);

include 'std_links.inc.php';     

?>
