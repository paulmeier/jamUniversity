<?php
//   model -  Band
//   This model uses an associative array in a Smarty object to pass data to the view



$id = $_GET["id"];

// Access the database
$db = ADOdb_connect($cfg);
$query="select * from BARS where barid = '$id';";
   $rs = ADOdb_query($db,$query);  

   $objView->assign('rs',$rs);
   $NAME=$rs->fields['NAME'];
   $PHONE=$rs->fields['PHONE'];
   $WEBSITE=$rs->fields['WEBSITE'];
   $CITY=$rs->fields['CITY'];
   $STATE=$rs->fields['STATE'];
   $ZIP=$rs->fields['ZIP'];
   $ADDRESS=$rs->fields['ADDRESS'];
   $IMAGE=$rs->fields['IMAGEURL'];
   
   $barData2[] = array( 'ID'=>$id, "NAME"=>$NAME, "PHONE"=>$PHONE, "ADDRESS"=>$ADDRESS,
   "WEBSITE"=>$WEBSITE, "CITY"=>$CITY,"STATE"=>$STATE, "ZIP"=>$ZIP,"IMAGE"=>$IMAGE );

//Get the drink specails
$query="select * from specials where BARID = '$id';";
$rs = ADOdb_query($db,$query);
if($rs->EOF)
{$objView->assign('noSpecials',"It seems there are currently no specails.");}
while (!$rs->EOF) {                      
   $specialInfo[] = array('DRINK_NAME'=>$rs->fields['DRINK_NAME'], 'SPECIALPRICE'=>$rs->fields['SPECIALPRICE'],
   						  'DAY_OF_WEEK'=>$rs->fields['DAY_OF_WEEK']);
   $rs->MoveNext();                             
}

//Select shows
$query="SELECT bands.BANDNAME, showinfo.DATE, bands.BANDID, showinfo.TIME
FROM bands JOIN showinfo ON bands.BANDID = showinfo.BANDID WHERE showinfo.BARID = '$id'"; 										
$rs = ADOdb_query($db,$query);
if($rs->EOF)
{$objView->assign('noShows',"It seems there are currently no bands to play at this bar.");}

while (!$rs->EOF) {                      
   $showInfo[] = array('BANDNAME'=>$rs->fields['BANDNAME'], 'DATE'=>$rs->fields['DATE'],
   						  'TIME'=>$rs->fields['TIME'],'BANDID'=>$rs->fields['BANDID']);
   $rs->MoveNext();
}

ADOdb_close($db);

$objView->assign('specialInfo',$specialInfo);
$objView->assign('queryBarData',$barData2);
$objView->assign('showInfo',$showInfo);

include 'std_links.inc.php';
?>
