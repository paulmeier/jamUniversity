<?php
//   model -  Bands A-Z
//   This model uses an associative array in a Smarty object to pass data to the view


// Access the database
$db = ADOdb_connect($cfg);                               	// connect to database
$query="select BANDNAME,WEBSITE,BANDID from BANDS ORDER BY BANDNAME;";   	// see if application already on file
   $rs = ADOdb_query($db,$query);                                	 		 // Perform SQL query

$data = array();

while (!$rs->EOF) {                              // process all rows
   $BANDNAME=$rs->fields['BANDNAME'];
   $WEBSITE=$rs->fields['WEBSITE'];
   $BANDID=$rs->fields['BANDID'];
   $data[] = array( "BANDNAME"=>$BANDNAME, "WEBSITE"=>$WEBSITE, "BANDID"=>$BANDID ) ;
   $rs->MoveNext();                              // next row
}
ADOdb_close($db);

// move Model values into Smarty View array



$objView->assign('bandData',$data);


include 'std_links.inc.php';

?>
