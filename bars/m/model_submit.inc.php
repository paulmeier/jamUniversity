<?php
//   model -  - Submit

//   This model uses an associative array in a Smarty object to pass data to the view


$dm = NL."Model - Bars".NL."Form submitted".NL."username ".$_POST['username']; // set up debug message
debug($dm);                                                                         // write debug message if debug = 1



//Bar Information
$_barName 	    	= 	$_POST['barName'];
$_city  	    	= 	$_POST['city'];
unset($barResults);

$db = ADOdb_connect($cfg); 

    if($_barName == "")
	    $query="SELECT * FROM bars WHERE CITY = '$_city';";
	else if($_city == "")
    	$query="SELECT * FROM bars WHERE NAME = '$_barName';";
	else
	    $query="SELECT * FROM bars WHERE NAME = '$_barName' AND CITY = '$_city';";
 
 $rs = ADOdb_query($db,$query);

//If nothing was found then tell the user.	
   if ($rs->EOF)                                  
      $message="It seems there is no result matching that criteria.";
   else
   	  $message="Results:";
	  
//Send the bars found into the band results array for display.
while (!$rs->EOF) {                      
   $barResults[] = array('Name'=>$rs->fields['NAME'], 'City'=>$rs->fields['CITY'], 
   'Phone'=>$rs->fields['Phone'], 'BarId'=>$rs->fields['BARID'],'IMAGE'=>$rs->fields['IMAGEURL']);
   $rs->MoveNext();                             
}

ADOdb_close($db);

$objView->assign('barResults',$barResults);
$objView->assign('queryResult',$message);

include 'std_links.inc.php';

?>
