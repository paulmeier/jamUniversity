<?php

// Retrieve form input

$_BandName = $_POST['BandName'];
$_Genre    = $_POST['Genre'];
$_Website  = $_POST['Website'];
$_Hometown = $_POST['Hometown'];
$_Username = $_POST['Username'];
$_Password = $_POST['Password'];
$_Imageurl = "../'$source'/";
$_BANDID   = 36828613;
$_bandDesc = $_POST['bandDesc'];

// Access the database

   $db = ADOdb_connect($cfg);                                   		   
   $query="select BANDID from BANDS where BANDID = '$_BANDID';";   			
   $rs = ADOdb_query($db,$query);
   
while($rs->RecordCount() > 0){
   $_BANDID   = rand(1,99999999);                                  		   
   $query="select BANDID from BANDS where BANDID = '$_BANDID';";   			
   $rs = ADOdb_query($db,$query);
}

// Access the database

/*	$target_path = "../uploads/";
	
	$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 
	
	if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
		echo "The file ".  basename( $_FILES['uploadedfile']['name']). 
		" has been uploaded";
	} else{
		echo "There was an error uploading the file, please try again!";
	}*/
	$objView->assign('bid',$_BANDID);
   $query="INSERT INTO administrators VALUES('','$_Username','$_Password','B','$_BANDID');";
   $rs = ADOdb_query($db,$query); 
   $objView->assign('rs',$rs);
   
   $query="Select adminid from administrators where fid = '$_BANDID';";
   $rs1 = ADOdb_query($db,$query); 
   $adminid = $rs1->fields['adminid'];
   
   $query="INSERT INTO bands VALUES('$_BANDID','$_Genre','$_BandName','$_Hometown',
   '$_Website','$_Imageurl','$_bandDesc','$adminid');";
   $rs = ADOdb_query($db,$query); 

   
   if ($rs)
      {$message="Band has been stored"; 
	  if(security('B'))
	  {session_destroy();}}
   else                                       //    no, INSERT failed
      {$message="Please try again!";}                        

ADOdb_close($db);

$objView->assign('BandFound',$message);

include 'std_links.inc.php';

?>