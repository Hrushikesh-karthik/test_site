<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Techie-hub</title>
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
    </style>
</head>
<body>
  <!-------------header image-------------->
  <div class="header">
    <img src="images/homebg.png" height="150px" width="1400px" alt="nature" class="responsive">
  </div>
    
    <!------------------Navbar----------->
        <section id="nav-bar">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                  <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt=""></a>
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
                      <a href="adminlogin.html"><button class="button">Admin</button></a>
                    </ul>
                  </div>
                </div>
              </div>
              </nav>
              
            </section>
  <!---------------Intro-------------->
    <div class="intro">
      <h3 class="glitch">
        <span aria-hidden="true">Welcome to Techie-Hub, the digital nexus where curiosity meets code, collaboration leading to celebration. At Techie-Hub, we're dedicated to fueling your passion for technology, providing a comprehensive platform for students, enthusiasts to explore, learn, and excel in the ever-evolving world of tech</span>
        Welcome to Techie-Hub, the digital nexus where curiosity meets code, collaboration leading to celebration. At Techie-Hub, we're dedicated to fueling your passion for technology, providing a comprehensive platform for students, enthusiasts to explore, learn, and excel in the ever-evolving world of tech
        <span aria-hidden="true">Welcome to Techie-Hub, the digital nexus where curiosity meets code, collaboration leading to celebration. At Techie-Hub, we're dedicated to fueling your passion for technology, providing a comprehensive platform for students, enthusiasts to explore, learn, and excel in the ever-evolving world of tech</span>
      </h3>
    </div>
  <!----------------Heading-------->
  <div class="line">
    <b><h2 class='lineUp'>Our Vision and Mission</h2></b>
  </div>

 <!--------------content------------>

<section class="box">
<div class="card-container">
  <div class="card">
    <div class="imgBx">
      <img src="images/img1.png" data-text="idea">
    </div>
    <div class="card--display">
      <div>
      <h3>Foundation and Ideology</h3>
      <p>Techie Hub was founded with a singular goal - to provide a platform for individuals to explore and expand their horizons in the vast realm of technology. The club endeavors to break down the silos that often characterize the tech world, promoting an inclusive environment where diverse perspectives converge to create something extraordinary</p> 
    </div>
  </div>
  </div>
  <div class="card">
    <div class="imgBx">
      <img src="images/img2.png" data-text="techietalk">
    </div>
    <div class="card--display">
      <div>
        <h3>Techie talks</h3>
        <p>Beyond practical workshops, Techie Hub organizes Techie Talks and panel discussions, inviting industry leaders, researchers, and innovators to share their insights. These sessions provide a platform for members to interact with established professionals, ask questions, and gain valuable insights into the current trends and future directions of technology</p>
    </div>
  </div>
  </div>
  <div class="card">
    <div class="imgBx">
      <img src="images/img3.png" data-text="Events">
    </div>
    <div class="card--display">
      <div>
        <h3>Application in Real-time</h3>
        <p>Participating in technical events plays a pivotal role in the career development of students, offering a multitude of benefits that directly translate into real-world applications. These events serve as dynamic platforms for learning, providing students with exposure to the latest industry trends, tools, and methodologies. Through workshops, presentations, and hands-on activities, students gain valuable insights and practical skills that go beyond the theoretical knowledge acquired in academic settings</p>
    </div>
  </div>
  </div>
  <div class="card">
    <div class="imgBx">
      <img src="images/img4.png" data-text="certify">
    </div>
    <div class="card--display">
      <div>
        <h3>Proof of Work</h3>
        <p>Certifications from technical events offer a range of benefits, including skill validation, resume enhancement, industry recognition, and a competitive edge in the job market. They serve as valuable assets for students aiming to establish themselves in the tech industry. The process of obtaining a certification often involves rigorous training, hands-on projects, and assessments, contributing to a comprehensive learning experience</p>
    </div>
  </div>
  </div>
</div>
</section>


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