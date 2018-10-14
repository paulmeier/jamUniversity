<?php
//  Login model executed when the login form is submitted


   if(isset($_POST['username'])) {$_username = $_POST['username'];}
   if(isset($_POST['pass'])) {$_pass = $_POST['pass'];}

$dm = NL."Model - Login submitted".NL."Username: ".$_username.NL."password: ".$_pass; // set up debug message
debug($dm);                                                                   // write debug message if debug = 1

   $redirect = MAX_INACTIVITY ;                // default is 30 minutes
   $panel = 'default';                         // default screen
   $_error  = '' ;

   if(($_username=="" || $_pass=="")) {                                    // one or both blank?
      $_error="Please Enter both Username and Password";                   //    yes
      $redirect =  '';
   } else {                                                            //    no, neither blank
         $db = ADOdb_connect($cfg);                                    // connect to database
	       $query = "SELECT * FROM administrators WHERE USERNAME = '".$_username."';";     // select on username
	       $rs = ADOdb_query($db,$query);                                // Perform SQL query
		   $objView->assign('rs',$rs);
	       if (!$rs)                                                     // did we find user?
	             $_error="Username, ".$_username.", Not Found.";                 //   no
	       else {                                                        //   yes,
	           if ($_pass != $rs->fields['PASSWORD'])                    //      check password
	               $_error="Check your Username and Password";               //      did not match
	           else {                                                    //      got a match, get authorization code
	              $query2 = "SELECT ACCESS FROM administrators WHERE USERNAME = '".$_username."';";
	              $rs2 = ADOdb_query($db,$query2);                       //      perform SQL SELECT Statement
	              if (!$rs2)                                             //      query fail?
	                $_error = "Login error. Please try again.";          //         yes, user not in user_info table
	              else {                                                 //         no, have user 
	                $access= $rs2->fields['ACCESS'];                     //         get authorization code
	                $_error="";                                          //         user now Logged In
	            	$current_time = time();                                //         get current timestamp
            		$_SESSION['username']= $_username;                             //         set session variables
	            	$_SESSION[AUTHORIZE]= $access;
	            	$_SESSION['LA']= $current_time;                        //         time of Last Access
	            	if ($access == 'A') $panel = 'adminPanel';
					else if ($access == 'NB') $panel = 'createBands';
					else if ($access == 'NBR') $panel = 'createBars';
					else if ($access == 'B') 
					{
						$query="select fid from administrators where username = '".$_username."';"; 
						$rs = ADOdb_query($db,$query);
						$id = $rs->fields['fid'];
					    $panel = 'modifyBands&id='.$id;
					}
					else if ($access == 'R') 
					{
						$query="select fid from administrators where username = '".$_username."';"; 
						$rs = ADOdb_query($db,$query);
						$id = $rs->fields['fid'];
					    $panel = 'modifyBars&id='.$id;
					}
					else
						$panel = 'default';				             //         it`s an administrator
                  $redirect = '0;url='.APP_URL.'/?'.$panel ;          //         no delay - display '$panel'
	              }
	           }
	       }
	      ADOdb_close($db);                                              // disconnect
   }

// move Model values into Smarty View array
$objView->assign('errorMsg',$_error);
$objView->assign('username',$_username);
                           
$objView->assign('redirect',$redirect);   

include 'std_links.inc.php'; 

?>
