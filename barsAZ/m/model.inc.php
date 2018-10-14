<?php
//   model -  Bars A-Z
//   This model uses an associative array in a Smarty object to pass data to the view



// Access the database
$db = ADOdb_connect($cfg);                               	// connect to database
$query="select NAME,WEBSITE,BARID from BARS ORDER BY NAME;";   	// see if application already on file
   $rs = ADOdb_query($db,$query);                                	 		 // Perform SQL query

$data = array();

while (!$rs->EOF) {                              // process all rows
   $NAME=$rs->fields['NAME'];
   $WEBSITE=$rs->fields['WEBSITE'];
   $BARID=$rs->fields['BARID'];
   $data[] = array( "NAME"=>$NAME, "WEBSITE"=>$WEBSITE, "BARID"=>$BARID ) ;
   $rs->MoveNext();                              // next row
}
ADOdb_close($db);

// move Model values into Smarty View array



$objView->assign('barData',$data);


include 'std_links.inc.php';

?>
