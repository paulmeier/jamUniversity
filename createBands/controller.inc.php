<?php
//   Page controller - Band Submit Form

if(security('A') || security('NB'))
{
if (isset($_POST['submit']))          // was this script invoked by a submitted form?
   include "m/model_submit.inc.php";
else
   include "m/model.inc.php";

include "v/view.inc.php";

}else 
    header( 'Location: ?' ); 

?>
