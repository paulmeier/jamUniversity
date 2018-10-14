<?php
//   model - public menu

//   This model uses an associative array in a Smarty object to pass data to the view

$dm = NL."Model - ";     // set up debug message
debug($dm);                          // write debug message if debug = 1


$db = ADOdb_connect($cfg);
$id = $_GET["id"];

		unset($bandData);
		unset($membersData);
		 
		//PULL BAND INFO        
		$query="select * from bands where BANDID = '$id';"; 
		$rs = ADOdb_query($db,$query);                                	 		
		
		$BANDNAME = $rs->fields['BANDNAME'];
		$GENRE = $rs->fields['GENRE'];
		$WEBSITE = $rs->fields['WEBSITE'];
		$IMAGEURL = $rs->fields['IMAGEURL'];
		
		
		$bandData[] = array( "BANDNAME"=>$BANDNAME, "GENRE"=>$GENRE, 
							   "WEBSITE"=>$WEBSITE,"IMAGEURL"=>$IMAGEURL);
							   
		//PULL BAND MEMBERS					   
		$query="select * from bandmembers where BANDID = '$id';"; 
		$rs = ADOdb_query($db,$query); 
		
		
		while(!$rs->EOF)
		{	   
		$FNAME = $rs->fields['FNAME'];
		$LNAME = $rs->fields['LNAME'];
		$INSTRUMENT = $rs->fields['INSTRUMENT'];
		$membersData[] = array( "FNAME"=>$FNAME, "LNAME"=>$LNAME, "INSTRUMENT"=>$INSTRUMENT);
		$rs->MoveNext();
		}
		ADOdb_close($db);					   
		$objView->assign('bandData',$bandData);
		$objView->assign('membersData',$membersData);

include 'std_links.inc.php';

?>
