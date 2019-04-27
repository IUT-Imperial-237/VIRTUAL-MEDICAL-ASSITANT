<?php 
session_start() ;
$feedback ="";

  if ($_SERVER["REQUEST_METHOD"] == "POST")
   {
$target_dir = "blogpicture/";
date_default_timezone_set('Asia/Dhaka');
//echo date('Y-m-d H:i:s');
$date = date('d m Y H i s');
$datestr = strval($date) ;
$email = $_SESSION["user"][0];
 $target_file = $target_dir.$email.$datestr.'.JPG';
$uploadOk = 1;

if (file_exists($target_file)) {
  
    $uploadOk = 0;
}

if ($_FILES["fileToUpload"]["size"] > 5000000) {
   
    $uploadOk = 0;
}
$imageFileType = strtolower(pathinfo($_FILES['fileToUpload']['name'],PATHINFO_EXTENSION));
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {

    $uploadOk = 0;
}

if ($uploadOk == 0) {
	$target_file = "no file";
   echo  "image error choose  the correct file jpg or png lest than 5Mb";
// if everything is ok, try to upload file
} elseif ($uploadOk == 1) {
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);  
}

$title =$_POST["title"];
$description = $_POST["description"];
$contain = $_POST["contain"];
$email = $_SESSION["user"][0];
//$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));




     $servername = "localhost";
   $username = "abdelkader";
   $password1 = "gelanyboy";
   $dbname = "test";
    $conn = new  mysqli($servername, $username, $password1, $dbname);
    $sql ="INSERT INTO blog ( title, description, contain, fimage, pub_date, pub_email) VALUES ('$title','$description','$contain',
    '$target_file',current_timestamp(),'$email')";
     $result = $conn->query($sql);
      if( $result){
      	$feedback = "YOUR ARTICLE WAS POSTED SUCCESSFULLY!!!";
      }
       else{
      	$feedback = "ERROR  ARTICLE NOT POSTED! PLEASE TRY AGAIN";
      }

   }
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="profile.css">
	<link rel="stylesheet" href="bootstrap.min.css">
	<script src="jquery.min.js"></script>
	<script src="user.js"></script>
	<script src="bootstrap.min.js"></script>
	<link rel="stylesheet" href="font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="1projects.css">
	<style type="text/css">

	@media only screen and (max-width: 760px) {
		#tohide{
			display: block;
		}
		#todisplay{
			display: none;
		}
		#tb{
			font-size: 15px;
		}

	}
	.inp{
		width: 100%;
		border: 2px solid black;
	}
	.inp2{
		border: 2px solid black;
	}
	#form{
		color: black;
	}
</style>
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
            <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Profile <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#"><?php   echo $_SESSION["user"][0]; ?></a></li>
              <li><a href="logout.php">SignOut</p></li>
            </ul>
          </li>
          </ul>
               

        </div>
      </div>
    </nav>



		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12 marg"><br></div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12 " id="tohide" style="font-size: 2px;">
				<button type="button" class="btn-xs  btn-primary" style=" color: red;">
					<span >3</span> &nbsp; messages</button>
					<a href="doctorprofile.php" type="button" class="btn bb btn-primary" > View Profile</a>
									
									<a href="doctorreadmessage.php" type="button" class="btn bb btn-primary"> Read messages</a>
									<a href="messagetopatient.php" type="button" class="btn bb btn-primary"> Message a Patient</a>
									<a href="doctormpi.php" type="button" class="btn bb btn-primary"> Modify Personnal Infos</a>
									<a href="writearticle.php" type="button" class="btn bb btn-primary" style=" background-color: #123858;"> Write article</a>
					</div>
				</div>

				<div class="container-fluid " style="margin-left: 0px;padding-left: 0px;">
					<div class="row ach" style="bottom: 0px; ">
						<div class="col-sm-2 ">
							<div class="btn-group-vertical " id="todisplay">
								<button type="button" class="btn  btn-primary" style="height: 50px; color: red;font-size:15px;">
									<img src="imges/notification.png" width="15px" height="15px"> <span ></span> &nbsp; messages</button>
									<a href="doctorprofile.php" type="button" class="btn bb btn-primary" > View Profile</a>
									
									<a href="doctorreadmessage.php" type="button" class="btn bb btn-primary"> Read messages</a>
									<a href="messagetopatient.php" type="button" class="btn bb btn-primary"> Message a Patient</a>
									<a href="doctormpi.php" type="button" class="btn bb btn-primary"> Modify Personnal Infos</a>
									<a href="writearticle.php" type="button" class="btn bb btn-primary" style=" background-color: #123858;"> Write article</a>
								</div>


							</div>
							<div class="col-sm-2"></div>
							<div class="col-sm-6">
								
							 <form  id="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" 
							 	enctype="multipart/form-data">
							 	<fieldset>
							 		<legend>Title</legend>
							 	 <input class="inp" type="text" name="title" placeholder="title" required><br><br>
							 	<input class="inp" type="text" name="description" placeholder="description" required>
								</fieldset>	<br><br>
								<fieldset>
									<span><?php echo $feedback ?></span>
							 		<legend>Contain</legend>
							 	 <textarea class="inp2" name="contain" cols="100" rows="20">
							 	 	
							 	 </textarea> 
								</fieldset>	
								featured image<br><input type="file" name="fileToUpload" id="fileToUpload" ><br><br>
								<input type="submit" name="submit" value="Post" >
								</form><br><br>
							</div>

						</div>
					</div>
				

				</body>
				</html>