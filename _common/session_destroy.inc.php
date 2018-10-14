<?php
//   Destroy Session

// Generalized code - do not modify


// Unset all of the session variables.
$_SESSION = array();

//  also delete the session cookie.
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time()-42000, '/');
}

// Finally, destroy the session.
session_destroy(); 


?>
