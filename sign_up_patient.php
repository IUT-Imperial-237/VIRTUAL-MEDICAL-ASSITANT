<?php
   session_start() ;
  //$_SESSION["tt"] ="";
   //$_SESSION["eremail"]="";
   //$_SESSION["erpwd"]="" ;
?>
<!DOCTYPE html>
<html>

<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
  <link rel="stylesheet" href="font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="projects.css">
  <link rel="stylesheet" type="text/css" href="sign_up_patient.css">
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
        <a class="navbar-brand" href="index.html"> Virtual Medical Assistant</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">

          <li><a href="index.html">Home</a></li>
          <li><a href="about_us.html">About Us</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Online Consultations <span
                class="caret"></span></a>
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
              <li class="active"><a href="sign_up_patient.php">Patient</a></li>
              <li><a href="sign_up_physician.php">Physician</a></li>
            </ul>
          </li>
          <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Sign In</a></li>
        </ul>
      </div>
    </div>
  </nav>



  <div class="container">
    <div class="media">
      <h1>PATIENT SIGN UP</h1>
      
      <div class="col-lg-5">
        <div id="patient">
          <button class="btn" id="btn_field4" disabled>PERSON_INFOS</button>
          <button class="btn" id="btn_field5">MEDICAL_RECORD</button>
          <button class="btn" id="btn_field6" disabled>REGISTER</button><br><br>
          
          <form  id="form" method="post" action="valide_patient.php">
            <fieldset id="field4">
              <label for="fname">First Name:</label><br>
              <input type="text" name="fname" id="fname" required><br>
              <label for="lname">Last Name:</label><br>
              <input type="text" name="lname" id="lname" required><br>
              <label for="dob">Date Of Birth:</label><br>
              <input type="date" name="dob" id="dob" required><br>
              <label for="gender">Gender:</label><br>
              <select name="gender" id="gender"><br>
                <option>Male</option>
                <option>Female</option>
              </select><br>
              <label for="country">Country:</label><br>
              <select name="country"  value="Bangladesh">
                <option  >Bangladesh</option>
              </select><br>
              <label for="city">City:</label><br>
              <select name="city" id="city">
                <option>Barisal</option>
                <option>Chittagong</option>
                <option>Comilla</option>
                <option>Dhaka</option>
                <option>Gazipur</option>
                <option>Khulna</option>
                <option>Mymensingh</option>
                <option>Narayanganj</option>
                <option>Rajshahi</option>
                <option>Rangpur</option>
                <option>Sylhet</option>
              </select><br>
              <label for="address">Address:</label><br>
              <input type="text" name="address" id="address" required><br>
              <label for="profession">Profession:</label><br>
              <input type="text" name="profession" id="profession" required><br>
            </fieldset>

            <fieldset id="field5">
              <label for="allergies">Allergies:</label><br>
              <input type="text" name="allergies" id="allergies" required><br>
              <label for="blood_group">Blood Group:</label><br>
              <select name="blood_group" id="blood_group">
                <option>O−</option>
                <option>O+</option>
                <option>A−</option>
                <option>A+</option>
                <option>B−</option>
                <option>B+</option>
                <option>AB−</option>
                <option>AB+</option>
              </select><br>
              <label for="height">Height:</label><br>
              <input type="number" name="height" min=30 max=300 id="height" required  placeholder="in Cm"><br>
              <label for="weight">Weight:</label><br>
              <input type="number" name="weight" id="weight" min = 1 required placeholder="in Kg"><br>
              <label for="family_medical_history">Family Medical History:</label><br>
              <input type="textarea" name="family_medical_history" id="family_medical_history" placeholder="any type of disease recurrent in your family eg: diabete type2,cancer herpertension etc..." required><br>
              <label for="medical_history">Medical History:</label><br>
              <input type="text" name="medical_history" id="medical_history" placeholder="have you suffer from any diseases before eg:diabete,heart attack etc.." required><br>
              <label for="present_medical_condition">Present Medical Condition:</label><br>
              <input type="text" name="present_medical_condition" id="present_medical_condition" placeholder="example:diabetes,hypertension"
                required><br>
              <label for="present_medical_prescription">Present Medication Prescription:</label><br>
              <input type="text" name="present_medical_prescription" id="present_medication_prescription" placeholder="are you under any medical prescription? eg:insuling,paracetamol etc.." required><br>
              <label for="extra_information">Extra Information:</label><br>
              <input type="text" name="extra_information" id="extra_information" placeholder="" required><br>

            </fieldset>

            <fieldset id="field6">
              <label for="email">Email address:</label><br>
              <input type="email" name="email" id="email" placeholder="example@gmail.com" required><br>
              <label for="password">Password:</label><br>
              <input type="password" name="password" id="pwd" required><br>
              <label for="conpwd">Confirm Password:</label><br>
              <input type="password" name="conpwd" id="conpwd" required><br><br>
             
              <input type="submit" name="" value="Sign Up">

            </fieldset>
          </form>
        </div>
      </div>
      <div class="col-lg-6">
        <br><br><br>
          <img src="imges/patient2.png" alt="patient2" width="90%">
        </div>
    </div>
  </div>
  <div class="container">
      <div class="row">
      <div class="col-sm-12">
      <?php 
    
      
      if ($_SERVER["REQUEST_METHOD"] == "GET")
      {
        
        echo  "<p>".$_SESSION["tt"] ."</p>";
        echo   "<p>" .$_SESSION["eremail"]."</p>" ;
        echo  "<p>". $_SESSION["erpwd"]."</p>" ;
        
     //   $_SESSION["tt"] ="";
  // $_SESSION["eremail"]="";
  // $_SESSION["erpwd"]="" ;
      }
     
      ?>
      </div>
      </div>
      </div>

  <div class="media">
    <div class="row">
      <div class="col-sm-3"></div>
      <div class="col-sm-3">
        <hr>
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
        <a href=""><img src="imges/facebook.png" alt="facebook" width="50px" height="50px"
            style="margin-right: 20px;margin-left:30px;"></a>
        <a href=""><img src="imges/In.png" alt="In" width="50px" height="50px" style="margin-right: 20px;"></a>
        <a href=""><img src="imges/instagram.png" alt="instagram" width="50px" height="50px"></a>
      </div>
    </div>
    <div class="row">

      <div class="col-sm-12">
        <hr style="position: relative;top: -70px;">
      </div>

    </div>
    <div class="row">
      <div class="col-sm-3">
      </div>
      <div class="col-sm-9">
        <h4 style="position: relative;top: -150px;">Terms & Conditions, Policy & Procedure, Disclaimer, © 2019 Virtual
          Medical Assistant</h5>

      </div>

    </div>
    <script type="text/javascript" src="sign_up_patient.js"></script>
</body>

</html>