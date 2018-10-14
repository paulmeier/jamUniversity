<?php
//   Page controller - 


$dm = NL."Controller - ".NL."username '".$_username."'".NL ;  // set up debug message
debug($dm);                                                            // write debug message if debug = 1 


if(security('B'))
{

		$db = ADOdb_connect($cfg);
		$id = $_GET["id"];
		$query="select username from administrators where fid = '$id';"; 
		$rs = ADOdb_query($db,$query);
		ADOdb_close($db);
} 

if(($rs->fields['username'] == $_SESSION['username']) || security('A')){       
   include "m/model.inc.php" ;
   include "v/view.inc.php" ;
} else 
    header( 'Location: ?' );                 //   header to return to front controller

?>
