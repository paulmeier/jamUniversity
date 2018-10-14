<?php
//   model - home menu

//   This model uses an associative array in a Smarty object to pass data to the view

$dm = NL."Model - Public Panel";     // set up debug message
debug($dm);                          // write debug message if debug = 1



//Setting up the dates for pulling upcoming shows, shows are listed between the current date and between 9 months from current.
$_currentDate=date("Ymd");
$_futureDate = date("Ymd", mktime(0, 0, 0, date("m")+3 , date("d"), date("Y")));

//Querying database for the upcoming show information
$db = ADOdb_connect($cfg);                                    
$query="SELECT bands.BANDNAME, bands.WEBSITE, bars.NAME, showinfo.DATE, bars.BARID, bands.IMAGEURL, bands.BANDID
FROM bars JOIN showinfo ON bars.BARID = showinfo.BARID
JOIN bands ON bands.BANDID = showinfo.BANDID
WHERE '$_currentDate' <= showinfo.DATE AND showinfo.DATE < '$_futureDate';";   										
$rs = ADOdb_query($db,$query);

if($rs->EOF)
{$objView->assign('noShows',"Sorry, It seems there are currently no upcoming shows.");}

//Fill the showInfo array with the up and coming shows
while (!$rs->EOF) {                      
   $showInfo[] = array('Genre'=>$rs->fields['GENRE'], 'Bandname'=>$rs->fields['BANDNAME'], 'Website'=>$rs->fields['WEBSITE'],
	        'Playing'=>$rs->fields['NAME'],'Website'=>$rs->fields['WEBSITE'],'ShowDate'=>$rs->fields['DATE'],'Barid'=>$rs->fields['BARID'],
			'Image'=>$rs->fields['IMAGEURL'],'Bandid'=>$rs->fields['BANDID']);
   $rs->MoveNext();                             
}

//Querying database for drink information for the day
$day = date("l",mktime());
$query="SELECT bars.NAME, specials.DRINK_NAME, specials.SPECIALPRICE, bars.WEBSITE, bars.BARID, bars.IMAGEURL
FROM bars JOIN specials ON bars.BARID = specials.BARID
WHERE '$day' = specials.DAY_OF_WEEK;";								
$rs = ADOdb_query($db,$query);
if($rs->EOF)
{$objView->assign('noSpecials',"Sorry, It seems there are currently no specails today.");}

while (!$rs->EOF) {                      
   $specialInfo[] = array('NAME'=>$rs->fields['NAME'], 'DRINK_NAME'=>$rs->fields['DRINK_NAME'], 'SPECIALPRICE'=>$rs->fields['SPECIALPRICE'],
	        'WEBSITE'=>$rs->fields['WEBSITE'],'BARID'=>$rs->fields['BARID'],'IMAGEURL'=>$rs->fields['IMAGEURL']);
   $rs->MoveNext();                             
}


ADOdb_close($db);

$objView->assign('day',$day);
$objView->assign('showInfo',$showInfo);
$objView->assign('specialInfo',$specialInfo);

include 'std_links.inc.php';

?>
