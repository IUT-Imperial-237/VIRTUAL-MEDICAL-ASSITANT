<?php 
session_start() ;

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $notid = key($_POST);
    $notid =(INT)$notid;
   // echo  $_POST["16"];
    $reply = $_POST["$notid"];
   
date_default_timezone_set('Asia/Dhaka');

$date = date('d m Y H i s');
//echo date('Y-m-d H:i:s');
 $doctor =$_SESSION["user"][0];

  }
$servername = "localhost";
$username = "abdelkader";
$password = "gelanyboy";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
       echo $conn->connect_error;
     if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
       $fl="NO FILE"; 
 //echo $notid ;

  $sql = " UPDATE  notification SET doctorReply ='$reply' , fileReply = '$fl' , doctorEmail= '$doctor', dateReply =now() ,  
           statuspatient ='1',statusDoctor ='0' WHERE  notificationId = '$notid' ";
       //$bol = $conn->query($sql);
          echo  $conn->query($sql);

if ($conn->query($sql) === TRUE) {
   // $success = " Your message was successfully sent our specialist will reply to you very soon";
  //echo $_POST["containt"];   
header("location: doctorreadmessage.php?");
} 
else {
 //   $success = "sorry there was an error sending your message try again "."<br>";
  //  $success = $success.$errorimg;
  //  echo $success;
  //  header("location: messagedoctor.php?success=$success");
    echo "error";
}

$conn->close();

?>