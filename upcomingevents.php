<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Upcoming Events</title>
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
.C{
  padding-top: 80px;
  padding-left: 500px;
}
/*.matter {
  height: 50vh;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}*/

.matter h1 {
  font-family: "Montserrat Medium";
  padding-top: 30px;
  max-width: 60ch;
  text-align: center;
  transform: scale(0.94);
  animation: scale 3s forwards cubic-bezier(0.5, 1, 0.89, 1);
}
@keyframes scale {
  100% {
    transform: scale(1);
  }
}

span {
  display: inline-block;
  opacity: 0;
  filter: blur(4px);
}

span:nth-child(1) {
  animation: fade-in 0.8s 0.1s forwards cubic-bezier(0.11, 0, 0.5, 0);
}

span:nth-child(2) {
  animation: fade-in 0.8s 0.2s forwards cubic-bezier(0.11, 0, 0.5, 0);
}

span:nth-child(3) {
  animation: fade-in 0.8s 0.3s forwards cubic-bezier(0.11, 0, 0.5, 0);
}

span:nth-child(4) {
  animation: fade-in 0.8s 0.4s forwards cubic-bezier(0.11, 0, 0.5, 0);
}

span:nth-child(5) {
  animation: fade-in 0.8s 0.5s forwards cubic-bezier(0.11, 0, 0.5, 0);
}

span:nth-child(6) {
  animation: fade-in 0.8s 0.6s forwards cubic-bezier(0.11, 0, 0.5, 0);
}

span:nth-child(7) {
  animation: fade-in 0.8s 0.7s forwards cubic-bezier(0.11, 0, 0.5, 0);
}

span:nth-child(8) {
  animation: fade-in 0.8s 0.8s forwards cubic-bezier(0.11, 0, 0.5, 0);
}

span:nth-child(9) {
  animation: fade-in 0.8s 0.9s forwards cubic-bezier(0.11, 0, 0.5, 0);
}

span:nth-child(10) {
  animation: fade-in 0.8s 1s forwards cubic-bezier(0.11, 0, 0.5, 0);
}

span:nth-child(11) {
  animation: fade-in 0.8s 1s forwards cubic-bezier(0.11, 0, 0.5, 0);
}

span:nth-child(12) {
  animation: fade-in 0.8s 1.2s forwards cubic-bezier(0.11, 0, 0.5, 0);
}

span:nth-child(13) {
  animation: fade-in 0.8s 1.3s forwards cubic-bezier(0.11, 0, 0.5, 0);
}

span:nth-child(14) {
  animation: fade-in 0.8s 1.4s forwards cubic-bezier(0.11, 0, 0.5, 0);
}

span:nth-child(15) {
  animation: fade-in 0.8s 1.5s forwards cubic-bezier(0.11, 0, 0.5, 0);
}

span:nth-child(16) {
  animation: fade-in 0.8s 1.6s forwards cubic-bezier(0.11, 0, 0.5, 0);
}

span:nth-child(17) {
  animation: fade-in 0.8s 1.7s forwards cubic-bezier(0.11, 0, 0.5, 0);
}

span:nth-child(18) {
  animation: fade-in 0.8s 1.8s forwards cubic-bezier(0.11, 0, 0.5, 0);
}

@keyframes fade-in {
  100% {
    opacity: 1;
    filter: blur(0);
  }
}
body{
  background: white;}
.C img{
  width: 30vw;
  padding-left: -2vw;
}
    </style>
</head>
<body>
  <!-------------header image-------------->
  <div class="header">
    <img src="upcomingbg.png" height="150px" width="1400px" alt="nature" class="responsive">
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
                  <a class="nav-link" href="upcomingevents.html">Events</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contactUs.html">Contact Us</a>
                </li>
                <a href="admlogin.php"><button class="button">Admin</button></a>
              </ul>
            </div>
          </div>
        </div>
        </nav>
        
      </section>
<!---------------Content-------------------->
<div class="matter">
  <h1>
    <span>We</span>
    <span>are</span>
    <span>tediously</span>
    <span>working</span>
    <span>to</span>
    <span>introduce</span>
    <span>new</span>
    <span>and</span>
    <span>challenging</span>
    <span>events,</span>
    <span>you</span>
    <span>will</span>
    <span>be</span>
    <span>informed</span>
    <span>regarding</span>
    <span>new</span>
    <span>events.</span>
    <span>Stay tuned</span>
  </h1>
  <a href="photose.html"><h1 style="text-align: center;color: rgb(10, 10, 10);">Previous events</h1></a>
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
          <li><a href="home.html">Home</a></li>
          <li><a href="about.html">About Us</a></li>
          <li><a href="gallery.html">Gallery</a></li>
          <li><a href="competitions.html">Events</a></li>
          <li><a href="contactUs.html">Contact Us</a></li>
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