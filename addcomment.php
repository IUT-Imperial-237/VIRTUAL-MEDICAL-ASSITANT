<?php

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
      $artid = $_POST['id'];
     $email = $_POST["email"];
     $comm =$_POST["comment"];
     $servername = "localhost";
   $username = "abdelkader";
   $password1 = "gelanyboy";
   $dbname = "test";
    $conn = new  mysqli($servername, $username, $password1, $dbname);
    $sql ="INSERT INTO comments(art_id, comment_contain, user_id, comment_date) VALUES ($artid,'$comm','$email',current_timestamp());";
    $result = $conn->query($sql);
      if( $result){
      	header("location: blog.php");
      }
     
 

}
?>