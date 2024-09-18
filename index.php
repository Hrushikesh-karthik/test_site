<!DOCTYPE html>
<html lang="en">
<head>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- SEO Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Explore TechieHub at MRCE, where CSE students thrive in a tech-savvy environment. Stay updated on the latest in computer science and technology. Join us today!">
    <meta name="keywords" content="TechieHub, CSE, MRCE, Computer Science Engineering, MRCE Tech Hub">
    <meta name="robots" content="index, follow">
    
    <!-- Title Tag -->
    <title>TechieHub | CSE | MRCE</title>

    <!-- Canonical URL -->
    <link rel="canonical" href="https://www.yourdomain.com/techiehub-cse-mrce">

    <!-- Open Graph Tags for Social Media -->
    <meta property="og:title" content="TechieHub | CSE | MRCE - Your Gateway to Technology Excellence">
    <meta property="og:description" content="Join TechieHub at MRCE and explore the latest in Computer Science Engineering.">
    <meta property="og:image" content="https://www.yourdomain.com/techiehub-banner.jpg">
    <meta property="og:url" content="https://www.yourdomain.com/techiehub-cse-mrce">
    <meta property="og:type" content="website">

    <link rel="shortcut icon" type="x-icon" href="logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Techie-hub</title>
    <link rel="stylesheet" href="homes.css">
    <link rel="stylesheet" href="home.js">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;900&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/f2a4b9346f.js" crossorigin="anonymous"></script>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Merriweather:wght@300;900&display=swap');

      body {
        background: white;
      }
      
      .header {
        width: 100%;
      }

      .intro {
        background: black;
        color: white;
        width: 100%;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        margin: 0;
        font-weight: 400;
        font-style: oblique;
        overflow: hidden;
        position: relative;
      }

      .intro video {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 100%;
        height: 100%;
        object-fit: cover;
        transform: translate(-50%, -50%);
      }

      /* Responsive Styles */
      @media (max-width: 1200px) {
        .intro {
          background: #333;
        }
      }

      @media (max-width: 992px) {
        .intro {
          background: #444;
        }
      }

      @media (max-width: 768px) {
        .intro {
          background: #555;
        }
      }

      @media (max-width: 576px) {
        .intro {
          background: #666;
        }
      }

      @media (max-width: 400px) {
        .intro {
          background: #777;
        }
      }
      .video-controls {
            position: absolute;
            bottom: 20px;
            display: flex;
            justify-content: center;
            width: 100%;
        }
        .video-controls button {
            background-color: rgba(255, 255, 255, 0.5);
            border: none;
            padding: 10px 20px;
            margin: 0 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>
  <!-------------header image-------------->
  <div class="header">
    <img src="home.png" height="150px" width="1400px" alt="nature" class="responsive">
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

  <!---------------Intro-------------->
  <div class="intro">
    <video id="introVideo" autoplay muted loop>
      <source src="large-video.mp4" type="video/mp4">
    </video>
  </div>
  <div class="video-controls">
    <button id="playPauseBtn">Pause</button>
</div><br><br>
<!------------------Heading-->
   <div class="line">
    <p>
      
      <span>
        Our Vision
      </span>
      
    </p>
    </div>
    
 <br><br><br>

  <!--------------content----------
  <section class="box">
    <div class="card-container">
      <div class="card">
        <div class="imgBx">
          <img src="img1.png" data-text="idea">
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
          <img src="img2.png" data-text="techietalk">
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
          <img src="img3.png" data-text="Events">
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
          <img src="img4.png" data-text="certify">
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
-->
<div class="main">
  <ul class="cards">
    <li class="cards_item">
      <div class="card" tabindex="0">
        <div class="card_image"><img src="p1.jpg" alt="mission"></div>
        <div class="card_content">
          <h2 class="card_title">Mission</h2>
          <div class="card_text">
            <p>Our missionis to create a dynamic and inclusive techie-hub that empower students to excel lin their technical skills, foster innovation, and colllaborate effectively. By providing access to resources, networking opportunities, career development support, and the latest technology trends, we aim to build a vibrant community where students can engage in hands0on projects, research initiatives, and commmunity outreach. Through mentorship program, competitions, and industry connections, we strive to prepare students for successful careers whie making a positive impact on the broader community.</p>
            
          </div>
        </div>
      </div>
    </li>

    <li class="cards_item">
      <div class="card" tabindex="0">
        <div class="card_image"><img src="p2.jpg" alt="mission "></div>
        <div class="card_content">
          <h2 class="card_title">Objectives</h2>
          <div class="card_text">
            <p>1. Providing resourses and support for students to develop innovate pro jects and solution to real world problems.
            </p>
            <p>2. Conduction and organising evengs that helps students to learn new technologies, skills and knowledge. </p>
            <p>3. Promote competitive programming with exposure to the technical world in the field of Computer Science.
            <p>
            <p>4. Creating opportunities for students to network with industry professionals, alumni, and peers through events and collaborations</p>
          </div>
        </div>
      </div>
    </li>
    <li class="cards_item">
      <div class="card" tabindex="0">
        <div class="card_image"><img src="p3.jpg"></div>
        <div class="card_content">
          <h2 class="card_title">Community Outreach and Social Impact</h2>
          <div class="card_text">
            <p>1. Engaging students in community service projects that apply their technical skills to benefit local communities.</p>
        <p>2. Collaborating with non-profits and social enterprises to address societal challenges through technology.</p>
        <p>3. Organizing awareness campaigns and workshops on topics such as digital literacy, sustainability, and health tech.</p>
        <p>4. Encouraging students to develop solutions for global issues, promoting social responsibility and ethical practices in technology.</p>
          </div>
        </div>
      </div>
    </li>
  </ul>
</div><br><br><br><br>
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

 <script>
  document.addEventListener('DOMContentLoaded', function () {
    const introVideo = document.getElementById('introVideo');
    const playPauseBtn = document.getElementById('playPauseBtn');
    const mobileVideo = 'mob.mp4'; // Path to your mobile video
    const largeVideo = 'large-video.mp4'; // Path to your desktop video

    function checkScreenSize() {
        if (window.matchMedia('(max-width: 576px)').matches) {
            introVideo.src = mobileVideo;
        } else {
            introVideo.src = largeVideo;
        }
        introVideo.load(); // Reload the video with the new source
        introVideo.play(); // Auto-play the video after setting the source
    }

    playPauseBtn.addEventListener('click', function () {
        if (introVideo.paused) {
            introVideo.play();
            playPauseBtn.textContent = 'Pause';
        } else {
            introVideo.pause();
            playPauseBtn.textContent = 'Play';
        }
    });

    // Initial check
    checkScreenSize();

    // Check on resize
    window.addEventListener('resize', checkScreenSize);
});
</script>
</body>
</html>