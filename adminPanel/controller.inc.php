<?php
//   Page controller - Administrator Menu


$dm = NL."Controller".NL."username '".$_username."'".NL ;  // set up debug message
debug($dm);                                                             // write debug message if debug = 1 
if (security('A')) {                          //  user MUST be an administrator
   include "m/model.inc.php" ;
   include "v/view.inc.php" ;
             //   header to return to front controller
} else 
    header( 'Location: ?' );                 //   header to return to front controller

?>
