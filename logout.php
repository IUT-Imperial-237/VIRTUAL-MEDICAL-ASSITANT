<?php
session_start();
?>


<?php
// remove all session variables
session_unset(); 
$err ="disconnected succesfullly";
// destroy the session 
session_destroy(); 
header("location: login.php?error=$err");
?>

