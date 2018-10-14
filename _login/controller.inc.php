<?php
//   Page controller - Login

$dm = NL."Controller - Login";        // set up debug message
debug($dm) ;                          // write debug message if debug = 1 

if (isset($_POST['submit']))          // was this script invoked by a submitted form?
   include "m/model_submit.inc.php";  //    yes
else
   include "m/model.inc.php";         //    no

include "v/view.inc.php";

?>
