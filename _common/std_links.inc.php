<?php
//  Standard assignments for page header and footer

$dm = NL."Standard Links included".NL."username '".$_username."'".NL;  // set up debug message
debug($dm) ;                                                   // write debug message if debug = 1

   $link_admin = '' ;
   $link_newbar = '' ;
   $link_newband = '' ;
   if ($_SESSION[AUTHORIZE] == 'A') 
      $link_admin = '?adminPanel' ;
   if ($_SESSION[AUTHORIZE] == 'NB') 
      $link_newband = '?createBand' ;
   if ($_SESSION[AUTHORIZE] == 'NBR') 
      $link_newbar = '?createBar' ;

$nav = array(
        array('legend'=>'Navigation Menu', 'td'=>'col',
              'links'=>array(array('text'=>'Home',    'url'=>'?homePage'),
			  				 array('text'=>'   Bands',    'url'=>'?bands'),
		                     array('text'=>'   Bars', 	   'url'=>'?bars'),
		                     array('text'=>'   Shows',    'url'=>'?shows'),
							 array('text'=>'   Drink Specials',	   'url'=>'?drinks'),
		                     array('text'=>'   Transportation', 'url'=>'?transportation'),
		                     array('text'=>'   Contact','url'=>'?contact')
		                    )
		));
  
   $objView->assign('navlinks',$nav);
   $objView->assign('link_admin',$link_admin);
   $objView->assign('link_newbar',$link_newbar);
   $objView->assign('link_newband',$link_newband);
   
   $objView->assign('link_public','?homePage');
   $objView->assign('link_login','?'.LOGIN);
   $objView->assign('link_logout','?'.LOGOUT);
   $objView->assign('cur_user',$_SESSION['username']);
   
   
   $objView->assign('link_band','?indivBand');
   $objView->assign('link_bar','?indivBar');
   $objView->assign('modify_band','?modifyBands');
   $objView->assign('mofify_bar','?modifyBars');
   $objView->assign('link_drink','?drinks');
             
?>
