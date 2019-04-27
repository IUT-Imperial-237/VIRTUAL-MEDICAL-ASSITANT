<?php
session_start();
// remove all session variables
session_unset(); 
$err ="disconnected succesfullly";
// destroy the session 
session_destroy(); 
header("location: login.php?error=$err");
?>



