<?php

// modify these statements for your site and application

//---------------------------------------------------
// This section is for technical support

// initialize application site constants
define ('APP_PATH',    dirname($_SERVER['SCRIPT_FILENAME'])) ;      // disk path of application`s home directory
define ('COMMON',      APP_PATH.'/_common') ;                       // disk path to application`s common files
define ('SMARTY_PATH', APP_PATH.'/_smarty');                        // disk path to application`s Smarty files
define ('VIEW_PATH',   APP_PATH.'/_view');                          // disk path to application`s View files
define ('SMARTY_TPL',  VIEW_PATH.'/templates');                     // disk path to application`s templates

define ('APP_SERVER_URL', "HTTP://".$_SERVER['SERVER_NAME']) ;      // URL of server root
define ('APP_URL', APP_SERVER_URL.dirname($_SERVER['PHP_SELF']));   // URL of application`s home directory
define ('VIEW_URL',   APP_URL.'/_view');                            // URL to application`s images
define ('IMAGES_URL', VIEW_URL.'/images');                          // URL to application`s images
define ('CSS_URL',    VIEW_URL.'/css');                             // URL path to application`s CSS files
define ('JS_URL',     VIEW_URL.'/js');                              // URL to application`s Javascript files

// modify PHP include_path
set_include_path(get_include_path() . PATH_SEPARATOR . COMMON);


// Email setup
// NOTE TO TECH SUPPORT: port 25 MUST be open on your firewall

//---------------------------------------------------
// This section is for system support

// parameters for Database
$cfg['db']['driver']  ='mySQL';                                     // DB type
$cfg['db']['host']    ='localhost';                                 // DB server
$cfg['db']['name']    ='jamuniversity';                             // DB name
$cfg['db']['user']    ='root';                                      // DB user id
$cfg['db']['password']='';                                          // DB password
// set DSN only if database not defined through Windows (ODBC DSN-less connection)
// $cfg['db']['dsn'] = 'Driver={Microsoft Access Driver (*.mdb)}; DBQ='.$cfg['db']['name'];

define ('DEBUG_FILE', APP_PATH.'/debugFile.txt') ;                  // debug log file
define ('XML_FILE', APP_PATH.'/view.xml') ;                         // XML file
define ('NL', "\r\n") ;                                             // carriage return & line feed
define ('DEBUG', 1) ;                                               // '1' to write debug log
define ('ERROR_PAGE', '_default');                                  // when requested page not found
define ('LOGIN', '_login');                                         // login MVC script directory
define ('LOGOUT', '_logout');                                       // logout MVC script directory
define ('TIMEOUT', '_timeout');                                     // timeout MVC script directory
define ('MASTER_PAGE', 'master_page.tpl');                          // master page template
define ('AUTHORIZE', 'access');                                     // session variable set to security
                                                                    //    level of current user
$smarty = 'objView';                                                // name of object to contain view data

//---------------------------------------------------
// This section is for application administration

// Specify application`s security levels here - low to high
// variable name must be '$security_levels'
// Example 1: $security_levels = array('public', 'administrator');
$security_levels = array('', 'NB', 'NBR', 'B', 'R', 'A',);

// set max seconds of inactivity per request and
// message to be display on log on screen
$minutes = 30;
define ('MAX_INACTIVITY', $minutes * 60);
$timeout_msg = "For security reasons, you have been logged out due to ".$minutes." minutes of inactivity.  Please Login again";


// Application specific data
// set your own names and values

define ('DATE_FORMAT', "m-d-Y H:i:s");
define ('JU_URL', 'http://www.jamuniversity.com');

// variables for Email - 'from' addresses
$newUser_from      = 'admin@jamuniversity.com' ;                      // from address for email sent to new user
$newApp_from       = 'admin@jamuniversity.com' ;                      // from address for email sent to new applicant
$intentToStay_from = 'admin@jamuniversity.com' ;                      // from address for email sent to new resident

?>
