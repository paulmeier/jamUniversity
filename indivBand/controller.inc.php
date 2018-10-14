<?php
//   Page controller - Individual Band

if(security('A')){
   include "m/admin_model.inc.php" ;
   include "v/admin_view.inc.php" ;
}else{       
   include "m/model.inc.php" ;
   include "v/view.inc.php" ;
}
?>
