<?php
//   model - Bar Submit form

//   This model uses an associative array in a Smarty object to pass data to the view

$dm = NL."Bar - Submit Form".NL."Form submitted".NL."username ".$_POST['username']; // set up debug message
debug($dm);                                                                         // write debug message if debug = 1

// Retrieve form input
$_BarName   =$_POST['BarName'];
$_Phone     =$_POST['Phone'];
$_Website   =$_POST['Website'];
$_City      =$_POST['City'];
$_State     =$_POST['State'];
$_Zip       =$_POST['Zip'];
$_Address   =$_POST['Address'];
$_BarKey    =rand(1,99999999);
$_UserName  =$_POST['UserName'];
$_password  =$_POST['password'];
$userfile[] =$_FILES['userfile'];

// Access the database to check for duplicate ID

   $db = ADOdb_connect($cfg);
   $query="select BARID from BARS where BARID='$_BarKey';";
   $rs = ADOdb_query($db,$query);

// If duplicate ID generated, generate new one until it is unique

while($rs->RecordCount() > 0){
   $_BarKey   = rand(1,99999999);
   $db = ADOdb_connect($cfg);                                   		   
   $query="select BARID from BARS where BARID='$_BarKey';";   			
   $rs = ADOdb_query($db,$query);
}

// Access the database to check for duplicate bar name

   $db = ADOdb_connect($cfg);
   $query="select BARID from BARS where NAME = '$_BarName';";
   $rs = ADOdb_query($db,$query);

if($rs->RecordCount() > 0) {                       // if duplicate application entered
   $message = "Bar already exists";
} else {                       

/* IMAGE UPLOAD *** NOT WORKING ***
	  if(!is_uploaded_file($_FILES['userfile']['tmp_name'])) {
 		
        // check the file is less than the maximum file size
        if($_FILES['userfile']['size'] < $maxsize)
            {
        // prepare the image for insertion
        $imgData =addslashes(file_get_contents($_FILES['tmp_name']['userfile']));
        // $imgData = addslashes($_FILES['userfile']);
 
        // get the image info..
        $size = getimagesize($_FILES['tmp_name']['userfile']);
 
        // our sql query
        $sql = "INSERT INTO image
                ( image_type ,image, image_size, image_name)
                VALUES
                ('{$size['mime']}', '{$imgData}', '{$size[3]}', '{$_FILES['userfile']['name']}')";
  		$rs = ADOdb_query($db,$sql);
		$objView->assign('sql',$sql);
		$objView->assign('rs',$rs);
        // insert the image
        if(!$rs) {
            $objView->assign('BandFound',"Unable to upload file");
            }
        }
    }
    else {
         // if the file is not less than the maximum allowed, print an error
         $objView->assign('BandFound',"File exceeds the Maximum File limit");
         }
    }
*/

   $query="INSERT INTO administrators VALUES('','$_UserName','$_password','R','$_BarKey');";
   $rs = ADOdb_query($db,$query); 
   $objView->assign('rs',$rs);
   
   $query="Select adminid from administrators where fid = '$_BarKey';";
   $rs1 = ADOdb_query($db,$query); 
   $adminid = $rs1->fields['adminid'];
   
   $query="INSERT INTO bars VALUES('$_BarKey','$_BarName','$_Phone','$_Address','$_Website','$_City','$_State','$_Zip','$_Website','$adminid');";
   $rs = ADOdb_query($db,$query);                                  // Perform SQL query
   if ($rs)
      {$message="Bar has been stored";}
   else                                       //    no, INSERT failed
     {$message="Please try again!";}                        
}
ADOdb_close($db);

$objView->assign('BarFound',$message);

include 'std_links.inc.php';

?>