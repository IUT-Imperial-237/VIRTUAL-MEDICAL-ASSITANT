<?php 
session_start() ;
$_GET["error"]="";
if(isset($_SESSION["user"][0])){
   header("location: viewprofile.php?");
    
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="sign.css">
  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
  <link rel="stylesheet" href="font-awesome.min.css">
  
  <link rel="stylesheet" type="text/css" href="projects.css">
</head>


<body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="imges/logo.jpg" alt="Logo" style="width:30px;height: 25px; position: relative;">
      </a>
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="index.html" > Virtual Medical Assistant</a> 
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">

          <li><a href="index.html">Home</a></li>
          <li><a href="about_us.html">About Us</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Online Consultations <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="video_consultation.html">Video Consultation</a></li>
              <li><a href="audio_consultation.html">Audio Consultation</a></li>
              <li><a href="chatconsultation.html">Chat Consultation</a></li>
            </ul>
          </li>
          <li><a href="emergency_care.html">Emergency Care</a></li>
          <li><a href="symptoms.html">Symptoms</a></li>
          <li><a href="neares_hospital.html">Find Neares Hospital</a></li>
          <li><a href="blog.php">Blog</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Sign Up<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="sign_up_patient.php">Patient</a></li>
              <li><a href="sign_up_physician.php">Physician</a></li>
            </ul>
          </li>
          <li class="active"><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Sign In</a></li>
        </ul>
      </div>
    </div>
  </nav>

  


  <?php
// define variables and set to empty values

  $email = $password = "";
  $flag = 1;

  $error="";


  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email =  $_POST["email"];
    $password = $_POST["password"];
    select_user ($email,$password);
    

  }
  $_SESSION["profile"] ;

  function select_user ($email,$password){
   $servername = "localhost";
   $username = "abdelkader";
   $password1 = "gelanyboy";
   $dbname = "test";

            // Create connection
   $conn = new  mysqli($servername, $username, $password1, $dbname);

                // Check connection
   if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
   } 
  
   $sql = "SELECT *   FROM users where username ='$email' and password = '$password' ";
   $sql2 = "SELECT *   FROM personInfo where email ='$email' ";
   $sql3 = "SELECT *   FROM patientrecord where patientId ='$email' ";
   $result = $conn->query($sql);


   if ($result->num_rows > 0) {

     $_SESSION["user"] = array('','','');
     $_SESSION["user"][0]=$email;
     $_SESSION["user"][1]=$password;

     while ($row = $result->fetch_assoc())
     {
       $_SESSION["user"][0]=$row["username"];
     $_SESSION["user"][1]=$row["password"];
      $_SESSION["user"][2]=$row["userType"];
    }
           //$_SESSION["type"]=$row["userType"];
           //

    if(  $_SESSION["user"][2] == "p" )
    {
     $result2 = $conn->query($sql2);
     $result3 = $conn->query($sql3);
    //$row = $result2->fetch_assoc();
     while ($row = $result2->fetch_assoc()) {
      $_SESSION["profile"][0] = $row["firstName"];
      $_SESSION["profile"][1] = $row["lastName"];

      $_SESSION["profile"][2] = $row["dob"];
      $_SESSION["profile"][3] = $row["gender"];
      $_SESSION["profile"][4] = $row["country"];
      $_SESSION["profile"][5] = $row["city"];
      $_SESSION["profile"][6] = $row["address"];
      $_SESSION["profile"][7] = $row["profession"];
    }

    while ($row = $result3->fetch_assoc()) {
     $_SESSION["mdrecord"][0] = $row["patientId"];
     $_SESSION["mdrecord"][1] = $row["bloodGroup"];

     $_SESSION["mdrecord"][2] = $row["height"];
     $_SESSION["mdrecord"][3] = $row["weight"];
     $_SESSION["mdrecord"][4] = $row["allergy"];
     $_SESSION["mdrecord"][5] = $row["familyMedicalHistory"];
     $_SESSION["mdrecord"][6] = $row["personalMedicalHistory"];
     $_SESSION["mdrecord"][7] = $row["extraInfos"];
   }



   header("location: viewprofile.php?");

 }   


 else
 {

  $result2 = $conn->query($sql2);
//$result3 = $conn->query($sql3);
    //$row = $result2->fetch_assoc();
  while ($row = $result2->fetch_assoc()) {
    $_SESSION["profile"][0] = $row["firstName"];
    $_SESSION["profile"][1] = $row["lastName"];

    $_SESSION["profile"][2] = $row["dob"];
    $_SESSION["profile"][3] = $row["gender"];
    $_SESSION["profile"][4] = $row["country"];
    $_SESSION["profile"][5] = $row["city"];
    $_SESSION["profile"][6] = $row["address"];
    $_SESSION["profile"][7] = $row["profession"];
  }

  header("location: doctorprofile.php?");           
}






}                 


else {
 $error = "email or password incorrect";
 header("location: login.php?error=$error");

}
$conn->close();
}
$_GET["error"]=$_GET["error"];  
?>







<div class="container marg">

</div>

<div class="container-fluid " >


  <div class="row ">
    <div class="col-sm-4"  ></div>
    <div class="col-sm-4 row-marg heart1" >



     <p><img src="imges/heart-icon.png" class="heart-icon" ></p>
     <h4 class="log">LOG IN</h4>
     
     <form  id="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <br><label>E-mail:</label><br>
      <img src="imges/mail.png" class="icon"> <input type="email" class="input " name="email" ><br><br>



      <label>password:</label><br>
      <img src="imges/password-icon.png" class="icon"><input type="password"  class="input" name="password" ><br>
      <span id="error"> <?php echo $_GET["error"]?></span><br><br>


      <input type="submit" name="submit"  class="btn btn-info btn-lg " id="submit1" value="SIGNIN ">  
    </form>


  </div>
  <div class="col-sm-4"></div>


</div>
</div>







<div class="media">
  <div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-3"><hr>
      <h2>EXPLORE.</h2><br><br>
      <h4><a href="index.html">Home</a></h4>
      <h4><a href="emergency_care.html">Emergency Care</a></h4>
      <h4><a href="symptoms.html">Symptoms</a></h4>
      <h4><a href="video_consultation.html">Video Consultation</a></h4>
      <h4><a href="audio_consultation.html">Audio Consultation</a></h4>
      <h4><a href="login.php">Sign In</a></h4>
    </div>
    <div class="col-sm-4">
      <hr>
      <h2>GET IN TOUCH.</h2><br>
      <img src="imges/location.jpg" alt="location" width="40px" height="40px">
      <span>Islamic University of Technology Bangladesh</span><br><br>
      <img src="imges/email.png" alt="email" width="40px" height="40px">
      <span>abdelkarim@iut-dhaka.edu</span><br><br>
      <img src="imges/phone.png" alt="phone" width="40px" height="40px">
      <span>+88001796267219/+8800182438617</span><br><br>
      <a href=""><img src="imges/facebook.png" alt="facebook" width="50px" height="50px" style="margin-right: 20px;margin-left:30px;"></a>
      <a href=""><img src="imges/In.png" alt="In" width="50px" height="50px" style="margin-right: 20px;"></a>
      <a href=""><img src="imges/instagram.png" alt="instagram" width="50px" height="50px"></a>
    </div>
  </div>
  <div class="row">

   <div class="col-sm-12"><hr style="position: relative;top: -70px;">
   </div>

 </div>
 <div class="row">
  <div class="col-sm-3">
  </div>
  <div class="col-sm-9">
    <h4 style="position: relative;top: -150px;">Terms & Conditions, Policy & Procedure, Disclaimer, © 2019 Virtual Medical Assistant</h5>

    </div>

  </div>
</div>

</body>
</html>