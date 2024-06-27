<?php
// Destroy the session data
session_start();

session_unset();
session_destroy();

// Delete the login information cookies
setcookie('username', '', time()-3600, '/');
setcookie('password', '', time()-3600, '/');

// Redirect the user to the home page
header("Location: ../index.php");
exit;
?>