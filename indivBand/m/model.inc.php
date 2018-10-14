<?php
//   model -  Band
//   This model uses an associative array in a Smarty object to pass data to the view




$id = $_GET["id"];

// Access the database
$db = ADOdb_connect($cfg);                               	// connect to database
$query="select * from BANDS where bandid = '$id';";   	// see if application already on file
   $rs = ADOdb_query($db,$query);                                	 		 // Perform SQL query

   $objView->assign('rs',$rs);
   $GENRE=$rs->fields['GENRE'];
   $BANDNAME=$rs->fields['BANDNAME'];
   $WEBSITE=$rs->fields['WEBSITE'];
   $HOME_TOWN=$rs->fields['HOME_TOWN'];
   $BANDDESC=$rs->fields['BANDDESC'];
   $IMAGE=$rs->fields['IMAGEURL'];
   
   $bandData2[] = array( "IMAGE"=>$IMAGE,"GENRE"=>$GENRE, 
   "BANDNAME"=>$BANDNAME, "WEBSITE"=>$WEBSITE, "HOME_TOWN"=>$HOME_TOWN,"BANDDESC"=>$BANDDESC ) ;
//   $LOGOID=$rs->fields['LOGOID'];

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


$query="select bars.BARID, bars.NAME, showinfo.DATE, showinfo.TIME from bars JOIN showinfo ON bars.BARID = showinfo.BARID AND showinfo.BANDID = '$id';";									
$rs = ADOdb_query($db,$query);

while (!$rs->EOF) {                      
   $allShowInfo[] = array(
	        'Playing'=>$rs->fields['NAME'],'ShowDate'=>$rs->fields['DATE'],'BARID'=>$rs->fields['BARID'],'TIME'=>$rs->fields['TIME']);
   $rs->MoveNext();                             
}

ADOdb_close($db);

$objView->assign('queryBandData',$bandData2);
$objView->assign('membersData',$membersData);
$objView->assign('allShowInfo',$allShowInfo);
// move Model values into Smarty View array


include 'std_links.inc.php';

?>
