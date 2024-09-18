<?php
session_start(); // Start the session

// Check if the user is logged in
if (!isset($_SESSION['admin_logged_in']) || !$_SESSION['admin_logged_in']) {
    header("Location: access.php"); // Redirect to login page
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Admin page</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="home.js">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;900&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/f2a4b9346f.js" crossorigin="anonymous"></script>
    <style>
  
      @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Merriweather:wght@300;900&display=swap');

      
      @media(max-width: 700px){
        .intro h3{
          font-size: 20px;
        }
        .text h3{
          font-size: 25vw;
        }
       /* .card h2{
          font-size: 20px
        }
        .card p{
          font-size: 2vw;
          line-height: 1;
        }
       
        .card--display i{
          font-size: 20px;
        }*/
        }
        body{
          background: white;
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
.button{
    display: inline-block;
    background: #020269;
    color: #fff;
    padding: 8px 30px;
    margin: 5px 0;
    border-radius: 30px;
    transition: background 0.5s;
}
.button:hover{
    background: rgb(230, 91, 149);
}
/*@media (max-width:1536px){
  .card-container {
    padding-left: 56vw;
   align-items: flex-start;
  }
}
@media (max-width:1280px){
  .card-container i{
    font-size: 30px;
  }
}
@media (max-width:1024px){
  .card-container{
    padding-left: 40vw;
    
  }
}
@media(max-width: 1000px){
  .card-container {
    padding-left: 3vw;
  }
 
}
@media (max-width:910px){
  .card-container{
    padding-left: 3vw;
      
  }  
  }
@media (max-width:820px){
  .card-container{
    padding-left: 30vw;
      align-items: flex-start;
  }
  }
  @media (max-width:768px){
    .card-container i{
      font-size: 30px;
    
    }
}
@media (max-width:640px){
  .auto{
    padding-left: 5vw;
   
  }
}
@media (max-width:475px){
  .auto{
    padding-left: 1vw;
    align-items: flex-start;
  }
}
*/
@media (max-width:780px){
  .box{
    width: 100%;
  }}
@media (max-width:700px){
  .box{
    width: 100%;
  }}
@media (max-width:480px){
  .box{
    width: 100%;
  }
  .header{
    width: 100%;
  }
  #nav-bar{
    width: auto;
  }
  .intro{
    width: 100%;
  }
 
}
@media (max-width:270px){
  .box{
    width: 10%;
   
  }
  .header{
    width: 100%;
  }
  #nav-bar{
    width: 100%;
  }
  .intro{
    width: 100%;
  }
 
}
.start {
            text-align: center;
            margin: 50px auto;
            max-width: 90%;
        }
        h1 {
            font-size: 2em;
            color: black;
        }
        a.button1 {
            display: inline-block;
            padding: 0.35em 1.2em;
            border: 0.1em solid #FFFFFF;
            margin: 0 0.3em 0.3em 0;
            border-radius: 0.12em;
            box-sizing: border-box;
            text-decoration: none;
            font-family: 'Roboto', sans-serif;
            font-weight: 300;
            color: #FFFFFF;
            text-align: center;
            transition: all 0.2s;
            background-color: #16057a; /* Added background color */
        }
        a.button1:hover {
            color: #000000;
            background-color: #FFFFFF;
        }
        @media all and (max-width: 30em) {
            a.button1 {
                display: block;
                margin: 0.4em auto;
            }
            h1 {
                font-size: 1.5em;
            }
        }
    </style>
</head>
<body>
  <!-------------header image-------------->
  <div class="header">
    <img src="homebg.png" height="150px" width="1400px" alt="nature" class="responsive">
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
                        <a class="nav-link" href="contactUs.php">Contact Us</a>
                      </li>
                      
                    </ul>
                  </div>
                </div>
              </div>
              </nav>
              
            </section>
<div class="start">
    <h1 style="text-align: center;color: rgb(4, 11, 67); font-size: 50px;">Admin Panel</h1>
    <h4>View Registrations</h4><a href="manage_forms.php" class="button1">View Registrations</a><br>
    <h4>Add images to gallery</h4><a href="gal.php" class="button1">Add images</a><br>
<h4>Add google drive link for previous events</h4><a href="admbutton.php" class="button1">Add link</a><br>
<h4>Add a registration form</h4><a href="form_creation.php" class="button1">Add reg form</a>
<h4>Delete forms</h4><a href="admin_manage_forms.php" class="button1">Remove reg form</a>
<h4>View contact form responses</h4><a href="viewcont.php" class="button1">View response</a>
<h4>Payment options(if want to change)</h4><a href="qr-admin.php" class="button1">View QR</a>
<h4>Generate Certificate by dropping word template & excel sheet</h4><a href="process_files.php" class="button1">Generate certificates</a>
</div>
<!---------------Footer-------------------->
<footer>
    <div class="row">
        <div class="col">
          <a href="https://mrce.in/"><img src="images/footer_logo.png" class="logo"></a>
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
          <!--<form>
            <i class="fa-regular fa-envelope"></i>
            <input type="email" placeholder="Enter your email id">
            <button type="submit"><i class="fa-solid fa-arrow-right" style="color: white; font-size: 16px;"></i></button>
          </form>-->
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
      <p class="copyright">&copy; Techie hub <i class="fa-regular fa-copyright"></i> 2023 - All Rights Reserved </p>
    </footer>
    </body>
    </html>