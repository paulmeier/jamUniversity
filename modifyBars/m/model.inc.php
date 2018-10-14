<?php
//   model - public menu

//   This model uses an associative array in a Smarty object to pass data to the view

$dm = NL."Model - ";     // set up debug message
debug($dm);                          // write debug message if debug = 1


$id = $_GET["id"];
unset($barData);
unset($specailsData);
// Access the database
$db = ADOdb_connect($cfg);  

//PULL BAND INFO        
$query="select * from bars where BARID = '$id';"; 
$rs = ADOdb_query($db,$query);                                	 		

$NAME = $rs->fields['NAME'];
$PHONE = $rs->fields['PHONE'];
$ADDRESS = $rs->fields['ADDRESS'];
$WEBSITE = $rs->fields['WEBSITE'];
$CITY = $rs->fields['CITY'];
$STATE = $rs->fields['STATE'];
$ZIP = $rs->fields['ZIP'];
$IMAGEURL = $rs->fields['IMAGEURL'];


$barData[] = array( "NAME"=>$NAME, "PHONE"=>$PHONE, 
					   "ADDRESS"=>$ADDRESS,"WEBSITE"=>$WEBSITE,"CITY"=>$CITY,"STATE"=>$STATE
					   ,"ZIP"=>$ZIP,"IMAGEURL"=>$IMAGEURL);
					   
//PULL BAND MEMBERS					   
$query="select * from specials where BARID = '$id';"; 
$rs = ADOdb_query($db,$query); 


while(!$rs->EOF)
{	   
$BAR_NAME = $rs->fields['BAR_NAME'];
$SPECIALPRICE = $rs->fields['SPECIALPRICE'];
$DRINK_NAME = $rs->fields['DRINK_NAME'];
$DAY_OF_WEEK = $rs->fields['DAY_OF_WEEK'];
$specailsData[] = array( "BAR_NAME"=>$BAR_NAME, "SPECIALPRICE"=>$SPECIALPRICE, "DRINK_NAME"=>$DRINK_NAME
					,"DAY_OF_WEEK"=>$DAY_OF_WEEK);
$rs->MoveNext();
}
					   
$objView->assign('barData',$barData);
$objView->assign('specailsData',$specailsData);

include 'std_links.inc.php';

?>
