<?php
//   Page controller - Bar Submit Form

if(security('A') || security('NBR')) {

	if (isset($_POST['submit'])) 
	include "m/model_submit.inc.php";
	else
   	include "m/model.inc.php";

include "v/view.inc.php";
}else 
    header( 'Location: ?' );   

?>
