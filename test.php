<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>test</title>
</head>
<body>
	<h3> welcome</h3>
<p> <?php  echo $_SESSION["favanimal"][0] ;   ?></p>
</body>
</html>