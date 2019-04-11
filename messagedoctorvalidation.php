<?php
session_start() ;

$target_dir = "notifications/";
date_default_timezone_set('Asia/Dhaka');
//echo date('Y-m-d H:i:s');
$date = date('d m Y H i s');
$datestr = strval($date) ;
$email = $_SESSION["user"][0];
$success ="";
$errorimg ="";
 $target_file = $target_dir .$email.$datestr.'.JPG';
$uploadOk = 1;



$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {

}






// Check if file already exists
if (file_exists($target_file)) {
  
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
   
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {

    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    $errorimg = "or check if you have choosen  the correct file jpg or png lest than 5Mb";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        
    } else {
       
    }
}
?>

<?php
$servername = "localhost";
$username = "abdelkader";
$password = "gelanyboy";
$dbname = "test";
$containt = $_POST["containt"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
 
 $sql = "INSERT INTO notification (patientSent,fileSent,patientEmail,dateSent,statuspatient,statusDoctor) 
        VALUES ('$containt','$target_file','$email',now(),'0','1') ";

if ($conn->query($sql) === TRUE && $uploadOk !== 0) {
    $success = " Your message was successfully sent our specialist will reply to you very soon";
  //echo $_POST["containt"];   
header("location: messagedoctor.php?success=$success");
} else {
    $success = "sorry there was an error sending your message try again "."<br>";
    $success = $success.$errorimg;
    echo $success;
    header("location: messagedoctor.php?success=$success");
}

$conn->close();
   
    
?>


