<?php
session_start();
$insert = false;

if (isset($_POST['name'])) {
    $server = "localhost";
    $username = "root";
    $password = "KARTHIK@2004";
    $database = "om";
    $con = mysqli_connect($server, $username, $password, $database);

    // Check connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $class = $_POST['class'];
    $msg = $_POST['msg'];
    
    // Handle image upload
   

    try {
        // Check for duplicate entries

        // Perform the database operation using prepared statements
        // SQL query inside try block
$stmt = $con->prepare("INSERT INTO contact (name, email, class, msg) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $name, $email, $class, $msg);
$stmt->execute();
$insert = true;
$_SESSION["name"] = $username;
header("Location: contactUs.php");
exit();


    } catch (Exception $e) {
        // Handle the exception
        echo "<p>Error: " . $e->getMessage() . "</p>";
    } finally {
        // Close the database connection
        mysqli_close($con);
    }
}

?>
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Contact us</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="home.js">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;900&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/f2a4b9346f.js" crossorigin="anonymous"></script>
    <style>
     
      
      @media(max-width: 700px){
        .intro h3{
          font-size: 20px;
        }
        .text h3{
          font-size: 25vw;
        }
        .card h2{
          font-size: 20px
        }
        .card p{
          font-size: 2vw;
          line-height: 1;
        }
       
        .card--display i{
          font-size: 20px;
        }
        }
       
        .x,
.y,
.z{
  width: 500px;
  height: 300px;
  padding: 20px;
  background-color: wheat;
  overflow: auto;
  border-radius: 10px;
  box-shadow: 0 9px 8px rgba(0,0,0,0.1);
}
.header{
    margin-top: 0;
    padding: 0;
   
}
.google-map {
     padding-bottom: 50%;
     position: relative;
}
.google-map h1{
  text-align: center;
  text-shadow: 2px 2px #f0e619;
  color: rgb(79, 24, 151);
  font-weight: 400;
  font-family: cursive;
}

.google-map iframe {
     height: 82%;
     width: 95%;
     left: 0;
     padding-top: 80px;
     top: 0;
     position: absolute;
     padding-left: 90px;
}
body{
  background: linear-gradient(90deg,darkblue 0%,darkblue 30%,skyblue 30%,skyblue 100%);
}/*
.conform{
  padding-left: 20vw;
}
@media (max-width:1280px){
  .auto{
    padding-left: 55vw;
    align-items: flex-start;
  }
}
#contactcon{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
.contactcon{
  position: relative;
  min-height: 30vh;
  padding: 10px 50px;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}
.contactcon .contactinfo{
  max-width: 500px;
  text-align: center;
  width: 50%;
  display: flex;
  flex-direction: column;
}
.contactcon .contactinfo .p{
  position: relative;
  padding: 20px 0;
  display: flex;
}
.contactcon .contactinfo .p .icon1{
  min-height: 30px;
  height: 50px;
  width: 50px;
  background: white;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 50%;
  font-size: 22px;
}
.contactcon .contactinfo .p .text1{
  display: flex;
  margin-left: 5px;
  font-size: 16px;
  color: white;
  flex-direction: column;
  font-weight: 300;
}
.contactcon .contactinfo .p .text1 h3{
  font-weight: 500;
  color: rgb(2, 85, 161);
  text-align: left;
}
.contactcon .contactinfo h3{
  font-size: 36px;
  font-weight: 500;
  color: white;
}
.contactcon .contactinfo p{
  text-align: left;
  font-weight: 550;
  color: white;
}
.contactcon{
  width: 100%;
  display: flex;
 
  justify-content: left;
  align-items: center;
  margin-top: 30px;
}*/
@import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro);
body {
	  background:#2d3b36 url(http://andstud.io/wp-content/uploads/2014/03/blurrrr2.jpg)no-repeat center center fixed;
  	-webkit-background-size: cover;
	  -moz-background-size: cover;
	  -o-background-size: cover;
	  background-size: cover;
    padding-top: 0px;
}

h1 {
   color: #fff; 
   text-shadow: 1px 1px 0 rgba(0,0,0,0.4);
   padding-top: 30px;
   font-size: 100px; 
   font-weight: 700;
   text-align: center;
   font-family: 'Source Sans Pro', sans-serif;
   margin: 0px;
}

form {
    margin-left:auto;
    margin-right:auto;
    width: 965px;
    height: 450px;
    padding:30px;
    -moz-border-radius: 10px;
    -webkit-border-radius: 10px;
    border-radius: 10px;
    -moz-background-clip: padding;
    -webkit-background-clip: padding-box;
    background-clip: padding-box; 
    overflow: hidden; 
}

textarea{
	  background: rgba(0, 0, 0, 0.4); 
    width: 894px;
    height: 110px;
    border: none;
    -moz-border-radius: 10px;
    -webkit-border-radius: 10px;
    border-radius: 10px;
    -moz-background-clip: padding;
    -webkit-background-clip: padding-box;
    background-clip: padding-box; 
    display: block;
    font-family: 'Source Sans Pro', sans-serif;
    font-size: 18px;
    color: #fff;
    padding-left: 45px;
    padding-right: 20px;
    padding-top: 12px;
    margin-bottom: 20px;
    overflow: hidden;
}

select {
    width: 960px;
    height: 48px;
    line-height: 1.5;
    font-size: 1.4em;
    border: none;
    border-radius: 10px;
    -webkit-border-radius: 10px;
    -mox-border-radius: 10px;
    color: #fff;
    display: block;
    background: transparent;
    background-color: rgba(0,0,0,.4);
    margin-bottom: 20px;
    display: block;
    font-family: 'Source Sans Pro', sans-serif;
    font-size: 18px;
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
}

.nameinput, .emailinput {
    width: 894px;
    height: 48px;
    border: none;
    -moz-border-radius: 10px;
    -webkit-border-radius: 10px;
    border-radius: 10px;
    -moz-background-clip: padding;
    -webkit-background-clip: padding-box;
    background-clip: padding-box; 
    display: block;
    font-family: 'Source Sans Pro', sans-serif;
    font-size: 18px;
    color: #fff;
    padding-left: 20px;
    padding-right: 20px;
    margin-bottom: 20px;
}

input[type=submit] {
    cursor: pointer;
}

input.nameinput {
	  background: rgba(0, 0, 0, 0.4); 
	  padding-left: 45px;
}

input.emailinput {
	  background: rgba(0, 0, 0, 0.4);
	  padding-left: 45px;
}

input.message {
	  background: rgba(0, 0, 0, 0.4);
	  padding-left: 45px;
}

select.indent {
	  padding-left: 45px;
    cursor: pointer;
}

::-webkit-input-placeholder {
	  color: #fff;
}

:-moz-placeholder{ 
    color: #fff; 
}

::-moz-placeholder {
    color: #fff;
}

:-ms-input-placeholder {  
	  color: #fff; 
}

input:focus, textarea:focus { 
	  background-color: rgba(0, 0, 0, 0.2);
    -moz-box-shadow: 0 0 5px 1px rgba(255,255,255,.5);
    -webkit-box-shadow: 0 0 5px 1px rgba(255,255,255,.5);
    box-shadow: 0 0 5px 1px rgba(255,255,255,.5);
	  overflow: hidden; 
}

.btn {
	border: none;
	font-family: 'Source Sans Pro', sans-serif;
  font-size: 18px;
  width: 200px;
  height: 48px;
	color: #000;
	background: #fff;
	cursor: pointer;
	display: inline-block;
	font-weight: 700;
	position: relative;
  outline: none;
  box-shadow: 0 6px #cecece;
  border-radius: 5px;
  float: right;
  margin-right: 6px;
}

.btn:hover {
	background: #fff;
  outline: none;
  box-shadow: 0 4px #cecece;
	top: 2px;
}

.btn:active {
	background: #fff;
  outline: none;
  box-shadow: 0 0 #cecece;
	top: 6px;
}

.flat {
	border: none;
	cursor: pointer;
	display: inline-block;
	outline: none;
  position: relative;
	-webkit-transition: all 0.3s;
	-moz-transition: all 0.3s;
	transition: all 0.3s;
}


.flat:before {
	position: absolute;
	height: 100%;
	left: 0;
	top: 0;
	line-height: 3;
	font-size: 140%;
	width: 60px;
}


.flat {
   width: 960px !important;
   height: 48px;
   overflow: hidden;
   margin-bottom: 20px;
   background: url(http://www.jordancundiff.com/wp-content/uploads/2014/03/icon-dropdown.png) no-repeat right;
   }

@media only screen and ( min-width: 768px ) and ( max-width: 1035px ) {
  h1 { font-size: 80px; }
  form { width: 736px !important; }
    #wpcf7-f156-p143-o1\20 formwrap > form > p > span.wpcf7-form-control-wrap.Subject.flat > select, #wpcf7-f156-p143-o1\20 formwrap > form > p > span.wpcf7-form-control-wrap.Subject.flat { width: 731px !important; }
    .nameinput, .emailinput, #wpcf7-f156-p143-o1\20 formwrap > form > p > span.wpcf7-form-control-wrap.Message > textarea { width: 666px !important; }
}

@media only screen and ( max-width: 804px ) {
    h1 { font-size: 50px; }
  form { width: 450px !important; }
   #wpcf7-f156-p143-o1\20 formwrap > form > p > span.wpcf7-form-control-wrap.Subject.flat > select, #wpcf7-f156-p143-o1\20 formwrap > form > p > span.wpcf7-form-control-wrap.Subject.flat { width: 445px !important; }
    .nameinput, .emailinput, #wpcf7-f156-p143-o1\20 formwrap > form > p > span.wpcf7-form-control-wrap.Message > textarea { width: 380px !important; }
}

@media only screen and ( max-width: 517px ) {
     h1 { font-size: 30px; }
  form { width: 295px !important; }
  #wpcf7-f156-p143-o1\20 formwrap > form > p > span.wpcf7-form-control-wrap.Subject.flat > select, #wpcf7-f156-p143-o1\20 formwrap > form > p > span.wpcf7-form-control-wrap.Subject.flat { width: 290px !important; }
    .nameinput, .emailinput, #wpcf7-f156-p143-o1\20 formwrap > form > p > span.wpcf7-form-control-wrap.Message > textarea { width: 225px !important; }
  .btn { width: 110px; }
}

    </style>
</head>
<body>
  <!-------------header image-------------->
  <div class="header">
    <img src="cbg.png" height="150px" width="1400px" alt="nature" class="responsive">
  </div>

    <!------------------Navbar----------->
    <section id="nav-bar">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa-solid fa-bars" style="color: #f7f9fc;"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <div class="auto">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="gallery.php">Gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="formshow.php">Events</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="team.html">Teams</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contactUs.php">Contact Us</a>
              </li>
              <button class="button" onclick="window.location.href = 'admlogin.php';">Admin</button>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </section>

<!------------------------------map---------------------->
<div class="google-map"><br>
  <h1>Reach us</h1><br><br>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3803.8935361507174!2d78.45560231943544!3d17.56025478375562!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb8f774f347fcb%3A0xeffae3c47174c12d!2sMalla%20Reddy%20College%20of%20Engineering%20(MRCE)!5e0!3m2!1sen!2sin!4v1705504058959!5m2!1sen!2sin" width="60" height="45" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>------->
</div>
<!----------------------------Form-------------------
<div class="conform">
<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSe2Sw5xLGsKMqTrX5tTr5n3HESBAmXBurktzK1jL04XBGNbTQ/viewform?usp=sf_link" width="840" height="797" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
<br><br>-->
<!----------------------------content---------------
  <div class="contactinfo">
    <div class="p">
      <div class="icon1"><i class="fa-solid fa-map-location-dot"></i></div>
      <div class="text1">
        <h3>Address</h3>
        <p> Maisamaguda, Dhulapally,post via Kompally,Secunderabad-500100</p>
      </div>
    </div>
    <div class="p">
      <div class="icon1"><i class="fa-regular fa-envelope"></i></div>
      <div class="text1">
        <h3>Email</h3>
        <p> Techiehubadmin@gmail.com</p>
      </div>
    </div>
    <div class="p">
      <div class="icon1"><i class="fa-solid fa-phone"></i></div>
      <div class="text1">
        <h3>Phone</h3>
        <p> +91 1234567895</p>
      </div>
    </div>
  </div>
</section>
</div>-------->
<h1>Connect With Us</h1>
<div class="wpcf7" id="wpcf7-f156-p143-o1 formwrap">
  <form action="contactUs.php" method="post" class="wpcf7-form" >
    <div style="display: none;">
      <input type="hidden" name="_wpcf7" value="156">
      <input type="hidden" name="_wpcf7_version" value="3.7.2">
      <input type="hidden" name="_wpcf7_locale" value="en_US">
      <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f156-p143-o1">
      <input type="hidden" name="_wpnonce" value="d1da331d93">
    </div>
    <p>
      <span class="wpcf7-form-control-wrap Name">
        <input type="text" name="name" value="" size="40" class="nameinput wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Name">
      </span>
      <span class="wpcf7-form-control-wrap Email">
        <input type="email" name="email" size="40" class="emailinput wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email">
      </span>
      <span class="wpcf7-form-control-wrap Name">
        <input type="text" name="class" value="" size="40" class="nameinput wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Year">
      </span>
      </span>
      <span class="wpcf7-form-control-wrap Message">
        <textarea name="msg" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Message"></textarea>
      </span>
      <input type="submit" value="Send" class="wpcf7-form-control wpcf7-submit btn">
      <img class="ajax-loader" src="http://www.jordancundiff.com/wp-content/plugins/contact-form-7/images/ajax-loader.gif" alt="Sending ..." style="visibility: hidden;">
    </p>
    <div class="wpcf7-response-output wpcf7-display-none">
    </div>
  </form>
</div>
<!---------------Footer-------------------->
<footer>
    <div class="row">
      <div class="col">
        <a href="https://mrce.in/"><img src="footer_logo.png" class="logo"></a>
        <p>For any college related queries please refer our Official website. Stay tuned to this website regularly for information regarding compettions being held.</p>
      </div>
      <div class="col">
        <h3>Techie-hub@MRCE</h3>
        <p>Mysammaguda</p>
        <p>Medchal, PIN 500034, India</p>
        <a href="contactUs.html"><p class="email-id">tpavani04@email.com</p></a>
        <h4>+91 - 0123456789</h4>
      </div>
      <div class="col">
        <h3>Links <div class="underline"><span></span></div></h3>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.html">About Us</a></li>
          <li><a href="gallery.php">Gallery</a></li>
          <li><a href="formshow.php">Events</a></li>
          <li><a href="contactUs.php">Contact Us</a></li>
        </ul>
      </div>
      <div class="col">
        <h3>Blog<div class="underline"><span></span></div></h3>
        <a href="https://techiehublog.wordpress.com/2024/01/19/exploring-the-thriving-world-of-computer-science-events-and-cutting-edge-technologies-in-college/"><button class="button">Visit the blog</button><br><br><br><br></a>
        <div class="social-icons">
          <a href=""><i class="fa-brands fa-facebook"></i></a>
          <a href=""><i class="fa-brands fa-whatsapp"></i></a>
          <a href=""><i class="fa-brands fa-instagram"></i></a>
          <a href=""><i class="fa-brands fa-linkedin"></i></a>
        </div>
      </div>
    </div>
    <hr>
    <p class="copyright"><i class="fa-regular fa-copyright"></i> Techie hub  2024 - All Rights Reserved </p>
  </footer>

  </body>
  </html>