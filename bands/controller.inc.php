<?php
//   Page controller - 


$dm = NL."Controller - ".NL."username '".$_username."'".NL ;  // set up debug message
debug($dm);    

 if (isset($_POST['submit'])) {         // was this script invoked by a submitted form?
      include "m/model_submit.inc.php";  //    yes
      include "v/view_submit.inc.php";
   }
   else {
      include "m/model.inc.php";         //    no
      include "v/view.inc.php";
  }

?>
