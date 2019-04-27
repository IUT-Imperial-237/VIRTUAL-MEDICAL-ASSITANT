<?php

$cnt = $_GET["cnt"];


// echo "This is a php get method";
// $con = mysqli_connect();


$dir = "./";
$dh  = opendir($dir);
echo "<h2>File List (Ajax Get Method Example)</h2>";

$i=0;
while (false !== ($filename = readdir($dh)) and $i<$cnt) {
    echo "$i ) $filename<br>";
	$i++;
}

?>