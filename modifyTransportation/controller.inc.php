<?php
//   Page controller - 


$dm = NL."Controller - ".NL."username '".$_username."'".NL ;  // set up debug message
debug($dm);                                                             // write debug message if debug = 1 
       
   include "m/model.inc.php" ;
   include "v/view.inc.php" ;
} else 
    header( 'Location: ?' );                 //   header to return to front controller

?>
