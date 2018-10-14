<?php
//   model -  - Submit

//   This model uses an associative array in a Smarty object to pass data to the view


$dm = NL."Model - Bands".NL."Form submitted".NL."username ".$_POST['username']; // set up debug message
debug($dm);                                                                         // write debug message if debug = 1


//Band Information
$_bandName 	    	= 	$_POST['bandName'];
$_genreName	    	= 	$_POST['genreName'];
unset($bandResults);

$db = ADOdb_connect($cfg); 

    if($_bandName == "")
	    $query="SELECT * FROM bands WHERE GENRE = '$_genreName';";
	else if($_genreName == "")
    	$query="SELECT * FROM bands WHERE BANDNAME = '$_bandName';";
	else
	    $query="SELECT * FROM bands WHERE BANDNAME = '$_bandName' AND GENRE = '$_genreName';";
	$rs = ADOdb_query($db,$query);

//If nothing was found then tell the user.	
   if ($rs->EOF)                                  
      $message="It seems there is no result matching that criteria.";
   else
   	  $message="Results:";
	  
//Send the bands found into the band results array for display.
while (!$rs->EOF) {                      
   $bandResults[] = array('Genre'=>$rs->fields['GENRE'], 'Bandname'=>$rs->fields['BANDNAME'], 
   'Website'=>$rs->fields['WEBSITE'], 'BandId'=>$rs->fields['BANDID'], 'IMAGE'=>$rs->fields['IMAGEURL']);
   $rs->MoveNext();                             
}

ADOdb_close($db);

$objView->assign('bandResults',$bandResults);
$objView->assign('queryResult',$message);

include 'std_links.inc.php';

?>
