<?php
//   model -  Drinks
//   This model uses an associative array in a Smarty object to pass data to the view

$orderBy = $_GET["orderBy"];

// Access the database
$db = ADOdb_connect($cfg);                               	// connect to database
$query="select BAR_NAME,SPECIALPRICE,BARID,DRINK_NAME,DAY_OF_WEEK from SPECIALS ORDER BY '$orderBy';";   	// see if application already on file
   $rs = ADOdb_query($db,$query);                                	 		 // Perform SQL query


$data = array();
//Load all drink special data in to array for passing
while (!$rs->EOF) {                              // process all rows
   $BAR_NAME=$rs->fields['BAR_NAME'];
   $SPECIALPRICE=$rs->fields['SPECIALPRICE'];
   $BARID=$rs->fields['BARID'];
   $DRINK_NAME=$rs->fields['DRINK_NAME'];
   $DAY_OF_WEEK=$rs->fields['DAY_OF_WEEK'];
   $data[] = array( "BAR_NAME"=>$BAR_NAME, "SPECIALPRICE"=>$SPECIALPRICE, "BARID"=>$BARID, "DRINK_NAME"=>$DRINK_NAME, "DAY_OF_WEEK"=>$DAY_OF_WEEK ) ;
   $rs->MoveNext();                              // next row
}
ADOdb_close($db);

// move Model values into Smarty View array



$objView->assign('drinkData',$data);


include 'std_links.inc.php';

?>
