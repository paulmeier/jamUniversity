<?php
//   model - public menu

//   This model uses an associative array in a Smarty object to pass data to the view

$dm = NL."Model - ";     // set up debug message
debug($dm);                          // write debug message if debug = 1





//Querying database for the upcoming show information
$db = ADOdb_connect($cfg);
$query="SELECT bands.BANDNAME, bands.WEBSITE, bars.NAME, showinfo.DATE, bands.BANDID, bars.BARID
FROM bars JOIN showinfo ON bars.BARID = showinfo.BARID
JOIN bands ON bands.BANDID = showinfo.BANDID;";   										
$rs = ADOdb_query($db,$query);

if($rs->EOF)
{$objView->assign('noShows',"Sorry, It seems there are currently no shows.");}

//Fill the showInfo array with the up and coming shows
while (!$rs->EOF) {                      
   $allShowInfo[] = array('Genre'=>$rs->fields['GENRE'], 'Bandname'=>$rs->fields['BANDNAME'], 'Website'=>$rs->fields['WEBSITE'],
	        'Playing'=>$rs->fields['NAME'],'Website'=>$rs->fields['WEBSITE'],'ShowDate'=>$rs->fields['DATE'],'BANDID'=>$rs->fields['BANDID'],
			'BARID'=>$rs->fields['BARID']);
   $rs->MoveNext();                             
}
ADOdb_close($db);

$objView->assign('allShowInfo',$allShowInfo);

include 'std_links.inc.php';

?>
